<?php
// Initialize the session
if (session_status() == PHP_SESSION_NONE) {
	session_start();
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

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Games</title>
	<?php require 'php/head.php'; ?>
	<link rel="stylesheet" href="css/gamepage.css">
</head>
<body>
    <div class="container">
        <header>
            <?php require 'php/header.php'; ?>
        </header>
        <main>
            <section class="top-stories">
                <h2>Casino Games</h2>
                <ul id="gamelist">
    				<a href="blackjack">Blackjack: Regular</a>
    				<a href="blackjack-hr">Blackjack: High Roller</a>
					<a href="leaderboard">Leaderboards</a>
  				</ul>
            </section>
			<div>
</div>
            <!-- Add more sections as needed -->
        </main>
        
        <footer>
            <?php require 'php/footer.php'; ?>
        </footer>
    </div>
</body>
</html>