<?php 
    
    $db = new mysqli('localhost', 'root', 'root', 'homestay');
    
    $distance = $_POST['distance'];
    $start = $_POST['starting-date'];
    $end = $_POST['ending-date'];
    $meals = $_POST['meals'];
    $price = $_POST['price'];

    $query = " SELECT * FROM family WHERE ($start >= AvailableFrom AND $end <= AvailableTo) ";

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

    if(isset($meals) && $meals == "Yes") {
        $query = $query . " AND (Breakfast = 1 OR Lunch = 1 OR Dinner = 1) ";
    } elseif(isset($meals) && $meals == "No") {
        $query = $query . " AND (Breakfast = 0 AND Lunch = 0 AND Dinner = 0) ";
    } elseif(isset($meals) && $meals == "All") {
        $query = $query . " AND (Breakfast = 1 AND Lunch = 1 AND Dinner = 1) ";
    }

    if(isset($price) && $price == "Less than 1500 a month") {
        $query = $query . " AND (Price <= 1500) ";
    } elseif(isset($price) && $price == "1500-2500 a month") {
        $query = $query . " AND (Price BETWEEN 1500 AND 2500) ";
    } elseif(isset($price) && $price == "2500-3000 a month") {
        $query = $query . " AND (Price BETWEEN 2500 AND 3000) ";
    } elseif(isset($price) && $price == "More than 3000 a month") {
        $query = $query . " AND (Price >= 3000) ";
    }

?>