<?php
      
      session_start();
      $RegisterId = $_SESSION["RegisterId"];

      //$profilephoto = $_POST['img'];
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

      echo"saving profile...";
      $profilephotoS = addslashes(file_get_contents($_FILES['profile_photoS']['tmp_name']));
      
 



      if(isset($_POST['submit'])) {
    
    
      try{        
//No estoy segura 
            require_once('connectiondb.php');
            $stmt = $db->prepare(" INSERT INTO student
                                (RegisterIdS, StudentPhoto, Nationality, Age, Allergies, Gender, 
                                Smoke, Language1, Language2, Language3, Diet, 
                                CriminalRecord, Descriptions, AvailableFrom, AvailableTo) 
                                VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
            $stmt->bind_param("ibsississssisss", $RegisterId,$profilephotoS, $nationality, $age, $allergies, $gender, 
                                                $smoking, $language1, $language2, $language3, $diet, 
                                                $criminal, $aboutme, $start, $end);
            $stmt->execute();
            $stmt->close();
                  
            
            echo '<script>location.href = "myProfileS.php?student='  . $RegisterId . '"</script>';

            $db->close();

      }
      catch (Exception $e){
            $error = $e->getMessage();
            echo $error;
      }

    }

?>

