<?php

//$connect = mysqli_connect("localhost","root","","onlineherbs");
$servername = "localhost";
$username = "olamzywe_olamzyweb";
$password = "Olamzyweb@17";
$dbname = "olamzywe_prepstack";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>