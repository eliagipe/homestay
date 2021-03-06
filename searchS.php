<?php

  session_start();  
  $RegisterId = $_SESSION["RegisterId"];

  if(isset($_POST['starting-date']) && $RegisterId != NULL) {
    require_once('connectiondb.php');
    
    $distance = $_POST['location'];
    $start = $_POST['starting-date'];
    $end = $_POST['ending-date'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $nationality = $_POST['nationality'];
    $criminal = $_POST['criminal-record'];
    $smoke = $_POST['smoking'];

    $query = " SELECT * 
    , (SELECT AVG(rating.Rating) 
            FROM rating
            WHERE RegisterIdS = student.RegisterIdS
            GROUP BY RegisterIdS)
            AS rating
            FROM student 
            INNER JOIN account_register
            ON student.RegisterIdS = account_register.RegisterId
            LEFT JOIN account_favs
            ON student.RegisterIdS = account_favs.favid
            AND account_favs.registeredid = $RegisterId ";

    $query = $query . " WHERE ('$start' >= AvailableFrom AND '$end' <= AvailableTo) ";

    if(isset($gender) && $gender == "male") {
        $query = $query . " AND (Gender = 'M') ";
    } elseif(isset($gender) && $gender == "female") {
        $query = $query . " AND (Gender = 'F') ";
    }

    if(isset($age) && $age == "18-20") {
        $query = $query . " AND (Age BETWEEN 18 AND 20) ";
    } elseif(isset($age) && $age == "20-25") {
        $query = $query . " AND (Age BETWEEN 20 AND 25) ";
    } elseif(isset($age) && $age == "All") {
        $query = $query . " AND (Age > 0) ";
    }

    if(isset($criminal) && $criminal == "important") {
        $query = $query . " AND (CriminalRecord = 1) ";
    } elseif(isset($criminal) && $criminal == "not-important") {
        $query = $query . " AND (CriminalRecord = 0) ";
    }

    if(isset($smoke) && $smoke == "yes") {
        $query = $query . " AND (Smoke = 1) ";
    } elseif(isset($smoke) && $smoke == "no") {
        $query = $query . " AND (Smoke = 0) ";
    }

    if(isset($nationality) && $nationality != "select" && $nationality != "all") {
        $query = $query . " AND (Nationality = '$nationality') ";
    }
    
    $result = mysqli_query($db, $query);
    $rows = mysqli_num_rows($result);
    
  }

?>

<?php include_once 'includes/templates/header.php'; ?>

<section class="conteiner section">
  <h2>Start looking for an exchange student to host!</h2>
  <form id="search" class="search" action="searchS.php" method="post">
    <div class="search-grid">

      <div class="search1">
        <label for="starting-date"><i class="far fa-calendar-check"></i> From:*</label>
        <input type="date" name="starting-date" id="starting-date" placeholder="yy/mm/dd" value="<?php echo $start; ?>" required>
      </div>

      <div class="search4">
        <label for="ending-date"><i class="far fa-calendar-check"></i> To:*</label>
        <input type="date" name="ending-date" id="ending-date" placeholder="yy/mm/dd" value="<?php echo $end; ?>" required>
      </div>

      <div class="search5">
        <label for="gender"><i class="fas fa-venus-mars"></i> Gender:</label>
        <select name="gender" id="gender"> 
          <option value="select">-- Optional --</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="all">All</option>
        </select>
      </div>

      <div class="search2">
        <label for="age"><i class="fas fa-male"></i> Age:</label>
        <select name="age" id="age">
          <option value="select">-- Optional --</option>
          <option value="18-20">18-20</option>
          <option value="20-25">20-25</option>
          <option value="all">All</option>
        </select>
      </div>
      
      <div class="search7">
        <label for="nationality"><i class="fas fa-map-marker-alt"></i> Nationality:</label> 
        <select name="nationality">
          <option value="select">-- Optional --</option>
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
          <option value="select">-- Optional --</option>
          <option name="smoking" value="yes"> Yes</option>
          <option name="smoking" value="no"> No</option>
        </select>
      </div>

      <div class="search6">
        <label for="criminal-record"><i class="far fa-file-alt"></i> Criminal record:</label>
        <select name="criminal-record" id="criminal-record">
          <option value="select">-- Optional --</option>
          <option name="criminal-record" value="important" >Important</option>
          <option name="criminal-record" value="not-important" >Not important</option>
        </select>
      </div>
    
      <div class="search9">
        <input id ="submit" name="submit" type="submit" class="button hollow" value="Search">
      </div>
      
    </div>
  </form>
</section>

<section class="conteiner section">

  <?php if(!isset($rows)) { ?>
    <h3>Select at least one option from the searching bar.</h3>
  <?php } ?>
  
  <?php if (isset($rows) && $rows > 0) { ?>
    <h3>Students that match your searching result:</h3>
  <?php } ?>

  <?php if (isset($rows) && $rows == 0) { ?>
    <h3>There aren't any students that match your search.</h3>
  <?php } ?>

    <div class="profiles conteiner clearfix">
      <div class="profile">
      <?php if(isset($result)) { ?>
        <?php while($student = $result->fetch_object()) { ?>
          <blockquote class="search-result grid-container">

            <div class="grid-item item1">
            <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $student->StudentPhoto).'"/>';?>
            <?php if($student->favid == NULL) { ?>
              <p class="favorite">Mark as favorite: <a href="favorite.php?isStudent=true&fav=<?php echo $student->RegisterIdS ?>"><i class="far fa-heart"></i></a> </p>
            <?php } else { ?>
              <p class="favorite">Marked as favorite <a href="NotFavorite.php?isStudent=true&fav=<?php echo $student->favid ?>"title="unsave profile from your favorites"><i class="fas fa-heart"></i></a> </p>
            <?php } ?>
            </div>

            <div class="grid-item item2">
              <p class="name"><?php echo $student->FirstName . " " . $student->LastName; ?></p>
              <p class="info"><span>Nationality:</span> <?php echo $student->Nationality; ?></p>
              <p class="info"><span>Age:</span> <?php echo $student->Age; ?> years old</p>
              <p class="info"><span>From:</span> <?php echo $student->AvailableFrom; ?></p>
              <p class="info"><span>To:</span> <?php echo $student->AvailableTo; ?></p>
            </div>

            <div class="item3">
              <a href="seeProfileS.php?student=<?php echo $student->RegisterIdS ?>" class="long-button hollow">See profile</a>
            </div>

          </blockquote>
        <?php } ?>
      <?php } ?>

      </div>
  </div>
</section>

<?php include_once 'includes/templates/footer.php'; ?>