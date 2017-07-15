<!DOCTYPE html>
<html>


<title>Gossip King</title>
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
    <a href="#home" class="w3-margin-left w3-bar-item w3-button"><b>CSGO</b> Odds Up</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right">
      <a href="#couples" class="w3-bar-item w3-button" onclick="window.location.href='/cases'">Cases</a>
      <a href="#school" class="w3-bar-item w3-button" onclick="window.location.href='/inventory'">Inventory</a>
      <a href="#random" class="w3-bar-item w3-button w3-margin-right" onclick="window.location.href='/steamsignin'"><img width="300px" height="40px" src="https://i.imgur.com/8fRmdAO.jpg" /></a>
    </div>
  </div>
</div>
</div>

<!-- Header -->

<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
    <img class="gossip.jpg" width="1500" height="800">
  <div class="w3-display-middle w3-margin-top w3-center">
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>CSGO</b></span> <span class="w3-hide-small w3-text-red">Odds Up</span></h1>
  </div>
</header>
<!-- Page content -->
<div class="content">

<!-- Contact Section -->
  <div class="w3-container w3-padding-32" id="contact">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-12">Contact</h3>
    <p id="white">Get in touch for you to share your opinions on CSGO-oddsup!</p>
    <form action="/submit/" target="_blank">
      <input class="w3-input" type="text" placeholder="Name" required name="Name">
      <input class="w3-input w3-section" type="zztext" placeholder="Email or Phone" required name="Email">
      <input class="w3-input w3-section" type="text" placeholder="Subject" required name="Subject">
      <input class="w3-input w3-section" type="text" placeholder="Message" required name="Comment">
      <button class="w3-button w3-black w3-section" type="submit">
        <i class="fa fa-paper-plane"></i>SEND MESSAGE
      </button>
    </form>
  </div>

  </div>
<!-- End page content -->
</div>

<center><p>Designed and Coded by Josh Jones and Bailey Harrison</p></center>
<center><p>&copy; CSGO-oddsup</p></center>

</body>
</html>