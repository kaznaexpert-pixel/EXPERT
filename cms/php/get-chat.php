<?php 
    session_start();

    $data = file_get_contents('php://input');
    $data = json_decode($data, true);
    
    $outgoing_id = $_SESSION['unique_id'];
    $incoming_id = $data ['incoming_id'];
    $seen = $data ['seen'];
    $received = 1;
    $output = "";
    
    if(isset($_SESSION['unique_id'])){
        $connect = mysqli_connect('localhost', 'y98451_dbuser', 'LirXu3Qd&Tifir:8', 'y98451_db');
        $sql = "SELECT * FROM `Chat` LEFT JOIN Users ON Users.unique_id = Chat.outgoing_msg_id
                WHERE (`outgoing_msg_id` = '{$outgoing_id}' AND `incoming_msg_id` = '{$incoming_id}')
                OR (`outgoing_msg_id` = '{$incoming_id}' AND `incoming_msg_id` = '{$outgoing_id}') ORDER BY msg_id" ;
        $query = mysqli_query($connect, $sql);
        if(mysqli_num_rows($query) > 0){
            while($row = mysqli_fetch_assoc($query)){
                //msg received update 1
                $sql3 = "UPDATE `Chat` SET `received` = '{$received}' WHERE (`outgoing_msg_id` = '{$incoming_id}' AND `incoming_msg_id` = '{$outgoing_id}')";
                    $query3 = mysqli_query($connect, $sql3);
                    
                //msg seen update
                if ($seen == 1) { 
                    $sql4 = "UPDATE `Chat` SET `seen` = '{$seen}' WHERE (`outgoing_msg_id` = '{$incoming_id}' AND `incoming_msg_id` = '{$outgoing_id}')";
                    $query4 = mysqli_query($connect, $sql4);
                } 
               
                //msg output
                $img_ext = ["jpeg", "png", "jpg", "tiff", "gif", "svg", "webp"];
                $doc_ext = ["pdf", "doc", "docx", "xml", "xls", "xlsx", "ppt", "pptx", "txt"];
                    
                if($row['outgoing_msg_id'] === $outgoing_id){ //msg sender
                    $output .= '<div class="chat outgoing">
                                <div class="details">';
                                if(in_array($row['extension'], $img_ext) === true){
                                $output .= '<a href="uploads/'. $row['file'] .'" download><img src="uploads/'. $row['file'] .'" alt=""></a>';
                                }elseif(in_array($row['extension'], $doc_ext) === true){
                                $output .= '<p><a href="uploads/'. $row['file'] .'" download class="doclink">'. $row['file'] .'</a></p>';
                                }else{
                                    $output .= '<p>'. $row['msg'] .'</p>';
                                }
                                $output .='</div>
                                </div>';
                }else{ //msg receiver
                    $output .= '<div class="chat incoming">
                                <div class="details">';
                                if(in_array($row['extension'], $img_ext) === true){
                                $output .= '<a href="uploads/'. $row['file'] .'" download><img src="uploads/'. $row['file'] .'" class="img_2" alt=""></a>';
                                }elseif(in_array($row['extension'], $doc_ext) === true){
                                $output .= '<p><a href="uploads/'. $row['file'] .'" download class="doclink">'. $row['file'] .'</a></p>';
                                }else{
                                    $output .= '<p>'. $row['msg'] .'</p>';
                                }
                                $output .='</div>
                                </div>';
                }
            }
        }else{
            $output .= '<div class="text">No messages are available. Once you send message they will appear here.</div>';
        }
        echo json_encode($output);
    }else{
        header("location: ../login.php");
    }
?>