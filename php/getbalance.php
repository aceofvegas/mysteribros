<?php
// Start the session
session_start();
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mb3";

// Create a PDO object with the database connection string
$pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

// Set the PDO error mode to exception
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Get the user's id from the parameter
$user_id = $_SESSION["username"];
//echo $user_id;
// Prepare and execute the query
$sql = "SELECT balance FROM users WHERE username = :user_id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(":user_id", $user_id);
$stmt->execute();
header('Content-Type: application/json');
// Fetch the result and display it
$result = $stmt->fetch(PDO::FETCH_ASSOC);
if ($result) {
  // Output the balance of the user
  $resp = $result["balance"];
  echo json_encode($resp);
} else {
  // No user found with that id
  echo $user_id . " not found";
}

// Close the connection
$stmt = null;
$pdo = null;
?>
