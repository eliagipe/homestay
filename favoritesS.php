  <?php session_start();  require_once('connectiondb.php');?>


<?php include_once 'includes/templates/header.php';
$RegisterId = $_SESSION["RegisterId"];



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
              <p class="favorite">Mark as favorite: <a href="gaturu.php?fav=<?php echo $rows->registeredid ?>"><i class="far fa-heart"></i></a> </p>
            </div>

         <?php   $query2 = "SELECT * 
        FROM account_register
        WHERE RegisterId = $rows->registeredid
        ";

$result2 = mysqli_query($db, $query2);
$rows2 = mysqli_fetch_array($result2);



//echo "estoy botando este dato". $rows2["FirstName"]."<br>";

  
            $query4 = "SELECT * 
FROM family
WHERE RegisterIdF = $rows->registeredid
";

$result4 = mysqli_query($db, $query4);
$rows4 = mysqli_fetch_array($result4);

?>

            <div class="grid-item item2">
              <p class="name"><?php echo $rows2["FirstName"] . " " . $rows2["LastName"]; ?></p>
              <p class="info"><span>Price:</span> <?php echo $rows4["Price"]; ?></p>
              <p class="info"><span>Ditance:</span> <?php echo $rows4["Distance"]; ?> years old</p>
              <p class="info"><span>From:</span> <?php echo $rows4["AvailableFrom"]; ?></p>
              <p class="info"><span>To:</span> <?php echo $rows4["AvailableTo"]; ?></p>
            </div>

            <div class="item3">
              <a href="seeProfileS.php?student=<?php echo $rows3["RegisterIdS"] ?>" class="long-button hollow">See profile</a>
            </div>


            
  <?php include_once 'includes/templates/footer.php'; ?>