<?php include_once 'includes/templates/header.php'; ?>

<section class="conteiner section">
  <h2>Start looking for an exchange student to host!</h2>
  <form id="search" class="search" action="searchF.php" method="post">
    <div class="search-grid">
      <div class="search1">
        <label for="location"><i class="fas fa-location-arrow"></i> My location</label>
        <select name="location" id="location">
        <option value="select">-- Select one --</option>
          <option value="0km-3km">0km-3km from Aalborg Univesity's main campus</option>
          <option value="4km-6km">3km-6km from Aalborg Univesity's main campus</option>
          <option value="7km-15km">6km-15km from Aalborg Univesity's main campus</option>
          <option value="16km-19km">15km-20km from Aalborg Univesity's main campus</option>
          <option value="20km">More than 20km from Aalborg Univesity's main campus</option>
          <option value="all">All</option>
        </select>
      </div>

      <div class="search4">
        <label for="starting-date"><i class="far fa-calendar-check"></i> From:</label>
        <input type="date" name="starting-date" id="starting-date" placeholder="yy/mm/dd" required>
      </div>

      <div class="search7">
        <label for="ending-date"><i class="far fa-calendar-check"></i> To:</label>
        <input type="date" name="ending-date" id="ending-date" placeholder="yy/mm/dd" required>
      </div>

      <div class="search8">
        <label for="gender"><i class="fas fa-venus-mars"></i> Gender:</label>
        <select name="gender" id="gender">
          <option value="select">-- Select one --</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="all">All</option>
        </select>
      </div>

      <div class="search5">
        <label for="age"><i class="fas fa-male"></i> Age:</label>
        <select name="age" id="age">
          <option value="select">-- Select one --</option>
          <option value="18-20">18-20</option>
          <option value="20-25">20-25</option>
          <option value="all">All</option>
        </select>
      </div>
      
      <div class="search2">
        <label for="nationality"><i class="fas fa-map-marker-alt"></i> Nationality:</label> 
        <select name="nationality">
        <option value="select">-- Select one --</option>
          <option value="all">All</option>
          <option value="afghan">Afghan</option>
          <option value="albanian">Albanian</option>
          <option value="algerian">Algerian</option>
          <option value="american">American</option>
          <option value="andorran">Andorran</option>
          <option value="angolan">Angolan</option>
          <option value="antiguans">Antiguans</option>
          <option value="argentinean">Argentinean</option>
          <option value="armenian">Armenian</option>
          <option value="australian">Australian</option>
          <option value="austrian">Austrian</option>
          <option value="azerbaijani">Azerbaijani</option>
          <option value="bahamian">Bahamian</option>
          <option value="bahraini">Bahraini</option>
          <option value="bangladeshi">Bangladeshi</option>
          <option value="barbadian">Barbadian</option>
          <option value="barbudans">Barbudans</option>
          <option value="batswana">Batswana</option>
          <option value="belarusian">Belarusian</option>
          <option value="belgian">Belgian</option>
          <option value="belizean">Belizean</option>
          <option value="beninese">Beninese</option>
          <option value="bhutanese">Bhutanese</option>
          <option value="bolivian">Bolivian</option>
          <option value="bosnian">Bosnian</option>
          <option value="brazilian">Brazilian</option>
          <option value="british">British</option>
          <option value="bruneian">Bruneian</option>
          <option value="bulgarian">Bulgarian</option>
          <option value="burkinabe">Burkinabe</option>
          <option value="burmese">Burmese</option>
          <option value="burundian">Burundian</option>
          <option value="cambodian">Cambodian</option>
          <option value="cameroonian">Cameroonian</option>
          <option value="canadian">Canadian</option>
          <option value="cape verdean">Cape Verdean</option>
          <option value="central african">Central African</option>
          <option value="chadian">Chadian</option>
          <option value="chilean">Chilean</option>
          <option value="chinese">Chinese</option>
          <option value="colombian">Colombian</option>
          <option value="comoran">Comoran</option>
          <option value="congolese">Congolese</option>
          <option value="costa rican">Costa Rican</option>
          <option value="croatian">Croatian</option>
          <option value="cuban">Cuban</option>
          <option value="cypriot">Cypriot</option>
          <option value="czech">Czech</option>
          <option value="danish">Danish</option>
          <option value="djibouti">Djibouti</option>
          <option value="dominican">Dominican</option>
          <option value="dutch">Dutch</option>
          <option value="east timorese">East Timorese</option>
          <option value="ecuadorean">Ecuadorian</option>
          <option value="egyptian">Egyptian</option>
          <option value="emirian">Emirian</option>
          <option value="equatorial guinean">Equatorial Guinean</option>
          <option value="eritrean">Eritrean</option>
          <option value="estonian">Estonian</option>
          <option value="ethiopian">Ethiopian</option>
          <option value="fijian">Fijian</option>
          <option value="filipino">Filipino</option>
          <option value="finnish">Finnish</option>
          <option value="french">French</option>
          <option value="gabonese">Gabonese</option>
          <option value="gambian">Gambian</option>
          <option value="georgian">Georgian</option>
          <option value="german">German</option>
          <option value="ghanaian">Ghanaian</option>
          <option value="greek">Greek</option>
          <option value="grenadian">Grenadian</option>
          <option value="guatemalan">Guatemalan</option>
          <option value="guinea-bissauan">Guinea-Bissauan</option>
          <option value="guinean">Guinean</option>
          <option value="guyanese">Guyanese</option>
          <option value="haitian">Haitian</option>
          <option value="herzegovinian">Herzegovinian</option>
          <option value="honduran">Honduran</option>
          <option value="hungarian">Hungarian</option>
          <option value="icelander">Icelander</option>
          <option value="indian">Indian</option>
          <option value="indonesian">Indonesian</option>
          <option value="iranian">Iranian</option>
          <option value="iraqi">Iraqi</option>
          <option value="irish">Irish</option>
          <option value="israeli">Israeli</option>
          <option value="italian">Italian</option>
          <option value="ivorian">Ivorian</option>
          <option value="jamaican">Jamaican</option>
          <option value="japanese">Japanese</option>
          <option value="jordanian">Jordanian</option>
          <option value="kazakhstani">Kazakhstani</option>
          <option value="kenyan">Kenyan</option>
          <option value="kittian and nevisian">Kittian and Nevisian</option>
          <option value="kuwaiti">Kuwaiti</option>
          <option value="kyrgyz">Kyrgyz</option>
          <option value="laotian">Laotian</option>
          <option value="latvian">Latvian</option>
          <option value="lebanese">Lebanese</option>
          <option value="liberian">Liberian</option>
          <option value="libyan">Libyan</option>
          <option value="liechtensteiner">Liechtensteiner</option>
          <option value="lithuanian">Lithuanian</option>
          <option value="luxembourger">Luxembourger</option>
          <option value="macedonian">Macedonian</option>
          <option value="malagasy">Malagasy</option>
          <option value="malawian">Malawian</option>
          <option value="malaysian">Malaysian</option>
          <option value="maldivan">Maldivan</option>
          <option value="malian">Malian</option>
          <option value="maltese">Maltese</option>
          <option value="marshallese">Marshallese</option>
          <option value="mauritanian">Mauritanian</option>
          <option value="mauritian">Mauritian</option>
          <option value="mexican">Mexican</option>
          <option value="micronesian">Micronesian</option>
          <option value="moldovan">Moldovan</option>
          <option value="monacan">Monacan</option>
          <option value="mongolian">Mongolian</option>
          <option value="moroccan">Moroccan</option>
          <option value="mosotho">Mosotho</option>
          <option value="motswana">Motswana</option>
          <option value="mozambican">Mozambican</option>
          <option value="namibian">Namibian</option>
          <option value="nauruan">Nauruan</option>
          <option value="nepalese">Nepalese</option>
          <option value="new zealander">New Zealander</option>
          <option value="ni-vanuatu">Ni-Vanuatu</option>
          <option value="nicaraguan">Nicaraguan</option>
          <option value="nigerien">Nigerian</option>
          <option value="north korean">North Korean</option>
          <option value="northern irish">Northern Irish</option>
          <option value="norwegian">Norwegian</option>
          <option value="omani">Omani</option>
          <option value="pakistani">Pakistani</option>
          <option value="palauan">Palauan</option>
          <option value="panamanian">Panamanian</option>
          <option value="papua new guinean">Papua New Guinean</option>
          <option value="paraguayan">Paraguayan</option>
          <option value="peruvian">Peruvian</option>
          <option value="polish">Polish</option>
          <option value="portuguese">Portuguese</option>
          <option value="qatari">Qatari</option>
          <option value="romanian">Romanian</option>
          <option value="russian">Russian</option>
          <option value="rwandan">Rwandan</option>
          <option value="saint lucian">Saint Lucian</option>
          <option value="salvadoran">Salvadoran</option>
          <option value="samoan">Samoan</option>
          <option value="san marinese">San Marinese</option>
          <option value="sao tomean">Sao Tomean</option>
          <option value="saudi">Saudi</option>
          <option value="scottish">Scottish</option>
          <option value="senegalese">Senegalese</option>
          <option value="serbian">Serbian</option>
          <option value="seychellois">Seychellois</option>
          <option value="sierra leonean">Sierra Leonean</option>
          <option value="singaporean">Singaporean</option>
          <option value="slovakian">Slovakian</option>
          <option value="slovenian">Slovenian</option>
          <option value="solomon islander">Solomon Islander</option>
          <option value="somali">Somali</option>
          <option value="south african">South African</option>
          <option value="south korean">South Korean</option>
          <option value="spanish">Spanish</option>
          <option value="sri lankan">Sri Lankan</option>
          <option value="sudanese">Sudanese</option>
          <option value="surinamer">Surinamer</option>
          <option value="swazi">Swazi</option>
          <option value="swedish">Swedish</option>
          <option value="swiss">Swiss</option>
          <option value="syrian">Syrian</option>
          <option value="taiwanese">Taiwanese</option>
          <option value="tajik">Tajik</option>
          <option value="tanzanian">Tanzanian</option>
          <option value="thai">Thai</option>
          <option value="togolese">Togolese</option>
          <option value="tongan">Tongan</option>
          <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
          <option value="tunisian">Tunisian</option>
          <option value="turkish">Turkish</option>
          <option value="tuvaluan">Tuvaluan</option>
          <option value="ugandan">Ugandan</option>
          <option value="ukrainian">Ukrainian</option>
          <option value="uruguayan">Uruguayan</option>
          <option value="uzbekistani">Uzbekistani</option>
          <option value="venezuelan">Venezuelan</option>
          <option value="vietnamese">Vietnamese</option>
          <option value="welsh">Welsh</option>
          <option value="yemenite">Yemenite</option>
          <option value="zambian">Zambian</option>
          <option value="zimbabwean">Zimbabwean</option>
        </select>
      </div>

      <div class="search3">
        <label for="smoking"><i class="fas fa-smoking"></i> Smoking:</label>
        <select name="smoking" id="smoking">
          <option value="select">-- Select one --</option>
          <option name="smoking" value="yes"> Yes</option>
          <option name="smoking" value="no"> No</option>
        </select>
      </div>

      <div class="search6">
        <label for="criminal-record"><i class="far fa-file-alt"></i> Criminal record:</label>
        <select name="criminal-record" id="criminal-record">
          <option value="select">-- Select one --</option>
          <option name="criminal-record" value="important" > Important</option>
          <option name="criminal-record" value="not-important" > Not important</option>
        </select>
      </div>
    
      <div class="search9">
        <input type="submit" class="button hollow" value="Search">
      </div>
    </div>
  </form>
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