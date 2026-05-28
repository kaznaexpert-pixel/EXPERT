<?php
session_start();

$data = file_get_contents('php://input');
$data = json_decode($data, true);

$title = $data['hidden'];
$likebtnvalue = 1;
$email = $data['subscribe'];

date_default_timezone_set('Europe/Moscow');
$timestamp = time();
$t = date('d-m-y H:i A', $timestamp);

$connect = mysqli_connect('localhost', 'y98451_dbuser', 'LirXu3Qd&Tifir:8', 'y98451_db'); 

if(!empty($title)){
    $sql = "INSERT INTO `Likes` (`title`, `likes`, `date`) VALUES ('{$title}',  '{$likebtnvalue}', '{$t}') ON DUPLICATE KEY UPDATE `likes` = '1'";
    $result = mysqli_query($connect, $sql);
    if($result){
     getLIkes($title);
    }
}

if(!empty($email)){
    $sql2 = "INSERT INTO `Subscription` (`email`, `date`) VALUES ('{$email}', '{$t}')";
    $result2 = mysqli_query($connect, $sql2);
}

function getLIkes($title){
  $connect = mysqli_connect('localhost', 'y98451_dbuser', 'LirXu3Qd&Tifir:8', 'y98451_db');
  $sql3 = "SELECT COUNT(*) FROM `Likes` WHERE `title` = '{$title}'";
  $result3 = mysqli_query($connect, $sql3);
  $numrows3 = mysqli_fetch_array($result3);
  echo json_encode($numrows3[0]);
}

?>