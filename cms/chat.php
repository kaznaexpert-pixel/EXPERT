<?php 
  session_start();
  $connect = mysqli_connect('localhost', 'y98451_dbuser', 'LirXu3Qd&Tifir:8', 'y98451_db');
  if(!isset($_SESSION['unique_id'])){
    header("location: index.php");
  }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Chat</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body class="chat">
  <div class="wrapper wrapper-chat">
    <div class="chat-area">
      <header>
        <?php 
          $connect = mysqli_connect('localhost', 'y98451_dbuser', 'LirXu3Qd&Tifir:8', 'y98451_db');
          $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);
          $sql = mysqli_query($connect, "SELECT * FROM Users WHERE unique_id = {$user_id}");
          if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
          }else{
             header("location: demo.html");
          }
        ?>
        <img src="files/<?php echo $row['img']; ?>" alt="">
        <div class="details">
          <span><?php echo $row['name']; ?></span>
          <p><?php echo $row['status']; ?></p>
        </div>
        <p class="deleteShow"></p>
        <div class="delete-user" messageid="<?php echo $row['unique_id'];?>">
            <img src="files/icons-trash-can.svg" class="delete-user-img" alt=""> 
        </div>
      </header>
      <div class="chat-box">
      
      </div>
      <form action="#" class="typing-area" enctype="multipart/form-data">
        <input type="text" class="outgoing_id" id="outgoing_id" name="outgoing_id" value="<?php echo $_SESSION['unique_id']; ?>" hidden>
        <input type="text" class="incoming_id" id="incoming_id"  name="incoming_id" value="<?php echo $user_id; ?>" hidden>
        <label for="file"><img src="files/upload-file.svg" alt=""></label>
        <input type="file" accept="image/*,.pdf,.doc,.docx,.xml,.xls,.xlsx,.ppt,.pptx,.txt" id="file" class="file" name="file">
        <input type="text" id="message" class="input-field" name="message" placeholder="Сообщение..." autocomplete="off">
        <button>
          <svg width="24px" height="24px" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/"
           style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;">
            <path id="telegram-1" d="M18.384,22.779c0.322,0.228 0.737,0.285 1.107,0.145c0.37,-0.141 0.642,-0.457 0.724,-0.84c0.869,
            -4.084 2.977,-14.421 3.768,-18.136c0.06,-0.28 -0.04,-0.571 -0.26,-0.758c-0.22,-0.187 -0.525,-0.241 -0.797,
            -0.14c-4.193,1.552 -17.106,6.397 -22.384,8.35c-0.335,0.124 -0.553,0.446 -0.542,0.799c0.012,0.354 0.25,0.661 0.593,
            0.764c2.367,0.708 5.474,1.693 5.474,1.693c0,0 1.452,4.385 2.209,6.615c0.095,
            0.28 0.314,0.5 0.603,0.576c0.288,0.075 0.596,-0.004 0.811,-0.207c1.216,-1.148 3.096,-2.923 3.096,-2.923c0,
            0 3.572,2.619 5.598,4.062Zm-11.01,-8.677l1.679,5.538l0.373,-3.507c0,0 6.487,-5.851 10.185,
            -9.186c0.108,-0.098 0.123,-0.262 0.033,-0.377c-0.089,-0.115 -0.253,-0.142 -0.376,-0.064c-4.286,2.737 -11.894,7.596 -11.894,7.596Z"/>
          </svg>
        </button>
      </form>
    </div>
  </div>

  <script>
    const chatArea = document.querySelector(".chat-area");
    const chatBox = document.querySelector(".chat-box");
    const form = document.querySelector(".typing-area"),
    file = form.querySelector(".file"),
    inputField = form.querySelector(".input-field"),
    sendBtn = form.querySelector("button");
    const snd1 = new Audio('files/soft-click.mp3');
    const snd2 = new Audio('files/bubble-click.mp3');
    let seen_status = 0;
    
    chatArea.onclick = function (event) {
      seen_status = 1;
    }
    
    inputField.focus();
    inputField.onkeyup = ()=>{
      if(inputField.value != ""){
        sendBtn.classList.add("active");
      }else{
        sendBtn.classList.remove("active");
      }
    }
    
    chatBox.onmouseenter = ()=>{
      chatBox.classList.add("active");
    }
    chatBox.onmouseleave = ()=>{
      chatBox.classList.remove("active");
    }
    chatBox.ontouchstart = ()=>{
      chatBox.classList.add("active");
    }
    inputField.onfocus = ()=>{
      chatBox.classList.remove("active");
    }
    
    file.addEventListener('change', formSend);
    form.addEventListener('submit', formSend);

    async function formSend(e) {
      e.preventDefault();
      let data = new FormData(form);
      data.append('file', file.files[0]);

      let response = await fetch ('php/insert-chat.php', {
        method: 'POST',
        body: data
      })
      if(response.ok){
        snd1.play();
        form.reset();
        scrollToBottom();
      }else {
        alert("Ошибка");
      } 
    }
    
    async function Sound () {
      let data = {
        incoming_id : document.getElementById("incoming_id").value
      }
      let response = await fetch ('php/sound.php', {
        method: 'POST',
        body: JSON.stringify(data)
      })
      .then((response) => {
        return response.json();
      })
      .then((response) => {
        if(response != 0 && response !== null){
          snd2.play();
        }else{
          snd2.pause();
          snd2.currentTime = 0;
        }
      })
    }
    
    async function Chat () {
      let data = {
        incoming_id : document.getElementById("incoming_id").value,
        seen: seen_status
      }
      let response = await fetch ('php/get-chat.php', {
        method: 'POST',
        body: JSON.stringify(data)
      })
      .then((response) => {
        return response.json();
      })
      .then((response) => {
        chatBox.innerHTML = response;
        if(!chatBox.classList.contains("active")){
          scrollToBottom();
        }
        seen_status = 0;//for next messages
      })
    }
    
    setInterval(() => {
        Sound ();
        Chat ();
    }, 1000);

    function scrollToBottom(){
      chatBox.scrollTop = chatBox.scrollHeight;
    }
    


    
    //delete
    // const delete_user = document.querySelector('.delete-user');
    // delete_user.addEventListener('click', deleteUser);
    // async function deleteUser(e) {
    //   const messageidvalue = delete_user.getAttribute('messageid');
    //   const deleteShow = document.querySelector('.deleteShow');
    //   const data = {
    //       messageid : messageidvalue
    //   };
    //   let response = await fetch ('php/delete.php', {
    //      method: 'POST',
    //      body: JSON.stringify(data)
    //   })
    //   then((response) => {
    //     return response.text();
    //   })
    //   .then((response) => {
    //       deleteShow.innerHTML = response;
    //   })
    // }
  </script>
</body>
</html>
