<?php
// Initialize the session
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login");
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

$userid = $_SESSION["username"]
?>

<html>
<head>
<?php require 'php/head.php'; ?>
<title>Blackjack: High Roller</title>

<script src="js/bj-hr.js"></script>
<link rel="stylesheet" href="css/bj-mobile.css">

</head>
<header>
<?php require 'php/header.php'; ?>
</header>
<body>
<div id="container">
  
  <div id="content">
    <div id="main">
        <h2>Blackjack: High Roller</h2>
        <p>Still a work in progress with minor bugs:</p>
        <p>Bug: dealer sometimes draws while player is drawing. Dealer should only draw after player finishes</p>
        
        <p>Bug: if player draws blackjack it wont end game</p>
        <h6 id="min_bet">Min bet for this table is $2500</h6>


        <div id="game-container">
		<div id="p-bet">Bet Size: $<span id="cur-bet">0</span> </div>
        <!-- (A) DEALER -->
        <!-- (A1) DEALER'S POINTS + STAND -->
        <div id="deal-data">
        <span id="deal-stand">STAND</span>
        Dealer's Hand - <span id="deal-points"></span>
        </div>

        <!-- (A2) DEALER'S CARDS -->
        <div id="deal-cards"></div>

        <!-- (B) PLAYER -->
        <!-- (B1) PLAYERS'S POINTS + STAND -->
        <div id="play-data">
        <span id="play-stand">STAND</span>
        Your Hand - <span id="play-points">0</span>
        </div>

        <!-- (B2) PLAYER'S CARDS -->
        <div id="play-cards"></div>

        <!-- (C) PLAY! -->
        <div id="play-control">
            <!-- (C1) START -->
            <input type="button" id="playc-start" value="Play!">

            <!-- (C2) HIT OR STAND -->
            <input type="button" id="playc-hit" value="Hit">
            <input type="button" id="playc-stand" value="Stand">
            <input type="button" id="bet-up" value="+">
            <input type="button" id="bet-down" value="-">
        </div>

        <!-- Track-->
        <div id="bank"> Account: $<span id="player-bank"></span> <input type="button" id="refresh-bal" value="🔄"></div>
		</div>
    </div>
  </div>
  <footer id="footer">
    <?php require 'php/footer.php'; ?>
  </footer>
</div>
</body>
</html>