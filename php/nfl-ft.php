<?php 
require 'simplify.php';
$art1 = "nfl/Bills-vs-Jets";
$art2 = "nfl/nfl-opener";

$main_1 = [
	"head" => getTitle(file($art1 . ".php")),
	"subhead" => getSubTitle(file($art1 . ".php")),
	"imgurl" => getImg(file($art1 . ".php")),
	"msurl" => $art1,
];

$main_2 = [
	"head" => getTitle(file($art2 . ".php")),
	"subhead" => getSubTitle(file($art2 . ".php")),
	"imgurl" => getImg(file($art2 . ".php")),
	"msurl" => $art2,
];



// ------------------------ //


function dispmain($arrayvar) {
	echo '<div class="story">';
	echo '<img src="' . $arrayvar['imgurl'] .'" alt="image">';
	echo '<h3>' . $arrayvar['head'] . '</h3>';
	echo '<p>' . $arrayvar['subhead'] . '</p>';
	echo '<a href="' . $arrayvar['msurl'] .'">Read More</a>';
	echo '</div>';
}
// setup html layout
echo '<section class="top-stories">';
echo '<h2>Featured</h2>';
echo '<div class="stories-grid">';
//Main story 1 (at top)//
dispmain($main_1);

//Main story 2 //
dispmain($main_2);

echo '</div>';
echo '</section>';
?>