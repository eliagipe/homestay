<?php session_start();

  require_once('connectiondb.php');

  $RegisterId = $_SESSION["RegisterId"];
  $isStudent = $_GET['isStudent'];
  $isStudent == 'true';
  $isStudent == true;

  $query = " SELECT * FROM account_favs WHERE registeredid = $RegisterId ";
  $result = mysqli_query($db, $query);
  $rows = mysqli_num_rows($result);

?>

<?php include_once 'includes/templates/header.php'; ?>

<section class="section conteiner">
  <h2>My favorites</h2>

  <?php while ($rows = $result->fetch_object()) { 

    $query2 = " SELECT * FROM account_register WHERE RegisterId IN( $rows->favid) ";
    $result2 = mysqli_query($db, $query2);
    $rows2 = mysqli_fetch_array($result2);

    //student
    if ($_SESSION["type"] == 'F') {
      $query3 = "SELECT * FROM  student stu, account_favs fav 
                 WHERE fav.registeredid= $RegisterId 
                 AND fav.favid=stu.RegisterIdS
                ";
      $result3 = mysqli_query($db, $query3);
      $rows3 = mysqli_fetch_array($result3);
  ?>

      <div class="profiles conteiner clearfix">
        <div class="profile">      
          <blockquote class="search-result grid-container">
            <div class="grid-item item1">
              <img src="img/Loui 23.jpg" alt="student">
              <p class="favorite">Marked as favorite <a href="NotFavorite.php?isStudent=<?php echo $isStudent ?>&fav=<?php echo $rows->favid ?>"title="unsave profile from your favorites"><i class="fas fa-heart"></i></a> </p>
            </div>

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
          </blockquote>
        </div>
      </div>

  <?php }
    //family
    if ($_SESSION["type"] == 'S' ) {
      $query4 = "SELECT * FROM family fam, account_favs fav 
                WHERE fav.registeredid= $RegisterId
                AND fav.favid=fam.RegisterIdF
                ";
      $result4 = mysqli_query($db, $query4);
      $rows4 = mysqli_fetch_array($result4);
  ?>

      <div class="profiles conteiner clearfix">
        <div class="profile">      
          <blockquote class="search-result grid-container">
            <div class="grid-item item1">
              <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $student->StudentPhoto).'"/>';//que variable seria??>
              <p class="favorite">Marked as favorite <a href="NotFavorite.php?isStudent=<?php echo $isStudent ?>&fav=<?php echo $rows->favid ?>"title="unsave profile from your favorites"><i class="fas fa-heart"></i></a> </p>
            </div>
  
            <div class="grid-item item2">
              <p class="name"><?php echo $rows2["FirstName"] . " " . $rows2["LastName"]; ?></p>
              <p class="info"><span>Distance:</span> <?php echo $rows4["Distance"]; ?></p>
              <p class="info"><span>Meals included:</span>
                <?php if($rows4["Meals"] == 0) {
                  echo "No";
                } elseif($rows4["Meals"] == 1) {
                  echo "Yes";
                } ?>
              </p>
              <p class="info"><span>From:</span> <?php echo $rows4["AvailableFrom"]; ?></p>
              <p class="info"><span>To:</span> <?php echo $rows4["AvailableTo"]; ?></p>
            </div>

            <div class="item3">
              <a href="seeProfileF.php?family=<?php echo $rows4["RegisterIdF"] ?>" class="long-button hollow">See profile</a>
            </div>
          </blockquote>
        </div>
      </div>
    <?php } ?> 
<?php } ?>
</section>

<?php include_once 'includes/templates/footer.php'; ?>