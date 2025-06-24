<?php


require "Connections/connection.php";

$name = $_POST["Name"];
$Email = $_POST["Email"];
$Comment = $_POST["Comment"];
$blogId = $_POST["blogId"];



Database::iud("INSERT INTO `blogcomment` (`name`,`email`,`comment`,`blog_Bid`) VALUES ('".$name."','".$Email."','".$Comment."','".$blogId."') ");
header("Location: blog-details.php?id=" . $blogId);
exit();
