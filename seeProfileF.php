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
            LEFT JOIN account_favs
            ON family.RegisterIdF = account_favs.favid
            AND account_favs.registeredid = $RegisterId
            WHERE (family.RegisterIdF = $family_id) 
        ")->fetch_object();

        $rating = $db->query("
            SELECT * FROM rating
            WHERE RegisterIdF = $family_id
            AND RegisterIdS = $RegisterId
        ")->fetch_object();

        $student = $db->query(" SELECT StudentId FROM student WHERE RegisterIdS = $RegisterId ")->fetch_object();

        $agreement = $db->query("
            SELECT * FROM agreement
            WHERE FamilyIdAgreement = $family->FamilyId
            AND StudentIdAgreement = $student->StudentId;
        ")->fetch_object();
    }
    
?>

<?php include_once 'includes/templates/header.php'; ?>

<section class="conteiner section">

    <div class="profile-grid">
        <div class="profile1">
            <h6><?php echo  $family->FirstName. " " . $family->LastName; ?></h3>
        </div>

        <div class="profile2 profile-item">
        <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $family->FamilyPhoto).'"/>';?>
        </div>
        
        <div class="profile3 profile-item">
            <p><span>Contact information:</span> <?php echo $family->email; ?></p>
            <p><span>Description:</span> <?php echo $family->Description; ?></p>
        </div>

        <div class="profile4 profile-item">
            <?php if(isset($agreement)) { ?>
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
            <?php } ?>
            
            <?php if($family->favid == NULL) { ?>
                  <p class="favorite">Mark as favorite: <a href="favorite.php?isStudent=false&fav=<?php echo $family->RegisterId ?>"><i class="far fa-heart"></i></a> </p>
                <?php } else { ?>
                  <p class="favorite">Marked as favorite <a href="NotFavorite.php?isStudent=false&fav=<?php echo $family->favid ?>"title="unsave profile from your favorites"><i class="fas fa-heart"></i></a> </p>
                <?php } ?>
        </div>
    </div>

    <div class="profile-grid">
        <div class="profile5 profile-item">
            <p class="info"><i class="far fa-calendar-check"></i> <span>From:</span> <?php echo $family->AvailableFrom; ?></p>
            <p class="info"><i class="far fa-calendar-check"></i> <span>To:</span> <?php echo $family->AvailableTo; ?></p>
        </div>

        <div class="profile6 profile-item">
            <p class="info"><i class="fas fa-dollar-sign"></i> <span>Price/month: </span> <?php echo $family->Price; ?>kr</p>
            <p class="info"><i class="fas fa-utensils"></i> <span>Meals: </span>
                <?php if($family->Meals == 0) {
                    echo "No";
                } elseif($family->Meals == 1) {
                    echo "Yes";
                }; ?>
            </p> 
        </div>

        <div class="profile7 profile-item">
            <p class="info"><i class="fas fa-globe"></i> <span>Language: </span> <?php echo $family->Language; ?></p>
            <p class="info"><i class="fas fa-location-arrow"></i> <span>Distance from AAU main campus: </span> <?php echo $family->Distance; ?>km</p>
        </div>

        <div class="profile-line"></div>

        <div class="profile11 profile-item">
        <h4>Facilities</h4>
    </div>
    <div class="profile12 profile-item">
        <h4></h4>
    </div>
    <div class="profile13 profile-item">
        <h4></h4>
    </div>

    <div class="profile14 profile-item">
        <p class="info"><i class="fas fa-toilet-paper"></i> <span>Private Bathroom: </span>
            <?php if($familyfacilities->PrivateBathroom == 0) {
                echo "No";
            } elseif($familyfacilities->PrivateBathroom == 1) {
                echo "Yes";} ?> 
        </p>

        <p class="info"><i class="fas fa-bed"></i> <span>Single Bed: </span>
            <?php if($familyfacilities->SingleBed == 0) {
                echo "No";
            } elseif($familyfacilities->SingleBed == 1) {
                echo "Yes";} ?>
        </p>
        <p class="info"><i class="fas fa-bed"></i> <span>Double Bed: </span>
            <?php if($familyfacilities->DoubleBed == 0) {
                echo "No";
            } elseif($familyfacilities->DoubleBed == 1) {
                echo "Yes";} ?>
        </p>
    </div>

    <div class="profile15 profile-item">
        <p class="info"><i class="fas fa-wifi"></i> <span>WIFI: </span>
            <?php if($familyfacilities->WiFi == 0) {
                echo "No";
            } elseif($familyfacilities->WiFi == 1) {
                echo "Yes";} ?>
        </p>
        <p class="info"><i class="fas fa-tshirt"></i> <span>Washing Machine: </span>
            <?php if($familyfacilities->WashingMachine == 0) {
                echo "No";
            } elseif($familyfacilities->WashingMachine == 1) {
                echo "Yes";} ?>
        </p>
    </div>

    <div class="profile16 profile-item">
        <p class="info"><i class="fas fa-bus"></i> <span>Bus Stop Nearby: </span>
            <?php if($familyfacilities->BusStop == 0) {
                echo "No";
            } elseif($familyfacilities->BusStop == 1) {
                echo "Yes";} ?>
        </p>
        
        <p class="info"><i class="fas fa-bicycle"></i> <span>Bicycle available: </span>
            <?php if($familyfacilities->Bike == 0) {
                echo "No";
            } elseif($familyfacilities->Bike == 1) {
                echo "Yes";} ?>
        </p>
    </div>

        
    </div>
    
    <?php if(!isset($agreement)) { ?>
        <div class="item3">
            <a href="agreementF.php?family=<?php echo $family_id; ?>" class="long-button hollow">Start agreement</a>
        </div>
    <?php } elseif(isset($agreement)) { ?>
        <p>Agreement accepted</p>
    <?php } ?>

</section>

<?php include_once 'includes/templates/footer.php'; ?>