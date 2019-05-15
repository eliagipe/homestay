<?php

session_start();
$RegisterId = $_SESSION["RegisterId"];

//$profilephotof = $_POST['profile_photo'];
$nationality = $_POST['nationality'];
      $age = $_POST['age'];
      $start = $_POST['start'];
      $end = $_POST['end'];
      $allergies = $_POST['allergies'];
      $gender = $_POST['gender'];
      $smoking = $_POST['smoking'];
      $language1 = $_POST['language1'];
      $language2 = $_POST['language2'];
      $language3 = $_POST['language3'];
      $diet = $_POST['diet'];
      $criminal = $_POST['criminal'];
      $aboutme = $_POST['about-me'];
      echo json_encode($_FILES);

echo"saving profile...";
$profilephotoS = addslashes(file_get_contents($_FILES['profile_photoS']['tmp_name']));



if (isset($_POST['submit']));

try {

      $servername = "localhost";
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





      $result = mysqli_query($conn, "SELECT RegisterId FROM `account_register` ORDER BY `RegisterId` DESC LIMIT 1");
      while ($consulta = mysqli_fetch_array($result)) {

            $algo1 = $consulta['RegisterId'];
      }
      $resultados = mysqli_query($conn, "SELECT StudentId FROM `student` ORDER BY `StudentId` DESC LIMIT 1");
      while ($quehago = mysqli_fetch_array($resultados)) {

            $familyidff = $quehago['StudentId'];
      }

      $sql = "INSERT INTO student (`RegisterIdS`,`StudentPhoto`,`Nationality`,`Age`, `AvailableFrom`, `AvailableTo`, `Allergies`, `Smoke`, `Gender`, `Language1`,`Language2`,`Language3`,`Diet`,`CriminalRecord`,`Descriptions`)" .
            "VALUES ('$RegisterId','$profilephotoS','$nationality', '$age', '$start', '$end', '$allergies', '$smoking', '$gender', '$language1', '$language2', '$language3','$diet','$criminal','$aboutme')";
      if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
      } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
 
   
      $conn->close();
      echo '<script>location.href = "myProfileS.php?student='  . $RegisterId . '"</script>';
} catch (Exception $e) {
      $error = $e->getMessage();
}
      


//

?>
