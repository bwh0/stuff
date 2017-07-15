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
    <a href="#home" class="w3-margin-left w3-bar-item w3-button"><b>GK</b> Daily Gossip</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right">
      <a href="#couples" class="w3-bar-item w3-button" onclick="window.location.href='/couples'">Couples</a>
      <a href="#school" class="w3-bar-item w3-button" onclick="window.location.href='/school'">School</a>
      <a href="#random" class="w3-bar-item w3-button w3-margin-right" onclick="window.location.href='/random'">Random</a>
    </div>
  </div>
</div>
</div>

<!-- Header -->

<br><br><br><br>
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
  <div class="w3-margin-top w3-center">
  <h2>Featured Article</h2>
  <h4>Goodbye!</h4>
	<p>June 8th 2017</p>
	<p>
The English Teacher Mrs Khan is leaving the school just before june to june.<br>
She will be leaving due to moving further... <a href="/school"><b>Read On</b></a>
	</p>
  </div>
</header>

<!-- Page content -->
<div class="content">

<h4>
<center>Any questions? admin@gossipking.ddns.net </center>
</h4>

<div class="w3-container w3-padding-32" id="contact">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-12">New to Gossip King!</h3>
    <p id="white">How secure is your password?</p>
    <form action="/checker/" target="_blank">
      <input class="w3-input" type="password" placeholder="Type Here" required name="pass">
      <button class="w3-button w3-black w3-section" type="submit">
        <i class="fa fa-paper-plane"></i>Is it Secure???
      </button>
    </form>
  </div>

</div>
<!-- Contact Section -->
  <div class="w3-container w3-padding-32" id="contact">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-12">Contact</h3>
    <p id="white">Get in touch for you to share your gossip</p>
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

<center><p>Designed and Coded by Imaad Farooqui and Bailey Harrison</p></center>
<center><p>&copy; Goss<a href="/serverinfo" style="text-decoration:none">ip</a> King</p></center>

</body>
</html>
