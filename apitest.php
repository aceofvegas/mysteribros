<?php
// Initialize the session
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

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

<html>
<head>
<?php require 'php/head.php'; ?>
<title>Blackjack</title>

<script src="js/apitest.js"></script>
<link rel="stylesheet" href="css/bj-mobile.css">

</head>
<header>
<?php require 'php/header.php'; ?>
</header>
<body>
<div id="container">
  
  <div id="content">
    <div id="main">
        <h2>Testing: Stuff</h2>



        

        <!-- (B2) PLAYER'S CARDS -->
        <div id="balance"></div>

        <!-- (C) PLAY! -->
        <div id="play-control">
            <!-- (C1) START -->
            <input type="button" id="get-user" value="getUser">

            <!-- (C2) HIT OR STAND -->
            <input type="button" id="get-bal" value="getBalance">
            <input type="button" id="update-bal" value="updateBal">
			<input type="button" id="update-bal2" value="updateBal2">

        </div>

        <!-- Track-->
        <div id="bank"> Account: $<span id="player-bank"></span> </div>
		</div>
    </div>
  </div>
  <footer id="footer">
    <?php require 'php/footer.php'; ?>
  </footer>
</div>
</body>
</html>