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
            <h6><?php echo "Family " . $family->LastName; ?></h3>
        </div>

        <div class="profile2 profile-item">
            <img src="img/Loui 23.jpg" alt="student">
        </div>
        
        <div class="profile3 profile-item">
            <p><span>Contact information:</span> <?php echo $family->email; ?></p>
            <p><span>Description:</span> <?php echo $family->Description; ?></p>
        </div>

        <div class="profile4 profile-item">
            <p class="rating"><span>Rate family:</span> 
                <?php foreach(range(1, 5) as $value): ?>
                    <?php if(!$rating) { ?>
                        <a href="rate.php?registerids=<?php echo $RegisterId; ?>&registeridf=<?php echo $family_id; ?>&rating=<?php echo $value; ?>"><?php echo '<i class="far fa-star"></i>'; ?></a>
                    <?php } else { ?>
                    <?php if($rating->Rating >= $value): ?>
                        <i class="fas fa-star"></i>
                    <?php else : ?>
                        <i class="far fa-star"></i>
                    <?php endif; ?>
                    <?php } ?>
                <?php endforeach; ?>
            <p class="favorite"><span>Mark as favorite:</span> <a href="#"><i class="far fa-heart"></i></a> </p>
        </div>
    </div>

    <div class="profile-grid">
        <div class="profile5 profile-item">
            <p class="info"><i class="far fa-calendar-check"></i> <span>From:</span> <?php echo $family->AvailableFrom; ?></p>
            <p class="info"><i class="far fa-calendar-check"></i> <span>To:</span> <?php echo $family->AvailableTo; ?></p>
        </div>

        <div class="profile6 profile-item">
            <p class="info"><i class="fas fa-dollar-sign"></i> <span>Price: </span> <?php echo $family->Price; ?>kr</p>
            <p class="info"><i class="fas fa-utensils"></i> <span>Meals: </span>
                <?php if($family->Breakfast == 0 && $family->Lunch == 0 && $family->Dinner == 0) {
                    echo "No";
                } elseif($family->Breakfast == 1 && $family->Lunch == 1 && $family->Dinner == 1) {
                    echo "All";
                } else {
                    echo "Yes";
                }; ?>
            </p> 
        </div>

        <div class="profile7 profile-item">
            <p class="info"><i class="fas fa-globe"></i> <span>Language: </span> <?php echo $family->Language; ?></p>
            <p class="info"><i class="fas fa-location-arrow"></i> <span>Distance from AAU main campus: </span> <?php echo $family->Distance; ?>km</p>
        </div>
    </div>

    <div class="item3">
        <a href="#" class="long-button hollow">Start agreement</a>
    </div>
</section>

<?php include_once 'includes/templates/footer.php'; ?>