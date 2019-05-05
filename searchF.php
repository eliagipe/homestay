<?php
  $db = new mysqli('localhost', 'root', 'root', 'homestay');
      
  $distance = $_POST['distance'];
  $start = $_POST['starting-date'];
  $end = $_POST['ending-date'];
  $meals = $_POST['meals'];
  $price = $_POST['price'];

  $query = " SELECT * 
    , (SELECT AVG(rating.Rating) 
            FROM rating
            WHERE RegisterIdF = family.RegisterIdF
            GROUP BY RegisterIdF)
            AS rating
            FROM family 
            INNER JOIN account_register
            ON family.RegisterIdF = account_register.RegisterId ";

    $query = $query . " WHERE ('$start' >= AvailableFrom AND '$end' <= AvailableTo) ";

  if(isset($distance) && $distance == "0km-3km") {
      $query = $query . " AND (Distance <=  3) ";
  } elseif(isset($distance) && $distance == "3km-6km") {
      $query = $query . " AND (Distance BETWEEN 4 AND 6) ";
  } elseif(isset($distance) && $distance == "6km-15km") {
      $query = $query . " AND (Distance BETWEEN 6 AND 15) ";
  } elseif(isset($distance) && $distance == "15km-20km") {
      $query = $query . " AND (Distance BETWEEN 15 AND 20) ";
  } elseif(isset($distance) && $distance == "20km") {
      $query = $query . " AND (Distance >=  20) ";
  } elseif(isset($distance) && $distance == "all") {
      $query = $query . " AND (Distance >  0) ";
  }

  if(isset($meals) && $meals == "yes") {
      $query = $query . " AND (Breakfast = 1 OR Lunch = 1 OR Dinner = 1) ";
  } elseif(isset($meals) && $meals == "no") {
      $query = $query . " AND (Breakfast = 0 AND Lunch = 0 AND Dinner = 0) ";
  } elseif(isset($meals) && $meals == "all") {
      $query = $query . " AND (Breakfast = 1 AND Lunch = 1 AND Dinner = 1) ";
  }

  if(isset($price) && $price == "1500") {
      $query = $query . " AND (Price <= 1500) ";
  } elseif(isset($price) && $price == "1500-2500") {
      $query = $query . " AND (Price BETWEEN 1500 AND 2500) ";
  } elseif(isset($price) && $price == "2500-3000") {
      $query = $query . " AND (Price BETWEEN 2500 AND 3000) ";
  } elseif(isset($price) && $price == "3000") {
      $query = $query . " AND (Price >= 3000) ";
  }

  $result = mysqli_query($db, $query);
  $rows = mysqli_num_rows($result);

?>

<?php include_once 'includes/templates/header.php'; ?>

<section class="conteiner section">
  <h2>Start looking for a family!</h2>
  <form id="search" class="search" action="searchF.php" method="post">
    <div class="search-grid">
      <div class="searchS1">
        <label for="starting-date"><i class="far fa-calendar-check"></i> From:</label>
        <input id="starting-date" type="date" name="starting-date" placeholder="yy/mm/dd" required>
      </div>

      <div class="search2">
        <label for="distance"><i class="fas fa-location-arrow"></i> Distance</label>
          <select name="distance" id="distance">
            <option value="select">-- Select one --</option>
            <option value="0km-3km">0km-3km from Aalborg Univesity's main campus</option>
            <option value="3km-6km">3km-6km from Aalborg Univesity's main campus</option>
            <option value="6km-15km">6km-15km from Aalborg Univesity's main campus</option>
            <option value="15km-20km">15km-20km from Aalborg Univesity's main campus</option>
            <option value="20km">More than 20km from Aalborg Univesity's main campus</option>
            <option value="all">All</option>
          </select>
      </div>

      <div class="search3">
        <label for="meals"><i class="fas fa-utensils"></i> Includes meals</label>
          <select name="meals" id="meals">
            <option value="select">-- Select one --</option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
            <option value="all">All</option>
          </select>
      </div>

      <div class="search4">
        <label for="ending-date"><i class="far fa-calendar-check"></i> To:</label>
        <input type="date" name="ending-date" id="ending-date" placeholder="yy/mm/dd" required>
      </div>
     
      <div class="search5">
        <label for="price"><i class="fas fa-dollar-sign"></i> Price:</label> 
        <select name="price" id="price">
          <option value="">-- Select one --</option>
          <option value="1500">Less than 1500 a month</option>
          <option value="1500-2500">1500-2500 a month</option>
          <option value="2500-3000">2500-3000 a month</option>
          <option value="3000">More than 3000 a month</option>
        </select>
      </div>

      <div class="search6">
        <input type="submit" class="button hollow" value="Search">
      </div>
    </div>
  </form>
</section>

<section class="conteiner section">
  <?php if(!isset($rows)) { ?>
    <h3>Select at least one option from the searching bar.</h3>
  <?php } ?>

  <?php if ($rows > 0) { ?>
    <h3>Families that match your searching result:</h3>
  <?php } ?>

  <?php if (isset($rows) && $rows == 0) { ?>
    <h3>There aren't any families that match your search.</h3>
  <?php } ?>

    <div class="profiles conteiner clearfix">
      <div class="profile">

        <?php while($family = $result->fetch_object()) { ?>
          <blockquote class="search-result grid-container">

            <div class="grid-item item1">
            <p class="rating">Rating score: 
                <?php if($user->rating >= 1): ?>
                    <i class="fas fa-star"></i>
                <?php else : ?>
                    <i class="far fa-star"></i>
                <?php endif; ?>
                <?php if($user->rating >= 2): ?>
                    <i class="fas fa-star"></i>
                <?php else : ?>
                    <i class="far fa-star"></i>
                <?php endif; ?>
                <?php if($user->rating >= 3): ?>
                    <i class="fas fa-star"></i>
                <?php else : ?>
                    <i class="far fa-star"></i>
                <?php endif; ?>
                <?php if($user->rating >= 4): ?>
                    <i class="fas fa-star"></i>
                <?php else : ?>
                    <i class="far fa-star"></i>
                <?php endif; ?>
                <?php if($user->rating >= 5): ?>
                    <i class="fas fa-star"></i>
                <?php else : ?>
                    <i class="far fa-star"></i>
                <?php endif; ?>
              </p>
              <img src="img/Loui 23.jpg" alt="family">
              <p class="favorite">Mark as favorite: <a href="#"><i class="far fa-heart"></i></a> </p>
            </div>

            <div class="grid-item item2">
              <p class="name">Family <?php echo $family->LastName; ?></p>
              <p class="info"><span>From:</span> <?php echo $family->AvailableFrom; ?></p>
              <p class="info"><span>To:</span> <?php echo $family->AvailableTo; ?></p>
              <p class="info"><span>Price/month:</span> <?php echo $family->Price; ?>kr</p>
            </div>

            <div class="item3">
              <a href="seeProfileF.php" class="long-button hollow">See profile</a>
            </div>

          </blockquote>
        <?php } ?>

      </div>
  </div>
</section>

<?php include_once 'includes/templates/footer.php'; ?>