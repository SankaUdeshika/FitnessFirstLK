<?php

$email = $_POST["email"];
$mobile = $_POST["mobile"];
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$address = $_POST["address"];
$membership_price = $_POST["membership_price"];
$unique_id = uniqid();


// unique_order_id|total_amount  (Live)
$plaintext = $unique_id . '|' . $membership_price;
$publickey = "-----BEGIN PUBLIC KEY-----
MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCeD0SNdOEvjrI9GU9+cNUqyl9t
IyqaBpTUjMeJrySuqLvy64bZQ5AVxwyHHRmNamAPAb4tY5inEzibxJOxgqbkVZFi
ojAzedZ4ykjJ/NOezQ3e0qOPeHk0KrktA6uKFOgokL2x63i2nf8vMhBzY8IaFABS
rM0GkeYmBpmZ85rk3wIDAQAB
-----END PUBLIC KEY-----";
$secretKey  = "1031d8c6-74a5-43a5-b3c2-242dee4bf941";




//load public key for encrypting 
openssl_public_encrypt($plaintext, $encrypt, $publickey);

//encode for data passing 
$payment = base64_encode($encrypt);

//checkout URL 
$url = 'https://webxpay.com/index.php?route=checkout/billing';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="John Doe">
    <title>WebXPay | Sample checkout form</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body style="background-color: black; display: flex; justify-content: center; align-items: center;  height: 100vh; width: 100%;">

    <div class="col-12">
        <div class="row">
            <div class="col-12 text-center text-white">
                <h1 class="fw-bold">Are You Sure to want to continue <b class="text-danger">Purchase</b>?</h1>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <form action="<?php echo $url; ?>" method="POST">
                    <input type="hidden" name="first_name" value="<?php echo $fname ?>"><br>
                    <input type="hidden" name="last_name" value="<?php echo $lname ?>"><br>
                    <input type="hidden" name="email" value="<?php echo $email ?>"><br>
                    <input type="hidden" name="contact_number" value="<?php echo $mobile ?>"><br>
                    <input type="hidden" name="address_line_one" value="<?php echo $address ?>"><br>
                    <input type="hidden" name="country" value="Sri Lanka"><br>
                    <input type="hidden" name="process_currency" value="LKR"><br>
                    <br /> <input type="hidden" name="cms" value="PHP">
                    <input type="hidden" name="enc_method" value="JCs3J+6oSz4V0LgE0zi/Bg==">
                    <br />

                    <!-- POST parameters -->
                    <input type="hidden" name="secret_key" value="1031d8c6-74a5-43a5-b3c2-242dee4bf941">
                    <input type="hidden" name="payment" value="<?php echo $payment; ?>">
                    <input type="hidden" name="return_url" value="https:/fitnessfirst.lk/responseWEBXPAY.php">
                    <input type="submit" class="btn btn-outline-danger fs-1" value="Pay Now">
                </form>
            </div>
        </div>
    </div>


</body>

</html>