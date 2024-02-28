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


                        FlexDatabase::iud("INSERT INTO `product` (`Product_id`,`Product_name`,`Description`,`Flavor_F_id`,`Qty`,`Price`) VALUES ('" . $uniqueNumber . "','" . $ProductName . "','" . $Description . "','" . $Flavor . "','" . $Quanitity . "','" . $price . "')");
                        FlexDatabase::iud("INSERT INTO `product_images` (`Main_Image`,`Seciond_Image`,`product_Product_id`,`Third_Image`) VALUES ('" . $newImageName1 . "','" . $newImageName2 . "','" . $uniqueNumber . "','" . $newImageName3 . "')");

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
} else if ($command == "ChangeMainProductImage") {
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


            $oldImage_rs = FlexDatabase::search("SELECT * FROM `product_images` INNER JOIN `product` ON `product`.`Product_id` = `product_images`.`product_Product_id` WHERE `product_Product_id` = '" . $id . "' ");
            $oldImage_num = $oldImage_rs->num_rows;
            $oldImage_data = $oldImage_rs->fetch_assoc();
            $ProductName = $oldImage_data["Product_name"];
            $Flavor = $oldImage_data["Flavor_F_id"];


            $newImageName = "Resources//images//FlexProductImage//Main_" . $ProductName . $Flavor . $NewImage_Extention;


            if ($oldImage_num == "1") {
                unlink($oldImage_data["Main_Image"]);
                move_uploaded_file($ImageFile["tmp_name"], $newImageName);
                FlexDatabase::iud("UPDATE `product_images` SET `Main_Image` = '" . $newImageName . "' WHERE `product_Product_id` = '" . $id . "'");
                echo ("Update Success");
            } else {
                move_uploaded_file($ImageFile["tmp_name"], $newImageName);
                FlexDatabase::iud("UPDATE `product_images` SET `Main_Image` = '" . $newImageName . "' WHERE `product_Product_id` = '" . $id . "'");
                echo ("Update Success");
            }
        } else {
            echo ("Please Select Valid Image Extention");
        }
    } else {
        echo ("Please Select a Image");
    }
} else if ($command == "ChangeSecondProductImage") {
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


            $oldImage_rs = FlexDatabase::search("SELECT * FROM `product_images` INNER JOIN `product` ON `product`.`Product_id` = `product_images`.`product_Product_id` WHERE `product_Product_id` = '" . $id . "' ");
            $oldImage_num = $oldImage_rs->num_rows;
            $oldImage_data = $oldImage_rs->fetch_assoc();
            $ProductName = $oldImage_data["Product_name"];
            $Flavor = $oldImage_data["Flavor_F_id"];


            $newImageName = "Resources//images//FlexProductImage//Second_" . $ProductName . $Flavor . $NewImage_Extention;


            if ($oldImage_num == "1") {
                unlink($oldImage_data["Seciond_Image"]);
                move_uploaded_file($ImageFile["tmp_name"], $newImageName);
                FlexDatabase::iud("UPDATE `product_images` SET `Seciond_Image` = '" . $newImageName . "' WHERE `product_Product_id` = '" . $id . "'");
                echo ("Update Success");
            } else {
                move_uploaded_file($ImageFile["tmp_name"], $newImageName);
                FlexDatabase::iud("UPDATE `product_images` SET `Seciond_Image` = '" . $newImageName . "' WHERE `product_Product_id` = '" . $id . "'");
                echo ("Update Success");
            }
        } else {
            echo ("Please Select Valid Image Extention");
        }
    } else {
        echo ("Please Select a Image");
    }
} else if ($command == "ChangeThirdProductImage") {
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


            $oldImage_rs = FlexDatabase::search("SELECT * FROM `product_images` INNER JOIN `product` ON `product`.`Product_id` = `product_images`.`product_Product_id` WHERE `product_Product_id` = '" . $id . "' ");
            $oldImage_num = $oldImage_rs->num_rows;
            $oldImage_data = $oldImage_rs->fetch_assoc();
            $ProductName = $oldImage_data["Product_name"];
            $Flavor = $oldImage_data["Flavor_F_id"];


            $newImageName = "Resources//images//FlexProductImage//Third_" . $ProductName . $Flavor . $NewImage_Extention;


            if ($oldImage_num == "1") {
                unlink($oldImage_data["Third_Image"]);
                move_uploaded_file($ImageFile["tmp_name"], $newImageName);
                FlexDatabase::iud("UPDATE `product_images` SET `Third_Image` = '" . $newImageName . "' WHERE `product_Product_id` = '" . $id . "'");
                echo ("Update Success");
            } else {
                move_uploaded_file($ImageFile["tmp_name"], $newImageName);
                FlexDatabase::iud("UPDATE `product_images` SET `Third_Image` = '" . $newImageName . "' WHERE `product_Product_id` = '" . $id . "'");
                echo ("Update Success");
            }
        } else {
            echo ("Please Select Valid Image Extention");
        }
    } else {
        echo ("Please Select a Image");
    }
    // Chanage Product Info
} else if ($command == "ChangeProductInfo") {

    if (empty($_POST["ProductName"])) {
        echo ("Please Enter a Product Name");
    } else if (empty($_POST["ProductDescription"])) {
        echo ("please  Enter a Product Description");
    } else if (!is_numeric($_POST["ProductPrice"])) {
        echo ("Price must have Only Numbers");
    } else if (empty($_POST["ProductPrice"])) {
        echo ("please Enter a Product Price");
    } else if (empty($_POST["ProductFlavor"])) {
        echo ("please Enter a Flavor");
    } else {
        $productName = $_POST["ProductName"];
        $ProductDescription = $_POST["ProductDescription"];
        $ProductQty = $_POST["ProductQty"];
        $ProductPrice = $_POST["ProductPrice"];
        $ProductFlavor = $_POST["ProductFlavor"];
        $Productid = $_POST["id"];

        FlexDatabase::iud("UPDATE `product` SET `Product_name` = '" . $productName . "', `Description` = '" . $ProductDescription . "', `Flavor_F_id` = '" . $ProductFlavor . "', `Qty` = '" . $ProductQty . "' , `Price` = '" . $ProductPrice . "' WHERE `Product_id` = '" . $Productid . "' ");
        echo ("Done update");
    }

    // Delete Product Info
} else if ($command == "DeleteProductInfo") {
    $id = $_POST["id"];

    $oldImage_rs = FlexDatabase::search("SELECT * FROM `product_images` INNER JOIN `product` ON `product`.`Product_id` = `product_images`.`product_Product_id` WHERE `product_Product_id` = '" . $id . "' ");
    $oldImage_num = $oldImage_rs->num_rows;
    $oldImage_data = $oldImage_rs->fetch_assoc();

    if ($oldImage_num == "1") {

        unlink($oldImage_data["Main_Image"]);
        unlink($oldImage_data["Seciond_Image"]);
        unlink($oldImage_data["Third_Image"]);

        FlexDatabase::iud("DELETE FROM `product_images` WHERE `product_Product_id` = '" . $id . "'");
        FlexDatabase::iud("DELETE FROM `product` WHERE `Product_id` = '" . $id . "'");

        echo ("Delete Success");
    } else {
        echo ("Something Wrong, Please Try again later");
    }
    // Add TO cart Process
} else if ($command == "AddToCart") {

    $Pid = $_POST["Pid"];
    $Qty = $_POST["Qty"];

    $cookie_rs = FlexDatabase::search("SELECT * FROM `cookie` WHERE `cookie` = '" . $_COOKIE["User"] . "'");
    $cookie_num = $cookie_rs->num_rows;

    if ($cookie_num == 1) {
        $cookie_data = $cookie_rs->fetch_assoc();
        FlexDatabase::iud("INSERT INTO `cart` (`Qty`,`Cookie_C_id`,`product_Product_id`) VALUES ('" . $Qty . "','" . $cookie_data["C_id"] . "','" . $Pid . "')");
        echo ("Add To cart");
    } else {
        FlexDatabase::iud("INSERT INTO `cookie` (`Cookie`) VALUES ('" . $_COOKIE["User"] . "')");
        $cookie_rs = FlexDatabase::search("SELECT * FROM `cookie` WHERE `cookie` = '" . $_COOKIE["User"] . "'");
        $cookie_data = $cookie_rs->fetch_assoc();
        FlexDatabase::iud("INSERT INTO `cart` (`Qty`,`Cookie_C_id`,`product_Product_id`) VALUES ('" . $Qty . "','" . $cookie_data["C_id"] . "','" . $Pid . "')");
        echo ("Add To cart");
    }
} else if ($command == "RemoveFromCart") {
    // remove Form Cart Process
    $Pid = $_POST["Pid"];

    $cookie_rs = FlexDatabase::search("SELECT * FROM `cookie` WHERE `cookie` = '" . $_COOKIE["User"] . "'");
    $cookie_num = $cookie_rs->num_rows;

    if ($cookie_num == 1) {
        $cookie_data = $cookie_rs->fetch_assoc();
        FlexDatabase::iud("DELETE FROM `cart` WHERE `Cookie_C_id` = '" . $cookie_data["C_id"] . "' AND `product_Product_id` = '" . $Pid . "' ");
        echo ("Delete from  cart");
    } 
}
