<?php include_once 'includes/templates/header.php'; ?>

<section class="conteiner section">
<h2>Start looking for a family!</h2>
  <form id="search" class="search" action="search.html" method="post">
    <div class="search-bar">
      <label for="location"><i class="fas fa-location-arrow"></i> Location</label>
      <select name="house-location" id="house-location">
        <option value="select">-- Select one --</option>
        <option value="0km-3km">0km-3km from Aalborg Univesity's main campus</option>
        <option value="4km-6km">4km-6km from Aalborg Univesity's main campus</option>
        <option value="7km-15km">7km-15km from Aalborg Univesity's main campus</option>
        <option value="16km-19km">7km-15km from Aalborg Univesity's main campus</option>
        <option value="20km">more than 20km from Aalborg Univesity's main campus</option>
        <option value="all">All</option>
      </select>
      <label for="duration"><i class="far fa-calendar-check"></i> From:</label>
      <input type="date" name="starting-date" placeholder="dd/mm/yy">
      <label for="duration"><i class="far fa-calendar-check"></i> To:</label>
      <input type="date" name="ending-date" placeholder="dd/mm/yy">
      
      </select>
      <input type="submit" class="button hollow" value="Search" href="search.html">
    </div>
  </form>

  <h5>Advanced search</h5>  
  <form action="adv-search" class="search-adv" action="search.html" method="post">
    <div class="adv-search">
      <label for="meals"><i class="fas fa-utensils"></i> Meals included</label>

        <input type="checkbox" name="meals" value="breakfast"> Breakfast<br>
        <input type="checkbox" name="meals" value="lunch"> Lunch<br>
        <input type="checkbox" name="meals" value="dinner"> Dinner<br>
      </select>
     
      <label for="price"><i class="fas fa-dollar-sign"></i> Price:</label> 
        <select name="price">
          <option value="">-- select one --</option>
          <option value="1500">less than 1500 a month</option>
          <option value="1600-2500">1600-2500 a month</option>
          <option value="2600-3000">2600-3000 a month</option>
          <option value="3000">more than 3000 a month</option>
                 
        </select>
      </div>
    </form>
  </div>
</section>

<section class="conteiner section">
  <h3>Students that match your searching result:</h3>
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