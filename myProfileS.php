<?php

    session_start();
    $RegisterId = $_SESSION["RegisterId"];

    if(isset($_GET['student'])) {
        require_once('connectiondb.php');
        $student_id = $_GET['student'];

        session_start();
        $RegisterId = $_SESSION["RegisterId"];
        
        $student = $db->query(" 
            SELECT * FROM student 
            INNER JOIN account_register 
            ON student.RegisterIdS = account_register.RegisterId 
            LEFT JOIN rating 
            ON student.RegisterIdS = rating.RegisterIdS
            AND $RegisterId = rating.RegisterIdF
            WHERE (student.RegisterIdS = $student_id)
        ")->fetch_object();
    }
    
?>

<?php include_once 'includes/templates/header.php'; ?>

<section class="conteiner section">

    <h2>My profile</h2>

    <div class="profile-grid">
        <div class="profile1">
            <h6><?php echo $student->FirstName . " " . $student->LastName; ?></h3>
        </div>

        <div class="profile2 profile-item">
            <img src="img/Loui 23.jpg" alt="student">
        </div>
        
        <div class="profile3 profile-item">
            <p><span>Contact information:</span> <?php echo $student->email; ?></p>
            <p><span>Description:</span> <?php echo $student->Descriptions; ?></p>
        </div>

    </div>

    <div class="profile-grid">
            <div class="profile5 profile-item">
                <p class="info"><i class="far fa-calendar-check"></i> <span>From:</span> <?php echo $student->AvailableFrom; ?></p>
                <p class="info"><i class="far fa-calendar-check"></i> <span>To:</span> <?php echo $student->AvailableTo; ?></p>
            </div>
                
            <div class="profile6 profile-item">
                <p class="info"><i class="fas fa-map-marker-alt"></i> <span>Nationality: </span> <?php echo $student->Nationality; ?></p>
                <p class="info"><i class="fas fa-globe"></i> <span>Languages: </span> 
                <?php echo $student->Language1;
                    if(!empty($student->Language2)) {
                        echo ", " . $student->Language2;
                    } 
                    if(!empty($student->Language3)) {
                        echo ", " . $student->Language3;
                    } ?></p>
            </div>
            
            <div class="profile7 profile-item">
                <p class="info"><i class="fas fa-male"></i> <span>Age: </span> <?php echo $student->Age; ?> years old</p>
                <p class="info"><i class="fas fa-venus-mars"></i> <span>Gender: </span> 
                    <?php if($student->Gender == 'F') {
                        echo 'Female';
                    } elseif($student->Gender == 'M') {
                        echo 'Male';
                    } ?></p>
            </div>

            <div class="profile-line"></div>

            <div class="profile8 profile-item">
                <p class="info"><i class="fas fa-utensils"></i> <span>Special diet: </span> 
                    <?php if($student->Diet == NULL) {
                        echo "No"; 
                    } else {
                        echo $student->Diet;
                    }?></p>
                <p class="info"><i class="fas fa-plus-square"></i> <span>Allergies: </span> 
                    <?php if($student->Allergies == NULL) {
                        echo "No"; 
                    } else {
                        echo $student->Allergies;
                    }?></p>
            </div>

            <div class="profile9 profile-item">
                <p class="info"><i class="fas fa-smoking"></i> <span>Smoking: </span> 
                    <?php if($student->Smoke == 0) {
                        echo 'No';
                    } elseif($student->Smoke == 1) {
                        echo 'Yes';
                    } ?></p>
                <p class="info"><i class="far fa-file-alt"></i> <span>Criminal Record: </span> 
                    <?php if($student->CriminalRecord == 0) {
                        echo "I don't have a Criminal Record.";
                    } elseif($student->CriminalRecord == 1) {
                        echo "I have a Criminal Record.";
                    } ?></p>
            </div>
    </div>

</section>

<?php include_once 'includes/templates/footer.php'; ?>