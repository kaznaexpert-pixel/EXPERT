<?php
/**
 * Lead form API endpoint — kaznaexpert.ru
 * POST JSON {phone, source, name?}
 * → Email через аутентифицированный SMTP (Yandex) на manager@ + gmail
 * → Лог в /home/y98451/leads.log
 *
 * Почему SMTP, а не mail(): домен обслуживается Яндексом (SPF: _spf.yandex.net).
 * PHP mail() уходит с IP веб-сервера Fornex, который НЕ авторизован в SPF/DKIM,
 * поэтому Gmail отклоняет такие письма (550-5.7.26). Отправка через
 * smtp.yandex.ru с авторизацией проходит SPF/DKIM и доставляется надёжно.
 *
 * Секреты SMTP лежат в php/lead.config.php (только на сервере, в .gitignore).
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
    'email_to'      => ['manager@kaznaexpert.ru', 'kaznaexpert@gmail.com'],
    'log_path'      => '/home/y98451/leads.log',
    'rate_limit_window' => 60,
    // SMTP — переопределяется из lead.config.php на сервере
    'smtp_host'     => 'ssl://smtp.yandex.ru',
    'smtp_port'     => 465,
    'smtp_user'     => '',
    'smtp_pass'     => '',
    'smtp_from'     => '',   // для Yandex обязан совпадать со smtp_user
];

$secret_file = __DIR__ . '/lead.config.php';
if (is_file($secret_file)) {
    $override = include $secret_file;
    if (is_array($override)) {
        $CONFIG = array_merge($CONFIG, $override);
    }
}
if ($CONFIG['smtp_from'] === '') {
    $CONFIG['smtp_from'] = $CONFIG['smtp_user'];
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

// === Текст письма ===
$body  = "Новая заявка с kaznaexpert.ru\r\n";
$body .= "─────────────────────\r\n";
if ($name !== '') $body .= "Имя:       $name\r\n";
$body .= "Телефон:   $phone_clean\r\n";
$body .= "Источник:  $source\r\n";
$body .= "Время:     $time_msk МСК\r\n";
$body .= "IP:        $ip\r\n";
$body .= "Referer:   $referer\r\n";
$body .= "─────────────────────\r\n";
$body .= "Перезвонить в течение 15 минут\r\n";

$subject = 'Заявка с kaznaexpert.ru' . ($name !== '' ? " — $name" : '') . " ($phone_clean)";

// === Отправка через SMTP ===
$smtp_err = '';
$recipients = is_array($CONFIG['email_to']) ? $CONFIG['email_to'] : [$CONFIG['email_to']];
$mail_sent = false;

if ($CONFIG['smtp_user'] !== '' && $CONFIG['smtp_pass'] !== '') {
    $mail_sent = smtp_send($CONFIG, $recipients, $subject, $body, $smtp_err);
}

/**
 * Минимальный SMTP-клиент (AUTH LOGIN, неявный TLS на :465).
 * Возвращает true при коде 250 на финальный DATA.
 */
function smtp_send(array $cfg, array $to, string $subject, string $body, string &$err): bool
{
    $host = $cfg['smtp_host'];
    $port = (int)$cfg['smtp_port'];
    $from = $cfg['smtp_from'];

    $ctx = stream_context_create(['ssl' => [
        'verify_peer'      => true,
        'verify_peer_name' => true,
    ]]);

    $errno = 0; $errstr = '';
    $fp = @stream_socket_client("$host:$port", $errno, $errstr, 10, STREAM_CLIENT_CONNECT, $ctx);
    if (!$fp) {
        $err = "connect failed: $errstr ($errno)";
        return false;
    }
    stream_set_timeout($fp, 10);

    $read = function () use ($fp): string {
        $data = '';
        while (($line = fgets($fp, 515)) !== false) {
            $data .= $line;
            // многострочный ответ: "250-..." продолжается, "250 ..." завершает
            if (isset($line[3]) && $line[3] === ' ') break;
        }
        return $data;
    };
    $expect = function (string $resp, string $code) use (&$err): bool {
        if (strncmp($resp, $code, 3) !== 0) {
            $err = 'SMTP: ожидался ' . $code . ', получено: ' . trim($resp);
            return false;
        }
        return true;
    };
    $cmd = function (string $line) use ($fp) {
        fwrite($fp, $line . "\r\n");
    };

    $ok = true;
    if (!$expect($read(), '220')) { $ok = false; }

    if ($ok) { $cmd('EHLO kaznaexpert.ru'); if (!$expect($read(), '250')) $ok = false; }
    if ($ok) { $cmd('AUTH LOGIN');           if (!$expect($read(), '334')) $ok = false; }
    if ($ok) { $cmd(base64_encode($cfg['smtp_user'])); if (!$expect($read(), '334')) $ok = false; }
    if ($ok) { $cmd(base64_encode($cfg['smtp_pass'])); if (!$expect($read(), '235')) $ok = false; }
    if ($ok) { $cmd('MAIL FROM:<' . $from . '>'); if (!$expect($read(), '250')) $ok = false; }
    if ($ok) {
        foreach ($to as $rcpt) {
            $cmd('RCPT TO:<' . $rcpt . '>');
            if (!$expect($read(), '250')) { $ok = false; break; }
        }
    }
    if ($ok) { $cmd('DATA'); if (!$expect($read(), '354')) $ok = false; }

    if ($ok) {
        $headers  = 'From: ' . mime_word('КазнаЭксперт') . ' <' . $from . ">\r\n";
        $headers .= 'To: ' . implode(', ', $to) . "\r\n";
        $headers .= 'Reply-To: ' . $from . "\r\n";
        $headers .= 'Subject: ' . mime_word($subject) . "\r\n";
        $headers .= 'Date: ' . date('r') . "\r\n";
        $headers .= 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-Type: text/plain; charset=UTF-8' . "\r\n";
        $headers .= 'Content-Transfer-Encoding: 8bit' . "\r\n";
        $headers .= 'X-Mailer: kaznaexpert-lead-api' . "\r\n";

        // dot-stuffing: строки, начинающиеся с точки, экранируем
        $data = $headers . "\r\n" . $body;
        $data = preg_replace('/^\./m', '..', $data);
        fwrite($fp, $data . "\r\n.\r\n");
        if (!$expect($read(), '250')) $ok = false;
    }

    $cmd('QUIT');
    fclose($fp);
    return $ok;
}

function mime_word(string $s): string
{
    return '=?UTF-8?B?' . base64_encode($s) . '?=';
}

// === Лог ===
$log_line = sprintf(
    "%s | %s | %s | %s | smtp:%s%s\n",
    $time_utc,
    $phone_clean,
    $source,
    $ip,
    $mail_sent ? '1' : '0',
    $mail_sent ? '' : (' | err:' . str_replace("\n", ' ', $smtp_err))
);
@file_put_contents($CONFIG['log_path'], $log_line, FILE_APPEND | LOCK_EX);

// === Ответ ===
if ($mail_sent) {
    echo json_encode(['ok' => true, 'channels' => ['mail' => true]]);
} else {
    http_response_code(502);
    echo json_encode(['error' => 'Mail delivery failed']);
}
