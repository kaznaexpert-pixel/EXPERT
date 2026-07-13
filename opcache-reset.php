<?php
// Сброс OPcache после деплоя. Доступ только по секретному ключу (?key=...).
// Ключ продублирован в .github/workflows/deploy.yml; менять синхронно
// (правка workflow требует PAT со scope `workflow`).
declare(strict_types=1);
header('X-Robots-Tag: noindex, nofollow');

// Rate-limit: не чаще 1 раза в 10 секунд (защита от перебора/дёрганья)
$rl = sys_get_temp_dir() . '/opcache_reset_rl';
$last = is_file($rl) ? (int) file_get_contents($rl) : 0;
if (time() - $last < 10) { http_response_code(429); exit('too many requests'); }

$KEY = 'f866fb8e8c3b90b3df10bd6bd2472e66';
if (!hash_equals($KEY, (string) ($_GET['key'] ?? ''))) {
    @file_put_contents($rl, (string) time()); // неудачная попытка тоже тратит окно
    http_response_code(403);
    exit('forbidden');
}
@file_put_contents($rl, (string) time());
header('Content-Type: text/plain; charset=utf-8');
$ok = function_exists('opcache_reset') ? opcache_reset() : 'fn-disabled';
clearstatcache(true);
echo 'opcache_reset: ' . var_export($ok, true) . "\n";
if (function_exists('opcache_get_status')) {
  $s = @opcache_get_status(false);
  echo 'opcache_enabled: ' . var_export($s['opcache_enabled'] ?? null, true) . "\n";
}
echo 'done ' . date('c') . "\n";
