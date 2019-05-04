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
// $servername = "localhost:3308";
// $database = "homestay2.0";
// $username = "root";
// $password = "";
// // Create connection
// $conn = mysqli_connect($servername, $username, $password, $database);
// // Check connection
// if (!$conn) {
//       die("Connection failed: " . mysqli_connect_error());
// }
 
// echo "Connected successfully";
 
// $sql = "INSERT INTO account_register (FirstName, LastName, email, Password, type) ".
//           "VALUES ('$firstname', '$lastname', '$email', '$passwordEncrypted', '$familystudent')";
// if (mysqli_query($conn, $sql)) {
//       echo "New record created successfully";
// } else {
//       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }
// mysqli_close($conn);

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