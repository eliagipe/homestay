<?php
  session_start();

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

<section class="section conteiner">
  <h2>You are about to make an agreement with family <?php echo $family->LastName; ?></h2>
  <div class="form">
    <div class="place">
      <p class="faq">You are about to make an agreement with family XXX.</p>
      <p class="faq"><span>We suggest you to follow the next instructions:</span></p>
      <p class="faq">Write a document where both parts agree on the duration of the stay, the mutual rules
      the price and the expectations of this experience.</p> 
      <p class="faq">Remember to sign it! When everything is ready you can accept your agreement.
    </div>
  </div>

  <div class="item3">
    <a href="agreement_done.html" class="button hollow">Accept</a>
  </div>

  <div class="item3">
    <a href="index.php" class="button hollow">Cancel</a>
  </div>
  
  
</section>

<?php include_once 'includes/templates/footer.php'; ?>
