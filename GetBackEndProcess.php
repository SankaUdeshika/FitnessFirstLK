<?php
require "Connections/connection.php";
if (!empty($_FILES["file"])) {

    $ImageFile = $_FILES["file"];
    $ImageType = $ImageFile["type"];

    echo ($ImageType);

    $allowed_Image_extentions = array("video/mp4");

    if (in_array($ImageType, $allowed_Image_extentions)) {

        $NewImage_Extention;
        if ($ImageType == "video/mp4") {
            $NewImage_Extention = ".mp4";
        }


        if (empty($_POST["topic"])) {
            echo ("Please Enter a Topic");
        } else if (empty($_POST["para"])) {
            echo ("Please Type paragraph");
        } else {

            $topic = $_POST["topic"];
            $para = $_POST["para"];

            $newImageName = "Resources//Videos//Video" . $NewImage_Extention;

            $oldImage_rs = Database::search("SELECT * FROM `classesvideo` ");
            $oldImage_num = $oldImage_rs->num_rows;
            $oldImage_data = $oldImage_rs->fetch_assoc();

            if ($oldImage_num == "1") {
                unlink($oldImage_data["CV_path"]);
                move_uploaded_file($ImageFile["tmp_name"], $newImageName);
                Database::iud("UPDATE `classesvideo` SET `CV_path` = '" . $newImageName . "' , `CV_topic` = '" . $topic . "' , `CV_para` = '" . $para . "' WHERE `CV_id` = '" . $oldImage_data["CV_id"] . "'");
                echo ("Update Success");
            } else {
                move_uploaded_file($ImageFile["tmp_name"], $newImageName);
                Database::iud("UPDATE `classesvideo` SET `CV_path` = '" . $newImageName . "' , `CV_topic` = '" . $topic . "' , `CV_para` = '" . $para . "' WHERE `CV_id` = '" . $oldImage_data["CV_id"] . "'");
                echo ("Update Success");
            }
        }
    } else {
        echo ("Please Select Valid Image Extention");
    }
} else {
    echo ("Please Select a Image");
}
