# -*- coding: utf-8 -*-
"""Гейт извлекаемости (цитируемости в AI-ответах).

Повод — разбор 17.08.2026: Нейро по запросу «открытие казначейского счета» цитирует
kazna-gov.ru (41–55 слов на заголовок, 13 списков при 744–878 словах) и не цитирует
kaznaexpert.ru (211 слов на заголовок при 3593 словах). Модель вырезает ответ,
помещающийся между двумя заголовками: блок в 200+ слов процитировать нечем.

Что проверяет по каждой странице:
  1. Средняя плотность: слов на заголовок (h2+h3 в теле) — норма <= MAX_AVG.
  2. Доля «тяжёлых» блоков (> MAX_BLOCK слов) — норма <= MAX_HEAVY_SHARE.
  3. Наличие блока прямого ответа (div.answer / neuro-open) в первом экране.
  4. Первый абзац после H1-ответа: <= MAX_LEAD слов (цитируемое ядро).

Служебные блоки исключаются: навигация, футер, «Что почитать ещё», формы, глоссарий,
источники и «Частые вопросы» (внутри details своя атомарная структура — каждый вопрос
уже отдельная цитируемая единица, считать блок целиком некорректно).

Запуск:
  python3 density_gate.py <repo_root> [slug ...]     # по /baza-znaniy/
  python3 density_gate.py --file <path.php>          # по одному файлу
Exit 1 при нарушении. Предупреждения (WARN) не валят сборку.
"""
import sys, os, re, glob

MAX_AVG = 110          # слов на заголовок в среднем
MAX_BLOCK = 160        # «тяжёлый» блок
MAX_HEAVY_SHARE = 0.25 # доля тяжёлых блоков
MAX_LEAD = 70          # слов в блоке прямого ответа
TARGET_AVG = 60        # ориентир, к которому стремимся (WARN выше него)

SKIP_HEADS = ('что почитать', 'коротко о главном', 'частые вопросы', 'источники и нормативная база', 'глоссарий', 'календарь дедлайнов', 'разделы', 'связаться',
              'мы в сети', 'проверка', 'содержание', 'заявка принята', 'почти готово',
              'получить календарь', 'откроем счёт за вас', 'спросить эксперта')

def strip_noise(html):
    s = re.sub(r'<script.*?</script>', ' ', html, flags=re.S)
    s = re.sub(r'<style.*?</style>', ' ', s, flags=re.S)
    s = re.sub(r'<svg.*?</svg>', ' ', s, flags=re.S)
    s = re.sub(r'<footer.*?</footer>', ' ', s, flags=re.S)
    s = re.sub(r'<nav.*?</nav>', ' ', s, flags=re.S)
    s = re.sub(r'<aside.*?</aside>', ' ', s, flags=re.S)
    return s

def words(html_fragment):
    return len(re.sub(r'<[^>]+>', ' ', html_fragment).split())

def analyze(path):
    raw = open(path, encoding='utf-8', errors='replace').read()
    body = strip_noise(raw)
    heads = [(m.start(), m.group(1), re.sub(r'<[^>]+>', '', m.group(2)).strip())
             for m in re.finditer(r'<(h2|h3)[^>]*>(.*?)</\1>', body, re.S)]
    blocks = []
    for i, (pos, tag, txt) in enumerate(heads):
        if any(k in txt.lower() for k in SKIP_HEADS):
            continue
        end = heads[i + 1][0] if i + 1 < len(heads) else len(body)
        blocks.append((words(body[pos:end]), txt))
    if not blocks:
        return None
    total = sum(w for w, _ in blocks)
    avg = total / len(blocks)
    heavy = [b for b in blocks if b[0] > MAX_BLOCK]
    share = len(heavy) / len(blocks)

    m = re.search(r'<div class="answer[^"]*">(.*?)</div>', raw, re.S)
    lead = words(m.group(1)) if m else None
    has_answer = m is not None or 'neuro-open' in raw

    return dict(blocks=len(blocks), total=total, avg=avg, heavy=heavy,
                share=share, lead=lead, has_answer=has_answer)

def check(path, label):
    r = analyze(path)
    if r is None:
        print(f'  SKIP (нет заголовков): {label}')
        return True, False
    ok, warn = True, False
    # Блок прямого ответа обязателен только для статей базы знаний.
    # Коммерческие лендинги /uslugi/ строятся иначе — там роль лида играет герой-блок.
    require_answer = '/uslugi/' not in path.replace('\\', '/')
    print(f'\n{label}')
    print(f'  блоков={r["blocks"]} слов={r["total"]} среднее={r["avg"]:.0f} сл./заголовок '
          f'| тяжёлых(>{MAX_BLOCK})={len(r["heavy"])} ({r["share"]*100:.0f}%) | лид={r["lead"]}')

    if r['avg'] > MAX_AVG:
        print(f'  FAIL плотность: {r["avg"]:.0f} > {MAX_AVG} сл./заголовок — нарезать блоки подзаголовками')
        ok = False
    elif r['avg'] > TARGET_AVG:
        print(f'  WARN плотность: {r["avg"]:.0f} сл./заголовок (ориентир {TARGET_AVG})')
        warn = True

    if r['share'] > MAX_HEAVY_SHARE:
        print(f'  FAIL тяжёлые блоки: {r["share"]*100:.0f}% > {MAX_HEAVY_SHARE*100:.0f}%')
        for w, t in r['heavy'][:5]:
            print(f'     {w:4d} сл. — {t[:60]}')
        ok = False
    elif r['heavy']:
        for w, t in r['heavy'][:3]:
            print(f'  WARN блок {w} сл. — {t[:60]}')
        warn = True

    if not r['has_answer']:
        if require_answer:
            print('  FAIL нет блока прямого ответа (div.answer / neuro-open)')
            ok = False
        else:
            print('  INFO лендинг — блок прямого ответа не требуется')
    elif r['lead'] and r['lead'] > MAX_LEAD:
        print(f'  WARN лид {r["lead"]} сл. > {MAX_LEAD} — цитируемое ядро длинновато')
        warn = True

    if ok and not warn:
        print('  OK')
    return ok, warn

def main():
    args = sys.argv[1:]
    if not args:
        print(__doc__); sys.exit(2)
    targets = []
    if args[0] == '--file':
        targets = [(p, p) for p in args[1:]]
    else:
        repo = args[0]; slugs = args[1:]
        if slugs:
            targets = [(os.path.join(repo, 'baza-znaniy', s, 'index.php'), s) for s in slugs]
        else:
            for p in sorted(glob.glob(os.path.join(repo, 'baza-znaniy', '*', 'index.php'))):
                targets.append((p, os.path.basename(os.path.dirname(p))))
    bad, warned = [], []
    for path, label in targets:
        if not os.path.exists(path):
            print(f'  SKIP (нет файла): {label}'); continue
        ok, warn = check(path, label)
        if not ok: bad.append(label)
        elif warn: warned.append(label)
    print(f'\n--- density_gate: страниц={len(targets)} FAIL={len(bad)} WARN={len(warned)} '
          f'result={"FAIL" if bad else "PASS"}')
    if bad:
        print('   не прошли:', ', '.join(bad))
        sys.exit(1)

if __name__ == '__main__':
    main()
