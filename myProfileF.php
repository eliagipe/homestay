<?php
    session_start();
    $RegisterId = $_SESSION["RegisterId"];

    if(isset($_GET['family'])) {
        require_once('connectiondb.php');
        $family_id = $_GET['family'];
        
        $family = $db->query(" 
        SELECT * FROM family 
        INNER JOIN account_register 
        ON family.RegisterIdF = account_register.RegisterId 
        ")->fetch_object();

        $family1 = $db->query(" SELECT FamilyId FROM family WHERE RegisterIdF = $RegisterId ")->fetch_object();
       
        $familyfacilities = $db->query("
            SELECT * FROM familyfacilities WHERE FamilyIdFF = $family1->FamilyId;
            ")->fetch_object();
                
        }
    
?>

<?php include_once 'includes/templates/header.php'; ?>

<section class="conteiner section">
<h2> My Profile </h2>

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

    <div class="profile-line"></div>

    <div class="profile8 profile-item">
            <p class="info"><i class="profile-item"></i> <span>Family Facilities </p>
            <p class="info"><i class="profile-item"></i> <span>Private Bathroom </span>
                <?php if($familyfacilities->PrivateBathroom == 0) {
                    echo "No";
                } elseif($familyfacilities->PrivateBathroom == 1) {
                    echo "Yes";
                } ?> </p>

           <p class="info"><i class="profile-item"></i> <span>Shared Bathroom </span>
<?php if($familyfacilities->SharedBathroom == 0) {
                   echo "No";
                } elseif($familyfacilities->SharedBathroom == 1) {
                    echo "Yes";} ?>
            </p> 
            
            
<p class="info"><i class="profile-item"></i> <span>Washing Machine </span>
<?php if($familyfacilities->WashingMachine == 0) {
                    echo "No";
               } elseif($familyfacilities->WashingMachine == 1) {
                    echo "Yes";} ?>
</p>
<p class="info"><i class="profile-item"></i> <span>WIFI </span>
<?php if($familyfacilities->WiFi == 0) {
                    echo "No";
               } elseif($familyfacilities->WiFi == 1) {
                    echo "Yes";} ?>
</p>
<p class="info"><i class="profile-item"></i> <span>Bus Stop Nearby </span>
<?php if($familyfacilities->BusStop == 0) {
                   echo "No";
               } elseif($familyfacilities->BusStop == 1) {
                    echo "Yes";} ?>
</p>
<p class="info"><i class="profile-item"></i> <span>Single Bed </span>
<?php if($familyfacilities->SingleBed == 0) {
                    echo "No";
                } elseif($familyfacilities->SingleBed == 1) {
                  echo "Yes";} ?>
</p>
<p class="info"><i class="profile-item"></i> <span>Double Bed </span>
<?php if($familyfacilities->DoubleBed == 0) {
                   echo "No";
                } elseif($familyfacilities->DoubleBed == 1) {
                    echo "Yes";} ?>
</p>
<p class="info"><i class="profile-item"></i> <span>Bicycle available </span>
<?php if($familyfacilities->Bike == 0) {
echo "No";
                } elseif($familyfacilities->Bike == 1) {
                    echo "Yes";} ?>
</p>
</div>

 

</section>



<?php include_once 'includes/templates/footer.php'; ?>