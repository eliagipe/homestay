<?php 
    $email = $_POST['email'];
    $password = $_POST['password'];

    //Connect to DB

    //TODO change to real DB

    $db = new mysqli('localhost', 'root', 'root', 'website');
    $query = " SELECT * FROM users WHERE username = '$email' AND password = '$password' ";
    $result = mysqli_query($db, $query);
    $rows = mysqli_num_rows($result);

    if ($rows > 0) {
        header("location: search.php");
    } else {
        header("location: signin.php");
        
    }

    mysqli_free_result($result);
    mysqli_close($db);

?>