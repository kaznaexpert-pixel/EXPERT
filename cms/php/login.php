<?php 
    session_start();
    
    $data = file_get_contents('php://input');
    $data = json_decode($data, true);

    $email = $data['email'];
    $password = $data['password'];

    $connect = mysqli_connect('localhost', 'y98451_dbuser', 'LirXu3Qd&Tifir:8', 'y98451_db'); 

    if(!empty($email) && !empty($password)){
        $sql = mysqli_query($connect, "SELECT * FROM `Users` WHERE `email` = '{$email}'");
        if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
            $user_pass = md5($password);
            $enc_pass = $row['password'];
            if($user_pass === $enc_pass){
                $status = "Online";
                $sql2 = mysqli_query($connect, "UPDATE `Users` SET `status` = '{$status}' WHERE `unique_id` = '{$row['unique_id']}'");
                if($sql2){
                    $_SESSION['unique_id'] = $row['unique_id'];
                    echo json_encode("success");
                }else{
                    echo json_encode("Something went wrong. Please try again!");
                }
            }else{
                echo json_encode("Password is Incorrect!");
            }
        }else{
            echo json_encode("$email - This email doesn't exist!");
        }
    }else{
        echo json_encode("All input fields are required!");
    }
?>