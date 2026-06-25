<?php
// Сброс OPcache после деплоя. Доступ только по секретному ключу (?key=...).
declare(strict_types=1);
$KEY = 'f866fb8e8c3b90b3df10bd6bd2472e66';
if (($_GET['key'] ?? '') !== $KEY) { http_response_code(403); exit('forbidden'); }
header('Content-Type: text/plain; charset=utf-8');
$ok = function_exists('opcache_reset') ? opcache_reset() : 'fn-disabled';
clearstatcache(true);
echo 'opcache_reset: ' . var_export($ok, true) . "\n";
if (function_exists('opcache_get_status')) {
  $s = @opcache_get_status(false);
  echo 'opcache_enabled: ' . var_export($s['opcache_enabled'] ?? null, true) . "\n";
}
echo 'done ' . date('c') . "\n";
