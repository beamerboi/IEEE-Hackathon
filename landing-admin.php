<?php 
session_start();

if((!isset($_SESSION['user'])) && (!isset($_SESSION['admin'])))
{
  header("Location: login.html");
}





?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="./Assets/Fonts/fontawesome-free-5.15.2-web/css/fontawesome.css" rel="stylesheet">
    <link
      rel="stylesheet"
      href="./bootstrap-5.0.0-beta2-dist/css/bootstrap.css"
    />
    <link rel="stylesheet" href="./css/landing-page.css" />
    

    <title>IEEE</title>
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

<!-- resp-nav -->


    <header class="container d-flex justify-content-between align-items-center">
      <div class="logo d-flex justify-content-between align-items-center ">
        <img src="./Assets/images/ieee-logo2.png" alt="" />
      </div>
      <div class="  d-flex justify-content-between align-items-center"></div>
      <div class="navlinks d-flex justify-content-between align-items-center">
        <div class="navlink"><a href="./landing-user.html">Home</a></div>
        <div class="navlink"><a href="#Chapters">Chapters</a></div>
        <div class="navlink"><a href="./display.php">Aprove users</a></div>
        <div class="navlink"><a href="./mom.php">M.O.M</a></div>
        <div class="navlink"><a href="logout.php">Logout</a></div>
      </div>
    
        <!-- <div class="dropdown z">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown button
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="#">CS</a></li>
            <li><a class="dropdown-item" href="#">Ras</a></li>
            <li><a class="dropdown-item" href="#">Ais</a></li>
          </ul>
        </div> -->
        
      </div>
      <!-- <div class="hamb">
        <div class="line l1"></div>
        <div class="line l2"></div>
        <div class="line l3"></div>
    </div> -->
    </header>
    
    <section class="home">
      
      <div
        class="container introduction d-flex justify-content-around align-items-center"
      >
        <div class="video-container" data-aos="fade-up">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/s8T48M8js6k" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="text-container" data-aos="fade-up">
          <h1>Institute of Electrical and Electronic Engineers</h1>
          <p>
            L’Institute of Electrical and Electronics Engineers ou IEEE, en français l'« Institut des ingénieurs électriciens et électroniciens », est une association professionnelle. L’IEEE compte plus de 400 000 membres et possède différentes branches dans plusieurs parties du monde1. L’IEEE est constituée d’ingénieurs électriciens, d’informaticiens, de professionnels du domaine des télécommunications, etc. L’organisation a pour but de promouvoir la connaissance dans le domaine de l’ingénierie électrotechnique, y compris électronique. 

          </p>
        </div>
      </div>
    </section>
    <!-- chapters -->
      <div class="chapters-title" id="Chapters">
        <br>
        <br>
        <br>
        <h1>Chapters</h1>
      </div>
    <section class="chapters-section container d-flex justify-content-between align-items-center">
      <div class="card card-1"data-aos="fade-right" style="width: 18rem;">
        <img src="./Assets/images/ias.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">IAS Chapter</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="./ias-land-page.html" class="btn btn-cards-design">More</a>
        </div>
      </div>
      <div class="card card-1" data-aos="fade-up" style="width: 18rem;">
        <img src="./Assets/images/cs1$.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">CS Chapter</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="./cs-land-page.html" class="btn btn-cards-design">More</a>
        </div>
      </div>
      <div class="card card-1" data-aos="fade-left" style="width: 18rem;">
        <img src="./Assets/images/ras.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">RAS Chapter</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="./ras-land-page.html" class="btn btn-cards-design">More</a>
        </div>
      </div>
    </section>
<!-- footer -->
    <footer class="site-footer" id="footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <!-- <div class="mapouter">
              <div class="gmap_canvas">
                <iframe width="800" height="500" id="gmap_canvas"
                 src="https://maps.google.com/maps?q=iset%20bizerte&t=&z=13&ie=UTF8&iwloc=&output=embed"
                  frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                  <a href="https://yt2.org/it/youtube-to-mp3-ALeKk00qEW0sxByTDSpzaRvl8WxdMAeMytQ1611842368056QMMlSYKLwAsWUsAfLipqwCA2ahUKEwiikKDe5L7uAhVFCuwKHUuFBoYQ8tMDegUAQCSAQCYAQCqAQdnd3Mtd2l6"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div> -->
          </div>
          <div class="col-sm-12 col-md-6">
            <form action="">
              <div id="formWrapper">
      
                <div id="form">
                <div class="register">
                  <h1>Contact</h1>
                </div>
              
                <div class="form-item">
                  <p class="formLabel">Email</p>
                  <input type="email" name="Email" id="Email" class="form-style" autocomplete="off"/>
                </div>
                <div class="form-item">
                  <Subject class="formLabel">Subject</p>
                  <input type="text" name="Subject" id="Subject" class="form-style" autocomplete="off"/>
                </div>
                
                    <div class="form-item">
                      <p class="formLabel">Message</p>
                      <input type="text" name="email" id="email" class="form-style" autocomplete="off"/>
                    </div>
                    
                    <div class="form-item">   
                    <p class="pull-left"><a href="#"><small></small></a></p>
                    <input type="submit" class="login pull-right btn btn-contact-design" value="Send">
                    <div class="clear-fix"></div>
                    </div>
                </div>
                </div>
            </form>
          </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2021 All Rights Reserved by 
         <a href="#">IEEE</a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fab fa-instagram"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fab fa-youtube"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="./roll-text.js"></script>
    <script src="./js/form-design.js"></script>
  </body>
</html>
