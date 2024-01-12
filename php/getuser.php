<?php
// Start the session
session_start();
// get username
$userid = $_SESSION["username"];
header("Content-Type: application/json");
echo json_encode($userid);
?>