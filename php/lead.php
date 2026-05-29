<?php
/**
 * Lead form API endpoint — kaznaexpert.ru
 * POST JSON {phone, source, name?}
 * → Email на kaznaexpert@gmail.com
 * → Telegram через бота KaznaExpert Leads
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
// Секреты (tg_bot_token, tg_chat_id) НЕ хранятся в репозитории — он публичный.
// Они загружаются из php/lead.config.php, который существует только на сервере
// и добавлен в .gitignore. Если файла нет — Telegram отключается, остаётся email.
$CONFIG = [
    'email_to'      => 'kaznaexpert@gmail.com',
    'email_from'    => 'noreply@kaznaexpert.ru',
    'tg_bot_token'  => '',
    'tg_chat_id'    => '',
    'log_path'      => '/home/y98451/leads.log',
    'rate_limit_window' => 60,
];

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
$ua = mb_substr($_SERVER['HTTP_USER_AGENT'] ?? 'unknown', 0, 200);
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

// === Email ===
$subject = '=?UTF-8?B?' . base64_encode('🔔 Заявка с kaznaexpert.ru') . '?=';
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
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
$headers .= "X-Mailer: kaznaexpert-lead-api\r\n";

$mail_sent = @mail($CONFIG['email_to'], $subject, $body, $headers);

// === Telegram ===
$tg_sent = false;
if (!empty($CONFIG['tg_bot_token']) && !empty($CONFIG['tg_chat_id'])) {
    $tg_msg  = "🔔 Новая заявка с kaznaexpert.ru\n\n";
    if ($name !== '') $tg_msg .= "👤 Имя: $name\n";
    $tg_msg .= "📞 Телефон: $phone_clean\n";
    $tg_msg .= "🌐 Источник: $source\n";
    $tg_msg .= "🕐 Время: $time_msk МСК\n";
    $tg_msg .= "🌍 IP: $ip\n\n";
    $tg_msg .= "Перезвонить в течение 15 минут";

    $tg_url = "https://api.telegram.org/bot{$CONFIG['tg_bot_token']}/sendMessage";
    $tg_data = http_build_query([
        'chat_id' => $CONFIG['tg_chat_id'],
        'text'    => $tg_msg,
    ]);

    $ctx = stream_context_create([
        'http' => [
            'method'  => 'POST',
            'header'  => "Content-Type: application/x-www-form-urlencoded\r\nUser-Agent: kaznaexpert-bot\r\n",
            'content' => $tg_data,
            'timeout' => 4,
            'ignore_errors' => true,
        ],
    ]);

    $tg_result = @file_get_contents($tg_url, false, $ctx);
    if ($tg_result !== false) {
        $tg_decoded = json_decode($tg_result, true);
        $tg_sent = !empty($tg_decoded['ok']);
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
if ($mail_sent || $tg_sent) {
    echo json_encode([
        'ok' => true,
        'channels' => [
            'mail' => (bool)$mail_sent,
            'telegram' => (bool)$tg_sent,
        ],
    ]);
} else {
    http_response_code(502);
    echo json_encode(['error' => 'No notification channels delivered']);
}
