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
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <?php require 'php/head.php'; ?>
    <link rel="stylesheet" href="css/leaders.css">
    <title>Leaderboard</title>
</head>
<body>
    <div class="container">
        <header>
            <?php require 'php/header.php'; ?>
        </header>
        <main>
            <section class="leaderboard">
                <h2>Blackjack: Top Winners</h2>
				<table class="w3-table-all w3-small">
				<?php require 'php/bjl2.php'; ?>
				</table>
                
            </section>
            <!-- Add more sections as needed -->
        </main>
        
        <footer>
            <?php require 'php/footer.php'; ?>
        </footer>
    </div>
</body>
</html>