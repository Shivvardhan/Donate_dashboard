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


if(isset($_POST['submitButton2'])){

function generateOrderID($length = 8) {
  $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
  $orderId = '';

  $characterCount = strlen($characters);
  for ($i = 0; $i < $length; $i++) {
      $randomCharacter = $characters[rand(0, $characterCount - 1)];
      $orderId .= $randomCharacter;
  }

  return $orderId;
}

$oid = generateOrderID();


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
// $eligibility = $_POST['eligibility'];
$eligibility = $_POST['contactPermission'];


    

$sql = "INSERT INTO `donate`(`amount`, `full_name`, `dob`, `email`, `phone`, `country`, `state`, `city`, `address`, `pincode`, `pan`, `eligibilty`,`o_id`) VALUES ('$amt','$fname','$dob','$email','$phone','$country','$state','$city','$address','$pincode','$pan','$eligibility','$oid')";

if ($conn->query($sql) === TRUE) {
    

?><?php
$api_key = 'rzp_test_nRUCpBxtiAUmco';
$api_secret = '1xFc5ei1s3RMouHTYPUirakP';

$amount = 100; // amount in the smallest currency unit (e.g., paise for INR)
$currency = 'INR';
$receipt = 'order_receipt';

// Step 1: Create an order
$data = array(
    'amount' => $amount,
    'currency' => $currency,
    'receipt' => $receipt
);

$ch = curl_init('https://api.razorpay.com/v1/orders');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERPWD, $api_key . ':' . $api_secret);
$response = curl_exec($ch);
$order = json_decode($response);

// Step 2: Generate the payment form
$formHtml = '
<!DOCTYPE html>
<html>
<head>
    <title>Razorpay Payment Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <h4 class="card-title">Boonary Foundation Donation Payment</h4>
                        <h5 class="card-title">Make a Payment</h5>
                        <form action="charge.php" method="POST">
                            <div class="form-group">
                                <label for="amount">Amount (INR)</label>
                                <input type="text" class="form-control" id="amount" name="amount" value="' . $order->amount . '" readonly>
                            </div>
                           
                            <button type="submit" class="btn btn-primary">Pay with Razorpay</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
';
echo $formHtml;
?>

<?php 
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
}?>