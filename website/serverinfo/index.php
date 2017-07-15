<!DOCTYPE html>
<html>
<title>Server Info</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">


<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #cecece;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>

<?php
  $LANip = $_SERVER['SERVER_ADDR'];
  $WANip = gethostbyname('gossipking.ddns.net');
?>

<body>

<!-- Navbar (sit on top) -->
<div class="sidebar">
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding-8 w3-card-2">
    <a href="/" class="w3-margin-left w3-bar-item w3-button"><b>GK</b> Server</a>
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
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-12">IP Addresses</h3>
  
  
    <table>
      <tr>
        <td>
        <b>Wide Area Network (WAN) IPv4 Address</b>
        </td>
        <td>
          <?php
            echo $WANip;
          ?>
        </td>
      </tr>
      <tr>
        <td>
        <b>Local Area Network (LAN) IPv4 Address</b>
        </td>
        <td>
          <?php
            echo $LANip;
          ?>
        </td>
      </tr>
    </table>

  </div>
<!-- End page content -->
</div>

<br>

<center><p>&copy; Gossip King</p></center>


</body>
</html>
