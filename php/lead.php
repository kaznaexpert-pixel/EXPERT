<?php
/**
 * Lead form API endpoint — kaznaexpert.ru
 * POST JSON {phone, source, name?}
 * → Письмо в локальный ящик manager@kaznaexpert.ru (читается в Roundcube).
 *   Локальная доставка надёжна и не зависит от SPF/DKIM.
 *   Пересылка копии на Gmail — это отдельный форвардер в cPanel, не код формы.
 * → Лог в /home/y98451/leads.log
 */

declare(strict_types=1);

header('Content-Type: application/json; charset=utf-8');
header('X-Robots-Tag: noindex, nofollow');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
    exit;
}

// === Конфиг ===
$CONFIG = [
    // Локальный ящик на этом сервере (Roundcube). From тоже он — для приёма Exim.
    'email_to'      => 'manager@kaznaexpert.ru',
    'email_from'    => 'manager@kaznaexpert.ru',
    'log_path'      => '/home/y98451/leads.log',
    'rate_limit_window' => 60,
    // Telegram через Cloudflare Worker (api.telegram.org заблокирован для RU-хостинга).
    // Заполняется из lead.config.php на сервере. Пусто → Telegram просто не шлётся.
    'tg_relay_url'    => '',
    'tg_relay_secret' => '',
];

// Server-only секреты (URL воркера + общий секрет). В .gitignore, не в репозитории.
$secret_file = __DIR__ . '/lead.config.php';
if (is_file($secret_file)) {
    $override = include $secret_file;
    if (is_array($override)) {
        $CONFIG = array_merge($CONFIG, $override);
    }
}

// === Получение и валидация ===
$raw = file_get_contents('php://input');
$input = json_decode($raw, true);
if (!is_array($input)) {
    http_response_code(400);
    echo json_encode(['error' => 'Bad JSON']);
    exit;
}

$phone  = trim((string)($input['phone'] ?? ''));
$source = trim((string)($input['source'] ?? 'unknown'));
$source = preg_replace('/[^a-z0-9_\-]/i', '', $source) ?: 'unknown';
$name   = trim((string)($input['name'] ?? ''));
$name   = mb_substr($name, 0, 100);

$digits = preg_replace('/\D/', '', $phone);
if (strlen($digits) < 10 || strlen($digits) > 15) {
    http_response_code(400);
    echo json_encode(['error' => 'Invalid phone']);
    exit;
}

$phone_clean = '+' . $digits;
$ip = $_SERVER['HTTP_CF_CONNECTING_IP'] ?? $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'] ?? 'unknown';
$ip = trim(explode(',', $ip)[0]);
$referer = mb_substr($_SERVER['HTTP_REFERER'] ?? '', 0, 200);
$time_utc = gmdate('Y-m-d H:i:s');
$time_msk = (new DateTime('now', new DateTimeZone('Europe/Moscow')))->format('d.m.Y H:i');

// === Rate-limit ===
$rate_file = sys_get_temp_dir() . '/lead_rate_' . md5($ip);
$last_ts = file_exists($rate_file) ? (int)file_get_contents($rate_file) : 0;
if (time() - $last_ts < $CONFIG['rate_limit_window']) {
    http_response_code(429);
    echo json_encode(['error' => 'Too many requests']);
    exit;
}
file_put_contents($rate_file, (string)time());

// === Письмо ===
$subject = '=?UTF-8?B?' . base64_encode('Заявка с kaznaexpert.ru') . '?=';
$body  = "Новая заявка с kaznaexpert.ru\n";
$body .= "─────────────────────\n";
if ($name !== '') $body .= "Имя:       $name\n";
$body .= "Телефон:   $phone_clean\n";
$body .= "Источник:  $source\n";
$body .= "Время:     $time_msk МСК\n";
$body .= "IP:        $ip\n";
$body .= "Referer:   $referer\n";
$body .= "─────────────────────\n";
$body .= "Перезвонить в течение 15 минут\n";

$headers = "From: КазнаЭксперт <{$CONFIG['email_from']}>\r\n";
$headers .= "Reply-To: {$CONFIG['email_from']}\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
$headers .= "X-Mailer: kaznaexpert-lead-api\r\n";

// 5-й параметр (-f) задаёт envelope-sender — нужно для приёма Exim.
$mail_sent = @mail($CONFIG['email_to'], $subject, $body, $headers, '-f' . $CONFIG['email_from']);

// === Telegram через Cloudflare Worker (необязательный канал, fire-and-forget) ===
$tg_sent = false;
if ($CONFIG['tg_relay_url'] !== '') {
    $payload = json_encode([
        'phone'  => $phone_clean,
        'name'   => $name,
        'source' => $source,
        'time'   => $time_msk,
        'ip'     => $ip,
    ], JSON_UNESCAPED_UNICODE);

    $ctx = stream_context_create(['http' => [
        'method'  => 'POST',
        'header'  => "Content-Type: application/json\r\n" .
                     "X-Relay-Secret: {$CONFIG['tg_relay_secret']}\r\n",
        'content' => $payload,
        'timeout' => 4,
        'ignore_errors' => true,
    ]]);
    $resp = @file_get_contents($CONFIG['tg_relay_url'], false, $ctx);
    if ($resp !== false) {
        $decoded = json_decode($resp, true);
        $tg_sent = is_array($decoded) && !empty($decoded['ok']);
    }
}

// === Лог ===
$log_line = sprintf(
    "%s | %s | %s | %s | mail:%s tg:%s\n",
    $time_utc,
    $phone_clean,
    $source,
    $ip,
    $mail_sent ? '1' : '0',
    $tg_sent ? '1' : '0'
);
@file_put_contents($CONFIG['log_path'], $log_line, FILE_APPEND | LOCK_EX);

// === Ответ ===
if ($mail_sent) {
    echo json_encode(['ok' => true, 'channels' => ['mail' => true]]);
} else {
    http_response_code(502);
    echo json_encode(['error' => 'Mail delivery failed']);
}
