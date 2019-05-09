<?php 
session_start();
$RegisterId = $_SESSION["RegisterId"];

$fav=$_GET['fav'];
echo $fav; 


require_once('connectiondb.php');
$stmt = $db->prepare("DELETE FROM account_favs WHERE registeredid=$RegisterId AND favid=$fav");
//$stmt->bind_param("sssss", $firstname, $lastname, $email, $passwordEncrypted, $type);
$stmt->execute();
$stmt->close();



?>