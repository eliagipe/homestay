    <?php 
    
    if(isset($_POST['submit'])) {
    
    $type = $_POST['choose'];
    $firstname = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordEncrypted = password_hash($password, PASSWORD_BCRYPT);

    try{        

        require_once('connectiondb.php');
        $stmt = $db->prepare(" INSERT INTO account_register (FirstName, LastName, email, Password, type) VALUES (?,?,?,?,?) ");
        $stmt->bind_param("sssss", $firstname, $lastname, $email, $passwordEncrypted, $type);
        $stmt->execute();
        $stmt->close();

        $query = " SELECT * FROM account_register WHERE email = '$email' ";
        $result = mysqli_query($db, $query);
        $rows = mysqli_num_rows($result);

        if ($rows > 0) {
            $user = $result->fetch_object();

            session_start();
            $_SESSION["RegisterId"] = $user->RegisterId;
            $_SESSION["email"] = $user->email;
            $_SESSION["type"] = $user->type;
                
            if ($user->type == S) {
                echo '<script>location.href = "profileS.php"</script>';
            } elseif ($user->type == F) {
                echo '<script>location.href = "validatefamilyprofile.php"</script>';
            }
        }

        $db->close();

    }
    catch (Exception $e){
        $error = $e->getMessage();
    }

    }
    
   ?>

