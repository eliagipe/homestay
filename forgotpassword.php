<?php 
  use PHPMailer\PHPMailer\PHPMailer;
  require_once "functions.php";

  if(isset($_POST['email'])) {
    $db = new mysqli('localhost', 'root', 'root', 'homestay');
    $email = $db->real_escape_string($_POST['email']);
    $sql = $db->query("SELECT RegisterId FROM account_register WHERE email = '$email'");
    if($sql->num_rows >  0) {

      $token = generateNewString();

      $db->query("UPDATE users SET token='$token', 
                tokenExpire=DATE_ADD(NOW(), INTERVAL 5 MINUTE)
                WHERE email='$email'
      ");

      require "PHPMailer/PHPMailer.php";
      require "PHPMailer/Exception.php";

      $mail = new PHPMailer(true);

      try {
        $mail->SMTPDebug = 2;                                       
        $mail->isSMTP();                                            
        $mail->Host       = 'smtp.gmail.com';  
        $mail->SMTPAuth   = true;                                   
        $mail->Username   = 'homestay.aau@gmail.com';                     
        $mail->Password   = 'idaaau2019';                               
        $mail->SMTPSecure = 'tls';                                  
        $mail->Port       = 587;                                    

        $mail->addAddress($email);
        $mail->setFrom("homestay.aau@gmail.com", "Mailer");
        $mail->Subject = "Reset Password";
        $mail->isHTML(true);
        $mail->Body = "
            Hola
        ";

        //$mail->send();

        // if($mail->send()) 
        //   exit(json_encode(array("status" => 1, "msg" => 'Please check your email inbox!')));
        // else 
        //   exit(json_encode(array("status" => 0, "msg" => 'Something wrong just happened! Please try again.')));
      } catch(Exception $e) {
        //exit(json_encode(array("status" => 0, "msg" => 'Message could not be sent. Mailer Error: {$mail->ErrorInfo}')));
      }
    } else {
      exit(json_encode(array("status" => 0, "msg" => 'Please check your inputs!')));
    }
  }
?>

<?php include_once 'includes/templates/header.php'; ?>

<section class="section conteiner">
    <h2>Recover your password!</h2>
    <p>Write your email to receive a link to change your password:</p>
    <div class="form">
      <div class="place">
        <form id="sign-in" class="sign-in" action="index.php"method="post">
              <label for="email">Email</label>
              <input type ="text" id="email" name="email" placeholder="Enter e-mail"> 
              <!-- <label for="password">Password</label>
              <input type ="password" id="password" name="password" placeholder="Enter new password">
              <label for="password">Repeat password</label>
              <input type ="password" id="password" name="password" placeholder="Repeat new password">  -->
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