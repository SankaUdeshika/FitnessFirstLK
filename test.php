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

            <p  style = 'color: #ff0000 ; font-weight : 'bold'; margin: 20px 0;'>
                Welcome to the FitnessFirstLK
            </p>
        </div>
 

        </br>
        
        <button style = 'background-color : 'red'; color :'white'' onclick = 'window.location  = 'index.php' '> Back to Home </button>

        </body>";
        }
    } else if ($_POST['status_code'] == '15') { // transaction Faild
        echo ("
    <body style='font-family: Arial, sans-serif; background-color: #f2f2f2; padding: 30px; display: flex; justify-content: center; align-items: center; height: 100vh;'>
        <div style='background-color:rgba(8, 8, 8, 0.61); border-radius: 15px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); padding: 30px; max-width: 400px; text-align: center;'>
            <h1 style='color: #f2f2f2;'>Something Wrong, Please Try again later. </h1>
            <p style='color:rgb(255, 0, 0); font-weight : bolder'>Your payment is Decline, please Try to connect with Fitness First or Your Bank Partner</p>
            <button style='background-color : red; color :white; font-weight: bolder;' onclick='window.location  = 'index.php' '> Back to Home </button>
        </div>
    </body>");
    }
} else {
    $custom_fields_varible = explode('|', $custom_fields);
    echo 'Error Validation';
    echo '<br/>';
}
