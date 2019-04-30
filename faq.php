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
</head>

<?php 
  $file = basename($_SERVER['PHP_SELF']);
  $page = str_replace(".php", "", $file);
?>

<body class="<?php echo $page; ?>">
  <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <!-- Add your site or application content here -->

  <header class= "bar">
    <div class= "hero">  
        <div class="conteiner clearfix"> <!--This is to center what we are going to write-->
          <div class="welcome">
            <a href="index.html"><img src="img/HomeStay logo.png" alt="Logo"></a>
          </div>

          <div class="menu-movil">
            <span></span>
            <span></span>
            <span></span>
          </div>

          <nav class="principal-navegation"> <!--this class is made so then this icons does not mix with others-->
            <a href="signin.php">Sign In</a>
            <a href="profile.php">My profile</a>
            <a href="search.php">Search match</a>
            <a href="myfavorits.php">Favorites</a>
            <a href="aboutus.php">About us</a>
            <a href="faq.php">FAQ</a>
          </nav>
        </div><!--.conteneiner-->
    </div><!--.bar-->
  </header>

<section class="section conteiner">
  <h2>Frequently Asked Questions</h2>
  <div class="question">
  <h4> 1.HOW TO FIND A MATCH?</h4>
  <p class="faq">After following 11 simple steps you will be on your way to find a match! </p>
  <p class="faq"><span>Step 1</span>- Register with your email +  password and login to the system</p>
  <p class="faq"><span>Step 2</span>- Create a profile by filling information about yourself. (If you are a student, uploading an acceptance letter is a requirement, otherwise your profile is going to be deleted after one week. You can upload a criminal record if available as well.)</p>
  <p class="faq"><span>Step 3</span>- You can always edit your information when you are inside your profile.</p>
  <p class="faq"><span>Step 4</span>- Search for match according to your preferences</p>
  <p class="faq"><span>Step 5</span>- Visit the profile you are interested in and want to match with</p>
  <p class="faq"><span>Step 6</span>-  Contact the profile by their provided contact information.* </p>
  <p class="faq"><span>Step 7</span>- Once you have made contact with your match, we recommend to download an agreement template available in the menu.</p>
  <p class="faq"><span>Step 8</span>- Request agreement, accept it or cancel it according to your choice.**</p>
  <p class="faq"><span>Step 9</span>- Find information about all the steps you need to follow before making an agreement.</p>
  <p class="faq"><span>Step 1</span> - Log out.</p>
  <p class="faq"><span>Step 1</span>  -Rate your family after your stay </p>
  
  
  <h4>Important things to consider:</h4>
  <p class="faq">*We recommend you to talk with your match before making an agreement at least once via email or phone. 
  <p class="faq">**Your profile is going to be inactive once you accepted an agreement until the agreement is completed or cancelled. 
  </p>
</div>
<div class="question">
  <h4> 2. IS IT FOR FREE?</h4>
  <p class="faq"> Yes! All our services are for free, however, in order to find a match, you MUST have a profile.</p>
</div>
<div class="question">
  <h4> 3. WHO CAN REGISTER AND CREATE A PROFILE IN HOMESTAY?</h4>
  <p class="faq">Currently, this service is only directed to prospect AAU exchange students only. Anyone can create a family profile.<p>
  </div>
    
</section>

<footer class="site-footer">
  <div class="conteiner clearfix">
    <div class="footer-informacion">
      <h3>About <span>  HomeStay</span></h3> <!--so that about is in one colour and homestay in another -->
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
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set','transport','beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>
