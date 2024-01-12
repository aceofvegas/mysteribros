
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
$sql = "UPDATE users SET apiv1 = :apikey WHERE username = :username";

// Prepare the query statement
$stmt = $pdo->prepare($sql);

// Generate a random string of 32 bytes
$random = openssl_random_pseudo_bytes(32);
// Convert it to hexadecimal format
$api_key = bin2hex($random);
$username = $_SESSION["username"];
//$username = $params ["usr"];

// Bind the parameters to the statement
$stmt->bindParam(":apikey", $api_key);
$stmt->bindParam(":username", $username);

// Execute the query statement
$stmt->execute();

// Set the header to indicate JSON content type
header("Content-type: application/json");

// Check if the query was successful
if ($stmt->rowCount() > 0) {
  // Send a success message as a JSON object
  //echo json_encode(array("message" => "Account balance updated"));
  echo $api_key;
  header("location: ../welcome");
} else {
  // Send an error message as a JSON object
  echo json_encode(array("message" => "Account balance not updated"));
}

// Close the statement
$stmt = null;

// Close the connection
$pdo = null;
?>
