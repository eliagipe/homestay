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
$stmt = $conn->prepare("INSERT INTO account_register (typefs, FirstName, LastName, email, Password) VALUES (?,?,?,?,?)");
$stmt->bind_param("sssss", $familystudent, $firstname, $lastname, $email, $passwordEncrypted);
$stmt->execute();
$stmt->close();
$conn->close();
    }
    catch (Exception $e){
        $error = $e->getMessage();
    }
   ?>


</section>
<?php include_once 'includes/templates/footer.php'; ?>