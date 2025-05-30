<?php

require "Connections/connection.php";

require "PHPMailer.php";
require "Exception.php";
require "SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;



if (empty($_POST["Email"])) {
    echo ("Please Enter a Email ");
} else if (empty($_POST["mobile"])) {
    echo ("Please Enter a mobile ");
} else if (empty($_POST["fname"])) {
    echo ("Please Enter a First Name ");
} else if (empty($_POST["lname"])) {
    echo ("Please Enter a Last Name ");
} else {

    $date =  date("Y-m-d");
    $membership_id = $_POST["uniqueId"];
    $Email = $_POST["Email"];
    $mobile = $_POST["mobile"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];

    



    Database::iud("INSERT INTO `memberships` (`membership_id`,`first_name`,`last_name`,`mobile`,`email`,`join_date`)
     VALUES('" . $membership_id . "','" . $Email . "','" . $mobile . "','" . $fname . "','" . $lname . "','" . $date . "');  ");


    $mail = new PHPMailer;
    $mail->IsSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'sankaudeshika123@gmail.com';
    $mail->Password = 'eesdvcpzbwylufww';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->setFrom('sankaudeshika123@gmail.com', 'Admin Verification');
    $mail->addReplyTo('sankaudeshika123@gmail.com', 'Admin Verification');
    $mail->addAddress($Email);
    $mail->isHTML(true);
    $mail->Subject = 'eShop Admin Loging Verification Code';
    $bodyContent = "<body style='font-family: Arial, sans-serif; background-color: #f2f2f2; padding: 30px; display: flex; justify-content: center; align-items: center; height: 100vh;'>

        <div style='background-color: #ffffff; border-radius: 15px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); padding: 30px; max-width: 400px; text-align: center;'>

            <img src='https://fitnessfirst.lk/Resources/images/LOGO/NewFitnessFirst_LOGO.png' style='width: 50px; height: 50px;'>

            <h2 style='color:rgb(203, 5, 5); margin-bottom: 10px;'>Thank You!</h2>

            <p style='font-size: 16px; color: #333; margin: 10px 0;'>
                We're so glad to have you as a member.
            </p>

            <p style='font-size: 14px; color: #777; margin: 20px 0;'>
                Your support means the world to us. Stay tuned for exciting updates and exclusive perks!
            </p>

            <p style='font-size: 14px; color: #777; margin: 20px 0;'>
                Pelase come visit FITNESFIRSTLK with this Email
            </p>

            <div style='margin-top: 30px;'>
                <p style='font-size: 14px; color: #999;'>Member ID: <strong>$membership_id</strong></p>
                <p style='font-size: 14px; color: #999;'>Joined: <strong>$date</strong></p>
            </div>

        </div>

    </body>>";
    $mail->Body    = $bodyContent;


    if (!$mail->send()) { // $mail -send. mata waraduna thana podk balanna oni aai code karaddi.
        echo ("verification code sending failed");
    } else {
        echo ("Please Check you Email");
    }
}
