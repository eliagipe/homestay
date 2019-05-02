<?php include_once 'includes/templates/header.php'; ?>

  <section class="section conteiner">
    <h2>Register as a family or student!</h2>
    <div class="form">
      <div class="place">
        <form id="register" class="register" action="index.html" method="post">
          <label>Choose if you want to be registered as a family or a student:</label>
          <input type="radio" name="choose" value="family" /> I want to be a host family<br>
          <input type="radio" name="choose" value="student" /> I am a student<br />
          <label for="name">Name</label>
          <input type="text" id="name" name="name" placeholder="Enter your name"required>
          <label for="lastname">Last name</label>
          <input type="text" id="lastname" name="lastname" placeholder="Enter your last name"required>
          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="Enter your email" required>
          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="Create your password"required>
          <label for="password">Repeat password</label>
          <input type="password" id="password" name="password" placeholder="Confirm your password"required>
          <p><input type="submit" class="button hollow" value="Register"></p>

        </form>
      </div>
    </div>
  </section>

  <?php include_once 'includes/templates/footer.php'; ?>