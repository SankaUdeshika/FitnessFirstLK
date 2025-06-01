<?php

require "Connections/connection.php";


if (empty($_POST["member_ship_id"])) {
    echo ("Please provide Membership ID");
} else if (empty($_POST["location"])) {
    echo ("Please provide Location");
} else if (empty($_POST["membership_price"])) {
    echo ("Please provide Membership Price");
} else if (empty($_POST["packageName"])) {
    echo ("Please provide Package Name");
} else if (empty($_POST["workoutTime"])) {
    echo ("Please provide Workout Time");
} else if (empty($_POST["duration"])) {
    echo ("Please provide Duration");
} else {
 
    $member_ship_id = $_POST["member_ship_id"];
    $location = $_POST["location"];
    $membership_price = $_POST["membership_price"];
    $packageName = $_POST["packageName"];
    $workoutTime = $_POST["workoutTime"];
    $duration = $_POST["duration"];


    Database::iud("UPDATE `member_package` 
        SET 
            location = '$location',
            membership_price = '$membership_price',
            PacakageName = '$packageName',
            workoutTime = '$workoutTime',
            duration = '$duration'
        WHERE 
           member_ship_id = '$member_ship_id'");

    echo ("Success");
}
