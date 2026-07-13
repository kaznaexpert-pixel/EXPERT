<?php
/**
 * Генератор RSS-фида базы знаний → /feed.xml
 *
 * Запуск:  php bin/generate-rss.php   (из корня; артефакт коммитится)
 * 30 свежих статей по dateModified из Article-schema (фолбэк — mtime файла).
 * Noindex-страницы пропускаются.
 */

declare(strict_types=1);

$ROOT  = dirname(__DIR__);
$BASE  = 'https://kaznaexpert.ru';
$TOOLS = ['kody', 'kody-postupleniy', 'normativnaya-baza', 'tofk', 'glossary', 'kalkulyator-ks'];
$LIMIT = 30;

$items = [];
foreach (glob($ROOT . '/baza-znaniy/*', GLOB_ONLYDIR) as $d) {
    $slug = basename($d);
    if (in_array($slug, $TOOLS, true)) continue;
    $f = $d . '/index.php';
    if (!is_file($f)) continue;
    $h = file_get_contents($f);
    if (preg_match('/<meta\s+name="robots"[^>]*noindex/i', $h)) continue;

    $title = '';
    if (preg_match('/<title>(.*?)<\/title>/su', $h, $m)) {
        $title = preg_replace('/\s*[|·—-]\s*КазнаЭксперт\s*$/u',
            '', trim(html_entity_decode(strip_tags($m[1]), ENT_QUOTES, 'UTF-8')));
    }
    $desc = '';
    if (preg_match('/<meta\s+name="description"\s+content="([^"]*)"/su', $h, $m)) {
        $desc = trim(html_entity_decode($m[1], ENT_QUOTES, 'UTF-8'));
    }
    $date = null;
    if (preg_match('/"dateModified"\s*:\s*"(\d{4}-\d{2}-\d{2})/su', $h, $m)) {
        $date = strtotime($m[1] . ' 12:00:00 UTC');
    }
    if (!$date && preg_match('/"datePublished"\s*:\s*"(\d{4}-\d{2}-\d{2})/su', $h, $m)) {
        $date = strtotime($m[1] . ' 12:00:00 UTC');
    }
    if (!$date) $date = filemtime($f);
    if ($title === '') continue;
    $items[] = ['title' => $title, 'desc' => $desc, 'url' => "$BASE/baza-znaniy/$slug/", 'ts' => $date];
}
usort($items, fn($a, $b) => $b['ts'] <=> $a['ts']);
$items = array_slice($items, 0, $LIMIT);

$e = fn(string $s): string => htmlspecialchars($s, ENT_XML1 | ENT_QUOTES, 'UTF-8');
$now = date(DATE_RSS);

$xml = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
$xml .= "<rss version=\"2.0\" xmlns:atom=\"http://www.w3.org/2005/Atom\">\n<channel>\n";
$xml .= "  <title>КазнаЭксперт — база знаний по казначейскому сопровождению</title>\n";
$xml .= "  <link>$BASE/baza-znaniy/</link>\n";
$xml .= "  <atom:link href=\"$BASE/feed.xml\" rel=\"self\" type=\"application/rss+xml\"/>\n";
$xml .= "  <description>Экспертные статьи о казначейском сопровождении госконтрактов: 44-ФЗ, 223-ФЗ, ГОЗ, лицевые счета, санкционирование, раздельный учёт.</description>\n";
$xml .= "  <language>ru</language>\n";
$xml .= "  <lastBuildDate>$now</lastBuildDate>\n";
foreach ($items as $it) {
    $xml .= "  <item>\n";
    $xml .= '    <title>' . $e($it['title']) . "</title>\n";
    $xml .= '    <link>' . $e($it['url']) . "</link>\n";
    $xml .= '    <guid isPermaLink="true">' . $e($it['url']) . "</guid>\n";
    $xml .= '    <pubDate>' . date(DATE_RSS, $it['ts']) . "</pubDate>\n";
    if ($it['desc'] !== '') $xml .= '    <description>' . $e($it['desc']) . "</description>\n";
    $xml .= "  </item>\n";
}
$xml .= "</channel>\n</rss>\n";

file_put_contents($ROOT . '/feed.xml', $xml);
printf("feed.xml: %d статей, %d КБ\n", count($items), (int) round(strlen($xml) / 1024));
