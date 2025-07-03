
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Coming Soon</title>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;600&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      padding: 0;
      background-color: #ffffff;
      font-family: 'Raleway', sans-serif;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      color: #333;
    }

<?php

require "Connections/connection.php";

require "PHPMailer.php";
require "Exception.php";
require "SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
// /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//decode & get POST parameters 
$payment = base64_decode($_POST["payment"]);
$signature = base64_decode($_POST["signature"]);
$custom_fields = base64_decode($_POST["custom_fields"]);


//load public key for signature matching 
$publickey = "-----BEGIN PUBLIC KEY-----
MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCeD0SNdOEvjrI9GU9+cNUqyl9t
IyqaBpTUjMeJrySuqLvy64bZQ5AVxwyHHRmNamAPAb4tY5inEzibxJOxgqbkVZFi
ojAzedZ4ykjJ/NOezQ3e0qOPeHk0KrktA6uKFOgokL2x63i2nf8vMhBzY8IaFABS
rM0GkeYmBpmZ85rk3wIDAQAB
-----END PUBLIC KEY-----";

//Decrypt data 
openssl_public_decrypt($signature, $value, $publickey);

//Check signature status (Default False) 
$signature_status = false;

if ($value == $payment) {
    $signature_status = true;
}

//get payment response in segments 
//payment format: order_id|order_refference_number|date_time_transaction|payment_gateway_used|status_code|comment; 
$responseVariables = explode('|', $payment);

if ($signature_status == true) {


    if ($_POST['status_code'] == '0') { // trasaction Success
        //display values
        // echo ("Working");
        // echo ("</br>");
        // echo $signature_status;
        $custom_fields_varible = explode('|', $custom_fields);
        // var_dump($custom_fields_varible);
        // echo '<br/>';
        // var_dump($responseVariables);

        $date =  date("Y-m-d");
        $membership_id = $custom_fields_varible[4];
        $Email = $custom_fields_varible[0];
        $mobile = $custom_fields_varible[1];
        $fname = $custom_fields_varible[2];
        $lname = $custom_fields_varible[3];

        Database::iud("INSERT INTO `memberships` (`membership_id`,`first_name`,`last_name`,`mobile`,`email`,`join_date`)
     VALUES('" . $membership_id . "','" . $Email . "','" . $mobile . "','" . $fname . "','" . $lname . "','" . $date . "');  ");

        $mail = new PHPMailer;
        $mail->IsSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'fflkcolombo@gmail.com';
        $mail->Password = 'dqdqlyurxaejbuuy';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->setFrom('fflkcolombo@gmail.com', 'Membership Purchasing');
        $mail->addReplyTo('fflkcolombo@gmail.com', 'Membership Purchasing');
        $mail->addAddress($Email);
        $mail->isHTML(true);
        $mail->Subject = 'Thank you for Purchasing Membership';
        $bodyContent = "<body style='font-family: Arial, sans-serif; background-color: #f2f2f2; padding: 30px; display: flex; justify-content: center; align-items: center; height: 100vh;'>

        <div style='background-color:rgba(8, 8, 8, 0.61); border-radius: 15px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); padding: 30px; max-width: 400px; text-align: center;'>

            <img src='https://fitnessfirst.lk/img/logo.png' style='width: 80%; height: auto;'>

            <h2 style='color:rgb(203, 5, 5); margin-bottom: 10px;'>Thank You!</h2>

            <p style='font-size: 16px; color:rgb(255, 255, 255); margin: 10px 0;'>
                We're so glad to have you as a member.
            </p>

            <p style='font-size: 14px; color:rgb(255, 255, 255); margin: 20px 0;'>
                Your support means the world to us. Stay tuned for exciting updates and exclusive perks!
            </p>

            <p style='font-size: 14px; color:rgb(255, 255, 255); margin: 20px 0;'>
                Pelase come visit FITNESFIRSTLK with this Email
            </p>

            <div style='margin-top: 30px;'>
                <p style='font-size: 14px; color:rgb(255, 255, 255);;'>Member ID: <strong>$membership_id</strong></p>
                <p style='font-size: 14px; color:rgb(255, 255, 255);'>Joined: <strong>$date</strong></p>
            </div>
        </div>
    </body>";
        $mail->Body    = $bodyContent;


        if (!$mail->send()) {
            echo ("verification code sending failed");
        } else {
            echo "
        <body style='font-family: Arial, sans-serif; background-color: #f2f2f2; padding: 30px; display: flex; justify-content: center; align-items: center; height: 100vh;'>

        <div style='background-color:rgba(8, 8, 8, 0.61); border-radius: 15px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); padding: 30px; max-width: 400px; text-align: center;'>

            <img src='https://fitnessfirst.lk/img/logo.png' style='width: 80%; height: auto;'>

            <h2 style='color:rgb(255, 255, 255); margin-bottom: 10px;'>Thank You!</h2>

            <p style='font-size: 16px; color: rgb(245, 245, 245); margin: 10px 0;'>
                We're so glad to have you as a member.
            </p>

            <p style='font-size: 14px; color: rgb(245, 245, 245); margin: 20px 0;'>
                Your support means the world to us. Stay tuned for exciting updates and exclusive perks!
            </p>

            <p style='font-size: 14px; color: rgb(245, 245, 245); margin: 20px 0;'>
                We sent your Membership Details to your Email. Please Check it out
            </p>


    .container {
      text-align: center;
      padding: 2rem;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
      border-radius: 12px;
      background-color: #fff;
      max-width: 500px;
    }

    h1 {
      font-size: 3rem;
      font-weight: 600;
      margin-bottom: 0.5rem;
      color: #2c3e50;
    }

    p {
      font-size: 1.2rem;
      font-weight: 300;
      color: #555;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Coming Soon</h1>
    <p>We’re working hard to bring something amazing. Stay tuned!</p>
  </div>
</body>
</html>
