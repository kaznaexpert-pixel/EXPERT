<?php
    session_start();
    $connect = mysqli_connect('localhost', 'y98451_dbuser', 'LirXu3Qd&Tifir:8', 'y98451_db');
    $outgoing_id = $_SESSION['unique_id'];
    $sql = "SELECT * FROM `Users` WHERE NOT `unique_id` = '{$outgoing_id}' ORDER BY user_id DESC";
    $query = mysqli_query($connect, $sql);
    $output = "";
    if(mysqli_num_rows($query) == 0){
        $output .= "No users are available to chat";
    }elseif(mysqli_num_rows($query) > 0){
        while($row = mysqli_fetch_assoc($query)){
            //display last message 
            $sql2 = "SELECT * FROM `Chat` WHERE (`incoming_msg_id` = '{$row['unique_id']}'
                    OR `outgoing_msg_id` = '{$row['unique_id']}') AND (`outgoing_msg_id` = '{$outgoing_id}' 
                    OR `incoming_msg_id` = '{$outgoing_id}') ORDER BY msg_id DESC LIMIT 1";
            $query2 = mysqli_query($connect, $sql2);
            $row2 = mysqli_fetch_assoc($query2);
            if(mysqli_num_rows($query2) > 0) {
                $nomessage = "";
                ($row2['msg'] !== "") ? $result = $row2['msg'] : $result = $row2['file'];
            }else{
                $nomessage = "nomessage";
                $result ="No message available";
            }
            (strlen($result) > 28) ? $msg =  substr($result, 0, 28) . '...' : $msg = $result;
            ($outgoing_id == $row2['outgoing_msg_id']) ? $you = "You: " : $you = "";
            
            //generate data output
            ($row['status'] == "Offline") ? $offline = "offline" : $offline = "";
     
            $sql3 = "SELECT COUNT(*) FROM `Chat` WHERE `outgoing_msg_id` = '{$row['unique_id']}'
                    AND `incoming_msg_id` = '{$outgoing_id}' AND `seen` = '0'";
                    $query3 = mysqli_query($connect, $sql3);
                    $row3 = mysqli_fetch_array($query3);
            
            ($row3[0] == "0") ? $display = "" : $display = "display";
                    
            $output .= '<a href="chat.php?user_id='. $row['unique_id'] .'" target="chat-iframe" class="'. $nomessage .'">
                        <div class="content">
                        <img src="files/'. $row['img'] .'" alt="">
                        <div class="details">
                            <span>'. $row['name'] .'</span>
                            <p>'. $you . $msg .'</p>
                        </div>
                        </div>
                        <div class="content">
                            <div class="notseen '. $display .'">'. $row3[0] .'</div>
                            <div class="status-dot '. $offline .'">
                               <svg height="10" width="10"><circle cx="5" cy="5" r="4" /></svg> 
                            </div>
                        </div>
                        </a>';
        }
    }
    echo json_encode($output);
?>