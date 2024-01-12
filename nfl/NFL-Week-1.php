<?php
require_once '../bin/markdown/Parser.php';
require_once '../bin/markdown/GithubMarkdown.php';

$txt_file = '../txt/nfl/week1-recap.md';

$parser = new cebe\markdown\GithubMarkdown();
$markdown = file_get_contents($txt_file);
$html = $parser->parse($markdown);


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

//fixdir("img/","tnnfavi.png");

$title = "NFL Week 1";
$subtitle = "Highlights From Opening Weekend";
$author = "Daniel Roof";
$position = "Director of IT & Data Science";
$filetime = "Edited: ".date("F d Y h:ia", filemtime($txt_file));

$titfin = $title . ": " . $subtitle;
$afin = "By " . $author . ", " .$position;

$head = "php/head.php";
$header = "php/header.php";
$footer = "php/footer.php";
$img = "../img/nfl/th.JPEG";

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>NFL Season Opener</title>
    <?php if (file_exists($head)) {
		include "php/head.php";
		} else {
			include "../php/head.php";
			} ?>
	<!-- edit the php files to change content -->
	<link rel="stylesheet" href="../css/articles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.8.0/styles/base16/phd.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.8.0/highlight.min.js"></script>
	<script>hljs.highlightAll();</script>
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
        <h2 class="nfl-subtitle"><?php echo $filetime; ?></h2>
			<div class="article-text">
        		<?php echo $html; ?>
			</div>
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