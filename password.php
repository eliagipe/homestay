<?php include_once 'includes/templates/header.php'; ?>

<section class="section conteiner">
    <h2>Create a new password!</h2>
    <p>With two simple steps you will be able to change your password:</p>
    <div class="form">
      <div class="place">
        <form id="sign-in" class="sign-in" action="index.html"method="post">
              <label for="email">Email</label>
              <input type ="text" id="email" name="email" placeholder="Enter e-mail"> 
              <label for="password">Password</label>
              <input type ="password" id="password" name="password" placeholder="Enter new password">
              <label for="password">Repeat password</label>
              <input type ="password" id="password" name="password" placeholder="Repeat new password"> 
              <a href="signin.html" class="long-button hollow" value="Create password"> Create Password</a> <!--type="submit" missing, it changes the style-->
          </form>
        </div>
      </div>

</section>


<?php include_once 'includes/templates/footer.php'; ?>