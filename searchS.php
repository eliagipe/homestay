<?php include_once 'includes/templates/header.php'; ?>

<section class="conteiner section">
  <h2>Start looking for a family!</h2>
  <form id="search" class="search" action="filterF.php" method="post">
    <div class="search-grid">
      <div class="searchS1">
        <label for="starting-date"><i class="far fa-calendar-check"></i> From:</label>
        <input id="starting-date" type="date" name="starting-date" placeholder="dd/mm/yy" required>
      </div>

      <div class="search2">
        <label for="distance"><i class="fas fa-location-arrow"></i> Distance</label>
          <select name="distance" id="distance">
            <option value="select">-- Select one --</option>
            <option value="0km-3km">0km-3km from Aalborg Univesity's main campus</option>
            <option value="4km-6km">3km-6km from Aalborg Univesity's main campus</option>
            <option value="7km-15km">6km-15km from Aalborg Univesity's main campus</option>
            <option value="16km-19km">15km-20km from Aalborg Univesity's main campus</option>
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
        <input type="date" name="ending-date" id="ending-date" placeholder="dd/mm/yy" required>
      </div>
     
      <div class="search5">
        <label for="price"><i class="fas fa-dollar-sign"></i> Price:</label> 
        <select name="price" id="price">
          <option value="">-- Select one --</option>
          <option value="1500">Less than 1500 a month</option>
          <option value="1600-2500">1500-2500 a month</option>
          <option value="2600-3000">2500-3000 a month</option>
          <option value="3000">More than 3000 a month</option>
        </select>
      </div>

      <div class="search6">
        <input type="submit" class="button hollow" value="Search" href="search.html">
      </div>
    </div>
  </form>
</section>

<section class="conteiner section">
  <h3>Families that match your searching result:</h3>
    <div class="profiles conteiner clearfix">
      <div class="profile">
        <blockquote class="search-result grid-container">

          <div class="grid-item item1">
            <p class="rating">Rating score: <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></p>
            <img src="img/Loui 23.jpg" alt="student">
            <p class="favorite">Make favorite: <a href="#"><i class="far fa-heart"></i></a> </p>
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
              <p class="favorite">Make favorite: <a href="#"><i class="far fa-heart"></i></a> </p>
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
                <p class="favorite">Make favorite: <a href="#"><i class="far fa-heart"></i></a> </p>
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
                  <p class="favorite">Make favorite: <a href="#"><i class="far fa-heart"></i></a> </p>
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