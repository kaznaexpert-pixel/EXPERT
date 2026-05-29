<?php
/**
 * Lead form API endpoint — kaznaexpert.ru
 * POST JSON {phone, source, name?}
 * → Email на kaznaexpert@gmail.com
 * → Лог в /home/y98451/leads.log
 *
 * Канал уведомлений — только email. Telegram Bot API заблокирован
 * для российских хостингов (api.telegram.org недоступен с этого сервера),
 * поэтому он не используется.
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
    'email_to'      => 'kaznaexpert@gmail.com',
    'email_from'    => 'noreply@kaznaexpert.ru',
    'log_path'      => '/home/y98451/leads.log',
    'rate_limit_window' => 60,
];

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

// === Лог ===
$log_line = sprintf(
    "%s | %s | %s | %s | mail:%s\n",
    $time_utc,
    $phone_clean,
    $source,
    $ip,
    $mail_sent ? '1' : '0'
);
@file_put_contents($CONFIG['log_path'], $log_line, FILE_APPEND | LOCK_EX);

// === Ответ ===
if ($mail_sent) {
    echo json_encode([
        'ok' => true,
        'channels' => ['mail' => true],
    ]);
} else {
    http_response_code(502);
    echo json_encode(['error' => 'Mail delivery failed']);
}
