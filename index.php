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
	<title>MysteriBros</title>
</head>
<body>
    <div class="container">
        <header>
            <?php include 'php/header.php'; ?>
        </header>
        <main>
            <section class="top-stories">
                <h2></h2>
                <div class="stories-grid">
                    <!-- Add your stories here -->
					<?php require 'php/featured.php'; ?>
                </div>
            </section>
            <!-- Add more sections as needed -->
        </main>
        
        <footer>
            <?php include 'php/footer.php'; ?>
        </footer>
    </div>
</body>
</html>