<?php
// this page only for testing layout

function get_uid(){
    // Check if the user is logged in, if not then redirect him to login page
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        echo htmlspecialchars("Login");
    }
    else {
        echo htmlspecialchars($_SESSION["username"]); 
    }
}
?>
 
<!DOCTYPE html>
<head>
    <title>Welcome</title>
	<link rel="icon" type="image/x-icon" href="img/favi.png">
    <?php require 'php/head.php'; ?>
</head>
<body>
<div class="container">
<header>
	<?php require 'php/header.php'; ?>
</header>
	<div class="welcome-page">
	
    <h1 class="my-5">Hi, <b></b>. Welcome to our site.</h1>
    <p>
        <a href="reset-password.php" class="res-pass-btn">Reset Your Password</a>
        <a href="logout.php" class="logout-btn">Sign Out of Your Account</a>
    </p>
	
	<form method="post" action="php/getapikey.php">
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Get API Key" >
        </div>
    </form>
	<h2 class="yourkey" id="seeapi">Career blackjack earnings:
	</h2>
	</div>
<footer>
	<?php require 'php/footer.php'; ?>
</footer>
</div>
</body>
</html>