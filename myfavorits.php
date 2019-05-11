<?php session_start();  require_once('connectiondb.php');?>


<?php include_once 'includes/templates/header.php';
$RegisterId = $_SESSION["RegisterId"];
$isStudent=$_GET['isStudent'];
echo $isStudent=='true';
echo $isStudent==true;



$query = "SELECT * 
        FROM account_favs
        WHERE registeredid = $RegisterId
        ";

$result = mysqli_query($db, $query);
$rows = mysqli_num_rows($result);

?>

<section class="section conteiner">
    <h2>My favorites</h2>

    <div class="profiles conteiner clearfix">
      <div class="profile">
     
        <?php while($rows=$result->fetch_object()) { ?>
          <blockquote class="search-result grid-container">

            <div class="grid-item item1">
              <img src="img/Loui 23.jpg" alt="student">
              <p class="favorite">Marked as favorite <a href="NotFavorite.php?isStudent=<?php echo $isStudent?>&fav=<?php echo $rows->favid ?>"><i class="fas fa-heart"></i></a> </p>
            </div>

         <?php
        
   $query2 = "SELECT * 
        FROM account_register
        WHERE RegisterId IN( $rows->favid)
        ";

$result2 = mysqli_query($db, $query2);
$rows2 = mysqli_fetch_array($result2);



 //student
 if( $isStudent =='true') {  ?> 
  <div class="grid-item item2">
              <p class="name"><?php echo $rows2["FirstName"] . " " . $rows2["LastName"]; ?></p>
              <p class="info"><span>Nationality:</span> <?php echo $rows3["Nationality"]; ?></p>
              <p class="info"><span>Age:</span> <?php echo $rows3["Age"]; ?> years old</p>
              <p class="info"><span>From:</span> <?php echo $rows3["AvailableFrom"]; ?></p>
              <p class="info"><span>To:</span> <?php echo $rows3["AvailableTo"]; ?></p>
            </div>

            <div class="item3">
              <a href="seeProfileS.php?student=<?php echo $rows3["RegisterIdS"] ?>" class="long-button hollow">See profile</a>
            </div>

<?php } 
//family
 if( $isStudent!='true') { 
  $query4 = "SELECT * FROM family fam, account_favs fav 
  WHERE fav.registeredid= $RegisterId
  AND fav.favid=fam.RegisterIdF
";


$result4 = mysqli_query($db, $query4);
$rows4 = mysqli_fetch_array($result4);


?>

            <div class="grid-item item2">
              <p class="name"><?php echo $rows2["FirstName"] . " " . $rows2["LastName"]; ?></p>
              <p class="info"><span>Distance:</span> <?php echo $rows4["Distance"]; ?></p>
              <p class="info"><span>Meals included:</span> <?php echo $rows4["Meals"]; ?> </p>
              <p class="info"><span>From:</span> <?php echo $rows4["AvailableFrom"]; ?></p>
              <p class="info"><span>To:</span> <?php echo $rows4["AvailableTo"]; ?></p>
            </div>

            <div class="item3">
              <a href="seeProfileS.php?family=<?php echo $rows4["RegisterIdF"] ?>" class="long-button hollow">See profile</a>
            </div>
<?php } ?>


            


          </blockquote>
        <?php } ?>
     

      </div>
  </div>






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