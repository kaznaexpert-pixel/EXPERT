<?php 
  session_start();
  if(!isset($_SESSION['unique_id'])){
    header("location: index.php");
  }
  $connect = mysqli_connect('localhost', 'y98451_dbuser', 'LirXu3Qd&Tifir:8', 'y98451_db');
  $sql = mysqli_query($connect, "SELECT * FROM Users WHERE unique_id = {$_SESSION['unique_id']}");
  if(mysqli_num_rows($sql) > 0){
    $row = mysqli_fetch_assoc($sql);
  }
?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Казначейское Сопровождение: CMS">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="../favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="canonical" href="https://kaznaexpert.ru/cms.php"> 
    <title>Казначейское Сопровождение: CMS</title>
  </head>
  <body>
    <main>
      <aside>
        <div class="header-burger">
          <span></span>
        </div>
        <div class="userid">
          <img src="files/<?php echo $row['img']; ?>" alt="">
          <span><?php echo $row['name']; ?></span>
          <p><?php echo $row['status']; ?></p>
        </div>
        <nav class="menu">
          <ul>
            <li>
              <a href="#home"><img src="files/home-button.svg" alt=""><span>Домой</span></a>
            </li>
            <li>
              <a href="#chat"><img src="files/chat.svg" alt=""><span>Чат</span></a>
            </li>
          </ul>
        </nav>
        <a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout" ><img src="files/logout.svg" alt=""><span>Выход</span></a>
      </aside>
      
      <section id="home" class="active">
        <div class="first">
          <div class="homepage">
            <div class="intro">
              <h1>Домашняя<br>Страница</h1>
              <p>Ярослав,<br> смотри как я кружу вокруг твоего логотипа.<br>Всегда ваша Джессика...</p>
            </div>
            <div class="path">
                <div class="help-image-div">
                    <img src="files/icon2.png" class="help-image" alt="">
                </div>
                <div class="avatar">
                    <img src="files/jessica.png"  alt="">
                </div>
            </div>
          </div>
          <div class="columns">
            <div class="column">
              <h2 class="time"></h2>
            </div>
            <div class="column">
              <p class="quote">"Colours of the world<br> Spice up your life<br>Every boy and every girl<br>
                Spice up your life<br>People of the world<br>Spice up your life<br> Aaahh!!!"
              </p>
            </div>
          </div>
        </div>
        <div class="music">
          <div>
            <button class="delete_Crap"><img src="files/jessica.png"  alt="" style="height: 50px; width: 50px; border: none; outline: none;"></button>
            <span class="buttonspan" style="background: magenta;"></span>
          </div>
          <div>
            <img src="files/Future_Nostalgia.png" alt="">
            <audio src="files/Dua_Lipa_The_Blessed_Madonna_-_Love_Is_Religion.mp3" controls></audio>
          </div>
          <div>
            <img src="files/Basement_Jaxx_Where's_Your_Head_At.png" alt="">
            <audio src="files/Basement_Jaxx_-_Wheres_Your_Head_At.mp3" controls></audio>
          </div>
          <div>
            <img src="files/Red_alert.jpg" alt="">
            <audio src="files/Basement_Jaxx_Mella_Dee_-_Red_Alert.mp3" controls></audio>
          </div>
          <div>
            <img src="files/George_Michael_-_Faith.png" alt="">
            <audio src="files/George_Michael_-_Too_Funky.mp3" controls></audio>
          </div> 
          <div>
            <img src="files/Spice_Girls_-_Spice_Up_Your_Life.png" alt="">
            <audio src="files/Spice_Girls_-_Spice_Up_Your_Life.mp3" controls></audio>
          </div> 
          <div>
            <img src="files/Wannabe.jpg" alt="">
            <audio src="files/Spice_Girls_-_Wannabe.mp3" controls></audio>
          </div>  
          <div>
            <img src="files/Dua_Lipa_-_Future_Nostalgia_The_Moonlight_Edition.png" alt="">
            <audio src="files/Dua Lipa - Future Nostalgia (Joe Goddard Remix).mp3" controls></audio>
          </div>
           <div>
            <img src="files/Malaguena.jpg" alt="">
            <audio src="files/Malaguena.mp3" controls></audio>
          </div>
           <div>
            <img src="files/Moon-river.jpg" alt="">
            <audio src="files/Moon-river.mp3" controls></audio>
          </div>
        </div>
      </section>

      <section id="chat">
        <div class="users">
          <h1>Чат</h1>
          <div class="users-list">

          </div>
        </div>
        <div class="iframe">
          <iframe src="demo.html" name="chat-iframe" title="chat-iframe"></iframe>
        </div>
      </section>
   
    </main>
  
    <script>
      //no-zoom when doubleclick
      document.addEventListener('dblclick', function(event) {
          event.preventDefault();
      }, { passive: false });

      //hashchange
      window.addEventListener("hashchange", function(evt) {
        let element = document.querySelector("section.active");
        element.classList.remove('active');
        element = document.getElementById(window.location.hash.substr(1));
        element.classList.add('active');
      });
      window.addEventListener("load", function(evt) {
        if (window.location.hash) {
          let element = document.querySelector("section.active");
          element.classList.remove('active');
          element = document.getElementById(window.location.hash.substr(1));
          element.classList.add('active');
        }
      });
      // menu

      const header_burger = document.querySelector('.header-burger');
      const aside = document.querySelector('aside');
      const section = document.getElementsByTagName('section');

      header_burger.onclick = Menu;
      const mediaQuery = window.matchMedia('(max-width: 1200px)');
      if (mediaQuery.matches){ Menu (); };
      function Menu ()  {
        header_burger.classList.toggle('active');
        aside.classList.toggle('active');
        for (let i = 0; i < section.length; i++) {
          section[i].classList.toggle('width');
        }
      }

      //timer
      setInterval(()=>{
        const time = document.querySelector(".time");
        let date = new Date();
        let hours = addLeadingZero(date.getHours());
        let minutes = addLeadingZero(date.getMinutes());
        let seconds = addLeadingZero(date.getSeconds());
        function addLeadingZero(d){
           return (d < 10) ? '0' + d : d;
        }
        time.textContent = hours + ":" + minutes + ":" + seconds;
      });
      
      //users
      const usersList = document.querySelector(".users-list");
      let notseen = document.getElementsByClassName("notseen");
      const snd1 = new Audio('files/horse.mp3');

      async function Users () {
        let response = await fetch ('php/users.php')
        .then((response) => {
          return response.json();
        })
        .then((response) => {
          usersList.innerHTML = response;
          for(let item of notseen){
            (item.matches(".display")) ? snd1.play() :  snd1.volume = 0.1;
          }
        })
      }

      setInterval(() => {
        Users ();
      }, 1000);
      
      
      //delete
    //   const delete_Crap = document.querySelector('.delete_Crap');
    //   const buttonspan = document.querySelector('.buttonspan');
    //   delete_Crap.onclick = deleteCrap;
    //   async function  deleteCrap(e)  {
    //     let result = await fetch ('php/delete.php')
    //     .then((result) => {
    //       return result.text();
    //     })
    //     .then((result) => {
    //         buttonspan.innerHTML = result;
    //     })
    //   }
      
      
    
    </script>
  </body>
</html>