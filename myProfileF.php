<?php
    session_start();
    $RegisterId = $_SESSION["RegisterId"];

    if(isset($_GET['family']) && $RegisterId != NULL) {
        require_once('connectiondb.php');
        $family_id = $_GET['family'];
        
        $family = $db->query(" 
            SELECT * FROM family 
            INNER JOIN account_register 
            ON family.RegisterIdF = account_register.RegisterId 
            LEFT JOIN rating 
            ON family.RegisterIdF = rating.RegisterIdF
            AND $RegisterId = rating.RegisterIdS
            WHERE (family.RegisterIdF = $family_id) 
        ")->fetch_object();

        $rating = $db->query("
            SELECT * FROM rating
            WHERE RegisterIdF = $family_id
            AND RegisterIdS = $RegisterId
        ")->fetch_object();

       
    }
    
?>

<?php include_once 'includes/templates/header.php'; ?>

<section class="conteiner section">

    <div class="profile-grid">
        <div class="profile1">
            <h6><?php echo  $family->FirstName . " " . $family->LastName; ?></h3>
        </div>

        <div class="profile2 profile-item">
            <img src="img/Loui 23.jpg" alt="student">
        </div>
        
        <div class="profile3 profile-item">
            <p><span>Contact information:</span> <?php echo $family->email; ?></p>
            <p><span>Description:</span> <?php echo $family->Description; ?></p>
        </div>

    </div>

    <div class="profile-grid">
        <div class="profile5 profile-item">
            <p class="info"><i class="far fa-calendar-check"></i> <span>From:</span> <?php echo $family->AvailableFrom; ?></p>
            <p class="info"><i class="far fa-calendar-check"></i> <span>To:</span> <?php echo $family->AvailableTo; ?></p>
        </div>

        <div class="profile6 profile-item">
            <p class="info"><i class="fas fa-dollar-sign"></i> <span>Price: </span> <?php echo $family->Price; ?>DKK </p>
            <p class="info"><i class="fas fa-utensils"></i> <span>Meals: </span>
                <?php if($family->Meals == 0) {
                    echo "No";
                } elseif($family->Meals == 1) {
                    echo "All";
                }; ?>
            </p> 
        </div>

        <div class="profile7 profile-item">
            <p class="info"><i class="fas fa-globe"></i> <span>Language: </span> <?php echo $family->Language; ?></p>
            <p class="info"><i class="fas fa-location-arrow"></i> <span>Distance from AAU main campus: </span> <?php echo $family->Distance; ?>km</p>
        </div>
    </div>

</section>

<?php include_once 'includes/templates/footer.php'; ?>