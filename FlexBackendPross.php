<?php
session_start();
require "Connections/FlexConnection.php";
$command = $_POST["command"];


// add Flex Product

if ($command == "addFlexProduct") {


    if (!empty($_FILES["file1"])) {
        if (!empty($_FILES["file2"])) {
            if (!empty($_FILES["file3"])) {
                $ImageFile1 = $_FILES["file1"];
                $ImageFile2 = $_FILES["file2"];
                $ImageFile3 = $_FILES["file3"];

                $ImageType1 = $ImageFile1["type"];
                $ImageType2 = $ImageFile2["type"];
                $ImageType3 = $ImageFile3["type"];


                $allowed_Image_extentions = array("image/jpg", "image/jpeg", "image/png", "image/svg+xml");

                if (in_array($ImageType1, $allowed_Image_extentions)) {

                    $NewImage_Extention1;
                    $NewImage_Extention2;
                    $NewImage_Extention3;

                    if ($ImageType1 == "image/jpg") {
                        $NewImage_Extention1 = ".jpg";
                    } else  if ($ImageType1 == "image/jpeg") {
                        $NewImage_Extention1 = ".jpeg";
                    } else  if ($ImageType1 == "image/png") {
                        $NewImage_Extention1 = ".png";
                    } else  if ($ImageType1 == "image/svg+xml") {
                        $NewImage_Extention1 = ".svg";
                    }

                    if ($ImageType2 == "image/jpg") {
                        $NewImage_Extention2 = ".jpg";
                    } else  if ($ImageType2 == "image/jpeg") {
                        $NewImage_Extention2 = ".jpeg";
                    } else  if ($ImageType2 == "image/png") {
                        $NewImage_Extention2 = ".png";
                    } else  if ($ImageType2 == "image/svg+xml") {
                        $NewImage_Extention2 = ".svg";
                    }

                    if ($ImageType3 == "image/jpg") {
                        $NewImage_Extention3 = ".jpg";
                    } else  if ($ImageType3 == "image/jpeg") {
                        $NewImage_Extention3 = ".jpeg";
                    } else  if ($ImageType3 == "image/png") {
                        $NewImage_Extention3 = ".png";
                    } else  if ($ImageType3 == "image/svg+xml") {
                        $NewImage_Extention3 = ".svg";
                    }


                    if (empty($_POST["ProductName"])) {
                        echo ("Please Enter a Product Name");
                    } else if (empty($_POST["price"])) {
                        echo ("please  Enter a Price");
                    } else if (!is_numeric($_POST["price"])) {
                        echo ("Price must have Only Numbers");
                    } else if (empty($_POST["Flavor"])) {
                        echo ("please Enter a Flavor Name");
                    } else if (empty($_POST["Description"])) {
                        echo ("please Enter a Description");
                    } else if (empty($_POST["Quanitity"])) {
                        echo ("Please Enter a Quanitity Number");
                    } else if (!is_numeric($_POST["Quanitity"])) {
                        echo ("Quanitity must have only Numbers");
                    } else {
                        $ProductName = $_POST["ProductName"];
                        $price = $_POST["price"];
                        $Flavor = $_POST["Flavor"];
                        $Description = $_POST["Description"];
                        $Quanitity = $_POST["Quanitity"];
                        $uniqueNumber = uniqid();

                        $newImageName1 = "Resources//images//FlexProductImage//Main_" . $ProductName . $Flavor . $NewImage_Extention1;
                        $newImageName2 = "Resources//images//FlexProductImage//Second_" . $ProductName . $Flavor . $NewImage_Extention2;
                        $newImageName3 = "Resources//images//FlexProductImage//Third_" . $ProductName . $Flavor . $NewImage_Extention3;


                        FlexDatabase::iud("INSERT INTO `product` (`Product_id`,`Product_name`,`Description`,`Flavor_F_id`,`Qty`,`Price`) VALUES ('" . $uniqueNumber . "','" . $ProductName . "','" . $Description . "','" . $Flavor . "','" . $Quanitity . "','".$price."')");
                        FlexDatabase::iud("INSERT INTO `product_images` (`Main_Image`,`Seciond_Image`,`product_Product_id`,`Third_Image`) VALUES ('".$newImageName1."','".$newImageName2."','".$uniqueNumber."','".$newImageName3."')");

                        move_uploaded_file($ImageFile1["tmp_name"], $newImageName1);
                        move_uploaded_file($ImageFile2["tmp_name"], $newImageName2);
                        move_uploaded_file($ImageFile3["tmp_name"], $newImageName3);

                        echo ("Insert Success");
                    }
                } else {
                    echo ("Please Select Valid Image Extention");
                }
            } else {
                echo ("Please Select Thrid Image");
            }
        } else {
            echo ("Please Selelct Second Image");
        }
    } else {
        echo ("Please Select Main Image");
    }
}
