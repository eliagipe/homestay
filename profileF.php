<?php include_once 'includes/templates/header.php'; ?>

<script>

  function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#image')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
            };

         //   reader.readAsDataURL(input.files[0]);
        }
    }
</script>

<section class="conteiner section private-information">
    <h2>My Profile - Family</h2>
    <h3> Add more information about your accomodation! </h3>
    <div class="place">

      <form enctype="multipart/form-data" id="register" class="register" action="validatefamilyprofile.php"method="post">
        <div id="user-data" class="register box clearix">
          <div class="place"> 
            <label class="header">Profile Photo:</label> <!--needs database, php-->
            <input id="image" type="file" name="profile_photo" placeholder="Photo" required="" capture>
          </div>
   
          <label for="meals">Meals *</label>
          <p> <input type="radio" name="meals" value="1" required> I will provide meals for the student.<br /></p>
          <p> <input type="radio" name="meals" value="0" required> I cannot provide meals for the student.<br /></p>
              
          <label for="priceforstay">Price for month *</label>
          <input type="number" name="priceforstay" value="priceforstay" required> DKK. <br />

          <label for="distancetouni"> Distance to Aalborg Main Campus *</label><!--there are many campuses around aalborg, i just chose the one we go to xD-->
          <input type="number" id="distancetouni" name="distancetouni" placeholder="KM" rquired>

        
          <label for="duration">The accomodation is available between these dates: <br> 
          <i class="far fa-calendar-check"></i> From: *</label>
          <input type="date" name="starting-date" placeholder="dd/mm/yy" required>
          <label for="duration"><i class="far fa-calendar-check"></i> To: *</label>
          <input type="date" name="ending-date" placeholder="dd/mm/yy" required>

           
           
        <label for="language"> Language *</label><!--it can be changed to a text if you want-->
        <select name="language" required> <!--To add more languages, its done with JS-->
          <option value="select">-- Select one --</option>
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

        <label for="facilities">Facilities available</label> 

        <label for= "privatebathroom">Private Bathroom * </label>
        <input type="radio" name="privatebathroom" value="1" required>YES<br>
        <input type="radio" name="privatebathroom" value="0" required>NO<br>

        <label for= "sharedbathroom">Share Bathroom * </label>
        <input type="radio" name="sharedbathroom" value="1" required>YES<br>
        <input type="radio" name="sharedbathroom" value="0" required>NO<br>

        <label for= "washingmachine">Washing Machine *</label>
        <input type="radio" name="washingmachine" value="1" required> YES<br>
        <input type="radio" name="washingmachine" value="0" required> NO<br>


        <label for= "wifi">WiFi *</label>
        <input type="radio" name="wifi" value="1" required>YES<br>
        <input type="radio" name="wifi" value="0" required>NO<br>


        <label for= "busstop">Bus Stop Nearby *</label>
        <input type="radio" name="busstop" value="1" required>YES<br>
        <input type="radio" name="busstop" value="0" required>NO<br>


        <label for= "singlebed">Single Bed *</label>
        <input type="radio" name="singlebed" value="1" required>YES<br>
        <input type="radio" name="singlebed" value="0" required>NO<br>

        <label for= "doublebed">Double Bed *</label>
        <input type="radio" name="doublebed" value="1" rquired>YES<br>
        <input type="radio" name="doublebed" value="0" required>NO<br>

        <label for= "bike">Bicycle available *</label>
        <input type="radio" name= "bike" value="1" required>YES<br>
        <input type="radio" name= "bike" value="0" required>NO<br>

    

        <div class="places">
          <p><h4>Having a criminal record makes it a lot easier to find a match! *</h4></p>
          <p> <input type="radio" name="record" value="0" required> I don't have a criminal record<br></p>
          <p> <input type="radio" name="record" value="1" required> I can provide a criminal record<br></p>
        </div>
      
        
        </div>
      
    </div>
    </div>

    <h3>Add  information about your preferences</h3>
    
      <div class="place">
        <p> <label for="about-me">Add a profile text that describes you! Having a good descriptive profile will help you find your student match much quicker! *</label><br/></p>
        <textarea name="about-me" rows="10" cols="70" id="about-me" required></textarea>
        
      </div>
      <div class="item3"><p><input type="submit" class="button hollow" name="submit" value="save"></p></div> 
    </form>
   
</section>

<?php include_once 'includes/templates/footer.php'; ?>