<!DOCTYPE html>
<html>
<title>Gossip King - Comments</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">

<style>

</style>

<body>

<!-- Navbar (sit on top) -->
<div class="sidebar">
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding-8 w3-card-2">
    <a href="/" class="w3-margin-left w3-bar-item w3-button"><b>GK</b> Comments</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="#couples" class="w3-bar-item w3-button" onclick="window.location.href='/couples'">Couples</a>
      <a href="#school" class="w3-bar-item w3-button" onclick="window.location.href='/school'">School</a>
      <a href="#random" class="w3-bar-item w3-button w3-margin-right" onclick="window.location.href='/random'">Random</a>
    </div>
  </div>
</div>
</div>

<!-- Page content -->
<div class="content">

  <div class="w3-container w3-padding-32">
    <br>
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-12">Commments</h3>
    
<?php
$servername = "localhost";
$username = "root";
$password = "Gossip666";
$dbname = "gossipking";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("ERROR: Contact an underpayed nub at harrison.bailey04@gmail.com to solve this issue.<br>Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, subject, message FROM feedback ORDER BY id DESC"; $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<h4>" . $row["subject"] .  "</h4>By " . $row["name"]. "<br>" . $row["message"] . "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
    
  </div>
<!-- End page content -->
</div>

<br>

<center><p>&copy; Goss<a href="/serverinfo" style="text-decoration:none">ip</a> King</p></center>


</body>
</html>
