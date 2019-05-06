<?php 
    session_start();
    $RegisterId = $_SESSION["RegisterId"];

    if(isset($_POST['addinfo'])) { 

        $db = new mysqli('localhost', 'root', 'root', 'homestay');
        
        $image = addslashes(file_get_contents($_FILES['img']));
        $nationality = $_POST ["nationality"];
        $age = $_POST["age"];
        $allergies = $_POST["allergies"];
        $gender = $_POST["gender"];
        $smoking = $_POST["smoking"];
        $language1 = $_POST["language1"];
        $language2 = $_POST ["language2"];
        $language3 = $_POST ["language3"];
        $diet = $_POST["diet"];
        $crimreport = $_POST["criminal"];
        $about = $_POST["about-me"];
        $availableto = $_POST ["to"];
        $availablefrom = $_POST ["from"];

        try{        
            require_once('connectiondb.php');
            $stmt = $conexion->prepare("INSERT INTO student 
                                      (RegisterIdS, StudentPhoto, Nationality, Age, Allergies, Gender, 
                                      Smoke, Language1, Language2, Language3, Diet, CriminalRecord, Descriptions,
                                      AvailableTo, AvailableFrom) 
                                      VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param($RegisterId, $image, $nationality, $age, $allergies, $gender, $smoking, $language1,
                              $language2, $language3, $diet, $crimreport, $about, $availableto, $availablefrom);
            $stmt->execute();
            $stmt->close();
            $conexion->close();
        } catch (Exception $e) {
            $error = $e->getMessage();
        }

        
    }

?>