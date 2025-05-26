<?php
require "Connections/connection.php";

$location = $_POST["branch"];
$Time = $_POST["time"];
$packageName = $_POST["category"];
$duration = $_POST["membership"];


$package_rs = Database::search("SELECT * FROM `member_package` WHERE `location` = '" . $location . "' AND `workoutTime` = '" . $Time . "' AND `PacakageName` = '" . $packageName . "' AND `duration` = '" . $duration . "'  ");
$package_num = $package_rs->num_rows;


if ($package_num == 0) {
    echo ("No Infomations");
} else {
    $package_data  =  $package_rs->fetch_assoc();
    echo ($package_data["member_ship_id"]);
}
