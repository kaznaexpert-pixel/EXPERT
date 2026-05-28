<?php
session_start();

$data = file_get_contents('php://input');
$data = json_decode($data, true);

$title = $data['hidden'];
$likebtnvalue = 1;

$connect = mysqli_connect('localhost', 'y98451_dbuser', 'LirXu3Qd&Tifir:8', 'y98451_db');
$sql3 = "SELECT COUNT(*) FROM `Likes` WHERE `title` = '{$title}'";
$result3 = mysqli_query($connect, $sql3);
$numrows3 = mysqli_fetch_array($result3);
echo json_encode($numrows3[0]);

?>