<?php 
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordEncrypted = password_hash($password, PASSWORD_BCRYPT);

    //Connect to DB


    require_once('connectiondb.php');
    $query = " SELECT * FROM account_register WHERE email = '$email' "; 
    $result = mysqli_query($db, $query);
    $rows = mysqli_num_rows($result);

    if ($rows > 0) {
        $user = $result->fetch_object();

        if (password_verify($password, $user->Password)) {
            session_start();
            $_SESSION["RegisterId"] = $user->RegisterId;
            $_SESSION["email"] = $email;
            $_SESSION["type"] = $user->type;
            
            if ($user->type == S) {
                echo '<script>location.href = "searchF.php"</script>';
            } elseif ($user->type == F) {
                echo '<script>location.href = "searchS.php"</script>';
            } 
        } else {
            echo '<span>Try again.</span>';
        }
    }
    else
    {
        echo '<span>Try again.</span>';
    }

    mysqli_free_result($result);
    mysqli_close($db);

?>