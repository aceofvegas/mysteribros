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
    <?php require 'php/head.php'; ?>
    <title>Sports Home</title>
</head>
<body>
    <div class="container">
        <header>
            <?php require 'php/header.php'; ?>
        </header>
        <main>
            <section class="sports-header">
                <h2>Sports</h2>
                <div class="sports-grid">
                    <!-- Add your stories here -->
					<div class="sport">
                        <a class="imgclick" href="nfl"><img src="img/nfl/nfl1.JPEG" alt="NFL Image"></a>
                        <h3>NFL</h3>
                        <p>The ultimate thrill ride</p>
                        <a class="sportlink" href="nfl">More</a>
                    </div>
                    <div class="sport">
                        <a class="imgclick" href="mlb-home"><img src="img/mlb/mlb1.JPEG" alt="MLB Image"></a>
                        <h3>MLB</h3>
                        <p>Where the action never stops</p>
                        <a class="sportlink" href="mlb-home">More</a>
                    </div>
                    <!--<div class="sport">
                        <img src="img/cc1.png" alt="image">
                        <h3>NBA</h3>
                        <p>Where legends are born</p>
                        <a class="sportlink" href="nba.php">More</a>
                    </div>
                    <div class="sport">
                        <img src="img/cc1.png" alt="image">
                        <h3>Soccer</h3>
                        <p>The world’s game</p>
                        <a class="sportlink" href="soccer.php">More</a>
                    </div> -->
                </div>
            </section>
            <!-- Add more sections as needed -->
        </main>
        
        <footer>
            <?php require 'php/footer.php'; ?>
        </footer>
    </div>
</body>
</html>