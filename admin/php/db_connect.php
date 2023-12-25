<?php
// Database credentials
$servername = "localhost";
$username = "u550041025_Vahi123";
$password = "KOU4=V3@oZ3";
$dbname = "u550041025_vahi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
