<?php 
// custom markdown style parser 

// indicators // 
$indicateH1 = "#";
$indicateH2 = "##";
$indicateH3 = "###";

$indicateDash = "-";
$indicateNL = "---";
$indicateImg = "-img-";

function custoMd ($paragraph){
	//make all indicators available in function
	global $indicateH3,$indicateH2,$indicateH1;
	global $indicateDash,$indicateNL,$indicateImg;
	// headings h1-h3//
	if (str_starts_with($paragraph, $indicateH3)) {
		$paragraph = substr($paragraph, 3);
		echo "<h3 class='article-text-h3'>$paragraph</h3>";
	}
	else if (str_starts_with($paragraph, $indicateH2)) {
		$paragraph = substr($paragraph, 2);
		echo "<h2 class='article-text-h2'>$paragraph</h2>";
	}
	else if (str_starts_with($paragraph, $indicateH1)) {
		$paragraph = substr($paragraph, 1);
		echo "<h1 class='article-text-h1'>$paragraph</h1>";
	}
	// format with image//
	else if (str_starts_with($paragraph, $indicateImg)) {
		$paragraph = substr($paragraph, 5);
		echo "<img class='article-md-img' src=$paragraph></img>";
	}
	// newline with 3 dash//
	else if (str_starts_with($paragraph, $indicateNL)) {
		echo "<br>";
	}
	// bullet point if starts with single dash//
	else if (str_starts_with($paragraph, $indicateDash)) {
		$paragraph = substr($paragraph, 1);
		echo "<p class='article-text-bull'>&bull; $paragraph</p>";
	}
	else {
		echo "<p class='article-text'>$paragraph</p>";
	}
}
?>