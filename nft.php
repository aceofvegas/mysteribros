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
    <title>NFTs</title>
</head>
<body>
    <div class="container">
        <header>
            <?php require 'php/header.php'; ?>
        </header>
        <main>
                <div class="gallery"> 
         <a href="https://opensea.io/assets/ethereum/0x495f947276749ce646f68ac8c248420045cb7b5e/54816401308963340213612426624523979800551634905457998298813506002622124916737"><img src="https://i.seadn.io/gcs/files/1bb94ae2c815e74b62c647dc9deb0bda.png?auto=format&dpr=1&w=1000" alt="#1"></a>
         <a href="https://opensea.io/assets/ethereum/0x495f947276749ce646f68ac8c248420045cb7b5e/54816401308963340213612426624523979800551634905457998298813506003721636544513"><img src="https://i.seadn.io/gcs/files/319b0a2cd69fd378216fa22daa89062c.png?auto=format&dpr=1&w=640" alt="#2"></a> 
         <a href="https://opensea.io/assets/ethereum/0x495f947276749ce646f68ac8c248420045cb7b5e/54816401308963340213612426624523979800551634905457998298813506004821148172289"><img src="https://i.seadn.io/gcs/files/1c4a62fa0d2adfcaf37c71533c972498.png?auto=format&dpr=1&w=640" alt="#3"></a> 
         <a href="https://opensea.io/assets/ethereum/0x495f947276749ce646f68ac8c248420045cb7b5e/54816401308963340213612426624523979800551634905457998298813506005920659800065"><img src="https://i.seadn.io/gcs/files/a128868fa61e9e45057a0c4a930500f6.png?auto=format&dpr=1&w=640" alt="#4"></a> 
         <a href="https://opensea.io/assets/ethereum/0x495f947276749ce646f68ac8c248420045cb7b5e/54816401308963340213612426624523979800551634905457998298813506007020171427841"><img src="https://i.seadn.io/gcs/files/ca2bdd40ad70b219a73ac7f3ca4aa068.png?auto=format&dpr=1&w=640" alt="#5"></a> 
         <a href="https://opensea.io/assets/ethereum/0x495f947276749ce646f68ac8c248420045cb7b5e/54816401308963340213612426624523979800551634905457998298813506008119683055617"><img src="https://i.seadn.io/gcs/files/40b49706b4ef7e1aa111192823f15b69.png?auto=format&dpr=1&w=384" alt="#6"></a> 
         <a href="https://opensea.io/assets/ethereum/0x495f947276749ce646f68ac8c248420045cb7b5e/54816401308963340213612426624523979800551634905457998298813506009219194683393"><img src="https://i.seadn.io/gcs/files/520946e0d684a38142d8e4c0d19cd174.png?auto=format&dpr=1&w=640" alt="#7"></a> 
         <a href="https://opensea.io/assets/ethereum/0x495f947276749ce646f68ac8c248420045cb7b5e/54816401308963340213612426624523979800551634905457998298813506010318706311169"><img src="https://i.seadn.io/gcs/files/b16fa3827038db0c6e44a3236561d432.png?auto=format&dpr=1&w=640" alt="#8"></a> 
         <a href="https://opensea.io/assets/ethereum/0x495f947276749ce646f68ac8c248420045cb7b5e/54816401308963340213612426624523979800551634905457998298813506011418217938945"><img src="https://i.seadn.io/gcs/files/3a60f47b08372deb24901df54a1ae22c.png?auto=format&dpr=1&w=640" alt="#9"></a> 
         <a href="https://opensea.io/assets/ethereum/0x495f947276749ce646f68ac8c248420045cb7b5e/54816401308963340213612426624523979800551634905457998298813506012517729566721"><img src="https://i.seadn.io/gcs/files/ff26da66a9b9998ef52ca18b9f8d99b9.png?auto=format&dpr=1&w=640" alt="#10"></a> 
         <a href="https://opensea.io/assets/ethereum/0x495f947276749ce646f68ac8c248420045cb7b5e/54816401308963340213612426624523979800551634905457998298813506013617241194497"><img src="https://i.seadn.io/gcs/files/aec3fc9a271cee03b6a1ae6d0fdf17ce.png?auto=format&dpr=1&w=640" alt="#11"></a> 
         <a href="https://opensea.io/assets/ethereum/0x495f947276749ce646f68ac8c248420045cb7b5e/54816401308963340213612426624523979800551634905457998298813506014716752822273"><img src="https://i.seadn.io/gcs/files/68c1ff71c1f162a0a004bde268973240.png?auto=format&dpr=1&w=640" alt="#12"></a> 
         <a href="https://opensea.io/assets/ethereum/0x495f947276749ce646f68ac8c248420045cb7b5e/54816401308963340213612426624523979800551634905457998298813506015816264450049"><img src="https://i.seadn.io/gcs/files/271d966a53284d0722cbad60061d67bf.png?auto=format&dpr=1&w=640" alt="#13"></a> 
         
       </div>
            <!-- Add more sections as needed -->
        </main>
        
        <footer>
            <?php require 'php/footer.php'; ?>
        </footer>
    </div>
</body>
</html>