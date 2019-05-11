<?php 
session_start();
$RegisterId = $_SESSION["RegisterId"];

$fav=$_GET['fav'];
$isStudent=$_GET['isStudent'];
//echo $isStudent; 


require_once('connectiondb.php');
$stmt = $db->prepare(" INSERT INTO account_favs (registeredid, favid)VALUES ($RegisterId, $fav) ");
//$stmt->bind_param("sssss", $firstname, $lastname, $email, $passwordEncrypted, $type);
$stmt->execute();
$stmt->close();



?>
<script>window.location="myfavorits.php?isStudent=<?php echo $isStudent ?>"</script>