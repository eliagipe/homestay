<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald|PT+Sans" rel="stylesheet">

  <meta name="theme-color" content="#fafafa">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css" />

</head>

<body>
  <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <!-- Add your site or application content here -->

  <header class= "bar">
    <div class= "hero">  
      <div class="conteiner clearfix"> <!--This is to center what we are going to write-->
        <div class="welcome">
          <a href="index.php"><img src="img/HomeStay logo.png" alt="Logo"></a>
        </div>

        <div class="menu-movil">
          <span></span>
          <span></span>
          <span></span>
        </div>

        <nav class="principal-navegation"> <!--this class is made so then this icons does not mix with others-->
          <?php 
            session_start();
            if($_SESSION['type'] == null) {
              echo "<a href='signin.php'>Sign In</a>";
            } else {
              echo "<a href='logout.php'>Sign Out</a>";
            }
          ?>

          <!-- TODO falta versió estudiants i famílies -->
          <?php 
              session_start();
              if($_SESSION["type"] == 'F') {
              echo "<a href='profile.php'>My profile</a>";
              echo "<a href='search.php'>Search match</a>";
              echo "<a href='myfavorits.php'>Favorites</a>";
          } ?>
          <a href="aboutus.php">About us</a>
          <a href="faq.php">FAQ</a>
        </nav>
      </div><!--.conteneiner-->
  </div><!--.bar-->
</header>

<section class="section conteiner">
    <h2>About us</h2>
<div class ="About">   
     
<br>We are helping danish families and young international students  to find each other since 2019.</br>

<br>We administer this website from the Computer Science department from Aalborg University</br>
<br> which is located in the main campus close to the new University Hospital. </br> <br>
<br> There are several ways to come in contact with us:</br>
<br>If you have any questions you are welcome to come visit us in the Computer Science department.</br>
<br> you can alsp call us or write us an email. </br>

<div class ="about">
Phone number:</div>
<br>+45 22 34 34 00 34</br>
<div class="about">E-mail:</div>
<br>admin@homeStay.dk</br>
<div class="about">Address:</div>
<br>Selma Lagerløfs Vej 300, 9220 Aalborg</br>
</div> 
</section>
<div id="map" class="map"> </div>



<footer class="site-footer">
  <div class="conteiner clearfix">
    <div class="footer-informacion">
<h3>About <span>  HomeStay</span></h3> <!--pa que el gdl este en un color y el Sobre en otro colorsito-->
   <p>The best website to help match exchange students from AAU with host families.</p>
</div>
    <div class="last-tewts">
        <h3>Our last <span> tweets</span></h3>
        <ul>
          <li>Yet another satisfied student with our webpage!</li>
            <li>Remember that our Homestay webpage is 100% FREE!</li>
                <li>120 students & 80 families have used our website so far and 89% is still in contact!</li>
          </ul>
    </div>
    <div class="menu">
        <h3>Social <span> networks:</span></h3>
        <nav class= "social-networks">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter-square"></i></a>
            <a href="#"><i class="fab fa-pinterest"></i></a>
            <a href="#"><i class="fab fa-youtube-square"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            </nav>

    </div>
  </div>
  <p class="copyright">
    All rights reserved HomeStay 2019.
  </p>
</footer>



 <!--Here finishHTML HOME STAY-->
  <script src="js/vendor/modernizr-3.7.1.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set','transport','beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>
