

<?php include 'header.php'; ?>
<title>
   MAIN TITLE &raquo; <?php echo $page; ?>
</title>


<body id="login-body">
  <div id="login-container">
    <div class="login">
      <div class="login-title">
        <img src="assets/img/logo-login.png">
      </div>
      <div class="form">
        <form class="login-form">
        <?php
              //require ('steamauth/steamauth.php');
              require ('assets/config/config.php');
              require ('steam_session.php');
        ?>
         
           
           <!--<p class="message">Forgot your Password? <a href="#">Click here to recover</a>!</p>-->
         </form>
       </div>
    </div>
  </div>
</body>



<?php include 'footer.php'; ?>
