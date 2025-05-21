<?php
require "Connections/connection.php";

require "PHPMailer.php";
require "Exception.php";
require "SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;

$command = $_POST["Command"];

if ($command == "SendNoAnswerEmail") {
    $Order_id = $_POST["Eid"];

    $customer_rs = Database::search("SELECT * FROM `invoice`  INNER JOIN `customer` ON 
   `customer`.`Nic` = `invoice`.`Customer_Nic`
   WHERE `invoice`.`Order_id` =  '" . $Order_id . "' ");
    $customer_num = $customer_rs->num_rows;
    $customer_data = $customer_rs->fetch_assoc();



    $mail = new PHPMailer;
    $mail->IsSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'sankaudeshika123@gmail.com';
    $mail->Password = 'eesdvcpzbwylufww';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->setFrom('sankaudeshika123@gmail.com', 'Customer No Answer');
    $mail->addReplyTo('sankaudeshika123@gmail.com', 'Customer No Answer');
    $mail->addAddress($customer_data["Email"]);
    $mail->isHTML(true);
    $mail->Subject = 'No response from you';
    $bodyContent = ' <div style="background-color: black; color: white; border-radius: 50px; padding: 50px;">

    <div style="color: lightgreen;">
        <label style="font-size: 40px; font-family: cursive;" for="">Jain Naturals</label>
    </div>

    <div style="color: red; display:flex; justify-content: center;">
        <h1>Your product has returned</h1>
    </div>
<hr/>
    <div style="display: flex; justify-content: center;">
        <p>We are sorry that we are unable to deliver your product, our distributor has come to your home and tried to contact you. But due to some of your problems we are unable to contact you. Therefore, you have to contact someone from our company.</p>
    </div>

    <div style="display: flex; justify-content: center; margin-top: 50px;">
        <p>Please contact us</p>
    </div>

    <div>
        <label for="">JainNaturals@gmail.com</label>
    </div>
    <div>
        <label for="">85/5, Vihara Mawwatha, <br> Bellanwila, Boralesgamuwa, Sri Lanka</label>
    </div>
    <div>
        <label for="">070 646 4522</label>
    </div>
    <div>
        <label for="">JAIN Naturals</label>
    </div>

</div>';
    $mail->Body    = $bodyContent;

    if (!$mail->send()) { // $mail -send. mata waraduna thana podk balanna oni aai code karaddi.

        echo ("verification code sending failed");
    } else {
        Database::iud("UPDATE `invoice` SET `Status_Status_id` = 4 WHERE `Order_id` = '" . $Order_id . "' ");
        echo ("success");
    }
} else if ($command == "SendEmailMessage") {


    $Order_id = $_POST["Eid"];
    $Message = $_POST["Message"];

    $customer_rs = Database::search("SELECT * FROM `invoice`  INNER JOIN `customer` ON 
   `customer`.`Nic` = `invoice`.`Customer_Nic`
   WHERE `invoice`.`Order_id` =  '" . $Order_id . "' ");
    $customer_num = $customer_rs->num_rows;
    $customer_data = $customer_rs->fetch_assoc();



    $mail = new PHPMailer;
    $mail->IsSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'sankaudeshika123@gmail.com';
    $mail->Password = 'eesdvcpzbwylufww';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->setFrom('sankaudeshika123@gmail.com', 'Message from Jain Naturals');
    $mail->addReplyTo('sankaudeshika123@gmail.com', 'Message from Jain Naturals');
    $mail->addAddress($customer_data["Email"]);
    $mail->isHTML(true);
    $mail->Subject = 'Message from Jain Naturals';
    $bodyContent = ' <div style="background-color: black; color: white; border-radius: 50px; padding: 50px;">

    <div style="color: lightgreen;">
        <label style="font-size: 40px; font-family: cursive;" for="">Jain Naturals</label>
    </div>

    <div style="color: orange; display:flex; justify-content: center;">
        <h1>Message form Jain Naturals</h1>
    </div>
<hr/>
    <div style="display: flex; justify-content: center;">
    ' . $Message . '
          </div>

    <div style="display: flex; justify-content: center; margin-top: 50px;">
        <p>Please contact us</p>
    </div>

    <div>
        <label for="">JainNaturals@gmail.com</label>
    </div>
    <div>
        <label for="">85/5, Vihara Mawwatha, <br> Bellanwila, Boralesgamuwa, Sri Lanka</label>
    </div>
    <div>
        <label for="">070 646 4522</label>
    </div>
    <div>
        <label for="">JAIN Naturals</label>
    </div>

</div>';
    $mail->Body    = $bodyContent;

    if (!$mail->send()) { // $mail -send. mata waraduna thana podk balanna oni aai code karaddi.
        echo ("verification code sending failed");
    } else {
        echo ("success");
    }
} else if ($command == "SendRegisterEmail") {

    $email = $_POST["email"];


    $mail = new PHPMailer;
    $mail->IsSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'sankaudeshika123@gmail.com';
    $mail->Password = 'eesdvcpzbwylufww';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->setFrom('sankaudeshika123@gmail.com', 'New Registation');
    $mail->addReplyTo('sankaudeshika123@gmail.com', 'New Registation');
    $mail->addAddress($email);
    $mail->isHTML(true);
    $mail->Subject = 'New Registation';
    $bodyContent = ' <div style="background-color: black; color: white; border-radius: 50px; padding: 50px;">

    <div style="color: lightgreen;">
        <label style="font-size: 40px; font-family: cursive;" for="">Jain Naturals</label>
    </div>

    <div style="color: darkgreen; display:flex; justify-content: center;">
        <h1>Welcome to Jain Naturals</h1>
    </div>
<hr/>
    <div style="display: flex; justify-content: center;">
    <p>Dear Customer, <br/>
    We are very glad that you have come to avail our service. We are committed to providing you with our products of the highest quality
    </p>
          </div>

    <div style="display: flex; justify-content: center; margin-top: 50px;">
        <p>Thank You!</p>
    </div>

    <div>
        <label for="">JainNaturals@gmail.com</label>
    </div>
    <div>
        <label for="">85/5, Vihara Mawwatha, <br> Bellanwila, Boralesgamuwa, Sri Lanka</label>
    </div>
    <div>
        <label for="">070 646 4522</label>
    </div>
    <div>
        <label for="">JAIN Naturals</label>
    </div>

</div>';
    $mail->Body    = $bodyContent;

    if (!$mail->send()) { // $mail -send. mata waraduna thana podk balanna oni aai code karaddi.
        echo ("verification code sending failed");
    } else {
        echo ("success");
    }
} else if ($command == "SendBuyEmailMessage") {

    $Order_id = $_POST["Order_id"];

    $customer_rs = Database::search("SELECT * FROM `customer` INNER JOIN `invoice` ON
    `invoice`.`Customer_Nic` = `customer`.`Nic` INNER JOIN `product` ON
    `product`.`Product_id` = `invoice`.`Product_Product_id` INNER JOIN `paymentmethod` ON 
    `invoice`.`PaymentMethod` =`paymentmethod`.`pid`
     WHERE `invoice`.`Order_id` = '" . $Order_id . "' ");


    $customer_num = $customer_rs->num_rows;
    for ($x = 0; $x < $customer_num; $x++) {
        $customer_data = $customer_rs->fetch_assoc();
        $mail = new PHPMailer;
    $mail->IsSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'sankaudeshika123@gmail.com';
    $mail->Password = 'eesdvcpzbwylufww';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->setFrom('sankaudeshika123@gmail.com', 'New Registation');
    $mail->addReplyTo('sankaudeshika123@gmail.com', 'New Registation');
    $mail->addAddress($customer_data["Email"]);
    $mail->isHTML(true);
    $mail->Subject = 'Purchesed Product';
    $bodyContent =




        '<div style="background-color: black; color: white; border-radius: 50px; padding: 50px;">

    <div style="color: lightgreen;">
        <label style="font-size: 40px; font-family: cursive;" for="">Jain Naturals</label>
    </div>

    <div style="color: darkgreen; display:flex; justify-content: center;">
        <h1>Thank you very much for purchasing our products</h1>
    </div>
    <hr />
    <div style="display: flex; justify-content: center;">
        <p>Dear Customer, <br />
            Thank you very much for purchasing our product. We look forward to your feedback. Come back to shop with us
        </p>
    </div>

    <div style="color: darkslategray;">
        <h2>Prchesed Details</h2>
    </div>


<hr>
    <div>
        <span for="">Order Id = </span> <span>' . $customer_data["Order_id"] . '</span>
    </div>

    <div>
        <span for="">Product Name = </span> <span>' . $customer_data["Product_name"] . '</span>
    </div>

    <div>
        <span for=""> quantity = </span> <span>' . $customer_data["qty"] . '</span>
    </div>

    <div>
        <span for=""> Purchesed Date Time = </span> <span>' . $customer_data["Purchesed_datetime"] . '</span>
    </div>

    <div>
        <span for=""> Customer Name = </span> <span>' . $customer_data["First_name"] . " " . $customer_data["Last_name"] . '</span>
    </div>

    <div>
        <span for=""> Customer Nic = </span> <span>' . $customer_data["Nic"] . '</span>
    </div>

    <div>
        <span for=""> Sub Total = </span> <span>' . $customer_data["Sub_Total"] . '</span>
    </div>

    <div>
        <span for=""> Delevery fee = </span> <span>' . $customer_data["Delevery_Cost"] . '</span>
    </div>

    <div>
        <span for=""> Total Cost = </span> <span>' . $customer_data["Total_Cost"] . '</span>
    </div>

    <div>
    <span for=""> Payment Method = </span> <span style="color:red">' . $customer_data["method"] . '</span>
    </div>



    <div style="display: flex; justify-content: center; margin-top: 50px;">
        <p>Thank You!</p>
    </div>

    <div>
        <label for="">JainNaturals@gmail.com</label>
    </div>
    <div>
        <label for="">85/5, Vihara Mawwatha, <br> Bellanwila, Boralesgamuwa, Sri Lanka</label>
    </div>
    <div>
        <label for="">070 646 4522</label>
    </div>
    <div>
        <label for="">JAIN Naturals</label>
    </div>

</div>';
    $mail->Body    = $bodyContent;

    if (!$mail->send()) { // $mail -send. mata waraduna thana podk balanna oni aai code karaddi.
        echo ("verification code sending failed");
    } else {
        echo ("success");
    }

    }
}
