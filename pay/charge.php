<?php
$api_key = 'rzp_test_nRUCpBxtiAUmco';
$api_secret = '1xFc5ei1s3RMouHTYPUirakP';

$paymentId = $_POST['razorpay_payment_id'];

$ch = curl_init("https://api.razorpay.com/v1/payments/$paymentId");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERPWD, $api_key . ':' . $api_secret);
$response = curl_exec($ch);
$payment = json_decode($response);

if ($payment->status === 'captured') {
    // Payment successful, perform necessary actions
    echo 'Payment successful! Order ID: ' . $payment->order_id;
} else {
    // Payment failed, handle accordingly
    echo 'Payment failed! Order ID: ' . $payment->order_id;
}
?>
