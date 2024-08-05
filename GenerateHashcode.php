<?php
require "Connections/FlexConnection.php";

$array;
$merchant_id = "1221534";
$currency  = "LKR";
$order_id = $_POST["Order_id"];

$TotalPrice_rs = FlexDatabase::search("SELECT * FROM `order` WHERE `Order_id` = '" . $order_id . "' ");
$TotalPrice_Data = $TotalPrice_rs->fetch_assoc();

$amount = $TotalPrice_Data["Total"];

$merchant_secret = "NDAxMzk2MTY3MDM1MzMzNjA5NzYxNTMyNDc3MzkxMjYwODU3MzY2Mg==";

$hash = strtoupper(
    md5(
        $merchant_id .
            $order_id .
            number_format($amount, 2, '.', '') .
            // number_format($amount) .
            $currency .
            strtoupper(md5($merchant_secret))
    )
);


$array["Order_id"] = $order_id;
$array["hash"] = $hash;
$array["amount"] = $amount;
$array["merchant_secret"] = $merchant_secret;
$array["merchant_id"] = $merchant_id;

echo json_encode($array);
