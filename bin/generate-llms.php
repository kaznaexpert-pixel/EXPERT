<?php
/**
 * Генератор llms.txt и llms-full.txt из корпуса сайта.
 *
 * Запуск:  php bin/generate-llms.php   (из корня репозитория)
 * Артефакты коммитятся в git; запускать после добавления/удаления статей.
 *
 * Правила:
 *  - страницы с <meta name="robots" ... noindex> пропускаются автоматически
 *    (регионы варианта B сами выпадают из выдачи для LLM);
 *  - title берётся из <title> (без хвоста «| КазнаЭксперт»), описание — из
 *    meta description, категория — из eyebrow («База знаний · <Категория>»);
 *  - llms-full дополнительно включает блок «Коротко о главном» (keyfacts).
 */

declare(strict_types=1);

$ROOT = dirname(__DIR__);
$BASE = 'https://kaznaexpert.ru';

/** Справочники (не статьи) — тот же список, что в хабе базы знаний. */
$TOOLS = ['kody', 'kody-postupleniy', 'normativnaya-baza', 'tofk', 'glossary'];

function extract_page(string $file): ?array
{
    $h = file_get_contents($file);
    if ($h === false) return null;
    if (preg_match('/<meta\s+name="robots"[^>]*noindex/i', $h)) return null; // noindex → пропуск

    $title = '';
    if (preg_match('/<title>(.*?)<\/title>/su', $h, $m)) {
        $title = trim(html_entity_decode(strip_tags($m[1]), ENT_QUOTES, 'UTF-8'));
        $title = preg_replace('/\s*[|·—-]\s*КазнаЭксперт\s*$/u', '', $title);
    }
    $desc = '';
    if (preg_match('/<meta\s+name="description"\s+content="([^"]*)"/su', $h, $m)) {
        $desc = trim(html_entity_decode($m[1], ENT_QUOTES, 'UTF-8'));
    }
    $cat = '';
    if (preg_match('/class="eyebrow">(.*?)<\/div>/su', $h, $m)) {
        $e = trim(strip_tags(preg_replace('/<span.*$/su', '', $m[1])));
        $parts = explode('·', $e);
        $cat = trim((string) end($parts));
    }
    // keyfacts «Коротко о главном»
    $facts = [];
    if (preg_match_all('/<div class="kf"><div class="kf__n">(.*?)<\/div><div class="kf__t">(.*?)<\/div>/su', $h, $mm, PREG_SET_ORDER)) {
        foreach ($mm as $f) {
            $n = trim(html_entity_decode(strip_tags($f[1]), ENT_QUOTES, 'UTF-8'));
            $t = trim(preg_replace('/\s+/u', ' ', html_entity_decode(strip_tags($f[2]), ENT_QUOTES, 'UTF-8')));
            if ($n !== '' && $t !== '') $facts[] = "$n — $t";
        }
    }
    return ['title' => $title, 'desc' => $desc, 'cat' => $cat, 'facts' => $facts];
}

function collect(string $dir, array $skipSlugs = []): array
{
    $out = [];
    foreach (glob($dir . '/*', GLOB_ONLYDIR) as $d) {
        $slug = basename($d);
        if (in_array($slug, $skipSlugs, true)) continue;
        $f = $d . '/index.php';
        if (!is_file($f)) continue;
        $p = extract_page($f);
        if ($p === null || $p['title'] === '') continue;
        $p['slug'] = $slug;
        $out[$slug] = $p;
    }
    return $out;
}

$articles = collect($ROOT . '/baza-znaniy', $TOOLS);
$tools    = [];
foreach ($TOOLS as $slug) {
    $f = $ROOT . '/baza-znaniy/' . $slug . '/index.php';
    if (is_file($f) && ($p = extract_page($f)) !== null) { $p['slug'] = $slug; $tools[$slug] = $p; }
}
$services = collect($ROOT . '/uslugi');
$regions  = collect($ROOT . '/regiony'); // noindex-города отпадут сами

/**
 * Нормализация категорий: eyebrow-метки в корпусе неоднородны (35 вариантов),
 * сводим к каноническим кластерам. Неизвестные метки попадают в «Основы».
 */
$CAT_MAP = [
    'Основы' => ['Казначейское сопровождение', 'Сопровождение', 'Применимость', 'Госконтракты'],
    'Гособоронзаказ' => ['ГОЗ'],
    'Счета в казначействе' => ['Казначейский счёт', 'Лицевой счёт', 'Счета', 'Счета и казначейство'],
    'Санкционирование и контроль' => ['Санкционирование', 'Контроль', 'Контроль и санкционирование', 'Контроль и споры'],
    'Операции и отчётность' => ['Операции', 'Операции по счёту'],
    'Раздельный учёт' => ['Учёт'],
    'Ответственность и штрафы' => ['Ответственность'],
    'ГИИС и ЭЦП' => ['ГИИС', 'ГИИС «Электронный бюджет»', 'ГИС', 'Сертификаты и ЭП', 'Сертификаты и ЭЦП', 'ЭЦП и ГИИС', 'ЭЦП и сертификаты', 'Электронная подпись', 'Системы и сервисы'],
    'Субсидии и инвестиции' => ['Субсидии', 'Сопровождение субсидий'],
    'Закупки по 44-ФЗ' => ['Закупки 44-ФЗ'],
    'Регионы и ТОФК' => ['Регионы'],
];
$catIndex = [];
foreach ($CAT_MAP as $canon => $aliases) {
    $catIndex[mb_strtolower($canon)] = $canon; // канон маппится сам на себя
    foreach ($aliases as $al) $catIndex[mb_strtolower($al)] = $canon;
}
$CAT_ORDER = array_keys($CAT_MAP);

$byCat = [];
foreach ($articles as $a) {
    $canon = $catIndex[mb_strtolower($a['cat'])] ?? 'Основы';
    $byCat[$canon][] = $a;
}
// фиксированный порядок кластеров
uksort($byCat, fn($x, $y) => array_search($x, $CAT_ORDER) <=> array_search($y, $CAT_ORDER));
foreach ($byCat as &$list) usort($list, fn($x, $y) => strnatcasecmp($x['title'], $y['title']));
unset($list);
ksort($services, SORT_NATURAL);
ksort($regions, SORT_NATURAL);

$today = date('Y-m-d');

$about = <<<TXT
# КазнаЭксперт — казначейское сопровождение госконтрактов

> Профессиональное казначейское сопровождение контрактов по 44-ФЗ, 223-ФЗ и ГОЗ (275-ФЗ)
> на территории Российской Федерации. Подключение к ГИИС «Электронный бюджет»,
> открытие и закрытие лицевых счетов в Казначействе, утверждение сведений
> об операциях с целевыми средствами, санкционирование платежей, раздельный
> учёт по госконтрактам, анализ контрактов. Эксперт с опытом работы
> в Федеральном казначействе с 2009 года; ИП КазнаЭксперт — с 2021 года.
> Базовый офис: Санкт-Петербург, Средний пр. В.О., 88, литера А, оф. 330.
> Работаем удалённо со всеми регионами РФ.

TXT;

$contacts = <<<TXT
## Контакты

- Телефон: +7-981-833-10-10
- Email: manager@kaznaexpert.ru
- Telegram: https://t.me/Kaznaexpert
- Адрес: 199106, Санкт-Петербург, Средний пр. В.О., 88, литера А, оф. 330
- Режим работы: понедельник–пятница, 09:00–19:00 (МСК)
- Реквизиты: ИП Михайлов Ярослав Алексеевич · ИНН 781428314589 · ОГРНИП 321784700367672

TXT;

// ============================== llms.txt ==============================
$L = [];
$L[] = $about;
$L[] = "## Основные страницы\n";
$mains = [
    ['/', 'Главная — казначейский счёт за 2 дня, сопровождение под ключ', 'тарифы, кейсы, отзывы, FAQ, форма заявки'],
    ['/baza-znaniy/', 'База знаний', sprintf('%d статей и инструкций + %d справочников по казначейскому сопровождению', count($articles), count($tools))],
    ['/komanda/mihailov-yaroslav/', 'Эксперт — Ярослав Михайлов', 'основатель, опыт в системе Федерального казначейства с 2009 по 2019 год'],
    ['/keysy/', 'Кейсы', 'обезличенные истории клиентов'],
    ['/o-kompanii/', 'О компании', 'кто мы и как работаем'],
    ['/kontakty/', 'Контакты', 'все способы связи'],
    ['/privacy/', 'Политика конфиденциальности', 'обработка ПДн по 152-ФЗ'],
];
foreach ($mains as [$u, $t, $d]) $L[] = "- [$t]($BASE$u): $d";
$L[] = "";
$L[] = "## Услуги\n";
foreach ($services as $s) $L[] = "- [{$s['title']}]($BASE/uslugi/{$s['slug']}/): {$s['desc']}";
$L[] = "";
$L[] = "## База знаний\n";
foreach ($byCat as $cat => $list) {
    $L[] = "### $cat\n";
    foreach ($list as $a) $L[] = "- [{$a['title']}]($BASE/baza-znaniy/{$a['slug']}/): {$a['desc']}";
    $L[] = "";
}
$L[] = "## Справочники\n";
foreach ($TOOLS as $slug) {
    if (!isset($tools[$slug])) continue;
    $t = $tools[$slug];
    $L[] = "- [{$t['title']}]($BASE/baza-znaniy/$slug/): {$t['desc']}";
}
$L[] = "";
$L[] = "## Регионы\n";
$L[] = "Работаем со всеми регионами РФ удалённо. Страницы крупнейших центров:";
foreach ($regions as $r) $L[] = "- [{$r['title']}]($BASE/regiony/{$r['slug']}/)";
$L[] = "";
$L[] = $contacts;
$L[] = <<<TXT
## Полная база контента

Расширенная версия с ключевыми фактами каждой статьи: https://kaznaexpert.ru/llms-full.txt

## Канонический домен

Все URL сайта используют канонический формат: https://kaznaexpert.ru/
Версия с www перенаправляется на основной домен. Сгенерировано: {$today}.

TXT;
file_put_contents($ROOT . '/llms.txt', implode("\n", $L));

// ============================ llms-full.txt ============================
$F = [];
$F[] = $about;
$F[] = "## Услуги (полные описания)\n";
foreach ($services as $s) {
    $F[] = "### {$s['title']}";
    $F[] = "$BASE/uslugi/{$s['slug']}/";
    $F[] = $s['desc'] . "\n";
}
$F[] = "## База знаний — ключевые факты каждой статьи\n";
foreach ($byCat as $cat => $list) {
    $F[] = "## $cat\n";
    foreach ($list as $a) {
        $F[] = "### {$a['title']}";
        $F[] = "$BASE/baza-znaniy/{$a['slug']}/";
        if ($a['desc'] !== '') $F[] = $a['desc'];
        foreach ($a['facts'] as $fact) $F[] = "- $fact";
        $F[] = "";
    }
}
$F[] = $contacts;
$F[] = "Сгенерировано: {$today}. Канонический домен: https://kaznaexpert.ru/";
file_put_contents($ROOT . '/llms-full.txt', implode("\n", $F));

printf(
    "llms.txt: %d КБ (услуг: %d, статей: %d в %d категориях, справочников: %d, регионов: %d)\n",
    (int) round(filesize($ROOT . '/llms.txt') / 1024),
    count($services), count($articles), count($byCat), count($tools), count($regions)
);
printf("llms-full.txt: %d КБ\n", (int) round(filesize($ROOT . '/llms-full.txt') / 1024));
