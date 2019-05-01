<?php include_once 'includes/templates/header.php'; ?>

<section class="conteiner section private-information">
    <h2>My Profile - Family</h2>
    <h3> Add more information about your accomodation! </h3>
    <div class="place">
      <form id="register" class="register" action="index.html"method="post">
        <div id="user-data" class="register box clearix">
          <div class="place"> 
            <label class="header">Profile Photo:</label> <!--needs database, php-->
            <input id="image" type="file" name="profile_photo" placeholder="Photo" required="" capture>
          </div>
   
        <label for="meals"> Meals</label> 
        <input type="checkbox" name="meals" value="breakfast"> Breakfast<br>
        <input type="checkbox" name="meals" value="lunch"> Lunch<br>
        <input type="checkbox" name="meals" value="dinner"> Dinner<br>
              
        <label for="priceforstay">Price for Stay</label>
        <input type="number" name="priceforstay" value="priceforstay"/> DKK. <br />
        <label for="distancetouni"> Distance to Aalborg Øst Campus</label><!--there are many campuses around aalborg, i just chose the one we go to xD-->
        <input type="number" id="distancetouni" name="distancetouni" placeholder="KM">

        <label for="durationmax">Maximum duration of stay</label>
        <select name="durationmax">
            <option value="">-- select one --</option>
            <option value="lessthansixmonths">Less than 6 Months</option>
            <option value="sixmonths">6 Months</option>
            <option value="oneyear">One Year</option>
        </select>
           
           
        <label for="language"> Language</label><!--it can be changed to a text if you want-->
        <select name="language" placeholder="Choose a Language..." > <!--To add more languages, its done with JS-->
          <option value="Afrikanns">Afrikanns</option>
          <option value="Albanian">Albanian</option>
          <option value="Arabic">Arabic</option>
          <option value="Armenian">Armenian</option>
          <option value="Basque">Basque</option>
          <option value="Bengali">Bengali</option>
          <option value="Bulgarian">Bulgarian</option>
          <option value="Catalan">Catalan</option>
          <option value="Cambodian">Cambodian</option>
          <option value="Chinese (Mandarin)">Chinese (Mandarin)</option>
          <option value="Croation">Croation</option>
          <option value="Czech">Czech</option>
          <option value="Danish">Danish</option>
          <option value="Dutch">Dutch</option>
          <option value="English">English</option>
          <option value="Estonian">Estonian</option>
          <option value="Fiji">Fiji</option>
          <option value="Finnish">Finnish</option>
          <option value="French">French</option>
          <option value="Georgian">Georgian</option>
          <option value="German">German</option>
          <option value="Greek">Greek</option>
          <option value="Gujarati">Gujarati</option>
          <option value="Hebrew">Hebrew</option>
          <option value="Hindi">Hindi</option>
          <option value="Hungarian">Hungarian</option>
          <option value="Icelandic">Icelandic</option>
          <option value="Indonesian">Indonesian</option>
          <option value="Irish">Irish</option>
          <option value="Italian">Italian</option>
          <option value="Japanese">Japanese</option>
          <option value="Javanese">Javanese</option>
          <option value="Korean">Korean</option>
          <option value="Latin">Latin</option>
          <option value="Latvian">Latvian</option>
          <option value="Lithuanian">Lithuanian</option>
          <option value="Macedonian">Macedonian</option>
          <option value="Malay">Malay</option>
          <option value="Malayalam">Malayalam</option>
          <option value="Maltese">Maltese</option>
          <option value="Maori">Maori</option>
          <option value="Marathi">Marathi</option>
          <option value="Mongolian">Mongolian</option>
          <option value="Nepali">Nepali</option>
          <option value="Norwegian">Norwegian</option>
          <option value="Persian">Persian</option>
          <option value="Polish">Polish</option>
          <option value="Portuguese">Portuguese</option>
          <option value="Punjabi">Punjabi</option>
          <option value="Quechua">Quechua</option>
          <option value="Romanian">Romanian</option>
          <option value="Russian">Russian</option>
          <option value="Samoan">Samoan</option>
          <option value="Serbian">Serbian</option>
          <option value="Slovak">Slovak</option>
          <option value="Slovenian">Slovenian</option>
          <option value="Spanish">Spanish</option>
          <option value="Swahili">Swahili</option>
          <option value="Swedish ">Swedish </option>
          <option value="Tamil">Tamil</option>
          <option value="Tatar">Tatar</option>
          <option value="Telugu">Telugu</option>
          <option value="Thai">Thai</option>
          <option value="Tibetan">Tibetan</option>
          <option value="Tonga">Tonga</option>
          <option value="Turkish">Turkish</option>
          <option value="Ukranian">Ukranian</option>
          <option value="Urdu">Urdu</option>
          <option value="Uzbek">Uzbek</option>
          <option value="Vietnamese">Vietnamese</option>
          <option value="Welsh">Welsh</option>
          <option value="Xhosa">Xhosa</option>
        </select>

        <label for="facilities"> Facilities available</label> 
        <input type="checkbox" name="facilities" value="privatebathroom"> Private Bathroom<br>
        <input type="checkbox" name="facilities" value="sharedbathroom"> Shared Bathroom<br>
        <input type="checkbox" name="facilities" value="dinner"> Washing Machine<br>
        <input type="checkbox" name="facilities" value="wifi"> WIFI<br>
        <input type="checkbox" name="facilities" value="busnear"> Bus Stop Nearby<br>
        <input type="checkbox" name="facilities" value="singlebed"> Single Bed<br>
        <input type="checkbox" name="facilities" value="doublebed"> Double Bed<br>
        <input type="checkbox" name="facilities" value="wifi"> WIFI<br>
        <input type="checkbox" name="facilities" value="dinner"> Washing Machine<br>
        <input type="checkbox" name="facilities" value="bike"> Bicycle<br>
    

        <div class="places">
          <p><h4>Upload a clean criminal record for better chances of finding a match!</h4></p> <!--needs database-->
          <p> <input type="radio" name="record" value="no " /> I don't have a criminal record<br /></p>
          <div class="input-container">
            <input type="file" id="recordfamily">
            <button class="browse-btn">Browse </button> 
            <span class="file-info">Upload your criminal record</span>
          </div>
          <p><a href="save.html" class="long-button hollow"> Upload criminal record</a></p>   
        </div>
        
        <div class="places">
          <p><h4> Here you can upload pictures of your family and your home! </h4></p> <!--needs database-->
          <p><h4>This is a great way to give your future family member a great first impression! You can add up to six pictures in total!</h4> </p>
          <div class="input-container">
            <input type="file" id="familypics">
            <button class="browse-btn">Browse</button>
            <span class="file-info"></span>
          </div>
        
          <p><a href="save.html" class="long-button hollow"> Upload your pictures </a></p>       
    
        </div>
      </form>
    </div>
</section>
<!--Infomation about preferences:-->

<section class="conteiner section preferences">
    <h3>Add  information about your preferences</h3>
    <form>
      <div class="place">
        <p> <label for="about-me">Add a profile text that describes you! Having a good descriptive profile will help you find your student match much quicker!</label><br/></p>
        <textarea name="about-me" rows="10" cols="70" id="about-me"></textarea>
      </div>
    </form>
   <div class="item3"> <p><a href="save.html" class="long-button hollow"> Save changes</a></p></div>
</section>

<?php include_once 'includes/templates/footer.php'; ?>