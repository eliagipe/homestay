<?php include_once 'includes/templates/header.php'; ?>

<section class="section conteiner">

    <h2>Register results!</h2>

    <?php if(isset($_POST['submit']));
    
    $familystudent = $_POST['choose'];
    $firstname = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordEncrypted = password_hash($password, PASSWORD_BCRYPT);

    try{        


require_once('connectiondb.php');
$stmt = $conexion->prepare("INSERT INTO account_register (FirstName, LastName, email, Password, type) VALUES (?,?,?,?,?)");
$stmt->bind_param("sssss", $firstname, $lastname, $email, $passwordEncrypted, $familystudent);
$stmt->execute();
$stmt->close();
$conexion->close();

    }
    catch (Exception $e){
        $error = $e->getMessage();
    }
   ?>


</section>
<?php include_once 'includes/templates/footer.php'; ?>