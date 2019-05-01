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
            if ($_SESSION["type"] == null) {
              echo "<a href='signin.php'>Sign In</a>";
            } else {
              echo "<a href='logout.php'>Sign Out</a>";
            }
          ?>

          <!-- TODO falta versió estudiants i famílies -->
          <?php if($_SESSION["type"] = 'F') {
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

<?php include_once 'includes/templates/footer.php'; ?>