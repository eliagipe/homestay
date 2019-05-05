<?php
    require_once "functions.php";

    session_start();
    $RegisterId = $_SESSION["RegisterId"];
    
    if(isset($_GET['email']) && isset($_GET['token']) && $RegisterId != NULL) {
        $db = new mysqli('localhost', 'root', 'root', 'homestay');
        $email = $db->real_escape_string($_GET['email']);
        $token = $db->real_escape_string($_GET['token']);

        $sql = $db->query("SELECT RegisterId FROM account_register WHERE 
            email = '$email' AND token = '$token' AND token<>'' AND tokenExpire > NOW()
        ");

        if($sql->num_rows > 0) {
            $newPassword = generateNewString();
            $newPasswordEncrypted = password_hash($newPassword, PASSWORD_BCRYPT);
            $db->query("UPDATE account_register SET token = '', Password = '$newPasswordEncrypted' 
                WHERE email = '$email'
            ");

            echo "Your new password is $newPassword<br><a href='signin.php'>Click here to Sign In</a>";
        } else {
            redirectToLoginPage();
        }
    } else {
        redirectToLoginPage();
    }
?>