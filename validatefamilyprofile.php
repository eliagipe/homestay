<?php include_once 'includes/templates/header.php'; ?>



<section class="section conteiner">

    <h2>Register Family results!</h2>

    <?php if(isset($_POST['submit']));
    
    $profilephotof = $_POST['profile_photo'];
    $meals = $_POST['meals'];
    $pricestay= $_POST['priceforstay'];
    $distanceuni=$_POST['distancetouni'];
    $startingdatef = $_POST['starting-date'];
    $endingdatef = $_POST['ending-date'];
    $languagef = $_POST['language'];
    $facilities = $_POST['facilities'];
    $recordf = $_POST['record'];
    $aboutmef = $_POST['about-me'];
   


    try{        

 $servername = "localhost:3308";
$database = "homestay2.0";
 $username = "root";
 $password = "";
// // Create connection
 $conn = mysqli_connect($servername, $username, $password, $database);
 // Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
 echo "Connected successfully";
 
}



// $result =mysqli_query($conn ,"SELECT RegisterId FROM `account_register` ORDER BY `RegisterId` DESC LIMIT 1");
//while($consulta = mysqli_fetch_array($result)){

   //   $algof=$consulta['RegisterId'];
//}

      



//$sql = "INSERT INTO family (FamilyPhoto, Breakfast, Lunch, Dinner, Price, Distance, , Language, CriminalRecord, Description, AvailableFrom, AvailableTo)".
 //"VALUES ('$profilephotof', '$meals', '$meals', '$allergies', '$gender', '$smoking', '$language', '$languages1', '$languages2', '$diet', '$record', '$aboutme', '$startingdate', '$endingdate')";
//if (mysqli_query($conn, $sql)) {
    //  echo "New record created successfully";
//} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//}


    



catch (Exception $e){
       $error = $e->getMessage();}

if(  $meals = $_POST['meals'];){
for ($i=0; $i<sizeof ($meals);$i++) {  
    $query="INSERT INTO family (meals) VALUES ('".$meals[$i]. "')";  }
    mysql_query($query) or die(mysql_error());  
    }  
    echo "Record is inserted";  

      
// $sql = " SELECT FirstName, LastName, email, Password, StudentPhoto, Nationality, Age, Gender, Smoke, Language1, Language2, Language3, Diet, CriminalRecord, Description, AvailableFrom, AvailableTo ";
//$sql .=" FROM account_register ";
//$sql .=" INNER JOIN student ";
//$sql .=" ON account_register.RegisterId = student.RegisterIdS ";
//$sql .=" WHERE RegisterId = $algo";
//$result = $conn->query($sql);
//$row= mysqli_fetch_assoc($result);
//var_dump($row);
 //mysqli_close($conn);

   ?>


</section>
<?php include_once 'includes/templates/footer.php'; ?>

