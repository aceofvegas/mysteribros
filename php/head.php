<?php 
$maincss = "css/main.css";
$faviimg = "img/favi.png";
$darkmodejs = "js/darkmode.js";
function checkheads($var){
	if (file_exists($var)==false) {
	$var = "../" . $var;
		echo $var;
	} 
	else {
		echo $var;
	}
}

?>


<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/x-icon" href="<?php checkheads($faviimg); ?>">

<link rel="stylesheet" href="<?php checkheads($maincss); ?>">
<script src="<?php checkheads($darkmodejs); ?>"></script>