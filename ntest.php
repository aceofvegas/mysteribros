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
    <?php include 'php/head.php'; ?>
	<title>NTest</title>
</head>
<body>
    <div class="container">
        <header>
            <?php include 'php/header.php'; ?>
            
        </header>
        <main>
            <section class="sports-header">
                <h2>Sports</h2>
                <div class="sports-grid">
                    <!-- Add your stories here -->
                    <div class="sport">
                        <img src="img/cc1.png" alt="image">
                        <h3>MLB</h3>
                        <p>Where the action never stops</p>
                        <a href="mlb.html">More</a>
                    </div>
                    <div class="sport">
                        <img src="img/cc1.png" alt="image">
                        <h3>NFL</h3>
                        <p>The ultimate thrill ride</p>
                        <a href="nfl.html">More</a>
                    </div>
                    <div class="sport">
                        <img src="img/cc1.png" alt="image">
                        <h3>NBA</h3>
                        <p>Where legends are born</p>
                        <a href="nba.html">More</a>
                    </div>
                    <div class="sport">
                        <img src="img/cc1.png" alt="image">
                        <h3>Soccer</h3>
                        <p>The world’s game</p>
                        <a href="soccer.html">More</a>
                    </div>
                </div>
            </section>
            <!-- Add more sections as needed -->
        </main>
        
        <?php include 'php/footer.php'; ?>
    </div>
</body>
</html>