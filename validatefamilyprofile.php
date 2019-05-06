<?php include_once 'includes/templates/header.php'; ?>



<section class="section conteiner">

    <h2>Register FAMILY results!</h2>

    <?php if(isset($_POST['submit']));
    
    $profilephotof = $_POST['profile_photo'];
   // $meals = $_POST['meals'];
    $pricestay= $_POST['priceforstay'];
    $distanceuni=$_POST['distancetouni'];
    $startingdatef = $_POST['starting-date'];
    $endingdatef = $_POST['ending-date'];
    $languagef = $_POST['language'];
    //$facilities = $_POST['facilities'];
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
 




 $result =mysqli_query($conn ,"SELECT RegisterId FROM `account_register` ORDER BY `RegisterId` DESC LIMIT 1");
while($consulta = mysqli_fetch_array($result)){

      $algo1=$consulta['RegisterId'];
}

//validando checkboxes
if(isset($_POST['meals'])){
$meal = $_POST['meals'];
echo "tus comidas son </br>";
foreach($meal as $meals){
      echo $meal . '<br/>';
}

}
else{
   echo "no hay comida";   
}



$sql = "INSERT INTO family (`RegisterIdF`,`FamilyPhoto`,`Price`,`Meals`, `Distance`, `Language`, `CriminalRecord`, `Description`, `AvailableFrom`, `AvailableTo`)".
 "VALUES ('$algo1','$profilephotof', '$pricestay','$meals', '$distanceuni', '$languagef', '$recordf', '$aboutmef', '$startingdatef', '$endingdatef')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


    }


catch (Exception $e){
       $error = $e->getMessage();}


//
 

   ?>


</section>
<?php include_once 'includes/templates/footer.php'; ?>




      
