<html>
 <head>
  <title>Success!</title>
 </head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">

 <style>

body{
	background-color: #90EE90;
}


 </style>


 <body>

<!-- Navbar (sit on top) -->
<div class="sidebar">
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding-8 w3-card-2">
    <a href="#home" class="w3-margin-left w3-bar-item w3-button" onclick="window.location.href='/'"><b>GK</b> Daily Gossip</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="#couples" class="w3-bar-item w3-button" onclick="window.location.href='/couples'">Couples</a>
      <a href="#school" class="w3-bar-item w3-button" onclick="window.location.href='/school'">School</a>
      <a href="#random" class="w3-bar-item w3-button w3-margin-right" onclick="window.location.href='/random'">Random</a>
    </div>
  </div>
</div>
</div>


<?php

//Message variables
$name = htmlspecialchars($_GET["Name"]);
$email = htmlspecialchars($_GET["Email"]);
$subject = htmlspecialchars($_GET["Subject"]);
$comment = htmlspecialchars($_GET["Comment"]);

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
$stmt = $conn->prepare("INSERT INTO feedback (name, contact, subject, message) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $email, $subject, $comment);

// Execute

$stmt->execute();

// Close connections
$stmt->close();
$conn->close();

?>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<center><img id ="submitted" src="submitted.jpg" alt="Success Image"></center>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<center><p>&copy; Goss<a href="/serverinfo" style="text-decoration:none">ip</a> King</p></center>
 </body>
</html>
