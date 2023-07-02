<!DOCTYPE html>
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
    

?>
<html>

<head>
    <title>Cashfree-PG TestForm</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
    .btn-success {
        padding: 15px;
        transition: .2s ease-in-out 0s;
    }

    .btn-success:hover {
        cursor: pointer;
        transform: scale(1.025);
    }
    </style>
</head>

<?php 
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
}?>

<body>
    <br>
    <br>
    <div class="container fluid">
        <h1 align="center">Boonary Foundation Donation Payment</h1>
        <form id="redirectForm" method="post" action="request.php">
            <div class="form-group">

                <input type="hidden" class="form-control" name="appId" value="103633b5a716761111f65ed19f336301" />
            </div>
            <div class="form-group">
                <label>Order Id:</label><br>
                <input class="form-control" name="orderId" value="<?php echo $oid;?>"
                    placeholder="Enter Order ID here (Ex. order00001)" readonly />
            </div>
            <div class="form-group">
                <label>Order Amount:</label><br>
                <input class="form-control" name="orderAmount" value="<?php echo $amt?>" readonly />
            </div>
            <div class="form-group">
                <label>Order Currency:</label><br>
                <input class="form-control" name="orderCurrency" value="INR"
                    placeholder="Enter Currency here (Ex. INR)" />
            </div>
            <div class="form-group">
                <label>Order Note:</label><br>
                <input class="form-control" name="orderNote" placeholder="Enter Order Note here (Ex. Test order)" />
            </div>
            <div class="form-group">
                <label>Name:</label><br>
                <input class="form-control" name="customerName" placeholder="Enter your name here (Ex. John Doe)" />
            </div>
            <div class="form-group">
                <label>Email:</label><br>
                <input class="form-control" name="customerEmail"
                    placeholder="Enter your email address here (Ex. Johndoe@test.com)" />
            </div>
            <div class="form-group">
                <label>Phone:</label><br>
                <input class="form-control" name="customerPhone"
                    placeholder="Enter your phone number here (Ex. 9999999999)" />
            </div>
            <div class="form-group">

                <input type="hidden" class="form-control" name="returnUrl"
                    value="http://localhost/Donate_dashboard/checkout/response.php" />
            </div>
            <div class="form-group">

                <input type="hidden" class="form-control" name="notifyUrl"
                    value="http://localhost/Donate_dashboard/checkout/response2.php" />
            </div>
            <button type="submit" class="btn btn-success btn-block" value="Pay">Pay Now</button>
            <br>
            <br>
        </form>
    </div>
    <br>
    <br>
    <br>
    <br>


</body>

</html>