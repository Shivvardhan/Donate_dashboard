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



$mode = "PROD"; //<------------ Change to TEST for test server, PROD for production

extract($_POST);
  $secretKey = "3a3a08419f85429e0ff35c096a13476b0b58d490";
  $postData = array( 
  "appId" => $appId, 
  "orderId" => $orderId, 
  "orderAmount" => $orderAmount, 
  "orderCurrency" => $orderCurrency, 
  "orderNote" => $orderNote, 
  "customerName" => $customerName, 
  "customerPhone" => $customerPhone, 
  "customerEmail" => $customerEmail,
  "returnUrl" => $returnUrl, 
  "notifyUrl" => $notifyUrl,
);
ksort($postData);
$signatureData = "";
foreach ($postData as $key => $value){
    $signatureData .= $key.$value;
}
$signature = hash_hmac('sha256', $signatureData, $secretKey,true);
$signature = base64_encode($signature);

if ($mode == "PROD") {
  $url = "https://www.cashfree.com/checkout/post/submit";
} else {
  $url = "https://test.cashfree.com/billpay/checkout/post/submit";
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