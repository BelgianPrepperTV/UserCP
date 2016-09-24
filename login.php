
<?php include 'header.php'; ?>

<body id="login-body">
  <div id="login-container">
    <div class="login">
      <div class="login-title">
        <img src="assets/img/logo-login.png">
      </div>
      <div class="form">
        <form class="login-form">
        <?php
              require ('steamauth/steamauth.php');
              require ('assets/config/config.php');
              # You would uncomment the line beneath to make it refresh the data every time the page is loaded
              // unset($_SESSION['steam_uptodate']);
                
              // If logged in = false
              if(!isset($_SESSION['steamid'])) {
                  loginbutton();
              }  

              // If login = true
              else {
                  include ('steamauth/userInfo.php');
                  echo '<meta http-equiv="refresh" content="0; url=index.php" />';
                  //Protected content
                  echo "logged";
                  echo "<div class='topwelcome'>Welcome back, " . $steamprofile['realname'] . " - " . $steamprofile['steamid'] . "</div>";
                  logoutbutton();
              } 
        ?>
         
           
           <!--<p class="message">Forgot your Password? <a href="#">Click here to recover</a>!</p>-->
         </form>
       </div>
    </div>
  </div>
</body>

<?php include 'footer.php'; ?>
