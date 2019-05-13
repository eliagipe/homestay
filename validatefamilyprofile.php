<?php






session_start();
$RegisterId = $_SESSION["RegisterId"];

//$profilephotof = $_POST['profile_photo'];
$meals = $_POST['meals'];
$pricestay = $_POST['priceforstay'];
$distanceuni = $_POST['distancetouni'];
$startingdatef = $_POST['starting-date'];
$endingdatef = $_POST['ending-date'];
$languagef = $_POST['language'];
$sharedbathroom = $_POST['sharedbathroom'];
$privatebathroom = $_POST['privatebathroom'];
$washingmachine = $_POST['washingmachine'];
$wifi = $_POST['wifi'];
$busstop = $_POST['busstop'];
$singlebed = $_POST['singlebed'];
$doublebed = $_POST['doublebed'];
$bike = $_POST['bike'];
$recordf = $_POST['record'];
$aboutmef = $_POST['about-me'];

echo"saving profile...";
$profilephotof = addslashes(file_get_contents($_FILES['profile_photo']['tmp_name']));



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
      $resultadof = mysqli_query($conn, "SELECT FamilyId FROM `family` ORDER BY `FamilyId` DESC LIMIT 1");
      while ($quehago = mysqli_fetch_array($resultadof)) {

            $familyidff = $quehago['FamilyId'];
      }


      $sql = "INSERT INTO familyfacilities (`FamilyIdFF`,`PrivateBathroom`,`SharedBathroom`, `WashingMachine`,`WiFi`, `BusStop`,`SingleBed`,`DoubleBed`,`Bike`
      )  VALUES ('$familyidff','$privatebathroom','$sharedbathroom','$washingmachine','$wifi','$busstop','$singlebed','$doublebed','$bike')";  //aui te quedaste majo
      if (mysqli_query($conn, $sql)) {
            echo "yay";
      } else {
            echo "error:" . $sql . "<br>" . mysqli_error($conn);
      }




      $sql = "INSERT INTO family (`RegisterIdF`,`FamilyPhoto`,`Meals`,`Price`, `Distance`, `Language`, `CriminalRecord`, `Description`, `AvailableFrom`, `AvailableTo`)" .
            "VALUES ('$algo1','$profilephotof','$meals', '$pricestay', '$distanceuni', '$languagef', '$recordf', '$aboutmef', '$startingdatef', '$endingdatef')";
      if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
      } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
 
      $conn->close();
      echo '<script>location.href = "myProfileF.php?family='  . $RegisterId . '"</script>';
} catch (Exception $e) {
      $error = $e->getMessage();
}
      


//

?>
