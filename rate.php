<?php
    $db = new mysqli('localhost', 'root', 'root', 'homestay');

    if(isset($_GET['registeridf'],$_GET['registerids'], $_GET['rating'])) {
        $family = (int)$_GET['registeridf'];
        $student = (int)$_GET['registerids'];
        $rating = (int)$_GET['rating'];

        if(in_array($rating, [1, 2, 3, 4, 5])) {
            $family_exists = $db->query("SELECT * FROM family WHERE RegisterIdF = {$family}")->num_rows ? true : false;
            $student_exists = $db->query("SELECT * FROM student WHERE RegisterIdS = {$student}")->num_rows ? true : false;
            $rating_exists = $db->query("SELECT * FROM rating WHERE RegisterIdF = {$family} 
                                        AND RegisterIdS = {$student}")->num_rows ? true : false;

        if($family_exists && $student_exists && !$rating_exists) {
            $db->query("INSERT INTO rating (RegisterIdS, RegisterIdF, rating) VALUES ({$student}, {$family}, {$rating})");
        }
        }

        header('Location: seeProfileF.php?family=' . $family);
    }
?>