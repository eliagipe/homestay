<?php 
session_start();
$RegisterId = $_SESSION["RegisterId"];

$fav=$_GET['fav'];
$isStudent=$_GET['isStudent'];
//echo $fav; 


require_once('connectiondb.php');
$stmt = $db->prepare("DELETE FROM account_favs WHERE registeredid=$RegisterId AND favid=$fav");
//$stmt->bind_param("sssss", $firstname, $lastname, $email, $passwordEncrypted, $type);
$stmt->execute();
$stmt->close();



?>
<script>window.location="myfavorits.php?isStudent=<?php echo $isStudent ?>"</script>