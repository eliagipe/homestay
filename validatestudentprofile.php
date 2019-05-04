<?php include_once 'includes/templates/header.php'; ?>



<section class="section conteiner">

    <h2>Register Student results!</h2>

    <?php if(isset($_POST['submit']));
    
    $profilephoto = $_POST['profile_photo'];
    $nationality = $_POST['nationality'];
    $age = $_POST['age'];
    $startingdate = $_POST['starting-date'];
    $endingdate = $_POST['ending-date'];
    $allergies = $_POST['allergies'];
    $gender = $_POST['gender'];
    $smoking = $_POST['smoking'];
    $language = $_POST['language'];
    $languages1 = $_POST['languages1'];
    $languages2 = $_POST['languages2'];
    $diet = $_POST['diet'];
    $record = $_POST['record'];
    $aboutme = $_POST['about-me'];
    
   


    try{        

 $servername = "localhost:3308";
$database = "homestay2.0";
 $username = "root";
 $password = "";
// // Create connection
 $conn = mysqli_connect($servername, $username, $password, $database);
 // Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
 echo "Connected successfully";
 
$sql = "INSERT INTO student (StudentPhoto, Nationality, Age, Allergies, Gender, Smoke, Language1, Language2, Language3, Diet, CriminalRecord, Description, AvailableFrom, AvailableTo)".
          "VALUES ( '$profilephoto', '$nationality', '$age', '$allergies', '$gender', '$smoking', '$language', '$languages1', '$languages2', '$diet', '$record', '$aboutme', '$startingdate', '$endingdate')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
 mysqli_close($conn);


//require_once('connectiondb.php');
//$stmt = $conexion->prepare("INSERT INTO student (StudentPhoto, Nationality, Age, Allergies, Gender, Smoke, Language1, Language2, Language3, Diet, CriminalRecord, Description, AvailableFrom, AvailableTo) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
//$stmt->bind_param("ssississssisss", $profilephoto, $nationality, $age, $allergies, $gender, $smoking, $language, $languages1, $languages2, $diet, $record, $aboutme, $startingdate, $endingdate);
//$stmt->execute();
//$stmt->close();
//$conexion->close();

    }
    catch (Exception $e){
        $error = $e->getMessage();
    }
   ?>


</section>
<?php include_once 'includes/templates/footer.php'; ?>

