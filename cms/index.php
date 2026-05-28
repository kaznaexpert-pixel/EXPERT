<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: cms.php");
  }
?>
 
<!DOCTYPE html>
<html lang="ru" class="login">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="../favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <link rel="canonical" href="https://kaznaexpert.ru/cms/login.php"> 
  <title>Логин</title>
</head>
<body class="login">
  <div class="wrapper">
    <div class="form login">
      <header>Логин</header>
      <form action="#" method="POST">
        <div class="error-text"></div>
        <div class="field">
          <label>Email</label>
          <input type="email" id="email" placeholder="Email" required>
        </div>
        <div class="field">
          <label>Пароль</label>
          <input type="password" id="password" placeholder="Пароль" required>
          <svg fill-rule="evenodd"  viewBox="0 0 24 24">
          <path d="M12.01 20c-5.065 0-9.586-4.211-12.01-8.424 2.418-4.103 6.943-7.576 12.01-7.576 5.135 0 9.635 3.453 11.999 7.564-2.241 4.43-6.726 8.436-11.999 8.436zm-10.842-8.416c.843 1.331 5.018 7.416 10.842 7.416 6.305 0 10.112-6.103 10.851-7.405-.772-1.198-4.606-6.595-10.851-6.595-6.116 0-10.025 5.355-10.842 6.584zm10.832-4.584c2.76 0 5 2.24 5 5s-2.24 5-5 5-5-2.24-5-5 2.24-5 5-5zm0 1c2.208 0 4 1.792 4 4s-1.792 4-4 4-4-1.792-4-4 1.792-4 4-4z" fill="#353745"/>
          </svg>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Вход">
        </div>
      </form>
    </div>
  </div>
  
  <script>
    //password text

    const pswrdField = document.querySelector(".form input[type='password']"),
    toggleIcon = document.querySelector(".form .field svg");

    toggleIcon.onclick = () =>{
      if(pswrdField.type === "password"){
        pswrdField.type = "text";
        toggleIcon.classList.add("active");
      }else{
        pswrdField.type = "password";
        toggleIcon.classList.remove("active");
      }
    }
    //ajax form sending

    const form = document.querySelector(".login form");
    const errorText = form.querySelector(".error-text");
    form.addEventListener('submit', formSend);

    async function formSend(e) {
      e.preventDefault();
      
      const data = {
        email : document.getElementById('email').value,
        password : document.getElementById('password').value
      };
      let response = await fetch ('php/login.php', {
        method: 'POST',
        body: JSON.stringify(data)
      })
      .then((response) => {
        return response.json();
      })
      .then((response) => {
        if(response == "success"){
          location.href="cms.php";
        }else{
          errorText.textContent = response;
          errorText.style.display = "block";
        }
      })
    }
  </script>
</body>
</html>