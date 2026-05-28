<?php 
    session_start();
    
    $incoming_id = $_POST['incoming_id'];
    $outgoing_id = $_POST['outgoing_id'];
    $message = $_POST['message'];
    $file = "";
    $file_ext = "";
    $received = 0;
    $seen = 0;

    if(isset($_SESSION['unique_id'])){
        $connect = mysqli_connect('localhost', 'y98451_dbuser', 'LirXu3Qd&Tifir:8', 'y98451_db');
        if(!empty($message)){
            $sql = mysqli_query($connect, "INSERT INTO `Chat` (`incoming_msg_id`, `outgoing_msg_id`, `msg`, `file`, `extension`, `received`, `seen`) VALUES ('{$incoming_id}', '{$outgoing_id}', '{$message}', '{$file}', '{$file_ext}', '{$received}', '{$seen}')") or die();
        }
        if(isset($_FILES['file'])){
            $file_name = $_FILES['file']['name'];
            $tmp_name = $_FILES['file']['tmp_name'];
            
            $file_explode = explode('.',$file_name);
            $file_ext = end($file_explode); //gets the extension
    
            $extensions = ["jpeg", "png", "jpg", "tiff", "gif", "svg", "webp","pdf", "doc", "docx", "xml", "xls", "xlsx", "ppt", "pptx", "txt"];
            if(in_array($file_ext, $extensions) === true){
                $time = time();
                $file = $time.$file_name;
                if(move_uploaded_file($tmp_name,"../uploads/".$file)){
                $message = "";
                $sql2 = mysqli_query($connect, "INSERT INTO `Chat` (`incoming_msg_id`, `outgoing_msg_id`, `msg`, `file`, `extension`, `received`, `seen`) VALUES ('{$incoming_id}', '{$outgoing_id}', '{$message}', '{$file}', '{$file_ext}', '{$received}', '{$seen}')") or die();
                }
            }else{
                echo json_encode("error");
            }
        }
    }else{
        header("location: ../index.php");
    }
?>
