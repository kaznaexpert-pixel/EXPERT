<?php
/**
 * /php/subscribe.php — подписка «Календарь дедлайнов КС 2026» (DashaMail)
 *
 * 152-ФЗ: согласие фиксируется в локальный лог (текст + время + IP).
 * Ключ API и LIST_ID — ТОЛЬКО из окружения сервера или серверного
 * конфига вне репозитория (см. sub_secret()), НЕ в коде/репозитории.
 */
header('Content-Type: application/json; charset=utf-8');
header('X-Robots-Tag: noindex, nofollow');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') { http_response_code(405); exit('{}'); }

/**
 * Секрет: сначала окружение (getenv), затем серверный dotenv ВНЕ репозитория.
 * На cPanel custom-env через getenv ненадёжен, поэтому есть файловый фолбэк.
 */
function sub_secret($name, $default = '') {
    $v = getenv($name);
    if ($v !== false && $v !== '') return $v;
    static $cfg = null;
    if ($cfg === null) {
        $cfg = [];
        $paths = [
            getenv('DASHAMAIL_ENV') ?: '',
            '/home/y98451/dashamail.env',
            __DIR__ . '/../../dashamail.env',
        ];
        foreach ($paths as $p) {
            if ($p && is_readable($p)) { $cfg = parse_ini_file($p) ?: []; break; }
        }
    }
    return (isset($cfg[$name]) && $cfg[$name] !== '') ? $cfg[$name] : $default;
}

$in      = json_decode(file_get_contents('php://input'), true) ?: [];
$email   = trim($in['email'] ?? '');
$consent = !empty($in['consent']);
$source  = preg_replace('/[^a-z0-9_-]/i', '', $in['source'] ?? 'site');

if (!filter_var($email, FILTER_VALIDATE_EMAIL) || !$consent) {
    http_response_code(422);
    echo json_encode(['error' => 'invalid']);
    exit;
}

// --- rate-limit по IP (как в lead.php) ---
$ip = $_SERVER['HTTP_CF_CONNECTING_IP'] ?? $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'] ?? 'unknown';
$ip = trim(explode(',', $ip)[0]);
$rate_file = sys_get_temp_dir() . '/subscribe_rate_' . md5($ip);
$rate_window = 20;
$last_ts = is_file($rate_file) ? (int) @file_get_contents($rate_file) : 0;
if (time() - $last_ts < $rate_window) {
    http_response_code(429);
    echo json_encode(['error' => 'too_many']);
    exit;
}
@file_put_contents($rate_file, (string) time());

// --- 152-ФЗ: фиксируем согласие ---
@file_put_contents(__DIR__ . '/consents.log', json_encode([
    'ts'      => date('c'),
    'email'   => $email,
    'ip'      => $ip,
    'source'  => $source,
    'consent' => 'Согласие на обработку ПДн и получение рассылки (kaznaexpert.ru/privacy)',
], JSON_UNESCAPED_UNICODE) . "\n", FILE_APPEND | LOCK_EX);

// --- DashaMail: добавить в список (double opt-in настраивается в UI базы) ---
$resp = @file_get_contents('https://api.dashamail.ru/?' . http_build_query([
    'method'       => 'lists.add_member',
    'api_key'      => sub_secret('DASHAMAIL_API_KEY'),
    'list_id'      => sub_secret('DASHAMAIL_LIST_ID', '463369'),
    'email'        => $email,
    'merge_SOURCE' => $source,
]));

// DashaMail err_code: 0 — добавлен, 7 — уже в базе (для пользователя это тоже
// успех: он подписан). Остальные коды — реальная ошибка.
$code = null;
if ($resp) {
    $decoded = json_decode($resp, true);
    $code = $decoded['response']['msg']['err_code'] ?? null;
}

if ($code === 0 || $code === 7) {
    echo json_encode(['ok' => true, 'already' => ($code === 7)]);
} else {
    http_response_code(502);
    echo json_encode(['error' => 'esp', 'code' => $code]);
}
