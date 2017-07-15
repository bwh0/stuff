<html>
<?php

//Message variables
$pass = htmlspecialchars($_GET["password"]);

//MySQL Variables
$servername = "localhost";
$username = "root";
$password = "Gossip666";
$dbname = "gossipking";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO ipaddress (ip) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $email, $subject, $comment);

// Execute

$stmt->execute();

// Close connections
$stmt->close();
$conn->close();

?>
</html>