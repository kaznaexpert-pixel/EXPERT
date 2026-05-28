<?php 
    session_start();

    $data = file_get_contents('php://input');
    $data = json_decode($data, true);

    $incoming_id = $data['incoming_id'];
    $outgoing_id = $_SESSION['unique_id'];
    $connect = mysqli_connect('localhost', 'y98451_dbuser', 'LirXu3Qd&Tifir:8', 'y98451_db');
    
    if(isset($_SESSION['unique_id'])){
        //msg not received, 0
        $sql2 = "SELECT COUNT(*) FROM `Chat` WHERE `outgoing_msg_id` = '{$incoming_id}' AND `incoming_msg_id` = '{$outgoing_id}' AND `received` = '0'";
        $query2 = mysqli_query($connect, $sql2);
        $numrows2 = mysqli_fetch_array($query2);
        echo json_encode($numrows2[0]);
    }else{
        header("location: ../login.php");
    }
?>