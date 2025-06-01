<?php

require "Connections/connection.php";

if (empty($_POST["location"])) {
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

    $location = $_POST["location"];
    $membership_price = $_POST["membership_price"];
    $packageName = $_POST["packageName"];
    $workoutTime = $_POST["workoutTime"];
    $duration = $_POST["duration"];

    Database::iud("INSERT INTO `member_package`(`location`, `membership_price`, `PacakageName`, `workoutTime`, `duration`)VALUES('$location', '$membership_price', '$packageName', '$workoutTime', '$duration')");

    echo ("Success");
}
