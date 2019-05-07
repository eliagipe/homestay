<?php
      
      session_start();
      $RegisterId = $_SESSION["RegisterId"];


      //Aparna change from here

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

      if(isset($_POST['submit'])) {
    
    
      try{        

            require_once('connectiondb.php');
            $stmt = $db->prepare(" INSERT INTO family
                                (RegisterIdS, Nationality, Age, Allergies, Gender, 
                                Smoke, Language1, Language2, Language3, Diet, 
                                CriminalRecord, Descriptions, AvailableFrom, AvailableTo) 
                                VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
            $stmt->bind_param("isississssisss", $RegisterId, $nationality, $age, $allergies, $gender, 
                                                $smoking, $language1, $language2, $language3, $diet, 
                                                $criminal, $aboutme, $start, $end);
            $stmt->execute();
            $stmt->close();
                  
            //Aparna don't change from here
            
            echo '<script>location.href = "myProfileF.php?student='  . $RegisterId . '"</script>';

            $db->close();

      }
      catch (Exception $e){
            $error = $e->getMessage();
            echo $error;
      }

    }

?>

