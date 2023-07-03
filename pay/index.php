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

if (isset($_POST['submitButton2'])) {

    function generateOrderID($length = 8)
    {
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
    $eligibilty = "eligible";

    $sql = "INSERT INTO `donate`(`amount`, `full_name`, `dob`, `email`, `phone`, `country`, `state`, `city`, `address`, `pincode`, `pan`, `eligibilty`, `o_id`) VALUES ('$amt','$fname','$dob','$email','$phone','$country','$state','$city','$address','$pincode','$pan','$eligibilty','$oid')";

    if ($conn->query($sql) === TRUE) {
        $api_key = 'rzp_test_nRUCpBxtiAUmco';
        $api_secret = '1xFc5ei1s3RMouHTYPUirakP';

        $amount = 100*$amt ; // amount in the smallest currency unit (e.g., paise for INR)
    
        $currency = 'INR';
        $receipt = 'order_receipt';

        // Step 1: Create an order
        $data = array(
            'amount' => $amount ,
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
            <style>
    .razorpay-payment-button {
        background-color: #528FF0;
        color: #fff;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 4px;
        cursor: pointer;
    }
</style>
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
                                    <input type="text" class="form-control" id="amount" name="amount" value="' . $amt . '" readonly>
                                </div>
                                <input type="hidden" name="order_id" value="' . $order->id . '">
                                <script src="https://checkout.razorpay.com/v1/checkout.js"
                                        data-key="' . $api_key . '"
                                        data-amount="' . $order->amount . '"
                                        data-currency="' . $currency . '"
                                        data-order_id="' . $order->id . '"
                                        data-buttontext="Pay with Razorpay"
                                        data-name="Boonary Foundation Donation Payment"
                                        data-description="Make a Payment"
                                        data-prefill.name="' . $fname . '"
                                        data-prefill.email="' . $email . '"
                                        data-theme.color="#528FF0"
                                        data-prefill.method="card">
                                </script>
                                
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
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

