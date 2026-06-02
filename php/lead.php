<?php
/**
 * Lead form API — kaznaexpert.ru
 * Соответствие 152-ФЗ:
 * - Запись ПДн только на сервер в РФ (Fornex): JSON-файл каждого лида
 * - Уведомление оператору — только email (без иностранных сервисов)
 * - Согласие на обработку ПДн обязательно
 * - Honeypot против ботов + rate-limit
 *
 * Доставка email (Sprint 2.4.1 FINAL — TG-канал убран):
 * - Основной канал: локальный ящик manager@kaznaexpert.ru (читается в Roundcube,
 *   доставка не зависит от SPF/DKIM). envelope-sender (-f) нужен для приёма Exim.
 * - Копия на внешний адрес отключена (152-ФЗ: без трансграничной передачи ПДн).
 *   Данные сохраняются в JSON на сервере РФ и дублируются в локальный ящик.
 */

declare(strict_types=1);

header('Content-Type: application/json; charset=utf-8');
header('X-Robots-Tag: noindex, nofollow');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
    exit;
}

$CONFIG = [
    // Надёжный локальный ящик на этом сервере (Roundcube). From = он же для приёма Exim.
    'email_local'   => 'manager@kaznaexpert.ru',
    // Копия на внешний адрес отключена: пересылка ПДн на Gmail (США) = трансграничная
    // передача, что противоречит Политике (п. 9.1). Все заявки идут в локальный ящик РФ.
    'email_copy'    => '',
    'email_from'    => 'manager@kaznaexpert.ru',
    'log_path'      => '/home/y98451/leads.log',
    'data_dir'      => '/home/y98451/data/leads',
    'rate_limit_window' => 60,
];

// === Получение JSON ===
$raw = file_get_contents('php://input');
$input = json_decode($raw, true);
if (!is_array($input)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'error' => 'Bad JSON']);
    exit;
}

// === HONEYPOT ===
if (!empty($input['hp'])) {
    echo json_encode(['success' => true]);
    exit;
}

// === Валидация ===
$phone   = trim((string)($input['phone'] ?? $input['contact'] ?? ''));
$source  = preg_replace('/[^a-z0-9_\-]/i', '', (string)($input['source'] ?? '')) ?: 'unknown';
$name    = mb_substr(trim((string)($input['name'] ?? '')), 0, 100);
$message = mb_substr(trim((string)($input['message'] ?? '')), 0, 3000);

$digits = preg_replace('/\D/', '', $phone);
if (strlen($digits) < 10 || strlen($digits) > 15) {
    http_response_code(400);
    echo json_encode(['success' => false, 'error' => 'Invalid phone']);
    exit;
}
$phone_clean = '+' . $digits;

// === 152-ФЗ: согласие обязательно ===
$consent_pd = !empty($input['consent_pd']);
if (!$consent_pd) {
    http_response_code(400);
    echo json_encode(['success' => false, 'error' => 'consent_pd required']);
    exit;
}
$consent_text = (string)($input['consent_pd_text'] ?? 'Согласен на обработку ПДн согласно Политике');
$consent_at   = (string)($input['consent_at'] ?? gmdate('Y-m-d\TH:i:s\Z'));

// === Контекст ===
$ip = $_SERVER['HTTP_CF_CONNECTING_IP'] ?? $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'] ?? 'unknown';
$ip = trim(explode(',', $ip)[0]);
$ua = mb_substr($_SERVER['HTTP_USER_AGENT'] ?? '', 0, 200);
$referer = mb_substr($_SERVER['HTTP_REFERER'] ?? '', 0, 200);
$page_url = mb_substr((string)($input['page_url'] ?? $referer), 0, 200);
$time_utc = gmdate('Y-m-d H:i:s');
$time_msk = (new DateTime('now', new DateTimeZone('Europe/Moscow')))->format('d.m.Y H:i');

// UTM + yclid
$utm = is_array($input['utm'] ?? null) ? $input['utm'] : [];
$utm_safe = [];
foreach (['source', 'medium', 'campaign', 'term', 'content'] as $k) {
    $utm_safe[$k] = mb_substr(trim((string)($utm[$k] ?? '')), 0, 100);
}
$yclid = mb_substr(trim((string)($input['yclid'] ?? '')), 0, 100);

// === Rate-limit ===
$rate_file = sys_get_temp_dir() . '/lead_rate_' . md5($ip);
$last_ts = file_exists($rate_file) ? (int)file_get_contents($rate_file) : 0;
if (time() - $last_ts < $CONFIG['rate_limit_window']) {
    http_response_code(429);
    echo json_encode(['success' => false, 'error' => 'Too many requests']);
    exit;
}
@file_put_contents($rate_file, (string)time());

// === Lead ID ===
$lead_id = substr(bin2hex(random_bytes(6)), 0, 10);

// === JSON-файл атомарно ===
$json_saved = false;
try {
    $ym = date('Y-m');
    $dir = $CONFIG['data_dir'] . '/' . $ym;
    if (!is_dir($dir)) {
        @mkdir($dir, 0700, true);
    }
    $payload_to_save = [
        'id' => $lead_id,
        'name' => $name,
        'phone' => $phone_clean,
        'message' => $message,
        'source' => $source,
        'page_url' => $page_url,
        'referrer' => $referer,
        'utm' => $utm_safe,
        'yclid' => $yclid,
        'consent_pd' => true,
        'consent_pd_text' => $consent_text,
        'consent_at' => $consent_at,
        'ip' => $ip,
        'ua' => $ua,
        'created_at' => $time_utc,
        'created_msk' => $time_msk,
    ];
    $file = $dir . '/' . $lead_id . '.json';
    $tmp = $file . '.' . getmypid() . '.tmp';
    if (@file_put_contents($tmp, json_encode($payload_to_save, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT)) !== false) {
        @rename($tmp, $file);
        $json_saved = true;
    }
} catch (Throwable $e) {
    // не блокируем заявку
}

// === Письмо ===
$subject = '=?UTF-8?B?' . base64_encode('🔔 Заявка #' . $lead_id . ' с kaznaexpert.ru') . '?=';
$body  = "Новая заявка с kaznaexpert.ru\n";
$body .= "─────────────────────\n";
$body .= "ID:        $lead_id\n";
if ($name !== '') $body .= "Имя:       $name\n";
$body .= "Телефон:   $phone_clean\n";
if ($message !== '') $body .= "Сообщение: $message\n";
$body .= "Источник:  $source\n";
$body .= "Страница:  $page_url\n";
if ($utm_safe['source'] !== '') $body .= "UTM:       {$utm_safe['source']}/{$utm_safe['medium']}/{$utm_safe['campaign']}\n";
if ($yclid !== '') $body .= "Yclid:     $yclid\n";
$body .= "Время:     $time_msk МСК\n";
$body .= "IP:        $ip\n";
$body .= "Referer:   $referer\n";
$body .= "Согласие:  $consent_at\n";
$body .= "─────────────────────\n";
$body .= "Перезвонить в течение 15 минут\n";

$headers = "From: КазнаЭксперт <{$CONFIG['email_from']}>\r\n";
$headers .= "Reply-To: {$CONFIG['email_from']}\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
$headers .= "X-Mailer: kaznaexpert-lead-api\r\n";

// 5-й параметр (-f) задаёт envelope-sender — нужно для приёма Exim локально.
$envelope = '-f' . $CONFIG['email_from'];

// Основной канал — локальный ящик (надёжно). Копия на Gmail — best-effort.
$mail_local = @mail($CONFIG['email_local'], $subject, $body, $headers, $envelope);
$mail_copy  = false;
if ($CONFIG['email_copy'] !== '') {
    $mail_copy = @mail($CONFIG['email_copy'], $subject, $body, $headers, $envelope);
}

// === Лог ===
$log_line = sprintf(
    "%s | %s | %s | %s | %s | mail:%s copy:%s json:%s\n",
    $time_utc,
    $lead_id,
    $phone_clean,
    $source,
    $ip,
    $mail_local ? '1' : '0',
    $mail_copy ? '1' : '0',
    $json_saved ? '1' : '0'
);
@file_put_contents($CONFIG['log_path'], $log_line, FILE_APPEND | LOCK_EX);

// === Ответ ===
// Успех, если сработал хоть один канал доставки или лид сохранён в JSON (данные не потеряны).
if ($mail_local || $mail_copy || $json_saved) {
    echo json_encode([
        'success' => true,
        'data' => ['id' => $lead_id],
    ]);
} else {
    http_response_code(502);
    echo json_encode(['success' => false, 'error' => 'No delivery channels worked']);
}
