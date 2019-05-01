<?php 
    $email = $_POST['email'];
    $password = $_POST['password'];

    //Connect to DB

    //TODO change to real DB

    $db = new mysqli('localhost', 'root', 'root', 'website');
    $query = " SELECT * FROM users WHERE username = '$email' AND password = '$password' ";
    $result = mysqli_query($db, $query);
    $rows = mysqli_num_rows($result);

    if ($rows > 0)
    {
        session_start();
        $user = $result->fetch_object();
        $_SESSION["email"] = $email;
        $_SESSION["type"] = $user->type;
        echo '<script>location.href = "search.php"</script>';
    }
    else
    {
        echo '<span>Try again.</span>';
    }

    mysqli_free_result($result);
    mysqli_close($db);

?>