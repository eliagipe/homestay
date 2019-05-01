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

<?php
  $file = basename($_SERVER['PHP_SELF']);
  $page = str_replace(".php", "", $file);
?>

</head>

<body class="<?php echo $page ?>">
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