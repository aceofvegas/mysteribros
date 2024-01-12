<?php

$nav1 = "Home";
$nav2 = "About";
$nav3 = "Sports";
$nav4 = "Gaming";
$nav5 = "More";
$nav5_1 = "Arcade";
$nav5_2 = "About";
$nav5_3 = "Stats";

$link1 = "../index";  
$link2 = "../mailtest"; 
$link3 = "../sports";
$link4 = "../gaming";
$link5 = "../more"; 

$link6 = "../games";
$link7 = "../about";
$link8 = "../leaderboard"; 
?>


<div class="nav">
    <a id="menu1" href="<?php echo $link1; ?>"><?php echo $nav1; ?></a>
    
    <a id="menu3" href="<?php echo $link3; ?>"><?php echo $nav3; ?></a>
    <a id="menu4" href="<?php echo $link4; ?>"><?php echo $nav4; ?></a>
    <div class="dropdown">
        <button id="menu5" class="dropbtn"><?php echo $nav5; ?>
        <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
        <a id="more1" href="<?php echo $link6; ?>"><?php echo $nav5_1; ?></a>
        <a id="more2" href="<?php echo $link7; ?>"><?php echo $nav5_2; ?></a>
        <a id="more3" href="<?php echo $link8; ?>"><?php echo $nav5_3; ?></a>
        </div>              
    </div>
    <a id="menu6" href="../welcome.php"><b><?php get_uid(); ?></b></a>
    <button  id="dark-mode-button" onclick="toggleDarkMode()">💡</button>
</div>
