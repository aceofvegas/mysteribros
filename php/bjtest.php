<?php

function drawhbtn() {
	echo '<form method="post">';
    echo '<div class="form-group">';
    echo '<input type="submit" class="btn btn-primary" name="begingame">';
    echo '</div>';
    echo '</form>';
}

function begingame() {
	$gamestatus = 1;
	$pstand = 0;
	$dstand = 0;
	$count = 0;
	$aces = 0;
	$daces = 0;
	while ($gamestatus == 1){
		$count += 1;
		//player cards
		$pcard1 = rand(2,11);
		if ($pcard1 == 11) {
			$aces += 1;
		}
		$pcard2 = rand(2,11);
		if ($pcard2 == 11) {
			if ($aces > 0) {
				$pcard2 = 1;
			}
		}
		echo $pcard1 . " - " . $pcard2;
		$pc1 = $pcard1 + $pcard2;
		
		//dealer cards
		$dcard1 = rand(2,11);
		if ($dcard1 == 11) {
			$daces += 1;
		}
		$dcard2 = rand(2,11);
		if ($dcard2 == 11) {
			if ($daces > 0) {
				$dcard2 = 1;
			}
		}
		echo $dcard1 . " - " . $dcard2;
		$dc1 = $dcard1 + $dcard2;
		
		if ($count >= 3){
			$gamestatus = 0;
			
		}
	}
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
        .smreq{font: 10px sans-serif; color: red;}
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Game</h2>
        <p>Please fill this form to create an account.</p>
		<form method="post">
		<input type="submit" class="btn btn-primary" name="begingame">
		</form>
    </div>    
</body>
</html>