<?php session_start();

  require_once('connectiondb.php');

  $RegisterId = $_SESSION["RegisterId"];

  $query = " SELECT * FROM account_favs WHERE registeredid = $RegisterId ";
  $favorites = mysqli_query($db, $query);
  //$rows = mysqli_num_rows($result);

?>

<?php include_once 'includes/templates/header.php'; ?>

<section class="section conteiner">
  <h2>My favorites</h2>

  

  <?php while ($favorite = $favorites->fetch_object()) { 
    

    $query2 = " SELECT * FROM account_register WHERE RegisterId = $favorite->favid ";
    $result2 = mysqli_query($db, $query2);
    $fav_account = $result2->fetch_object();
    

    //student
    if ($_SESSION["type"] == 'F' ) {
      $query3 = " SELECT * FROM  account_register
                 INNER JOIN student 
                 ON account_register.RegisterId = student.RegisterIdS
                 WHERE account_register.RegisterId = $favorite->favid ";
      $result3 = mysqli_query($db, $query3);
      $student = $result3->fetch_object();
      
  ?>

      <div class="profiles conteiner clearfix">
        <div class="profile">      
          <blockquote class="search-result grid-container">
            <div class="grid-item item1">
            <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($student->StudentPhoto).'"/>';?>
              <p class="favorite">Marked as favorite <a href="NotFavorite.php?isStudent=true&fav=<?php echo $favorite->favid ?>"title="unsave profile from your favorites"><i class="fas fa-heart"></i></a> </p>
            </div>

            <div class="grid-item item2">
              <p class="name"><?php echo $fav_account->FirstName . " " . $fav_account->LastName; ?></p>
              <p class="info"><span>Nationality:</span> <?php echo $student->Nationality; ?></p>
              <p class="info"><span>Age:</span> <?php echo $student->Age; ?> years old</p>
              <p class="info"><span>From:</span> <?php echo $student->AvailableFrom; ?></p>
              <p class="info"><span>To:</span> <?php echo $student->AvailableTo; ?></p>
            </div>

            <div class="item3">
              <a href="seeProfileS.php?student=<?php echo $student->RegisterIdS ?>" class="long-button hollow">See profile</a>
            </div>
          </blockquote>
        </div>
      </div>

  <?php }
    //family
    if ($_SESSION["type"] == 'S' ) {
      $query4 = " SELECT * 
                , (SELECT AVG(rating.Rating)  
                  FROM rating
                  WHERE RegisterIdF = family.RegisterIdF
                  GROUP BY RegisterIdF)
                  AS rating
                  FROM  account_register
                 INNER JOIN family
                 ON account_register.RegisterId = family.RegisterIdF
                 WHERE account_register.RegisterId = $favorite->favid ";
      $result4 = mysqli_query($db, $query4);
      $family = $result4->fetch_object();
  ?>

      <div class="profiles conteiner clearfix">
        <div class="profile">      
          <blockquote class="search-result grid-container">
          
            <div class="grid-item item1">
              <p class="rating">Rating score: 
                <?php if($family->rating >= 1): ?>
                    <i class="fas fa-star"></i>
                <?php else : ?>
                    <i class="far fa-star"></i>
                <?php endif; ?>
                <?php if($family->rating >= 2): ?>
                    <i class="fas fa-star"></i>
                <?php else : ?>
                    <i class="far fa-star"></i>
                <?php endif; ?>
                <?php if($family->rating >= 3): ?>
                    <i class="fas fa-star"></i>
                <?php else : ?>
                    <i class="far fa-star"></i>
                <?php endif; ?>
                <?php if($family->rating >= 4): ?>
                    <i class="fas fa-star"></i>
                <?php else : ?>
                    <i class="far fa-star"></i>
                <?php endif; ?>
                <?php if($family->rating >= 5): ?>
                    <i class="fas fa-star"></i>
                <?php else : ?>
                    <i class="far fa-star"></i>
                <?php endif; ?>
              </p>
              <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($family->FamilyPhoto).'"/>';?>
              <p class="favorite">Marked as favorite <a href="NotFavorite.php?isStudent=false&fav=<?php echo $favorite->favid ?>
              "title="unsave profile from your favorites"><i class="fas fa-heart"></i></a> </p>
            </div>
  
            <div class="grid-item item2">
              <p class="name"><?php echo "Family " . $fav_account->LastName; ?></p>
              <p class="info"><span>Distance:</span> <?php echo $family->Distance; ?></p>
              <p class="info"><span>From:</span> <?php echo $family->AvailableFrom; ?></p>
              <p class="info"><span>To:</span> <?php echo $family->AvailableTo; ?></p>
              <p class="info"><span>Meals included:</span>
                <?php if($family->Meals == 0) {
                  echo "No";
                } elseif($family->Meals == 1) {
                  echo "Yes";
                } ?>
              </p>
            </div>

            <div class="item3">
              <a href="seeProfileF.php?family=<?php echo $family->RegisterIdF ?>" class="long-button hollow">See profile</a>
            </div>
          </blockquote>
        </div>
      </div>
    <?php } ?> 
<?php } ?>
</section>

<?php include_once 'includes/templates/footer.php'; ?>