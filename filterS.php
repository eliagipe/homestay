<?php 
    
    $db = new mysqli('localhost', 'root', 'root', 'homestay');
    
    $distance = $_POST['location'];
    $start = $_POST['starting-date'];
    $end = $_POST['ending-date'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $nationality = $_POST['nationality'];
    $criminal = $_POST['criminal-record'];
    $smoke = $_POST['smoking'];

    $query = " SELECT * FROM student WHERE ($start >= AvailableFrom AND $end <= AvailableTo) ";

    if(isset($distance) && $distance == "0km-3km from Aalborg Univesity's main campus") {
        $query = $query . " AND (Distance <=  3) ";
    } elseif(isset($distance) && $distance == "4km-6km from Aalborg Univesity's main campus") {
        $query = $query . " AND (Distance BETWEEN 4 AND 6) ";
    } elseif(isset($distance) && $distance == "6km-15km from Aalborg Univesity's main campus") {
        $query = $query . " AND (Distance BETWEEN 6 AND 15) ";
    } elseif(isset($distance) && $distance == "15km-20km from Aalborg Univesity's main campus") {
        $query = $query . " AND (Distance BETWEEN 15 AND 20) ";
    } elseif(isset($distance) && $distance == "More than 20km from Aalborg Univesity's main campus") {
        $query = $query . " AND (Distance >=  20) ";
    } elseif(isset($distance) && $distance == "All") {
        $query = $query . " AND (Distance >  0) ";
    }


    if(isset($gener) && $gender == "Male") {
        $query = $query . " AND (Gender = 'M') ";
    } elseif(isset($gener) && $gender == "Female") {
        $query = $query . " AND (Gender = 'F') ";
    } elseif(isset($gener) && $gender == "All") {
        $query = $query . " AND (Gender = 'M' OR Gender = 'F') ";
    }

    if(isset($age) && $age == "18-20") {
        $query = $query . " AND (Age BETWEEN 18 AND 20) ";
    } elseif(isset($age) && $age == "20-25") {
        $query = $query . " AND (Age BETWEEN 20 AND 25) ";
    } elseif(isset($age) && $age == "All") {
        $query = $query . " AND (Age > 0) ";
    }

    if(isset($criminal) && $criminal == "Important") {
        $query = $query . " AND (CriminalRecord = 1) ";
    } elseif(isset($criminal) && $criminal == "Not important") {
        $query = $query . " AND (CriminalRecord = 0) ";
    }

    if(isset($smoke) && $smoke == "Yes") {
        $query = $query . " AND (Smoke = 1) ";
    } elseif(isset($smoke) && $smoke == "No") {
        $query = $query . " AND (Smoke = 0) ";
    }

    if(isset($nationality) && $nationality == 'nationality') {
        $query = $query . " AND (Nationality = $nationality) ";
    }

?>
