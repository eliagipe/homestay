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


  <footer class="site-footer">
      <div class="conteiner clearfix">
        <div class="footer-informacion">
          <h3>About <span>  HomeStay</span></h3> <!--so that about is in one colour and homestay in another -->
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
