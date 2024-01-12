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
    <title>MLB</title>
</head>
<body>
    <div class="container">
        <header>
            <?php require 'php/header.php'; ?>
        </header>
        <main>
            <section class="top-stories">
                <h2>Coming soon...</h2>
                
            </section>
            <!-- Add more sections as needed -->
        </main>
        
        <footer>
            <?php require 'php/footer.php'; ?>
        </footer>
    </div>
</body>
</html>