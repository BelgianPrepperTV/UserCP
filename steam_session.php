<?php 
    require ('steamauth/steamauth.php');
    require ('assets/config/config.php');
	# You would uncomment the line beneath to make it refresh the data every time the page is loaded
	// unset($_SESSION['steam_uptodate']);
    
// If logged in = false
if(!isset($_SESSION['steamid'])) {
    echo '<meta http-equiv="refresh" content="0; url=login.php" />';
    

    $steamprofile = 0;
}  

// If login = true
else {
    include ('steamauth/userInfo.php');
    echo '<h1 class="headerright">You are logged in.</h1>';
    //Protected content
    echo "<div class='topwelcome'>Welcome back, " . $steamprofile['realname'] . " - " . $steamprofile['steamid'] . "</div>";
    logoutbutton();


} 
 ?>


