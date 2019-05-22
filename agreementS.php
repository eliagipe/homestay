<?php
  session_start();
  $RegisterId = $_SESSION['RegisterId'];

  if(isset($_GET['student']) && $RegisterId != NULL) {
    require_once('connectiondb.php');
    $student_id = $_GET['student'];
    
    $student = $db->query(" 
        SELECT * FROM student 
        INNER JOIN account_register 
        ON student.RegisterIdS = account_register.RegisterId 
        LEFT JOIN agreement 
        ON student.StudentId = agreement.StudentIdAgreement
        WHERE student.RegisterIdS = $student_id;
    ")->fetch_object();
    
    $family = $db->query(" SELECT FamilyId FROM family WHERE RegisterIdF = $RegisterId ")->fetch_object();

    $agreement = $db->query("
        SELECT * FROM agreement
        WHERE FamilyIdAgreement = $family->FamilyId
        AND StudentIdAgreement = $student->StudentId;
    ")->fetch_object();
}

?>

<?php include_once 'includes/templates/header.php'; ?>

<section class="section conteiner">
  <h2>You are about to make an agreement with <?php echo $student->FirstName . " " . $student->LastName; ?></h2>
  <div class="form">
    <div class="place">
      <p class="faq">You are about to make an agreement with <?php echo $student->FirstName . " " . $student->LastName; ?>.</p>
      <p class="faq"><span>We suggest you to follow the next instructions:</span></p>
      <p class="faq">Write a document where both parts agree on the duration of the stay, the mutual rules
      the price and the expectations of this experience.</p> 
      <p class="faq">Remember to sign it! When everything is ready you can accept your agreement.
    </div>
  </div>

  <?php if(!isset($agreement)) { ?>
    <div class="item3">
    <a href="validateAgreement.php?family=<?php echo $family->FamilyId; ?>&student=<?php echo $student->StudentId; ?>&student_id=<?php echo $student_id; ?>" class="button hollow">Accept</a>
    </div>

    <div class="item3">
      <a href="index.php" class="button hollow">Cancel</a>
    </div>
  <?php } else { ?>
    <p>Agreement accepted</p>
  <?php } ?>

  
  
  
</section>

<?php include_once 'includes/templates/footer.php'; ?>
