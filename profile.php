<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory fdfdf-->

  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald|PT+Sans" rel="stylesheet">

  <meta name="theme-color" content="#fafafa">
</head>

<?php 
  $file = basename($_SERVER['PHP_SELF']);
  $page = str_replace(".php", "", $file);
?>

<body class="<?php echo $page; ?>">
  <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <!-- Add your site or application content here -->

  <header class= "bar">
    <div class= "hero">  
        <div class="conteiner clearfix"> <!--This is to center what we are going to write-->
          <div class="welcome">
            <a href="index.php"><img src="img/HomeStay logo.png" alt="Logo"></a>
          </div>

          <div class="menu-movil">
            <span></span>
            <span></span>
            <span></span>
          </div>

          <nav class="principal-navegation"> <!--this class is made so then this icons does not mix with others-->
            <?php 
              if ($_SESSION["type"] == null) {
                echo "<a href='signin.php'>Sign In</a>";
              } else {
                echo "<a href='logout.php'>Sign Out</a>";
              }
            ?>

            <!-- TODO falta versió estudiants i famílies -->
            <?php if($_SESSION["type"] == 'F') {
                echo "<a href='profile.php'>My profile</a>";
                echo "<a href='search.php'>Search match</a>";
                echo "<a href='myfavorits.php'>Favorites</a>";
            } ?>
            <a href="aboutus.php">About us</a>
            <a href="faq.php">FAQ</a>
          </nav>
        </div><!--.conteneiner-->
    </div><!--.bar-->
  </header>

<section class="section conteiner private-information">
    <h2>My Profile - Student</h2>
    <h3>Add or edit information</h3>
    <p>Here you can add or edit  information about yourself:</p>
    
    <div class="place">
      <form id="register" class="register" action="index.html"method="post">
        <div id="user-data" class="register box clearix">
          <div class="form-control"> 
            <label class="header">Profile Photo:</label>
            <input id="image" type="file" name="profile_photo" placeholder="Photo" required="" capture>
          </div>
        <label for="nationality">Nationality</label> 
        <select name="nationality">
          <option value="">-- select one --</option>
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
        <label for="age">Age</label>
        <input type="number" name="age" value="Age"/><br />

        <label for="duration">Duration of stay</label>
        <select name="duration">
          <option value="">-- select one --</option>
          <option value="lessthansixmonths">Less than 6 Months</option>
          <option value="sixmonths">6 Months</option>
          <option value="oneyear">One Year</option>
        </select>

        <label for="allergies">Allergies</label>
        <input type="text" id="allergies" name="allergies" placeholder="Optional">

        <label for="gender">Gender</label>
        <select name="gender">
          <option value="">-- select one --</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
        </select>
        <label for="smoking">Do you smoke?</label>
        <input type="radio" name="smoking" value="no"/> No<br />
        <input type="radio" name="smoking" value="yes"/> Yes<br />

        <label for="languages">Languages</label>
        <input type="text" id="languages" placeholder="Languages">
        
        <label for="diet">Special diet</label>
        <input type="text" id="diet" placeholder="Optional">


        <div class="places">
          <p><h4>Upload a clean criminal record for better chances of finding a match!</h4></p>
          <p> <input type="radio" name="record" value="no " /> I don't have a criminal record<br /></p>
          <div class="input-container">
            <input type="file" id="real-input">
            <button class="browse-btn">Browse Files</button>
            <span class="file-info">Upload your criminal record</span>
            <p><a href="save.html" class="long-button hollow"> Upload criminal record</a></p>     
          </div>
        </div>
      </div>
    </form>   
  </div>

</section>
<!--Infomation about preferences:-->

<section class="section conteiner preferences">
  <h3>Add  information about your preferences</h3>
  <form class="form">
    <div class="place">
       <label for="about-me">Add a profile text that describes you! Having a good descriptive profile will help you find a host family much quicker</label><br/>
       <textarea name="about-me" rows="10" cols="70" id="about-me"></textarea>
    </div> 
  </form>
       
  <div class="item3"><p><a href="save.html" class="long-button hollow">Save changes</a></p></div>
</section>

<footer class="site-footer">
  <div class="conteiner clearfix">
    <div class="footer-informacion">
      <h3>About <span>  HomeStay</span></h3> <!--so that about is in one colour and homestay in another -->
      <p>The best website to help match exchange students from AAU with host families.</p>
    </div>
    <div class="last-tewts">
      <h3>Our last <span> tweets</span></h3>
      <ul>
        <li>Yet another satisfied student with our webpage!</li>
          <li>Remember that our Homestay webpage is 100% FREE!</li>
          <li>120 students & 80 families have used our website so far and 89% is still in contact!</li>
      </ul>
    </div>
    <div class="menu">
      <h3>Social <span> networks:</span></h3>
      <nav class= "social-networks">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter-square"></i></a>
        <a href="#"><i class="fab fa-pinterest"></i></a>
        <a href="#"><i class="fab fa-youtube-square"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
      </nav>
    </div>
  </div>
  <p class="copyright">
    All rights reserved HomeStay 2019.
  </p>
</footer>



 <!--Here finishHTML HOME STAY-->
  <script src="js/vendor/modernizr-3.7.1.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set','transport','beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>
