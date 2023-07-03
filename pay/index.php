<?php
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
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="dob">dob</label>
                                <input type="date" class="form-control" id="dob" name="dob" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address" name="address" required>
                            </div>
                            <div class="form-group">
                                <label for="city">city</label>
                                <input type="text" class="form-control" id="city" name="city" required>
                            </div>
                            <div class="form-group">
                                <label for="state">state</label>
                                <input type="text" class="form-control" id="state" name="state" required>
                            </div>
                            <div class="form-group">
                                <label for="pincode">pincode</label>
                                <input type="number" class="form-control" id="pincode" name="pincode" required>
                            </div>
                            <div class="form-group">
                                <label for="mobile">Mobile Number</label>
                                <input type="tel" class="form-control" id="mobile" name="mobile" required>
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
