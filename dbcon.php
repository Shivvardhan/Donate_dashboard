<?php
$servername = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "donate";


// Create connection
$conn = mysqli_connect($servername, $dbuser, $dbpassword, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//echo "Connected successfully";
?>