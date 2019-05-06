<?php
      
      session_start();
      $RegisterId = $_SESSION["RegisterId"];

      $profilephoto = $_POST['img'];
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

      
      echo $nationality . "<br>"; 
      echo $age . "<br>";
      echo $start . "<br>";
      echo $end . "<br>";
      echo $allergies . "<br>";
      echo $gender . "<br>";
      echo $smoking . "<br>";
      echo $language1 . "<br>";
      echo $language2 . "<br>";
      echo $language3 . "<br>";
      echo $diet . "<br>";
      echo $criminal . "<br>";
      echo $aboutme . "<br>";

      if(isset($_POST['submit'])) {
    
    
      try{        

            require_once('connectiondb.php');
            $stmt = $db->prepare(" INSERT INTO student
                                (RegisterIdS, Nationality, Age, Allergies, Gender, 
                                Smoke, Language1, Language2, Language3, Diet, 
                                CriminalRecord, Descriptions, AvailableFrom, AvailableTo) 
                                VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
            $stmt->bind_param("isississssisss", $RegisterId, $nationality, $age, $allergies, $gender, 
                                                $smoking, $language1, $language2, $language3, $diet, 
                                                $criminal, $aboutme, $start, $end);
            $stmt->execute();
            $stmt->close();
                  
            
            echo '<script>location.href = "seeProfileS.php?student='  . $RegisterId . '"</script>';

            $db->close();

      }
      catch (Exception $e){
            $error = $e->getMessage();
            echo $error;
      }

    }

?>

