<?php
    session_start();
    if(isset($_SESSION['unique_id'])){
        $connect = mysqli_connect('localhost', 'y98451_dbuser', 'LirXu3Qd&Tifir:8', 'y98451_db');
        $logout_id = mysqli_real_escape_string($connect, $_GET['logout_id']);
        if(isset($logout_id)){
            $status = "Offline";
            $sql = mysqli_query($connect, "UPDATE `Users` SET `status` = '{$status}' WHERE `unique_id` = '{$_GET['logout_id']}'");
            if($sql){
                session_unset();
                session_destroy();
                header("location: ../index.php");
            }
        }else{
            header("location: ../cms.php");
        }
    }else{  
        header("location: ../index.php");
    }
?>