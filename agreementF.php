<?php
  session_start();
  $RegisterId = $_SESSION['RegisterId'];

  if(isset($_GET['family']) && $RegisterId != NULL) {
    require_once('connectiondb.php');
    $family_id = $_GET['family'];
    
    $family = $db->query(" 
        SELECT * FROM family 
        INNER JOIN account_register 
        ON family.RegisterIdF = account_register.RegisterId 
        LEFT JOIN agreement 
        ON family.FamilyId = agreement.FamilyIdAgreement
        WHERE family.RegisterIdF = $family_id;
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

<section class="section conteiner">
  <h2>You are about to make an agreement with family <?php echo $family->LastName; ?></h2>
  <div class="form">
    <div class="place">
      <p class="faq">You are about to make an agreement with family <?php echo $family->LastName; ?>.</p>
      <p class="faq"><span>We suggest you to follow the next instructions:</span></p>
      <p class="faq">Write a document where both parts agree on the duration of the stay, the mutual rules
      the price and the expectations of this experience.</p> 
      <p class="faq">Remember to sign it! When everything is ready you can accept your agreement.
    </div>
  </div>

  <?php if(!isset($agreement)) { ?>
    <div class="item3">
    <a href="validateAgreement.php?family=<?php echo $family->FamilyId; ?>&student=<?php echo $student->StudentId; ?>&family_id=<?php echo $family_id; ?>" class="button hollow">Accept</a>
    </div>

    <div class="item3">
      <a href="index.php" class="button hollow">Cancel</a>
    </div>
  <?php } else { ?>
    <p>Agreement accepted</p>
  <?php } ?>

  
  
  
</section>

<?php include_once 'includes/templates/footer.php'; ?>
