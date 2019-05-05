<?php

    if(isset($_GET['family'])) {
        $db = new mysqli('localhost', 'root', 'root', 'homestay');
        $family_id = $_GET['family'];

        session_start();
        $RegisterId = $_SESSION["RegisterId"];
        
        $family = $db->query(" 
            SELECT * FROM family 
            INNER JOIN account_register 
            ON family.RegisterIdF = account_register.RegisterId 
            LEFT JOIN rating 
            ON family.RegisterIdF = rating.RegisterIdF
            AND $RegisterId = rating.RegisterIdS
            WHERE (family.RegisterIdF = $family_id) 
        ")->fetch_object();
    }
    
?>

<?php include_once 'includes/templates/header.php'; ?>

<section class="conteiner section">

    <div class="profile-grid">
        <div class="profile1">
            <h6><?php echo $family->LastName; ?></h3>
        </div>

        <div class="profile2 profile-item">
            <img src="img/Loui 23.jpg" alt="student">
        </div>
        
        <div class="profile3 profile-item">
            <p><span>Contact information:</span> <?php echo $family->email; ?></p>
            <p><span>Description:</span> <?php echo $family->Description; ?></p>
        </div>

        <div class="profile4 profile-item">
            <p class="rating"><span>Rate family:</span> <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></p>
            <p class="favorite"><span>Mark as favorite:</span> <a href="#"><i class="far fa-heart"></i></a> </p>
        </div>
    </div>

    <div class="profile-grid">
        <div class="profile5 profile-item">
            <p class="info"><i class="far fa-calendar-check"></i> <span>From:</span> <?php echo $family->AvailableFrom; ?></p>
            <p class="info"><i class="far fa-calendar-check"></i> <span>To:</span> <?php echo $family->AvailableTo; ?></p>
        </div>

        <div class="profile6 profile-item">
            <p class="info"><i class="fas fa-dollar-sign"></i> <span>Price: </span> <?php echo $family->Price; ?></p>
            <p class="info"><i class="fas fa-utensils"></i> <span>Meals: </span>Yes</p> 
            <!-- TODO canviar Yes per $family->Meals (fer l'if)-->
        </div>

        <div class="profile7 profile-item">
            <p class="info"><i class="fas fa-globe"></i> <span>Language: </span> <?php echo $family->Language; ?></p>
            <p class="info"><i class="fas fa-location-arrow"></i> <span>Distance from AAU main campus: </span> 8km</p>
            <!-- TODO canviar 8km per $family->Distance (fer l'if)-->
        </div>
    </div>

    <div class="item3">
        <a href="#" class="long-button hollow">Start agreement</a>
    </div>
</section>

<?php include_once 'includes/templates/footer.php'; ?>