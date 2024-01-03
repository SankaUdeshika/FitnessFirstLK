<?php
session_start();
require "Connections/connection.php";
$command = $_POST["command"];

$detialsarrey = array(
    'email' => 'sankaudeshika123@gmail.com', 'password' => '12345678'
);

$_SESSION["admin"] = $detialsarrey;

// admin change Password
if ($command == "adminChangePassword") {
    $curruntP = $_POST["curruntP"];
    $newPassword = $_POST["newPassword"];
    $RPassword = $_POST["RPassword"];

    if (empty($curruntP)) {
        echo ("Please Enter Currunt Password");
    } else 
    if (empty($newPassword)) {
        echo ("Please Enter new Password");
    } else 
    if (empty($RPassword)) {
        echo ("Please Repeat the Password");
    }else if ($curruntP == $_SESSION["admin"]["password"]) {
        if ($newPassword == $RPassword) {
            Database::iud("UPDATE `admin` SET `password` = '" . $newPassword . "' WHERE `email` = '" . $_SESSION["admin"]["email"] . "'");
            echo ("Suucces");
        } else {
            echo ("Dosen't match Your Repeat password. Pelase check again");
        }
    } else {
        echo ("Plese Check Your Currunt Password and Try again later");
    }
}
