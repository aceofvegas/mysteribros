<?php
// Start the session
session_start();
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mb3";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get the user's id from the parameter

$user_id = $_SESSION["username"];

// Prepare and execute the query
$sql = "SELECT balance FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();

// Fetch the result and display it
$result = $stmt->get_result();
if ($result->num_rows > 0) {
  // Output the balance of the user
  $row = $result->fetch_assoc();
  //echo "The balance of user " . $user_id . " is " . $row["balance"];
  $resp = $row["balance"];
  header('Content-Type: application/json');
  echo json_encode($resp);
} else {
  // No user found with that id
  echo $user_id . " not found";
}

// Close the connection
$stmt->close();
$conn->close();
?>
