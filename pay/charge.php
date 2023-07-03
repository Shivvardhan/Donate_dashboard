<?php

  include "../dbcon.php";
?>
<?php
$api_key = 'rzp_test_nRUCpBxtiAUmco';
$api_secret = '1xFc5ei1s3RMouHTYPUirakP';

if (isset($_POST['razorpay_payment_id'])) {
    $paymentId = $_POST['razorpay_payment_id'];
    

    $ch = curl_init("https://api.razorpay.com/v1/payments/$paymentId");
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERPWD, $api_key . ':' . $api_secret);
    $response = curl_exec($ch);
    $payment = json_decode($response);

    echo 'Payment API Response: ';
    // print_r($payment); // Debug output

    if (isset($payment->status) && $payment->status === 'captured') {
        // Payment successful, perform necessary actions
        $order_id = isset($payment->order_id) ? $payment->order_id : 'unknown';
        $o_id = $_POST['o_id'];
        echo 'Payment successful! Order ID: ' . $order_id;
        $sql = "UPDATE `donate` SET `Status`='success' WHERE o_id='$o_id'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
        header("Location: ../donate.php");
    } else {
        // Payment failed, handle accordingly
        echo 'Payment failed!';
    }
} else {
    echo 'Invalid payment details.';
}


?>