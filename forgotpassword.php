<?php 
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  require 'PHPMailer/Exception.php';
  require 'PHPMailer/PHPMailer.php';
  require 'PHPMailer/SMTP.php';  
  
  require_once "functions.php";

  session_start();
  $RegisterId = $_SESSION["RegisterId"];

  if(isset($_POST['email'])) {
    require_once('connectiondb.php');
    $email = $db->real_escape_string($_POST['email']);
    $sql = $db->query("SELECT RegisterId FROM account_register WHERE email = '$email'");
    if($sql->num_rows >  0) {

      $token = generateNewString();

      $db->query("UPDATE account_register SET token='$token', 
                tokenExpire=DATE_ADD(NOW(), INTERVAL 5 MINUTE)
                WHERE email='$email'
      ");

    

      $mail = new PHPMailer(true);

        $mail->SMTPDebug = 0;                                       
        $mail->isSMTP();                                            
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;                                   
        $mail->Username   = 'homestay.aau@gmail.com';                     
        $mail->Password   = 'idaaau2019';                               
        $mail->SMTPSecure = 'tls';                                  
        $mail->Port       = 587;                                    

        $mail->addAddress($email);
        $mail->setFrom("homestay.aau@gmail.com", "Homestay");
        $mail->Subject = "Reset Password";
        $mail->isHTML(true);
        $mail->Body = "
          Hi,<br><br>
              
          In order to reset your password, please click on the link below. It will be deleted after 5 minutes:<br>
          <a href='http://localhost:8888/GitHub/homestay/resetPassword.php?email=$email&token=$token'>http://localhost:8888/GitHub/homestay/resetPassword.php?email=$email&token=&token</a><br><br>
          
          Kind Regards,<br>
          HomeStay
        ";

      try {
        if($mail->send()) 
          exit(json_encode(array("status" => 1, "msg" => 'Please check your email inbox!')));
        else 
          exit(json_encode(array("status" => 0, "msg" => 'Something wrong just happened! Please try again.')));
      } catch (phpmailerException $e) {
        exit(json_encode(array("status" => 0, "msg" => $e->errorMessage())));
      } catch(Exception $e) {
        exit(json_encode(array("status" => 0, "msg" => $e->getMessage())));
      } 
    } else {
      exit(json_encode(array("status" => 0, "msg" => 'Please check your inputs!')));
    }
  }
?>

<?php include_once 'includes/templates/header.php'; ?>

<section class="section conteiner">
    <h2>Reset your password!</h2>
    <p>Write your email to receive a link to change your password:</p>
    <div class="form">
      <div class="place">
        <form id="sign-in" class="sign-in" action="index.php" method="post">
              <label for="email">Email</label>
              <input type ="text" id="email" name="email" placeholder="Enter e-mail"> 
              <input class="btn long-button hollow" value="Reset password" type="button">
              <br><br>
              <p id="response"></p>
          </form>
        </div>
      </div>

</section>

<script   src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="   crossorigin="anonymous"></script>
<script type="text/javascript">
  var email = $("#email");
  $(document).ready(function () {
      $('.btn').on('click', function () {
          if (email.val() != "") {
              email.css('border', '1px solid green');

              $.ajax({
                   url: 'forgotpassword.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       email: email.val()
                   }, success: function (response) {
                       if (!response.success)
                           $("#response").html(response.msg).css('color', "red");
                       else
                           $("#response").html(response.msg).css('color', "green");
                   }
              });
          } else {
              email.css('border', '1px solid red');
          }
      });
  });
</script>

<?php include_once 'includes/templates/footer.php'; ?>