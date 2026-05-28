<?php 
$data = file_get_contents('php://input');
$data = json_decode($data, true);
var_dump($data);

$message = 'Имя:' .$data['fullname']."\n";
$message .= 'E-mail:' .$data['email']."\n";
$message .= 'Тел:' .$data['tel']."\n";
$message .= 'Сообщение:' .$data['message']."\n";
$headers = 'From: manager@kaznaexpert.ru';

$mail = mail("manager@kaznaexpert.ru", 'Заявка с сайта', $message, $headers);

?>