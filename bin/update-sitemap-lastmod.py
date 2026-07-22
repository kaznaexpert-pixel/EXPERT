#!/usr/bin/env python3
# -*- coding: utf-8 -*-
"""Актуализирует <lastmod> в sitemap.xml по дате последнего git-коммита файла страницы.
Добавляет lastmod там, где его нет. Запускается из bin/rebuild.sh (шаг генераторов).
Плюс предупреждает об индексируемых страницах, отсутствующих в sitemap (не блокирует)."""
import re
import pathlib
import subprocess
import sys

ROOT = pathlib.Path(__file__).resolve().parent.parent
SM = ROOT / 'sitemap.xml'


def page_file(url_path: str):
    p = ROOT / url_path.lstrip('/')
    if url_path == '/':
        return ROOT / 'index.php'
    if url_path.endswith(('.html', '.php', '.xml', '.txt', '.pdf')):
        return p if p.is_file() else None
    for cand in (p / 'index.php', p / 'index.html'):
        if cand.is_file():
            return cand
    return None


def git_date(f: pathlib.Path):
    try:
        out = subprocess.run(
            ['git', 'log', '-1', '--format=%as', '--', str(f.relative_to(ROOT))],
            capture_output=True, text=True, cwd=ROOT, timeout=20,
        ).stdout.strip()
        return out or None
    except Exception:
        return None


def main() -> int:
    txt = SM.read_text(encoding='utf-8')
    updated = added = 0

    def fix_block(m):
        nonlocal updated, added
        block, loc = m.group(0), m.group(1)
        f = page_file(loc)
        if f is None:
            return block
        d = git_date(f)
        if not d:
            return block
        if '<lastmod>' in block:
            new = re.sub(r'<lastmod>[^<]*</lastmod>', f'<lastmod>{d}</lastmod>', block)
            if new != block:
                updated += 1
            return new
        added += 1
        return block.replace(
            f'<loc>https://kaznaexpert.ru{loc}</loc>',
            f'<loc>https://kaznaexpert.ru{loc}</loc>\n    <lastmod>{d}</lastmod>',
        )

    txt2 = re.sub(
        r'<url>\s*<loc>https://kaznaexpert\.ru(/[^<]*)</loc>.*?</url>',
        fix_block, txt, flags=re.S,
    )
    if txt2 != txt:
        SM.write_text(txt2, encoding='utf-8')
    print(f'  lastmod: обновлено {updated}, добавлено {added}')

    # Обратная сверка ФС → sitemap (предупреждение, не блокирует)
    sm_urls = set(re.findall(r'<loc>https://kaznaexpert\.ru(/[^<]*)</loc>', txt2))
    missing = []
    for p in ROOT.rglob('index.php'):
        s = str(p.relative_to(ROOT))
        if any(x in s for x in ('222/', 'cms/', 'build/', 'bin/', 'php/')):
            continue
        url = '/' + s[: -len('index.php')]
        if url == '/':
            continue
        h = p.read_text(errors='ignore')
        if re.search(r'name="robots"[^>]*noindex', h):
            continue
        if url not in sm_urls:
            missing.append(url)
    if missing:
        print(f'  ⚠️  индексируемых страниц нет в sitemap: {len(missing)}')
        for u in missing[:8]:
            print('     ', u)
    return 0


if __name__ == '__main__':
    sys.exit(main())
