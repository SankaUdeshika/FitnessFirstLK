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
    } else if ($curruntP == $_SESSION["admin"]["password"]) {
        if ($newPassword == $RPassword) {
            Database::iud("UPDATE `admin` SET `password` = '" . $newPassword . "' WHERE `email` = '" . $_SESSION["admin"]["email"] . "'");
            echo ("Suucces");
        } else {
            echo ("Dosen't match Your Repeat password. Pelase check again");
        }
    } else {
        echo ("Plese Check Your Currunt Password and Try again later");
    }
} else if ($command == "adminLoginProcess") { // admin Login Process

    if (empty($_POST["email"])) {
        echo ("Please Enter Email");
    } else if (empty($_POST["password"])) {
        echo ("Please Enter password");
    } else {
        $email = $_POST["email"];
        $password = $_POST["password"];

        $admin_rs = Database::search("SELECT * FROM `admin` WHERE `email` = '" . $email . "' AND `password` = '" . $password . "' ");
        $admin_num = $admin_rs->num_rows;

        if ($admin_num == 1) {
            echo ("Success");
        } else {
            echo ("Error");
        }
    }
}
