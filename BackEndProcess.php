<?php
session_start();
require "Connections/connection.php";
$command = $_POST["command"];

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
            $admin_data = $admin_rs->fetch_assoc();
            $_SESSION["admin"] = $admin_data;
        } else {
            echo ("Error");
        }
    }
} else if ($command == "changeCarouseImage") { // admin Change Carousel Image

    if (!empty($_FILES["file"])) {

        $ImageFile = $_FILES["file"];
        $ImageType = $ImageFile["type"];
        $id = $_POST["id"];


        $allowed_Image_extentions = array("image/jpg", "image/jpeg", "image/png", "image/svg+xml");

        if (in_array($ImageType, $allowed_Image_extentions)) {

            $NewImage_Extention;
            if ($ImageType == "image/jpg") {
                $NewImage_Extention = ".jpg";
            } else  if ($ImageType == "image/jpeg") {
                $NewImage_Extention = ".jpeg";
            } else  if ($ImageType == "image/png") {
                $NewImage_Extention = ".png";
            } else  if ($ImageType == "image/svg+xml") {
                $NewImage_Extention = ".svg";
            }

            $newImageName = "Resources//images//carouselImages//" . $id . $NewImage_Extention;

            $oldImage_rs = Database::search("SELECT * FROM `homecarouselimages` WHERE `HCI_id` = '" . $id . "' ");
            $oldImage_num = $oldImage_rs->num_rows;
            $oldImage_data = $oldImage_rs->fetch_assoc();

            if ($oldImage_num == "1") {
                // unlink($oldImage_data["HIC_path"]);
                move_uploaded_file($ImageFile["tmp_name"], $newImageName);
                Database::iud("UPDATE `homecarouselimages` SET `HIC_path` = '" . $newImageName . "' WHERE `HCI_id` = '" . $id . "'");
                echo ("Update Success");
            } else {
                move_uploaded_file($ImageFile["Tmp_name"], $newImageName);
                Database::iud("UPDATE `homecarouselimages` SET `HIC_path` = '" . $newImageName . "' WHERE `HCI_id` = '" . $id . "'");
                echo ("Update Success");
            }
        } else {
            echo ("Please Select Valid Image Extention");
        }
    } else {
        echo ("Please Select a Image");
    }
} else if ($command == "changeAboutImage") { // admin Change About image
    if (!empty($_FILES["file"])) {

        $ImageFile = $_FILES["file"];
        $ImageType = $ImageFile["type"];
        $id = $_POST["id"];


        $allowed_Image_extentions = array("image/jpg", "image/jpeg", "image/png", "image/svg+xml");

        if (in_array($ImageType, $allowed_Image_extentions)) {

            $NewImage_Extention;
            if ($ImageType == "image/jpg") {
                $NewImage_Extention = ".jpg";
            } else  if ($ImageType == "image/jpeg") {
                $NewImage_Extention = ".jpeg";
            } else  if ($ImageType == "image/png") {
                $NewImage_Extention = ".png";
            } else  if ($ImageType == "image/svg+xml") {
                $NewImage_Extention = ".svg";
            }

            $newImageName = "Resources//images//aboutImage//about" . $id . $NewImage_Extention;

            $oldImage_rs = Database::search("SELECT * FROM `homeaboutlist` WHERE `HAL_id` = '" . $id . "' ");
            $oldImage_num = $oldImage_rs->num_rows;
            $oldImage_data = $oldImage_rs->fetch_assoc();

            if ($oldImage_num == "1") {
                unlink($oldImage_data["HIC_path"]);
                move_uploaded_file($ImageFile["tmp_name"], $newImageName);
                Database::iud("UPDATE `homeaboutimage` SET `HAI_path` = '" . $newImageName . "' WHERE `HAI_id` = '" . $id . "'");
                echo ("Update Success");
            } else {
                move_uploaded_file($ImageFile["Tmp_name"], $newImageName);
                Database::iud("UPDATE `homeaboutimage` SET `HAI_path` = '" . $newImageName . "' WHERE `HAI_id` = '" . $id . "'");
                echo ("Update Success");
            }
        } else {
            echo ("Please Select Valid Image Extention");
        }
    } else {
        echo ("Please Select a Image");
    }
} else if ($command == "addAboutList") { // admin add about List
    if (empty($_POST["Text"])) {
        echo ("Please Enter a text");
    } else {
        $test = $_POST["Text"];
        Database::search("INSERT INTO `homeaboutlist` (`ListText`) VALUES ('" . $test . "') ");
        echo ("Adding Success");
    }
} else if ($command == "DeleteAboutList") { // admin Delete about List

    $id = $_POST["id"];

    Database::iud("DELETE FROM `homeaboutlist` WHERE `HAL_id` = '" . $id . "' ");
    echo ("Delete Success");
} else if ($command == "changeWhyImage") { // admin change why Image
    if (!empty($_FILES["file"])) {

        $ImageFile = $_FILES["file"];
        $ImageType = $ImageFile["type"];
        $id = $_POST["id"];


        $allowed_Image_extentions = array("image/jpg", "image/jpeg", "image/png", "image/svg+xml");

        if (in_array($ImageType, $allowed_Image_extentions)) {

            $NewImage_Extention;
            if ($ImageType == "image/jpg") {
                $NewImage_Extention = ".jpg";
            } else  if ($ImageType == "image/jpeg") {
                $NewImage_Extention = ".jpeg";
            } else  if ($ImageType == "image/png") {
                $NewImage_Extention = ".png";
            } else  if ($ImageType == "image/svg+xml") {
                $NewImage_Extention = ".svg";
            }

            $newImageName = "Resources//images//whyFitness//why" . $id . $NewImage_Extention;

            $oldImage_rs = Database::search("SELECT * FROM `homewhyfitness` WHERE `HWF_id` = '" . $id . "' ");
            $oldImage_num = $oldImage_rs->num_rows;
            $oldImage_data = $oldImage_rs->fetch_assoc();

            if ($oldImage_num == "1") {
                unlink($oldImage_data["HWF_imagepath"]);
                move_uploaded_file($ImageFile["tmp_name"], $newImageName);
                Database::iud("UPDATE `homewhyfitness` SET `HWF_imagepath` = '" . $newImageName . "' WHERE `HWF_id` = '" . $id . "'");
                echo ("Update Success");
            } else {
                move_uploaded_file($ImageFile["tmp_name"], $newImageName);
                Database::iud("UPDATE `homewhyfitness` SET `HWF_imagepath` = '" . $newImageName . "' WHERE `HWF_id` = '" . $id . "'");
                echo ("Update Success");
            }
        } else {
            echo ("Please Select Valid Image Extention");
        }
    } else {
        echo ("Please Select a Image");
    }
} else if ($command == "changeWhytext") { // admin change why text
    if (empty($_POST["text"])) {
        echo ("Please Enter a text");
    } else {
        $text = $_POST["text"];
        $id = $_POST["id"];
        Database::search("UPDATE `homewhyfitness` SET `HWF_text` = '" . $text . "' WHERE `HWF_id` = '" . $id . "' ");
        echo ("Update Success");
    }
} else if ($command == "ChangeStoryImage") { // admin change story Image
    if (!empty($_FILES["file"])) {

        $ImageFile = $_FILES["file"];
        $ImageType = $ImageFile["type"];
        $id = $_POST["id"];


        $allowed_Image_extentions = array("image/jpg", "image/jpeg", "image/png", "image/svg+xml");

        if (in_array($ImageType, $allowed_Image_extentions)) {

            $NewImage_Extention;
            if ($ImageType == "image/jpg") {
                $NewImage_Extention = ".jpg";
            } else  if ($ImageType == "image/jpeg") {
                $NewImage_Extention = ".jpeg";
            } else  if ($ImageType == "image/png") {
                $NewImage_Extention = ".png";
            } else  if ($ImageType == "image/svg+xml") {
                $NewImage_Extention = ".svg";
            }

            $newImageName = "Resources//images//storyboxImage//story" . $id . $NewImage_Extention;

            $oldImage_rs = Database::search("SELECT * FROM `homestories` WHERE `HS_id` = '" . $id . "' ");
            $oldImage_num = $oldImage_rs->num_rows;
            $oldImage_data = $oldImage_rs->fetch_assoc();

            if ($oldImage_num == "1") {
                unlink($oldImage_data["HS_image"]);
                move_uploaded_file($ImageFile["tmp_name"], $newImageName);
                Database::iud("UPDATE `homestories` SET `HS_image` = '" . $newImageName . "' WHERE `HS_id` = '" . $id . "'");
                echo ("Update Success");
            } else {
                move_uploaded_file($ImageFile["tmp_name"], $newImageName);
                Database::iud("UPDATE `homestories` SET `HS_image` = '" . $newImageName . "' WHERE `HS_id` = '" . $id . "'");
                echo ("Update Success");
            }
        } else {
            echo ("Please Select Valid Image Extention");
        }
    } else {
        echo ("Please Select a Image");
    }
} else if ($command == "changeStroyPara") { // admin change story para
    if (empty($_POST["text"])) {
        echo ("Please Enter a text");
    } else {
        $text = $_POST["text"];
        $id = $_POST["id"];
        Database::search("UPDATE `homestories` SET `Hs_text` = '" . $text . "' WHERE `HS_id` = '" . $id . "' ");
        echo ("Update Success");
    }
}
