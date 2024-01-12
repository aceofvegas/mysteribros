<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mb3";

// Create a PDO object with the database connection string
$pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

// Set the PDO error mode to exception
//$pdo>setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//prepare the query to get the top 3 amounts and usernames
$query = $pdo->prepare("SELECT bj_earnings, username FROM users ORDER BY bj_earnings DESC LIMIT 3");

//execute the query
$query->execute();

//fetch the results as an associative array
$results = $query->fetchAll(PDO::FETCH_ASSOC);

//display the results in a leaderboard webpage

//echo "<h1>Leaderboard</h1>";
//echo "<table>";
echo "<tr><th>Rank</th><th>Username</th><th>Amount</th></tr>";

//loop through the results and display them in a table row
$rank = 1;
foreach ($results as $row) {
    echo "<tr>";
    echo "<td>" . $rank . "</td>";
    echo "<td>" . $row['username'] . "</td>";
    echo "<td>" . $row['bj_earnings'] . "</td>";
    echo "</tr>";
    $rank++;
}

//echo "</table>";

?>
