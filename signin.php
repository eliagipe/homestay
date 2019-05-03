<?php include_once 'includes/templates/header.php'; ?>

<section class="section conteiner">
    <h2>Sign In</h2>
    <p>The only thing you need to do to find a match is sign in first:</p>
    <div class="form">
      <div class="place">
        <form id="sign-in" class="sign-in" action="return false" onsubmit="return false" method="post">
            <div id="result"></div>
              <label for="email">Email</label>
              <input type ="email" id="email" name="email" placeholder="Enter e-mail"required> 
              <label for="password">Password</label>
              <input type ="password" id="password" name="password" placeholder="Enter password"required>
              <p><button class="button hollow" onclick="validate(document.getElementById('email').value, document.getElementById('password').value);">Sign in</button></p>
              
              <a class="small-link" href="forgotpassword.php">Forgot password? Click here!</a>
        </form>
        <script>
        function validate(email, password)
        {
            $.ajax({
                url: "validate.php",
                type: "POST",
                data: "email="+email+"&password="+password,
                success: function(resp){
                $('#result').html(resp)
                }       
            });
        }
        </script>

      </div>
    </div>

    <div class="form">
      <div class="place">
        <p class="justify-left">Don't have an account? The registration is going to take less <br> than a minute and becoming a member is totally free!</p>
        <p> <a href="register.php" class="button hollow">Register</a></p>
      </div>
    </div>
  </section>

  <?php include_once 'includes/templates/footer.php'; ?>