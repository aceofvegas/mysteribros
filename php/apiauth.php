<?php
//session_start();
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mb3";

// Create a PDO object with the database connection string
$db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

// Check if $_SERVER["HTTP_AUTHORIZATION"] exists
if (isset($_SERVER["HTTP_AUTHORIZATION"])) {
	// Get the Authorization header value
	$auth_header = $_SERVER["HTTP_AUTHORIZATION"];
	
	// Check if it starts with Bearer
	if (substr($auth_header, 0, 7) == "Bearer ") {
	// Extract the API key
	$api_key = substr($auth_header, 7);
	
	// Query the database to check if the API key exists and belongs to a user
	// Assume you have a PDO connection object $db
	$stmt = $db->prepare("SELECT username FROM users WHERE apiv1 = :api_key");
	$stmt->execute(array(
    ":api_key" => $api_key
	));
	$row = $stmt->fetch(PDO::FETCH_ASSOC);
	
	// If the API key is valid, set the user ID as a global variable or a session variable
	if ($row) {
    $user_id = $row["username"];
	//$_SESSION["username"] = $user_id;
    // Do something with the user ID, such as $_SESSION["user_id"] = $user_id;
	} else {
    // If the API key is invalid, return an error response
    http_response_code(401);
    echo json_encode(array(
	"error" => "Invalid API key"
    ));
    exit();
	}
	} else {
	// If the Authorization header is missing or malformed, return an error response
	http_response_code(400);
	echo json_encode(array(
    "error" => "Missing or malformed Authorization header"
	));
	exit();
	}
} else {
	echo json_encode(array(
    "error" => "error in Authorization header"
	));
}
?>
