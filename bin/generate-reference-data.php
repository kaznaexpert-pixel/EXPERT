<?php
/**
 * Генератор данных для /faq/ и глоссария из корпуса сайта.
 *
 * Запуск:  php bin/generate-reference-data.php   (из корня)
 * Артефакты: php/data/faq-data.php, php/data/glossary-terms.php (коммитятся).
 * Перегенерировать после добавления/изменения статей (вместе с generate-llms.php).
 *
 * FAQ: из FAQPage-разметки берётся по 1 ведущему вопросу на статью
 * (плюс все вопросы главной и услуг), максимум 12 на рубрику.
 * Глоссарий: все DefinedTerm из статей, дедуп против кураторских терминов
 * самой страницы глоссария, группировка по первой букве.
 */

declare(strict_types=1);

$ROOT = dirname(__DIR__);
$TOOLS = ['kody', 'kody-postupleniy', 'normativnaya-baza', 'tofk', 'glossary'];
$CAT_ORDER = ['Основы','Гособоронзаказ','Счета в казначействе','Санкционирование и контроль',
    'Операции и отчётность','Раздельный учёт','Ответственность и штрафы','ГИИС и ЭЦП',
    'Субсидии и инвестиции','Закупки по 44-ФЗ','Регионы и ТОФК'];
$MAX_PER_RUBRIC = 12;

function norm_key(string $s): string
{
    $s = mb_strtolower(str_replace('ё', 'е', $s));
    return trim(preg_replace('/\s+/u', ' ', $s), " ?.");
}

function page_meta(string $html): array
{
    $title = '';
    if (preg_match('/<title>(.*?)<\/title>/su', $html, $m)) {
        $title = preg_replace('/\s*[|·—-]\s*КазнаЭксперт\s*$/u', '', trim(html_entity_decode(strip_tags($m[1]), ENT_QUOTES, 'UTF-8')));
    }
    $cat = '';
    if (preg_match('/class="eyebrow">(.*?)<\/div>/su', $html, $m)) {
        $e = trim(strip_tags(preg_replace('/<span.*$/su', '', $m[1])));
        $p = explode('·', $e);
        $cat = trim((string) end($p));
    }
    return [$title, $cat];
}

function extract_jsonld(string $html): array
{
    $out = [];
    if (preg_match_all('#<script type="application/ld\+json">(.*?)</script>#s', $html, $mm)) {
        foreach ($mm[1] as $block) {
            $d = json_decode(trim($block), true);
            if (is_array($d)) $out[] = $d;
        }
    }
    return $out;
}

// ── Сбор ──────────────────────────────────────────────────────────
$faqByRubric = [];   // rubric => [ [q,a,url,title], ... ]
$seenQ = [];
$terms = [];         // key => [term, def, url, title]

$addQ = function (string $rubric, string $q, string $a, string $url, string $title) use (&$faqByRubric, &$seenQ) {
    $k = norm_key($q);
    if (isset($seenQ[$k])) return;
    $seenQ[$k] = true;
    $faqByRubric[$rubric][] = ['q' => $q, 'a' => $a, 'url' => $url, 'title' => $title];
};

// 1) Главная → «Общие вопросы» (все)
$h = file_get_contents($ROOT . '/index.php');
foreach (extract_jsonld($h) as $d) {
    if (($d['@type'] ?? '') === 'FAQPage') {
        foreach ($d['mainEntity'] ?? [] as $q) {
            $qt = trim($q['name'] ?? ''); $at = trim($q['acceptedAnswer']['text'] ?? '');
            if ($qt && $at) $addQ('Общие вопросы', $qt, $at, '/', 'Главная страница');
        }
    }
}

// 2) Услуги → «Услуги и цены» (все вопросы каждой услуги)
foreach (glob($ROOT . '/uslugi/*', GLOB_ONLYDIR) as $d) {
    $f = $d . '/index.php';
    if (!is_file($f)) continue;
    $h = file_get_contents($f);
    if (preg_match('/<meta\s+name="robots"[^>]*noindex/i', $h)) continue;
    [$title, ] = page_meta($h);
    $url = '/uslugi/' . basename($d) . '/';
    foreach (extract_jsonld($h) as $j) {
        if (($j['@type'] ?? '') === 'FAQPage') {
            foreach ($j['mainEntity'] ?? [] as $q) {
                $qt = trim($q['name'] ?? ''); $at = trim($q['acceptedAnswer']['text'] ?? '');
                if ($qt && $at) $addQ('Услуги и цены', $qt, $at, $url, $title);
            }
        }
    }
}

// 3) Статьи: 1 ведущий вопрос со статьи в её рубрику (свежие приоритетнее),
//    термины DefinedTerm — все
$articles = [];
foreach (glob($ROOT . '/baza-znaniy/*', GLOB_ONLYDIR) as $d) {
    $slug = basename($d);
    if (in_array($slug, $TOOLS, true)) continue;
    $f = $d . '/index.php';
    if (!is_file($f)) continue;
    $articles[] = ['f' => $f, 'slug' => $slug, 'mtime' => filemtime($f)];
}
usort($articles, fn($a, $b) => $b['mtime'] <=> $a['mtime']);

foreach ($articles as $art) {
    $h = file_get_contents($art['f']);
    if (preg_match('/<meta\s+name="robots"[^>]*noindex/i', $h)) continue;
    [$title, $cat] = page_meta($h);
    $url = '/baza-znaniy/' . $art['slug'] . '/';
    $rubric = in_array($cat, $CAT_ORDER, true) ? $cat : 'Основы';
    foreach (extract_jsonld($h) as $j) {
        $type = $j['@type'] ?? '';
        if ($type === 'FAQPage') {
            foreach ($j['mainEntity'] ?? [] as $q) {
                $qt = trim($q['name'] ?? ''); $at = trim($q['acceptedAnswer']['text'] ?? '');
                if ($qt && $at && count($faqByRubric[$rubric] ?? []) < 12) {
                    $addQ($rubric, $qt, $at, $url, $title);
                    break; // только ведущий вопрос статьи
                }
            }
        }
        foreach ((array) ($j['hasDefinedTerm'] ?? []) as $t) {
            $tn = trim($t['name'] ?? ''); $td = trim($t['description'] ?? '');
            if (!$tn || !$td) continue;
            $k = norm_key($tn);
            if (!isset($terms[$k])) $terms[$k] = ['t' => $tn, 'd' => $td, 'url' => $url, 'title' => $title];
        }
    }
}

// 4) Дедуп терминов против кураторских <dt> на странице глоссария
$gh = file_get_contents($ROOT . '/baza-znaniy/glossary/index.php');
if (preg_match_all('/<dt>(.*?)<\/dt>/su', $gh, $mm)) {
    foreach ($mm[1] as $dt) {
        $k = norm_key(html_entity_decode(strip_tags($dt), ENT_QUOTES, 'UTF-8'));
        unset($terms[$k]);
        // варианты «Термин (пояснение)» — дедупим и по основной части
        $base = norm_key(preg_replace('/\s*\(.*\)$/u', '', $k));
        unset($terms[$base]);
    }
}

// 5) Группировка терминов по букве
$byLetter = [];
foreach ($terms as $t) {
    $letter = mb_strtoupper(mb_substr($t['t'], 0, 1));
    if (preg_match('/[A-Z0-9]/u', $letter)) $letter = '0–9 · A–Z';
    $byLetter[$letter][] = $t;
}
uksort($byLetter, 'strcmp'); // побайтово = алфавит UTF-8; strnatcasecmp ломается на 0xA0 в «Р»
foreach ($byLetter as &$list) usort($list, fn($a, $b) => strcmp($a['t'], $b['t']));
unset($list);

// ── Запись артефактов ─────────────────────────────────────────────
@mkdir($ROOT . '/php/data', 0755, true);

// порядок рубрик FAQ
$rubricOrder = array_merge(['Общие вопросы', 'Услуги и цены'], $CAT_ORDER);
$faqOrdered = [];
foreach ($rubricOrder as $r) if (!empty($faqByRubric[$r])) $faqOrdered[$r] = $faqByRubric[$r];

$stamp = "<?php\n// Сгенерировано bin/generate-reference-data.php — не редактировать вручную.\nreturn ";
file_put_contents($ROOT . '/php/data/faq-data.php', $stamp . var_export($faqOrdered, true) . ";\n");
file_put_contents($ROOT . '/php/data/glossary-terms.php', $stamp . var_export($byLetter, true) . ";\n");

$totalQ = array_sum(array_map('count', $faqOrdered));
$totalT = array_sum(array_map('count', $byLetter));
printf("faq-data.php: %d вопросов в %d рубриках\n", $totalQ, count($faqOrdered));
printf("glossary-terms.php: %d терминов в %d буквенных группах\n", $totalT, count($byLetter));
