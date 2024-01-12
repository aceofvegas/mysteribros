<?php
session_start();
// Database credentials
$host = "localhost"; // The hostname of your database server
$user = "root"; // The username of your database user
$password = ""; // The password of your database user
$database = "mb3"; // The name of your database

// Create a PDO object with the database connection string
$pdo = new PDO("mysql:host=$host;dbname=$database", $user, $password);

// Set the PDO error mode to exception
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// A query to update the user's account balance
$sql = "UPDATE users SET balance = balance + :amount, bj_earnings = bj_earnings + :amount WHERE username = :username";

// Prepare the query statement
$stmt = $pdo->prepare($sql);

// Get the parameters from the request
$params = json_decode (file_get_contents ("php://input"), true); // get and decode parameters
$amount = $params ["bal"];
$username = $_SESSION["username"];
//$username = $params ["usr"];

// Bind the parameters to the statement
$stmt->bindParam(":amount", $amount);
$stmt->bindParam(":username", $username);

// Execute the query statement
$stmt->execute();

// Set the header to indicate JSON content type
header("Content-type: application/json");

// Check if the query was successful
if ($stmt->rowCount() > 0) {
  // Send a success message as a JSON object
  echo json_encode(array("message" => "Account balance updated"));
} else {
  // Send an error message as a JSON object
  echo json_encode(array("message" => "Account balance not updated"));
}

// Close the statement
$stmt = null;

// Close the connection
$pdo = null;
?>
