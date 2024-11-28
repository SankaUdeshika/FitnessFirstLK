<?php
session_start();
require "Connections/FlexConnection.php";
$command = $_POST["command"];

// Flex Flavour Session
// $_SESSION["Flavour"] = "" hide the flavour Process;

// Flex Home Product Change
$_SESSION["HomeProduct"] = "TopSellers";

// Flex Catelog Product Change
$_SESSION["CatelogProduct"] = "none";

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
                    } else if (empty($_POST["Description"])) {
                        echo ("please Enter a Description");
                    } else if (empty($_POST["Quanitity"])) {
                        echo ("Please Enter a Quanitity Number");
                    } else if (!is_numeric($_POST["Quanitity"])) {
                        echo ("Quanitity must have only Numbers");
                    } else {
                        $ProductName = $_POST["ProductName"];
                        $price = $_POST["price"];
                        $Description = $_POST["Description"];
                        $Quanitity = $_POST["Quanitity"];
                        $uniqueNumber = uniqid();
                        $Category = $_POST["Category"];

                        // get FlavourID
                        $Flavor = $_POST["Flavour"];
                        $isFlavour_rs  = FlexDatabase::search("SELECT * FROM `flavors` WHERE `flavour_name` = '" . $Flavor . "'  ");
                        $isFlavour_num =  $isFlavour_rs->num_rows;


                        if ($isFlavour_num == 1) {
                            // Update Flavour id
                            $newImageName1 = "Resources//images//FlexProductImage//Main_" . $ProductName . $Flavor . $NewImage_Extention1;
                            $newImageName2 = "Resources//images//FlexProductImage//Second_" . $ProductName . $Flavor . $NewImage_Extention2;
                            $newImageName3 = "Resources//images//FlexProductImage//Third_" . $ProductName . $Flavor . $NewImage_Extention3;



                            FlexDatabase::iud("INSERT INTO `product` (`Product_id`,`Product_name`,`Description`,`Qty`,`Price`,Category_id) VALUES ('" . $uniqueNumber . "','" . $ProductName . "','" . $Description . "','" . $Quanitity . "','" . $price . "','" . $Category . "')");
                            // GET  falvour ID
                            $falvour_data = $isFlavour_rs->fetch_assoc();
                            FlexDatabase::iud("INSERT INTO `product_flavour` (`pf_product_id`,`pf_flavour_id`) VALUES ('" . $uniqueNumber . "','" . $falvour_data["flavour_id"] . "') ");


                            FlexDatabase::iud("INSERT INTO `product_images` (`Main_Image`,`Seciond_Image`,`product_Product_id`,`Third_Image`) VALUES ('" . $newImageName1 . "','" . $newImageName2 . "','" . $uniqueNumber . "','" . $newImageName3 . "')");

                            move_uploaded_file($ImageFile1["tmp_name"], $newImageName1);
                            move_uploaded_file($ImageFile2["tmp_name"], $newImageName2);
                            move_uploaded_file($ImageFile3["tmp_name"], $newImageName3);

                            echo ("Insert Success");
                        } else {
                            // Insert and Create new FlavourID
                            // Update Flavour id
                            $newImageName1 = "Resources//images//FlexProductImage//Main_" . $ProductName . $Flavor . $NewImage_Extention1;
                            $newImageName2 = "Resources//images//FlexProductImage//Second_" . $ProductName . $Flavor . $NewImage_Extention2;
                            $newImageName3 = "Resources//images//FlexProductImage//Third_" . $ProductName . $Flavor . $NewImage_Extention3;



                            FlexDatabase::iud("INSERT INTO `product` (`Product_id`,`Product_name`,`Description`,`Qty`,`Price`) VALUES ('" . $uniqueNumber . "','" . $ProductName . "','" . $Description . "','" . $Quanitity . "','" . $price . "')");

                            // insert Flavour
                            FlexDatabase::iud("INSERT INTO `flavors` (`flavour_name`) VALUES ('" . $Flavor . "') ");

                            // GET  falvour ID
                            $felvourId_rs = FlexDatabase::search("SELECT * FROM `flavors` WHERE `flavour_name` = '" . $Flavor . "' ");
                            $felvourID_data = $felvourId_rs->fetch_assoc();

                            FlexDatabase::iud("INSERT INTO `product_flavour` (`pf_product_id`,`pf_flavour_id`) VALUES ('" . $uniqueNumber . "','" . $felvourID_data["flavour_id"] . "') ");


                            FlexDatabase::iud("INSERT INTO `product_images` (`Main_Image`,`Seciond_Image`,`product_Product_id`,`Third_Image`) VALUES ('" . $newImageName1 . "','" . $newImageName2 . "','" . $uniqueNumber . "','" . $newImageName3 . "')");

                            move_uploaded_file($ImageFile1["tmp_name"], $newImageName1);
                            move_uploaded_file($ImageFile2["tmp_name"], $newImageName2);
                            move_uploaded_file($ImageFile3["tmp_name"], $newImageName3);

                            echo ("Insert Success");
                        }
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


            $oldImage_rs = FlexDatabase::search("SELECT * FROM `product_images` INNER JOIN `product` ON `product`.`Product_id` = `product_images`.`product_Product_id` INNER JOIN `product_flavour` ON `product`.`Product_id` = `product_flavour`.`pf_product_id` WHERE `product_Product_id` = '" . $id . "' ");
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
    } else {
        $productName = $_POST["ProductName"];
        $ProductDescription = $_POST["ProductDescription"];
        $ProductQty = $_POST["ProductQty"];
        $ProductPrice = $_POST["ProductPrice"];
        $Productid = $_POST["id"];

        FlexDatabase::iud("UPDATE `product` SET `Product_name` = '" . $productName . "', `Description` = '" . $ProductDescription . "', `Qty` = '" . $ProductQty . "' , `Price` = '" . $ProductPrice . "' WHERE `Product_id` = '" . $Productid . "' ");
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
        FlexDatabase::iud("DELETE FROM `product_flavour` WHERE `pf_product_id` = '" . $id . "'");
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
} else if ($command == "ChangeQtyCart") {
    $Qty  = $_POST["Qty"];
    $Pid  = $_POST["Pid"];


    $cookie_rs = FlexDatabase::search("SELECT * FROM `cookie` WHERE `cookie` = '" . $_COOKIE["User"] . "'");
    $cookie_data = $cookie_rs->fetch_assoc();

    FlexDatabase::iud("UPDATE `cart` SET  `Qty` = '" . $Qty . "' WHERE `product_Product_id` = '" . $Pid . "'  AND `Cookie_C_id` = '" . $cookie_data["C_id"] . "' ");

    $Total_rs = FlexDatabase::search("SELECT * FROM `cart`  WHERE `Cookie_C_id` = '" . $cookie_data["C_id"] . "' ");
    $Total_num = $Total_rs->num_rows;

    $totalPrice = 0;

    for ($i = 0; $i < $Total_num; $i++) {
        $Total_data = $Total_rs->fetch_assoc();

        $product_rs = FlexDatabase::search("SELECT * FROM `product`  WHERE `Product_id` = '" . $Total_data["product_Product_id"] . "' ");
        $product_data = $product_rs->fetch_assoc();

        $product_Price = $product_data["Price"];
        $product_Qty = $Total_data["Qty"];

        $totalPrice = $totalPrice + ($product_Price * $product_Qty);
    }
    echo ($totalPrice);
} else if ($command == "AddOrder") {

    if (empty($_POST["Email"])) {
        echo ("Please Enter a Email ");
    } else if (empty($_POST["mobile"])) {
        echo ("Please Enter a mobile ");
    } else if (empty($_POST["fname"])) {
        echo ("Please Enter a First Name ");
    } else if (empty($_POST["lname"])) {
        echo ("Please Enter a Last Name ");
    } else if (empty($_POST["Address"])) {
        echo ("Please Enter a Address ");
    } else if (empty($_POST["City"])) {
        echo ("Please Enter a City ");
    } else if (empty($_POST["Pcode"])) {
        echo ("Please Enter a Pcode ");
    } else {

        $Email =  $_POST["Email"];
        $User_rs = FlexDatabase::search("SELECT * FROM `user` WHERE `Email` = '" . $Email . "' ");
        $User_num  = $User_rs->num_rows;

        if ($User_num == 1) {
            $User_data  = $User_rs->fetch_assoc();

            $cookie_name = "User";
            $OldCookie_rs = FlexDatabase::search("SELECT * FROM `cookie` WHERE `C_id` = '" . $User_data["Cookie_C_id"] . "' ");
            $OldCookie_data = $OldCookie_rs->fetch_assoc();
            // Old Cookie
            $OldCookieVlaue = $OldCookie_data["Cookie"];

            // Add Old Cookie
            setcookie($cookie_name, $OldCookieVlaue, time() + (86400 * 30 * 12), "/");

            $mobile =  $_POST["mobile"];
            $fname =  $_POST["fname"];
            $lname =  $_POST["lname"];
            $Address =  $_POST["Address"];
            $City =  $_POST["City"];
            $Pcode =  $_POST["Pcode"];
            $UserCookie = $User_data["Cookie_C_id"];

            FlexDatabase::iud("UPDATE `user` SET `FIrst_name` = '" . $fname . "',`Last_name` = '" . $lname . "',`mobile` = '" . $mobile . "' ,`Address` = '" . $Address . "', `City` = '" . $City . "' , `PostalCode` = '" . $Pcode . "' ");


            $Cart_rs = FlexDatabase::search("SELECT * FROM `cart` WHERE `Cookie_C_id` = '" . $UserCookie . "' ");
            $Cart_num = $Cart_rs->num_rows;

            $Total = 0;

            for ($i = 0; $i < $Cart_num; $i++) {
                $Cart_data = $Cart_rs->fetch_assoc();
                $CartProduct_rs = FlexDatabase::search("SELECT * FROM `product` WHERE `Product_id` = '" . $Cart_data["product_Product_id"] . "' ");
                $CartProduct_data = $CartProduct_rs->fetch_assoc();

                $CartProduct_Price = $CartProduct_data["Price"];
                $CartProduct_Qty = $Cart_data["Qty"];

                $Total = $Total + ($CartProduct_Price * $CartProduct_Qty);
            }

            // Get Date abbd Time
            $DateTime = date('Y-m-d H:i:s');
            $ExplodeDateTime =  explode(" ", $DateTime);

            $Date = $ExplodeDateTime[0];
            $Time = $ExplodeDateTime[1];

            $Order_id = uniqid("Order_");

            FlexDatabase::iud("INSERT INTO `order` (`Order_id`,`Total`,`User_Email`,`OrderDate`,`OrderTime`,`Status_Sid`) VALUES('" . $Order_id . "','" . $Total . "','" . $Email . "','" . $Date . "','" . $Time . "','3')");

            $OrderCart_rs = FlexDatabase::search("SELECT * FROM `cart` WHERE `Cookie_C_id` = '" . $UserCookie . "' ");
            $OrderCart_num = $OrderCart_rs->num_rows;

            for ($x = 0; $x < $OrderCart_num; $x++) {
                $OrderCart_data = $OrderCart_rs->fetch_assoc();
                // Add Oder Items
                FlexDatabase::iud("INSERT INTO `orderitem` (`Qty`,`Order_Order_id`,`product_Product_id`) VALUES('" . $OrderCart_data["Qty"] . "','" . $Order_id . "','" . $OrderCart_data["product_Product_id"] . "')");
                // Delete From Cart
                FlexDatabase::iud("DELETE FROM `cart` WHERE `Cart_id` = '" . $OrderCart_data["Cart_id"] . "' ");
                // Delete Qty From Product Table
                $QtyProduct_rs =  FlexDatabase::search("SELECT * FROM `product` WHERE `Product_id` = '" . $OrderCart_data["product_Product_id"] . "'  ");
                $QtyProduct_num = $QtyProduct_rs->num_rows;
                if ($QtyProduct_num == 1) {
                    $QtyProduct_data = $QtyProduct_rs->fetch_assoc();
                    $UpdateProdcuct_Qty = $QtyProduct_data["Qty"] - $CartProduct_Qty;
                    FlexDatabase::iud("UPDATE `product` SET `Qty` = '" . $UpdateProdcuct_Qty . "' WHERE `Product_id` = '" . $OrderCart_data["product_Product_id"] . "'  ");
                }
            }

            $merchant_id = "1221534";
            $merchant_secret = "NDAxMzk2MTY3MDM1MzMzNjA5NzYxNTMyNDc3MzkxMjYwODU3MzY2Mg==";
            $currency  = "LKR";
            $country = "Sri Lanka";

            $hash = strtoupper(
                md5(
                    $merchant_id .
                        $Order_id .
                        number_format($Total, 2, '.', '') .
                        // number_format($amount) .
                        $currency .
                        strtoupper(md5($merchant_secret))
                )
            );

            $response =  array();
            $response["merchant_id"] = $merchant_id;
            $response["return_url"] = "http://localhost";
            $response["cancel_url"] = "http://localhost";
            $response["notify_url"] = "http://localhost";
            $response["first_name"] =  $fname;
            $response["last_name"] = $lname;
            $response["email"] = $Email;
            $response["phone"] = $mobile;
            $response["address"] = $Address;
            $response["city"] = $City;
            $response["country"] = $country;
            $response["order_id"] =  $Order_id;
            $response["items"] = $Order_id;
            $response["currency"] = $currency;
            $response["amount"] =  $Total;
            $response["hash"] =  $hash;
            echo json_encode($response);




            // echo ("Order Add SuccessFull" . "," . $Order_id);
        } else if ($User_num == 0) {

            $Email =  $_POST["Email"];
            $mobile =  $_POST["mobile"];
            $fname =  $_POST["fname"];
            $lname =  $_POST["lname"];
            $Address =  $_POST["Address"];
            $City =  $_POST["City"];
            $Pcode =  $_POST["Pcode"];

            $Cookie_rs =   FlexDatabase::search("SELECT * FROM `cookie` WHERE `Cookie` = '" . $_COOKIE["User"] . "' ");
            $Cookie_data = $Cookie_rs->fetch_assoc();

            $UserCookie = $Cookie_data["C_id"];

            FlexDatabase::iud("INSERT INTO `user` (`Email`,`FIrst_name`,`Last_name`,`mobile`,`Address`,`City`,`PostalCode`,`Cookie_C_id`) 
            VALUES('" . $Email . "','" . $fname . "','" . $lname . "','" . $mobile . "','" . $Address . "','" . $City . "','" . $Pcode . "','" . $UserCookie . "')");


            $Cart_rs = FlexDatabase::search("SELECT * FROM `cart` WHERE `Cookie_C_id` = '" . $UserCookie . "' ");
            $Cart_num = $Cart_rs->num_rows;

            $Total = 0;

            for ($i = 0; $i < $Cart_num; $i++) {
                $Cart_data = $Cart_rs->fetch_assoc();
                $CartProduct_rs = FlexDatabase::search("SELECT * FROM `product` WHERE `Product_id` = '" . $Cart_data["product_Product_id"] . "' ");
                $CartProduct_data = $CartProduct_rs->fetch_assoc();

                $CartProduct_Price = $CartProduct_data["Price"];
                $CartProduct_Qty = $Cart_data["Qty"];

                $Total = $Total + ($CartProduct_Price * $CartProduct_Qty);
            }

            // Get Date abbd Time
            $DateTime = date('Y-m-d H:i:s');
            $ExplodeDateTime =  explode(" ", $DateTime);

            $Date = $ExplodeDateTime[0];
            $Time = $ExplodeDateTime[1];

            $Order_id = uniqid("Order_");

            FlexDatabase::iud("INSERT INTO `order` (`Order_id`,`Total`,`User_Email`,`OrderDate`,`OrderTime`,`Status_Sid`) VALUES('" . $Order_id . "','" . $Total . "','" . $Email . "','" . $Date . "','" . $Time . "','3')");

            $OrderCart_rs = FlexDatabase::search("SELECT * FROM `cart` WHERE `Cookie_C_id` = '" . $UserCookie . "' ");
            $OrderCart_num = $OrderCart_rs->num_rows;

            for ($x = 0; $x < $OrderCart_num; $x++) {
                $OrderCart_data = $OrderCart_rs->fetch_assoc();
                // Add Oder Items
                FlexDatabase::iud("INSERT INTO `orderitem` (`Qty`,`Order_Order_id`,`product_Product_id`) VALUES('" . $OrderCart_data["Qty"] . "','" . $Order_id . "','" . $OrderCart_data["product_Product_id"] . "')");
                // Delete From Cart
                FlexDatabase::iud("DELETE FROM `cart` WHERE `Cart_id` = '" . $OrderCart_data["Cart_id"] . "' ");
            }

            echo ("Order Add SuccessFull" . "," . $Order_id);
        }
    }
} else if ($command == "ChangeOrderStatus") {
    $Order_id = $_POST["Order_id"];

    FlexDatabase::iud("UPDATE `order` SET `Status_Sid` = '1' WHERE `Order_id` = '" . $Order_id . "' ");
    echo ("Update Order Status");
} else if ($command == "ChangeHomePageCategoryPage") {
    $Category = $_POST["HomeProducts"];

    if ($Category == "") {
        $_SESSION["HomeProduct"] = "TopSellers";
    } else if ($Category == "EndergyDrink") {
        $_SESSION["HomeProduct"] = "EnergyDrink";
    } else if ($Category == "Protein") {
        $_SESSION["HomeProduct"] = "Protein";
    }
} else if ($command == "ChangeCatelogDropDown") {

    $Category = $_POST["CatelogDropDown"];

    $_SESSION["CatelogProduct"] = $Category;
} else if ($command == "ChangeCatelogCategoryBtn") {
    $Category = $_POST["CatelogProducts"];
    $_SESSION["CatelogProduct"] = $Category;
} else if ($command == "SearchProductByname") {
    $product_name = $_POST["ProductName"];

    if (empty($product_name)) {
?>
        <div class="col-12 text-center mt-5 mb-5">
            <span class="text-white fw-bold fs-1">Please Enter Product Name</span>
        </div>
        <?php
    } else {
        $product_rs = FlexDatabase::search("SELECT * FROM `product` INNER JOIN `product_images` ON `product_images`.`product_Product_id` = `product`.`Product_id` WHERE `Product_name` LIKE '%" . $product_name . "%' AND `product`.`Qty` != '0' ");
        $product_num = $product_rs->num_rows;

        for ($x = 0; $x < $product_num; $x++) {
            $product_data = $product_rs->fetch_assoc();
        ?>
            <div class="col-lg-3 col-6 mt-5 p-4">
                <div class="row">
                    <div class="col-12 FlexProductCard  ">
                        <div class="row">
                            <div class="col-lg-10 col-12 offset-lg-1 ProductImageCover ">
                                <div class="row">
                                    <div class="col-12 ProductFirstImageCover">
                                        <img src="<?php echo ($product_data["Main_Image"]) ?>" class="FlexProductImage1" alt="<?php echo ($product_data["Main_Image"]) ?>">
                                    </div>
                                    <div class="col-12 ProductSecondImageCover ">
                                        <img src="<?php echo ($product_data["Seciond_Image"]) ?>" class="FlexProductImage2" alt="<?php echo ($product_data["Seciond_Image"]) ?>">
                                    </div>
                                </div>
                            </div>
                            <!-- Large Screen -->
                            <div class="col-12 " style="height: 90px;">
                                <div class="row">
                                    <div class="col-lg-10  col-12 offset-lg-1 mt-1 fw-bold fs-5 text-white d-lg-block d-none">
                                        <span><?php echo ($product_data["Product_name"]) ?></span>
                                    </div>
                                    <!-- Small Screen -->
                                    <div class="col-lg-10  col-12 offset-lg-1 mt-1 fw-bold text-white  d-lg-none d-block">
                                        <small><?php echo ($product_data["Product_name"]) ?></small>
                                    </div>
                                    <div class="col-lg-10 offset-lg-1 col-12 text-white-50">
                                        <span>Rs.<?php echo ($product_data["Price"]) ?></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Button -->
                            <div class="col-lg-10 col-12 mt-2 offset-lg-1 position-relative overflow-hidden ">
                                <div class="col-12 ViewProductButton ">
                                    <div class="col-11 ViewProductButto2 d-lg-block d-none  ">
                                    </div>
                                    <span class="ViewProductButtonText text-center" onclick="window.location='FlexSingleProductView.php?id=<?php echo ($product_data['Product_id']) ?>'">Choose Option </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
    }
} else if ($command == "SearchProductByPrice") {
    $Min = $_POST["MinPrice"];
    $Max = $_POST["MaxPrice"];

    if (empty($Min)) {
        ?>
        <div class="col-12 text-center mt-5 mb-5">
            <span class="text-white fw-bold fs-1">Please Enter Minimum Price</span>
        </div>
    <?php
    } else if (empty($Max)) {
    ?>
        <div class="col-12 text-center mt-5 mb-5">
            <span class="text-white fw-bold fs-1">Please Enter Maximum Price</span>
        </div>
        <?php
    } else {
        $product_rs = FlexDatabase::search("SELECT * FROM `product` INNER JOIN `product_images` ON `product_images`.`product_Product_id` = `product`.`Product_id` WHERE `Price` BETWEEN '" . $Min . "' AND '" . $Max . "' ");
        $product_num = $product_rs->num_rows;

        for ($x = 0; $x < $product_num; $x++) {
            $product_data = $product_rs->fetch_assoc();
        ?>
            <div class="col-lg-3 col-6 mt-5 p-4">
                <div class="row">
                    <div class="col-12 FlexProductCard  ">
                        <div class="row">
                            <div class="col-lg-10 col-12 offset-lg-1 ProductImageCover ">
                                <div class="row">
                                    <div class="col-12 ProductFirstImageCover">
                                        <img src="<?php echo ($product_data["Main_Image"]) ?>" class="FlexProductImage1" alt="<?php echo ($product_data["Main_Image"]) ?>">
                                    </div>
                                    <div class="col-12 ProductSecondImageCover ">
                                        <img src="<?php echo ($product_data["Seciond_Image"]) ?>" class="FlexProductImage2" alt="<?php echo ($product_data["Seciond_Image"]) ?>">
                                    </div>
                                </div>
                            </div>
                            <!-- Large Screen -->
                            <div class="col-12 " style="height: 90px;">
                                <div class="row">
                                    <div class="col-lg-10  col-12 offset-lg-1 mt-1 fw-bold fs-5 text-white d-lg-block d-none">
                                        <span><?php echo ($product_data["Product_name"]) ?></span>
                                    </div>
                                    <!-- Small Screen -->
                                    <div class="col-lg-10  col-12 offset-lg-1 mt-1 fw-bold text-white  d-lg-none d-block">
                                        <small><?php echo ($product_data["Product_name"]) ?></small>
                                    </div>
                                    <div class="col-lg-10 offset-lg-1 col-12 text-white-50">
                                        <span>Rs.<?php echo ($product_data["Price"]) ?></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Button -->
                            <div class="col-lg-10 col-12 mt-2 offset-lg-1 position-relative overflow-hidden ">
                                <div class="col-12 ViewProductButton ">
                                    <div class="col-11 ViewProductButto2 d-lg-block d-none  ">
                                    </div>
                                    <span class="ViewProductButtonText text-center" onclick="window.location='FlexSingleProductView.php?id=<?php echo ($product_data['Product_id']) ?>'">Choose Option </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
    }
} else if ($command == "smallScreenCategorySearch") {
    $Category_name = $_POST["CategoryName"];

    $product_rs = FlexDatabase::search("SELECT * FROM `product` INNER JOIN `product_images` ON `product_images`.`product_Product_id` = `product`.`Product_id` INNER JOIN `category` ON `category`.`c_id` = `product`.`Category_id` WHERE `category_name` = '" . $Category_name . "'");
    $product_num = $product_rs->num_rows;
    if ($product_num != 0) {
        for ($x = 0; $x < $product_num; $x++) {
            $product_data = $product_rs->fetch_assoc();
        ?>
            <div class="col-lg-3 col-6 mt-5 p-4">
                <div class="row">
                    <div class="col-12 FlexProductCard  ">
                        <div class="row">
                            <div class="col-lg-10 col-12 offset-lg-1 ProductImageCover ">
                                <div class="row">
                                    <div class="col-12 ProductFirstImageCover">
                                        <img src="<?php echo ($product_data["Main_Image"]) ?>" class="FlexProductImage1" alt="<?php echo ($product_data["Main_Image"]) ?>">
                                    </div>
                                    <div class="col-12 ProductSecondImageCover ">
                                        <img src="<?php echo ($product_data["Seciond_Image"]) ?>" class="FlexProductImage2" alt="<?php echo ($product_data["Seciond_Image"]) ?>">
                                    </div>
                                </div>
                            </div>
                            <!-- Large Screen -->
                            <div class="col-12 " style="height: 90px;">
                                <div class="row">
                                    <div class="col-lg-10  col-12 offset-lg-1 mt-1 fw-bold fs-5 text-white d-lg-block d-none">
                                        <span><?php echo ($product_data["Product_name"]) ?></span>
                                    </div>
                                    <!-- Small Screen -->
                                    <div class="col-lg-10  col-12 offset-lg-1 mt-1 fw-bold text-white  d-lg-none d-block">
                                        <small><?php echo ($product_data["Product_name"]) ?></small>
                                    </div>
                                    <div class="col-lg-10 offset-lg-1 col-12 text-white-50">
                                        <span>Rs.<?php echo ($product_data["Price"]) ?></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Button -->
                            <div class="col-lg-10 col-12 mt-2 offset-lg-1 position-relative overflow-hidden ">
                                <div class="col-12 ViewProductButton ">
                                    <div class="col-11 ViewProductButto2 d-lg-block d-none  ">
                                    </div>
                                    <span class="ViewProductButtonText text-center" onclick="window.location='FlexSingleProductView.php?id=<?php echo ($product_data['Product_id']) ?>'">Buy Now </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
    } else {
        ?>
        <div class="col-12 text-center m-5">
            <div class="row">
                <div class="col-12 mb-5">
                    <hr class="fw-bold text-white">
                </div>
                <div class="col-12 mt-5">
                    <h1 class="text-white-50 fw-bold fs-1"> No Results </h1>
                </div>
            </div>
        </div>
<?php
    }
} else if ($command == "selectAndAddFlavours") {
    $pid = $_POST["pid"];
    $addFlavourSelector = $_POST["addFlavourSelector"];

    FlexDatabase::search("INSERT INTO `product_flavour` (`pf_product_id`,`pf_flavour_id`) VALUES ('" . $pid . "','" . $addFlavourSelector . "') ");
    echo ("Adding Success");
} else if ($command == "DeleteProductFlavoursonUpdateProcess") {

    $pid = $_POST["pid"];
    $Flavour_id = $_POST["Flavour_id"];

    FlexDatabase::search("DELETE FROM `product_flavour` WHERE `pf_product_id` = '" . $pid . "' AND `pf_flavour_id` = '" . $Flavour_id . "'  ");
    echo ("Delete Success");
} else if ($command == "LoadCheckoutCustomerData") {
    $CustomerCookie = $_POST["CookieId"];

    $CustomerCookie_rs = FlexDatabase::search("SELECT * FROM `user` INNER JOIN `cookie` ON `cookie`.`C_id` =  `user`.`Cookie_C_id`  WHERE `Cookie` = '" . $CustomerCookie . "'");
    $CustomerCookie_num = $CustomerCookie_rs->num_rows;

    if ($CustomerCookie_num == 1) {
        $CustomerCookie_data = $CustomerCookie_rs->fetch_assoc();
        $Email = $CustomerCookie_data["Email"];
        $Phone_no = $CustomerCookie_data["mobile"];
        $FirstName = $CustomerCookie_data["FIrst_name"];
        $LastName = $CustomerCookie_data["Last_name"];
        $Address = $CustomerCookie_data["Address"];
        $City = $CustomerCookie_data["City"];
        $PostalCode = $CustomerCookie_data["PostalCode"];


        $jsonArray = array(
            "Action" => "Have",
            "Email" => $Email,
            "PhoneNo" => $Phone_no,
            "First_name" => $FirstName,
            "Last_name" => $LastName,
            "Address" => $Address,
            "City" => $City,
            "PostalCode" => $PostalCode,
        );
        $jsonString = json_encode($jsonArray);
        echo ($jsonString);
    } else {
        $jsonArray = array(
            "Action" => "Nothing"
        );
        $jsonString = json_encode($jsonArray);
        echo ($jsonString);
    }
} else if ($command == "adminaddNewCategory") {

    $addNewCategoryName = $_POST["addNewCategory"];

    if (empty($addNewCategoryName)) {
        echo ("Please Enter A new Category");
    } else {
        $AlerasdyCategoryNameHave_rs  =   FlexDatabase::search("SELECT * FROM `category` WHERE `category_name` = '" . $addNewCategoryName . "' ");
        $AlerasdyCategoryNameHave_num = $AlerasdyCategoryNameHave_rs->num_rows;

        if ($AlerasdyCategoryNameHave_num == 1) {
            echo ("aleready Have this category");
        } else {
            FlexDatabase::iud("INSERT INTO `category` (`category_name`)VALUES ('" . $addNewCategoryName . "') ");
            echo ("Adding Success");
        }
    }
} else if ($command == "adminDeleteCategory") {

    $CategoryID = $_POST["CategoryID"];

    if ($CategoryID == "0") {
        echo ("Please Select a Category");
    } else {
        $AlerasdyCategoryNameHave_rs  =   FlexDatabase::search("SELECT * FROM `category` WHERE `c_id` = '" . $CategoryID . "' ");
        $AlerasdyCategoryNameHave_num = $AlerasdyCategoryNameHave_rs->num_rows;

        if ($AlerasdyCategoryNameHave_num == 0) {
            echo ("Something Wrong Please try again later");
        } else {
            FlexDatabase::iud("DELETE FROM `category`  WHERE `c_id` = '" . $CategoryID . "' ");
            echo ("Delete Success");
        }
    }
} else if ($command == "adminDeleteProductFlavour") {

    $FlavourSelector = $_POST["FlavourSelector"];

    if ($FlavourSelector == "0") {
        echo ("Please Select a Flavour to Delete");
    } else {
        $AlerasdyCategoryNameHave_rs  =   FlexDatabase::search("SELECT * FROM `flavors` WHERE `flavour_name` = '" . $FlavourSelector . "' ");
        $AlerasdyCategoryNameHave_num = $AlerasdyCategoryNameHave_rs->num_rows;

        echo ($AlerasdyCategoryNameHave_num);


        if ($AlerasdyCategoryNameHave_num > 0) {
            FlexDatabase::iud("DELETE FROM `flavors`  WHERE `flavour_name` = '" . $FlavourSelector . "' ");
            echo ("Delete Success");
        } else {
            echo ("Something Wrong Please try again later");
        }
    }
} else if ($command == "cencelOrderStatus") {

    $order_id = $_POST["Order_id"];

    FlexDatabase::iud("UPDATE `order` SET `Status_Sid` = '2' WHERE `Order_id` = '" . $order_id . "' ");
    echo ("Canceled Order");
}




// else if ($command == "ChangingFlavour") {
//    $flavour_name = $_POST["FlavourName"];
//    $_SESSION["Flavour"] = $flavour_name;

// }
