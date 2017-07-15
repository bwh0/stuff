<?php
$servername = "localhost";
$username = "root";
$password = "Gossip666";
$dbname = "gossipking";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("ERROR: Contact Bailey at harrison.bailey04@gmail.com to solve this issue.<br>Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, subject, message FROM feedback ORDER BY id DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br>Name: " . $row["name"]. "<br>Subject: " . $row["subject"]. "<br>Message: " . $row["message"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
