<?php define('DeniedAccessFiles', TRUE); ?>

<?php include 'header.php'; ?>

<body id="login-body">
  <div id="login-container">
    <div class="login">
      <div class="login-title">
        <img src="assets/img/logo-login.png">
      </div>
      <div class="form">
         <form class="login-form">
           <input type="text" placeholder="Display Name"/>
           <input type="password" placeholder="Password"/>
           <button>login</button>
           <p class="message">Forgot your Password? <a href="#">Click here to recover</a>!</p>
         </form>
       </div>
    </div>
  </div>
</body>

<?php include 'footer.php'; ?>
