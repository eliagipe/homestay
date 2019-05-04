<?php 
    $db = new mysqli('localhost', 'root', 'root', 'homestay');
    $query = " SELECT * FROM account_register WHERE email = '$email' AND Password = '$password' "; //TODO change to $passwordEncrypted
    $result = mysqli_query($db, $query);
    $rows = mysqli_num_rows($result);
?>