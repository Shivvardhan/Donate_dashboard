<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sanju";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$amt = $_POST['amount'];
$fname = $_POST['fname'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$country = $_POST['country'];
$state = $_POST['state']; 
$city = $_POST['city'];
$address = $_POST['address'];
$pincode = $_POST['pincode'];
$pan = $_POST['pan'];
$eligibility = $_POST['eligibility'];


if(isset($_POST['submitButton2'])){
    

$sql = "INSERT INTO `donate`(`amount`, `full_name`, `dob`, `email`, `phone`, `country`, `state`, `city`, `address`, `pincode`, `pan`, `eligibilty`) VALUES ('$amt','$fname','$dob','$email','$phone','$country','$state','$city','$address','$pincode','$pan','$eligibility')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Gateway</title>
</head>

<body>
    <h1>Payment</h1>
</body>

</html>