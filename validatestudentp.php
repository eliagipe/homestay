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

      try {

            require_once('connectiondb.php');

            if (!$db) {
                  die("Connection failed: " . mysqli_connect_error());
            }

            echo "Connected successfully";

            $resultados = mysqli_query($db, "SELECT StudentId FROM `student` ORDER BY `StudentId` DESC LIMIT 1");
            while ($id = mysqli_fetch_array($resultados)) {
                  $familyidff = $id['StudentId'];
            }

            $sql = "INSERT INTO student 
                   (`RegisterIdS`,`StudentPhoto`,`Nationality`,`Age`, `AvailableFrom`, 
                   `AvailableTo`, `Allergies`, `Smoke`, `Gender`, `Language1`,
                   `Language2`,`Language3`,`Diet`,`CriminalRecord`,`Descriptions`)
                   VALUES 
                   ($RegisterId,'$profilephotoS','$nationality', '$age', '$start', 
                   '$end', '$allergies', '$smoking', '$gender', '$language1', 
                   '$language2', '$language3','$diet','$criminal','$aboutme')";

            if (mysqli_query($db, $sql)) {
                  echo "New record created successfully";
            } else {
                  echo "Error: " . $sql . "<br>" . mysqli_error($db);
            }
      
            $db->close();
            echo '<script>location.href = "myProfileS.php?student='  . $RegisterId . '"</script>';
            
      } catch (Exception $e) {
            $error = $e->getMessage();
      }

?>
