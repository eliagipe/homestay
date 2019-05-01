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
    <h2>My favorites</h2>

      <div class="profiles conteiner clearfix">
        <div class="profile">
          <blockquote class="search-result grid-container">
  
            <div class="grid-item item1">
              <p class="rating">Rating score: <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></p>
              <img src="img/Loui 23.jpg" alt="student">
              <p class="favorite">Make favorite: <a href="#"><i class="fas fa-heart"></i></a> </p>
            </div>
  
            <div class="grid-item item2">
              <p class="name">Mathias Heinekein</p>
              <p class="info"><span>Nationality:</span> German/Netherlands</p>
              <p class="info"><span>Age:</span> 22 years old</p>
              <p class="info"><span>Duration:</span> 1 year</p>
              <p class="info"><span>Criminal record:</span> Clean record</p>
            </div>
  
            <div class="item3">
              <a href="#" class="long-button hollow">See profile</a>
            </div>
  
          </blockquote>
  
          <blockquote class="search-result grid-container">
              <div class="grid-item item1">
                <p class="rating">Rating score: <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></p>
                <img src="img/Loui 23.jpg" alt="student">
                <p class="favorite">Make favorite: <a href="#"><i class="fas fa-heart"></i></a> </p>
              </div>
              <div class="grid-item item2">
                <p class="name">Mathias Heinekein</p>
                <p class="info"><span>Nationality:</span> German/Netherlands</p>
                <p class="info"><span>Age:</span> 22 years old</p>
                <p class="info"><span>Duration:</span> 1 year</p>
                <p class="info"><span>Criminal record:</span> Clean record</p>
              </div>
              <div class="item3">
                <a href="#" class="long-button hollow">See profile</a>
              </div>
            </blockquote>
            <blockquote class="search-result grid-container">
                <div class="grid-item item1">
                  <p class="rating">Rating score: <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></p>
                  <img src="img/Loui 23.jpg" alt="student">
                  <p class="favorite">Make favorite: <a href="#"><i class="fas fa-heart"></i></a> </p>
                </div>
                <div class="grid-item item2">
                  <p class="name">Mathias Heinekein</p>
                  <p class="info"><span>Nationality:</span> German/Netherlands</p>
                  <p class="info"><span>Age:</span> 22 years old</p>
                  <p class="info"><span>Duration:</span> 1 year</p>
                  <p class="info"><span>Criminal record:</span> Clean record</p>
                </div>
                <div class="item3">
                  <a href="#" class="long-button hollow">See profile</a>
                </div>
              </blockquote>
              <blockquote class="search-result grid-container">
                  <div class="grid-item item1">
                    <p class="rating">Rating score: <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></p>
                    <img src="img/Loui 23.jpg" alt="student">
                    <p class="favorite">Make favorite: <a href="#"><i class="fas fa-heart"></i></a> </p>
                  </div>
                  <div class="grid-item item2">
                    <p class="name">Mathias Heinekein</p>
                    <p class="info"><span>Nationality:</span> German/Netherlands</p>
                    <p class="info"><span>Age:</span> 22 years old</p>
                    <p class="info"><span>Duration:</span> 1 year</p>
                    <p class="info"><span>Criminal record:</span> Clean record</p>
                  </div>
                  <div class="item3">
                    <a href="#" class="long-button hollow">See profile</a>
                  </div>
                </blockquote>
        </div>
    </div>
  </section>

  <?php include_once 'includes/templates/footer.php'; ?>