<?php 
session_start();

if((isset($_SESSION['user'])) || (isset($_SESSION['admin'])))
{
  header("Location: landing-user.php");
}





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/form-design.css">   
   
    <title>Login</title>
</head>
<body>
  
    <div class="waveWrapper waveAnimation">
        <div class="waveWrapperInner bgTop">
          <div
            class="wave waveTop"
            style="
              background-image: url('http://front-end-noobs.com/jecko/img/wave-top.png');
            "
          ></div>
        </div>
        <div class="waveWrapperInner bgMiddle">
          <div
            class="wave waveMiddle"
            style="
              background-image: url('http://front-end-noobs.com/jecko/img/wave-mid.png');
            "
          ></div>
        </div>
        <div class="waveWrapperInner bgBottom">
          <div
            class="wave waveBottom"
            style="
              background-image: url('http://front-end-noobs.com/jecko/img/wave-bot.png');
            "
          ></div>
        </div>
      </div>
    <section class="login">
        <div class="login-form">
            <form action="login.php" method="POST">
                <div id="formWrapper">
                    <div id="form">
                <div class="form-item">
                    <p class="formLabel">email</p>
                    <input type="email" name="email" id="email" class="form-style" autocomplete="off"/>
                  </div>
                  <div class="form-item">
                    <p class="formLabel">password</p>
                    <input type="password" name="password" id="password" class="form-style" autocomplete="off"/>
                  </div>
                  <div class="form-item">
                    <p class="pull-left"><a href="#"><small>forget password</small></a></p>
                    <input type="submit" class="login pull-right" value="Log In">
                    <div class="clear-fix"></div>
                    </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-2.1.0.min.js" ></script>
    <script src="./js/form-design.js"></script>
</body>
</html>

