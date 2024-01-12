<?php

session_start();
// Database credentials
$host = "localhost"; // The hostname of your database server
$user = "root"; // The username of your database user
$password = ""; // The password of your database user
$database = "mb3"; // The name of your database

// Create a connection to the database
$con = mysqli_connect($host, $user, $password, $database);

// Check if the connection is successful
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

// A query to update the user's account balance
$sql = "UPDATE users SET balance = balance + ? WHERE username = ?";

// Prepare the query statement
$stmt = mysqli_prepare($con, $sql);

// Bind the parameters to the statement
mysqli_stmt_bind_param($stmt, "is", $amount, $username);

// Get the parameters from the request
$params = json_decode (file_get_contents ("php://input"), true); // get and decode parameters
$amount = $params ["bal"];
$username = $_SESSION["username"]
//$username = $params ["usr"];
// Execute the query statement
mysqli_stmt_execute($stmt);
// Set the header to indicate JSON content type
header("Content-type: application/json");
// Check if the query was successful
if (mysqli_stmt_affected_rows($stmt) > 0) {
  // Send a success message as a JSON object
  echo json_encode(array("message" => "Account balance updated"));
} else {
  // Send an error message as a JSON object
  echo json_encode(array("message" => "Account balance not updated"));
}

// Close the statement
mysqli_stmt_close($stmt);

// Close the connection
mysqli_close($con);
?>
