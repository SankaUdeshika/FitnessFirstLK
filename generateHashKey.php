<?php
// // Sandbox Credentials
// $merchant_id = "561794519801"; // replace with your sandbox merchant ID
// $secret_key = "02588ab1-08fb-49a4-a233-8b418730eee0"; // replace with your sandbox secret key

// // Transaction Details
// $order_id = uniqid(); // unique order ID
// $amount = "1000.00";
// $currency = "LKR";

// // Generate hash
// $hash_string = $merchant_id . $order_id . $amount . $currency . strtoupper(md5($secret_key));
// $hash = strtoupper(md5($hash_string));

// echo($hash);

if ($_POST['status_code'] == '1') {
    echo "<h2>✅ Payment Successful!</h2>";
    echo "<p>Order ID: " . $_POST['order_id'] . "</p>";
    echo "<p>Transaction ID: " . $_POST['transaction_id'] . "</p>";
    echo "<p>Paid Amount: " . $_POST['amount'] . " " . $_POST['currency'] . "</p>";
} else {
    echo "<h2>❌ Payment Failed</h2>";
}
