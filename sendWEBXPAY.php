<?php

$email = $_POST["email"];
$mobile = $_POST["mobile"];
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$address = $_POST["address"];
$membership_price = $_POST["membership_price"];
$membershipPackage_id = $_POST["membershipPackage_id"];
$unique_id = uniqid();

$membership_price = 10;



// unique_order_id|total_amount
$plaintext = $unique_id . '|' . $membership_price;

// (LIVE)
$publickey = "-----BEGIN PUBLIC KEY-----
MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCeD0SNdOEvjrI9GU9+cNUqyl9t
IyqaBpTUjMeJrySuqLvy64bZQ5AVxwyHHRmNamAPAb4tY5inEzibxJOxgqbkVZFi
ojAzedZ4ykjJ/NOezQ3e0qOPeHk0KrktA6uKFOgokL2x63i2nf8vMhBzY8IaFABS
rM0GkeYmBpmZ85rk3wIDAQAB
-----END PUBLIC KEY-----";
$secretKey  = "1031d8c6-74a5-43a5-b3c2-242dee4bf941";


// (SandBOx)
// $publickey = "-----BEGIN PUBLIC KEY-----
// MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCg4L6wWV9XNBvJEcqTnKQ1zIrp
// wH55aWFM9ycNTAOTsphrmPkp31lHsvS5J8XcyApElowps8uqVJoRNMjAAw2p0j61
// KD71eg9m7IFJoCPaMaLiU6WJ3ZelIsg0RxVf9a695Mxm8MlKMrESjnGjFD2fsM22
// Q3ZjLXgW5REL/3zPNwIDAQAB
// -----END PUBLIC KEY-----";
// $secretKey = "02588ab1-08fb-49a4-a233-8b418730eee0";

//load public key for encrypting
openssl_public_encrypt($plaintext, $encrypt, $publickey);

//encode for data passing
$payment = base64_encode($encrypt);

//checkout URL
//checkout URL LIVE
$url = 'https://webxpay.com/index.php?route=checkout/billing';

//checkout URL Staging
// $url = 'https://stagingxpay.info/index.php?route=checkout/billing';

//custom fields
//email|Mobile|FirstName|lastName|Membership ID
$custom_fields = base64_encode($email . '|' . $mobile . '|' . $fname . '|' . $lname . '|' . $unique_id . '|'. $membershipPackage_id);

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
                    <input type="hidden" name="process_currency" value="LKR"><br> <!-- currency value must be LKR or USD -->
                    <input type="hidden" name="cms" value="PHP">
                    custom: <input type="text" name="custom_fields" value="<?php echo $custom_fields; ?>">
                    <input type="hidden" name="enc_method" value="JCs3J+6oSz4V0LgE0zi/Bg==">
                    <br />
                    <!-- POST parameters -->
                    <input type="hidden" name="secret_key" value="<?php echo $secretKey ?>">
                    <input type="hidden" name="payment" value="<?php echo $payment; ?>">
                    <input type="submit" class="btn btn-outline-danger fs-1" value="Pay Now">
                </form>
            </div>
        </div>
    </div>
</body>

</html>