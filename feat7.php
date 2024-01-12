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


<?php 
//fixdir("img/","tnnfavi.png");

$title = "iOS Pro Tips";
$subtitle = "Intro To iSH Linux Terminal On iPhone";
$author = "Daniel Roof";
$position = "Director of IT & Data Science";

$titfin = $title . ": " . $subtitle;
$afin = "By " . $author . ", " .$position;

$head = "php/head.php";
$header = "php/header.php";
$donate = "php/donate.php";
$footer = "php/footer.php";
$img = "../img/ish.JPG";
$txtfile = "txt/article7.txt";

require "custom-md.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php if (file_exists($head)) {
		include "php/head.php";
		} else {
			include "../php/head.php";
			} ?>
	<!-- edit the php files to change content -->
</head>
<body>
    <div class="container">
        <header>
			<?php if (file_exists($header)) {
				include "php/header.php";
				} else {
					include "../php/header.php";
					} ?>
        </header>
        
                    <!-- Add your stories here -->
                    <div class="article">
      <img src="<?php echo $img; ?>" alt="Article Image" class="article-image">
	</div>
      <div class="article-content">
        <h1 class="article-title"><?php echo $titfin; ?></h1>
        <h2 class="article-subtitle"><?php echo $afin; ?></h2>
		
        <?php
		// Get the contents of the text file as a string
		$text = file_get_contents ($txtfile);

		// Split the string by newline characters into an array of paragraphs
		$paragraphs = explode ("\n", $text);

		// Loop through the array and echo each paragraph inside a <p> tag
		foreach ($paragraphs as $line) {
			custoMd($line);
		}
		?>
        </div>
		
        <footer>
			<?php if (file_exists($footer)) {
				include "php/footer.php";
				} else {
					include "../php/footer.php";
					} ?>
        </footer>
    </div>
</body>
</html>