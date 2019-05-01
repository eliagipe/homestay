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
              
              <a class="small-link" href="password.html">Forgot password? Click here!</a>
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
        <p> <a href="register.html" class="button hollow">Register</a></p>
      </div>
    </div>
  </section>
<footer class="site-footer">
  <div class="conteiner clearfix">
    <div class="footer-informacion">
      <h3>About <span>  HomeStay</span></h3> <!--so that the about is in one color and the homestay in another color-->
      <p>The best website to help match exchange students from AAU with host families.</p>
    </div>
    <div class="last-tewts">
      <h3>Our last <span> tweets</span></h3>
      <ul>
        <li>Yet another satisfied student with our webpage!</li>
          <li>Remember that our Homestay webpage is 100% FREE!</li>
          <li>120 students & 80 families have used our website so far and 89% is still in contact!</li>
      </ul>
    </div>
    <div class="menu">
      <h3>Social <span> networks:</span></h3>
      <nav class= "social-networks">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter-square"></i></a>
        <a href="#"><i class="fab fa-pinterest"></i></a>
        <a href="#"><i class="fab fa-youtube-square"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
      </nav>
    </div>
  </div>
  <p class="copyright">
    All rights reserved HomeStay 2019.
  </p>
</footer>



 <!--Here finishHTML HOME STAY-->
  <script src="js/vendor/modernizr-3.7.1.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set','transport','beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>
