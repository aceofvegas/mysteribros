<?php 
require 'simplify.php';

$art1 = "nfl/Bills-vs-Jets";
$art2 = "tutorials/github-api-shortcut";
$art3 = "tutorials/ish-pt1";

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

$main_3 = [
	"head" => getTitle(file($art3 . ".php")),
	"subhead" => getSubTitle(file($art3 . ".php")),
	"imgurl" => getImg(file($art3 . ".php")),
	"msurl" => $art3,
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
dispmain($main_3);

echo '</div>';
echo '</section>';
?>