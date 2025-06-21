<?php
session_start();
require "Connections/connection.php";
$command = $_POST["command"];

require "PHPMailer.php";
require "Exception.php";
require "SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;

$_SESSION["Category"] = "?";

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

            $oldImage_rs = Database::search("SELECT * FROM `homeaboutimage` WHERE `HAI_id` = '" . $id . "' ");
            $oldImage_num = $oldImage_rs->num_rows;
            $oldImage_data = $oldImage_rs->fetch_assoc();

            if ($oldImage_num == "1") {
                unlink($oldImage_data["HAI_path"]);
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
} else if ($command == "DeleteStoryInfo") { // admin change story para
    $id = $_POST["id"];
    Database::iud("DELETE FROM `homestories` WHERE `HS_id` = '" . $id . "' ");
    echo ("Delete Success");
} else if ($command == "AddStoryBox") { // admin add Story box
    if (!empty($_FILES["file"])) {

        $ImageFile = $_FILES["file"];
        $ImageType = $ImageFile["type"];


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


            if (!empty($_POST["storyparainput"])) {
                $oldImage_rs = Database::search("SELECT * FROM `homestories` ");
                $oldImage_num = $oldImage_rs->num_rows;
                $id = $oldImage_num + 1;
                $para = $_POST["storyparainput"];
                $newImageName = "Resources//images//storyboxImage//story" . $id . $NewImage_Extention;

                Database::iud("INSERT INTO `homestories` (`HS_id`,`HS_image`,`Hs_text`) VALUES('" . $id . "','" . $newImageName . "','" . $para . "')");
                move_uploaded_file($ImageFile["tmp_name"], $newImageName);
                echo ("Adding Success");
            } else {
                echo ("Please Enter  Paragraph");
            }
        } else {
            echo ("Please Select Valid Image Extention");
        }
    } else {
        echo ("Please Select a Image");
    }
} else if ($command == "ChangeTopImage") { // admin change Top Image in Pages Classes and Blog Page
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

            $newImageName = "Resources//images//pageTopImages//top" . $id . $NewImage_Extention;

            $oldImage_rs = Database::search("SELECT * FROM `classestopimage` WHERE `CTI_id` = '" . $id . "' ");
            $oldImage_num = $oldImage_rs->num_rows;
            $oldImage_data = $oldImage_rs->fetch_assoc();

            if ($oldImage_num == "1") {
                unlink($oldImage_data["CTI_path"]);
                move_uploaded_file($ImageFile["tmp_name"], $newImageName);
                Database::iud("UPDATE `classestopimage` SET `CTI_path` = '" . $newImageName . "' WHERE `CTI_id` = '" . $id . "'");
                echo ("Update Success");
            } else {
                move_uploaded_file($ImageFile["tmp_name"], $newImageName);
                Database::iud("UPDATE `classestopimage` SET `CTI_path` = '" . $newImageName . "' WHERE `CTI_id` = '" . $id . "'");
                echo ("Update Success");
            }
        } else {
            echo ("Please Select Valid Image Extention");
        }
    } else {
        echo ("Please Select a Image");
    }
} else if ($command == "ChangeAreaImage") { // admin change Areas Image
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

            $newImageName = "Resources//images//Areas//Area" . $id . $NewImage_Extention;

            $oldImage_rs = Database::search("SELECT * FROM `clasessareas` WHERE `CA_id` = '" . $id . "' ");
            $oldImage_num = $oldImage_rs->num_rows;
            $oldImage_data = $oldImage_rs->fetch_assoc();

            if ($oldImage_num == "1") {
                unlink($oldImage_data["CA_image"]);
                move_uploaded_file($ImageFile["tmp_name"], $newImageName);
                Database::iud("UPDATE `clasessareas` SET `CA_image` = '" . $newImageName . "' WHERE `CA_id` = '" . $id . "'");
                echo ("Update Success");
            } else {
                move_uploaded_file($ImageFile["tmp_name"], $newImageName);
                Database::iud("UPDATE `clasessareas` SET `CA_image` = '" . $newImageName . "' WHERE `CA_id` = '" . $id . "'");
                echo ("Update Success");
            }
        } else {
            echo ("Please Select Valid Image Extention");
        }
    } else {
        echo ("Please Select a Image");
    }
} else if ($command == "ChangeAreaInfo") { // admin change Areas Image
    if (empty($_POST["Name"])) {
        echo ("Please Enter a Name");
    } else     if (empty($_POST["Number"])) {
        echo ("Please Enter a Number");
    } else {
        $Name = $_POST["Name"];
        $Number = $_POST["Number"];
        $id = $_POST["id"];
        Database::search("UPDATE `clasessareas` SET `CA_text` = '" . $Name . "' , `CA_classes_NO` = '" . $Number . "' WHERE `CA_id` = '" . $id . "' ");
        echo ("Update Success");
    }
} else if ($command == "ChangeFacilitiesAboutPara") { // admin change Fitness About Para

    if (empty($_POST["About"])) {
        echo ("Please Enter a Paragraph");
    } else {
        $About = $_POST["About"];
        Database::search("UPDATE `facilitiesabout` SET `AboutPara` = '" . $About . "'  WHERE `FA_id` = '1' ");
        echo ("Update Success");
    }
} else if ($command == "addFacilitiesFeutrues") { // admin add Facilities Features

    if (empty($_POST["Text"])) {
        echo ("Please Enter a text");
    } else {
        $text = $_POST["Text"];
        Database::search(" INSERT INTO `facilitiesfeatures` (`text`) VALUES('" . $text . "') ");
        echo ("Update Success");
    }
} else if ($command == "DeleteFacilitiesFeatures") { // admin Delete Facilities Features
    $id = $_POST["id"];
    Database::search(" DELETE FROM `facilitiesfeatures` WHERE `FF_id` = '" . $id . "' ");
    echo ("Delete Success");
} else if ($command == "ChangePremiumImage") { // admin change primeum Facilities Features Image
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

            $newImageName = "Resources//images//PremiumImagesFacilities//Facilities" . $id . $NewImage_Extention;

            $oldImage_rs = Database::search("SELECT * FROM `premiumfacilities` WHERE `PF_id` = '" . $id . "' ");
            $oldImage_num = $oldImage_rs->num_rows;
            $oldImage_data = $oldImage_rs->fetch_assoc();

            if ($oldImage_num == "1") {
                unlink($oldImage_data["ImagePath"]);
                move_uploaded_file($ImageFile["tmp_name"], $newImageName);
                Database::iud("UPDATE `premiumfacilities` SET `ImagePath` = '" . $newImageName . "' WHERE `PF_id` = '" . $id . "'");
                echo ("Update Success");
            } else {
                move_uploaded_file($ImageFile["tmp_name"], $newImageName);
                Database::iud("UPDATE `premiumfacilities` SET `ImagePath` = '" . $newImageName . "' WHERE `PF_id` = '" . $id . "'");
                echo ("Update Success");
            }
        } else {
            echo ("Please Select Valid Image Extention");
        }
    } else {
        echo ("Please Select a Image");
    }
} else if ($command == "changePfacilitiesinof") { // admin Change premium Facilities Infomations

    if (empty($_POST["topic"])) {
        echo ("Please Enter a topic");
    } else if (empty($_POST["para"])) {
        echo ("Please Enter a paragraph");
    } else {
        $topic = $_POST["topic"];
        $para = $_POST["para"];
        $id = $_POST["id"];
        Database::search("UPDATE `premiumfacilities` SET `ImageHeadline` = '" . $topic . "' , `ImagePara` = '" . $para . "' WHERE `PF_id` = '" . $id . "' ");
        echo ("Update Success");
    }
} else if ($command == "ChangeFactoryImage") { // admin Change Factory Items
    if (!empty($_FILES["file"])) {

        $ImageFile = $_FILES["file"];
        $ImageType = $ImageFile["type"];

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

            $newImageName = "Resources//images//FactoryImage//Factory" . $NewImage_Extention;

            $oldImage_rs = Database::search("SELECT * FROM `factoryimage` WHERE `FI_id` = '1' ");
            $oldImage_num = $oldImage_rs->num_rows;
            $oldImage_data = $oldImage_rs->fetch_assoc();

            if ($oldImage_num == "1") {
                unlink($oldImage_data["iamgePath"]);
                move_uploaded_file($ImageFile["tmp_name"], $newImageName);
                Database::iud("UPDATE `factoryimage` SET `iamgePath` = '" . $newImageName . "' WHERE `FI_id` = '1'");
                echo ("Update Success");
            } else {
                move_uploaded_file($ImageFile["tmp_name"], $newImageName);
                Database::iud("UPDATE `factoryimage` SET `iamgePath` = '" . $newImageName . "' WHERE `FI_id` = '1' ");
                echo ("Update Success");
            }
        } else {
            echo ("Please Select Valid Image Extention");
        }
    } else {
        echo ("Please Select a Image");
    }
} else if ($command == "ChangeFactoryInfo") { // admin Change Factory para
    if (empty($_POST["para"])) {
        echo ("Please Enter a paragraph");
    } else {
        $para = $_POST["para"];
        Database::search("UPDATE `factoryimage` SET `para` = '" . $para . "'  WHERE `FI_id` = '1' ");
        echo ("Update Success");
    }
} else if ($command == "AddFacotryItems") { // admin add Factory Items
    if (empty($_POST["itemName"])) {
        echo ("Please Enter a Item Name");
    } else  if (empty($_POST["ItemCategory"])) {
        echo ("Please Enter a Item Category");
    } else {
        $itemName = $_POST["itemName"];
        $ItemCategory = $_POST["ItemCategory"];

        Database::search("INSERT INTO `factoryinfo` (`FactoryCategory`,`ProductName`) VALUES ('" . $ItemCategory . "','" . $itemName . "') ");
        echo ("Adding Success");
    }
} else if ($command == "AddBlogPost") { // admin add Blog Post
    if (!empty($_FILES["file"])) {

        $ImageFile = $_FILES["file"];
        $ImageType = $ImageFile["type"];

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


            if (!empty($_POST["blogName"])) {


                if (!empty($_POST["content"])) {
                    $blogName = $_POST["blogName"];
                    $Category = $_POST["Category"];
                    $content = $_POST["content"];
                    $Para = Database::escape($content);

                    // Get Date Time
                    $date = date("Y.m.d");
                    $time = date("H:i:s");


                    $last_id = Database::search("SELECT * FROM `blog`");
                    $last_num = $last_id->num_rows;

                    $last_num = $last_num + 1;

                    $newImageName = "Resources//images//blogImage//blog" . $last_num . $blogName . $NewImage_Extention;

                    Database::iud("INSERT INTO `blog` (`Bid`,`BlogName`,`content`,`BlogMainImage`,`Bdate`,`Btime`,`blogCategory`) VALUES('" . $last_num . "','" . $blogName . "','" . $Para . "','" . $newImageName . "','" . $date . "','" . $time . "','" . $Category . "')");
                    move_uploaded_file($ImageFile["tmp_name"], $newImageName);
                    echo ("Adding Success");
                } else {
                    echo ("Please Type Your Content");
                }
            } else {
                echo ("Please Enter  Paragraph");
            }
        } else {
            echo ("Please Select Valid Image Extention");
        }
    } else {
        echo ("Please Select a Image");
    }
} else if ($command == "UpdateBlogPostChangeImage") { // admin Update BlogPost Image
    if (!empty($_FILES["file"])) {

        $ImageFile = $_FILES["file"];
        $ImageType = $ImageFile["type"];

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

            if (!empty($_POST["blogName"])) {
                $blogName = $_POST["blogName"];
                $id = $_POST["id"];

                $newImageName = "Resources//images//blogImage//blog" . $id . $blogName . $NewImage_Extention;


                $oldImage_rs = Database::search("SELECT * FROM `blog` WHERE `Bid` = '" . $id . "' ");
                $oldImage_num = $oldImage_rs->num_rows;
                $oldImage_data = $oldImage_rs->fetch_assoc();

                if ($oldImage_num == "1") {
                    unlink($oldImage_data["BlogMainImage"]);
                    move_uploaded_file($ImageFile["tmp_name"], $newImageName);
                    Database::iud("UPDATE `blog` SET `BlogMainImage` = '" . $newImageName . "' WHERE `Bid` = '" . $id . "'");
                    echo ("Update Success");
                } else {
                    move_uploaded_file($ImageFile["tmp_name"], $newImageName);
                    Database::iud("UPDATE `blog` SET `BlogMainImage` = '" . $newImageName . "' WHERE `Bid` = '" . $id . "'");
                    echo ("Update Success");
                }
            } else {
                echo ("Please Enter  Paragraph");
            }
        } else {
            echo ("Please Select Valid Image Extention");
        }
    } else {
        echo ("Please Select a Image");
    }
} else if ($command == "UpdateBlogPost") { // admin Update blog Content
    if (empty($_POST["blogName"])) {
        echo ("Please Enter a Blog Name");
    } else  if (empty($_POST["content"])) {
        echo ("Please Enter a Item Content");
    } else {
        $blogName = $_POST["blogName"];
        $content = $_POST["content"];
        $id = $_POST["id"];
        $Category = $_POST["Category"];
        $content = Database::escape($content);


        Database::search("UPDATE `blog` SET `BlogName` = '" . $blogName . "' ,`content` = '" . $content . "' , `blogCategory` = '" . $Category . "'  WHERE `Bid` = '" . $id . "'");
        echo ("Update Success");
    }
} else if ($command == "DeleteBlog") { // admin Delete Blog
    $id = $_POST["id"];
    $oldImage_rs = Database::search("SELECT * FROM `blog` WHERE `Bid` = '" . $id . "' ");
    $oldImage_data = $oldImage_rs->fetch_assoc();
    unlink($oldImage_data["BlogMainImage"]);
    Database::search(" DELETE FROM `blog` WHERE `Bid` = '" . $id . "' ");
    echo ("Delete Success");
} else if ($command == "ChangeBlogCategory") { // admin Delete Blog 
    $Category_id =  $_POST["Bid"];
    $_SESSION["Category"] = $Category_id;
    echo ($Category_id);
} else if ($command == "SendEmailTOUS") {


    $Name = $_POST["Name"];
    $email = $_POST["email"];
    $Mobile = $_POST["Mobile"];
    $Message = $_POST["Message"];

    try {
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'shanufer722@gmail.com';
        $mail->Password = 'hsjjfhprupxmxlla';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->setFrom('shanufer722@gmail.com', 'New Registration');
        $mail->addReplyTo('shanufer4@gmail.com', 'New Registration');
        $email = $_POST["email"] ?? 'example@example.com';
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = 'New Registration';
        $customer_data = [];

        ob_start();
?>
        <div style="background-color:#f4f4f4; padding:30px; font-family:Arial, sans-serif; border-radius:10px;">
            <div style="background-color:#000000; color:white; padding:20px; border-radius:10px 10px 0 0;">
                <h2>Fitness First - New Contact Message</h2>
            </div>
            <div style="background-color:white; padding:20px; border-radius:0 0 10px 10px;">
                <p><strong>Name:</strong> <?= htmlspecialchars($Name) ?></p>
                <p><strong>Email:</strong> <?= htmlspecialchars($email) ?></p>
                <p><strong>Mobile:</strong> <?= htmlspecialchars($Mobile) ?></p>
                <p><strong>Message:</strong></p>
                <div style="background-color:#f1f1f1; padding:15px; border-left:4px solid #2e7d32;">
                    <?= nl2br(htmlspecialchars($Message)) ?>
                </div>
                <hr>
                <p style="font-size:12px; color:gray;">This message was sent from the contact form on your website.</p>
            </div>
        </div>
<?php
        $mail->Body = ob_get_clean();
        $mail->send();
        echo "success";
    } catch (Exception $e) {
        echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else if ($command == "LoadTrainers") {

    $result = Database::search("SELECT * FROM `trainers`");
    $Trainers = [];

    while ($row = $result->fetch_assoc()) {
        $Trainers[] = $row;
    }

    if (empty($Trainers)) {
        echo json_encode([
            "status" => "empty",
            "message" => "No Trainer found"
        ]);
    } else {
        echo json_encode([
            "status" => "success",
            "data" => $Trainers
        ]);
    }
} else if ($command == "InsertTrainers") {
    $name = $_POST["name"];
    $position = $_POST["position"];
    $facebook = $_POST["facebook"];
    $instagram = $_POST["instagram"];


    if (isset($_FILES["image"]) && $_FILES["image"]["error"] === UPLOAD_ERR_OK) {
        $uploadDir = __DIR__ . "/img/trainers";
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        $fileName = basename($_FILES["image"]["name"]);
        $uniqueName = uniqid() . "_" . $fileName;
        $targetFile = $uploadDir . "/" . $uniqueName;

        $imageType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        $allowed = ['jpg', 'jpeg', 'png', 'gif'];

        if (!in_array($imageType, $allowed)) {
            echo "Invalid image type";
            exit();
        }

        if (!file_exists($_FILES["image"]["tmp_name"])) {
            echo "Temp file not found: " . $_FILES["image"]["tmp_name"];
            exit();
        }

        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
            $relativePath = "img/trainers/" . $uniqueName;
            Database::iud("INSERT INTO trainers 
            (`name`, `position`, `facebook`, `instagram`, `image`) 
            VALUES 
            ('{$name}', '{$position}', '{$facebook}', '{$instagram}', '{$relativePath}')");

            echo "success";
        } else {
            echo "Failed to move uploaded image.";
        }
    } else {
        echo "Image upload failed. Error code: " . $_FILES["image"]["error"];
    }
} else if ($command == "UpdateTrainer") {
    $Trainer_id = intval($_POST["Trainer_id"]);
    $name = $_POST["name"];
    $position = $_POST["position"];
    $facebook = $_POST["facebook"];
    $instagram = $_POST["instagram"];

    $relativePath = null;

    if (isset($_FILES["image"]) && $_FILES["image"]["error"] === UPLOAD_ERR_OK) {
        $uploadDir = __DIR__ . "/img/trainers";
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        $fileName = basename($_FILES["image"]["name"]);
        $uniqueName = uniqid() . "_" . $fileName;
        $targetFile = $uploadDir . "/" . $uniqueName;

        $imageType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        $allowed = ['jpg', 'jpeg', 'png', 'gif'];

        if (!in_array($imageType, $allowed)) {
            echo "Invalid image type";
            exit();
        }

        if (!file_exists($_FILES["image"]["tmp_name"])) {
            echo "Temp file not found: " . $_FILES["image"]["tmp_name"];
            exit();
        }

        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
            $relativePath = "img/trainers/" . $uniqueName;
        } else {
            echo "Failed to move uploaded image.";
            exit();
        }
    }

    if ($relativePath !== null) {
        $sql = "UPDATE `trainers`SET 
                    `name` = '{$name}', 
                    `position` = '{$position}', 
                    `facebook` = '{$facebook}', 
                    `instagram` = '{$instagram}', 
                    `image` = '{$relativePath}' 
                WHERE `Trainer_id` = {$Trainer_id}";
    } else {
        $sql = "UPDATE `trainers` SET 
                    `name` = '{$name}', 
                    `position` = '{$position}', 
                    `facebook` = '{$facebook}', 
                    `instagram` = '{$instagram}' 
                WHERE `Trainer_id` = {$Trainer_id}";
    }

    Database::iud($sql);
    echo "success";
} else if ($command == "DeleteTrainer") {
    $trainer_id = intval($_POST["Trainer_id"]);
    Database::iud("DELETE FROM `trainers` WHERE `Trainer_id` = {$trainer_id}");
    echo "success";
} else if ($command == "InsertTestimonial") {
    $name = $_POST["name"];
    $description = $_POST["description"];
    $rating = intval($_POST["rating"]);

    if ($rating < 1 || $rating > 5) {
        echo "Invalid rating value";
        exit();
    }

    if (isset($_FILES["image"]) && $_FILES["image"]["error"] === UPLOAD_ERR_OK) {
        $uploadDir = __DIR__ . "/img/testimonial";
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        $fileName = basename($_FILES["image"]["name"]);
        $uniqueName = uniqid() . "_" . $fileName;
        $targetFile = $uploadDir . "/" . $uniqueName;

        $imageType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        $allowed = ['jpg', 'jpeg', 'png', 'gif'];

        if (!in_array($imageType, $allowed)) {
            echo "Invalid image type";
            exit();
        }

        if (!file_exists($_FILES["image"]["tmp_name"])) {
            echo "Temp file not found: " . $_FILES["image"]["tmp_name"];
            exit();
        }

        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
            $relativePath = "img/testimonial/" . $uniqueName;
            Database::iud("INSERT INTO `testimonial` 
                (`name`, `description`, `rating`, `image`) 
                VALUES 
                ('{$name}', '{$description}', {$rating}, '{$relativePath}')");

            echo "success";
        } else {
            echo "Failed to move uploaded image.";
        }
    } else {
        echo "Image upload failed. Error code: " . $_FILES["image"]["error"];
    }
} else if ($command == "LoadTestimonial") {
    $result = Database::search("SELECT * FROM `testimonial` ");

    if ($result && $result->num_rows > 0) {
        $data = [];

        while ($row = $result->fetch_assoc()) {
            $data[] = [
                "Testimonial_id" => $row["Testimonial_id"],
                "name" => $row["name"],
                "description" => $row["description"],
                "rating" => $row["rating"],
                "image" => $row["image"]
            ];
        }

        echo json_encode([
            "status" => "success",
            "data" => $data
        ]);
    } else {
        echo json_encode([
            "status" => "empty"
        ]);
    }
} else if ($command == "InsertTestimonial") {
    $name = $_POST["name"];
    $description = $_POST["description"];
    $rating = $_POST["rating"];

    if (isset($_FILES["image"]) && $_FILES["image"]["error"] === UPLOAD_ERR_OK) {
        $uploadDir = __DIR__ . "/img/testimonials";
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        $fileName = basename($_FILES["image"]["name"]);
        $uniqueName = uniqid() . "_" . $fileName;
        $targetFile = $uploadDir . "/" . $uniqueName;

        $imageType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        $allowed = ['jpg', 'jpeg', 'png', 'gif'];

        if (!in_array($imageType, $allowed)) {
            echo "Invalid image type";
            exit();
        }

        if (!file_exists($_FILES["image"]["tmp_name"])) {
            echo "Temp file not found.";
            exit();
        }

        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
            $relativePath = "img/testimonials/" . $uniqueName;
            Database::iud("INSERT INTO Testimonial 
                (`name`, `description`, `rating`, `image`) 
                VALUES 
                ('{$name}', '{$description}', '{$rating}', '{$relativePath}')");
            echo "success";
        } else {
            echo "Failed to move uploaded image.";
        }
    } else {
        echo "Image upload failed. Error code: " . $_FILES["image"]["error"];
    }
} else if ($command == "UpdateTestimonial") {
    $id = intval($_POST["Testimonial_id"]);
    $name = $_POST["name"];
    $description = $_POST["description"];
    $rating = $_POST["rating"];

    $imagePath = "";

    if (isset($_FILES["image"]) && $_FILES["image"]["error"] === UPLOAD_ERR_OK) {
        $uploadDir = __DIR__ . "/img/testimonial";
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        $fileName = basename($_FILES["image"]["name"]);
        $uniqueName = uniqid() . "_" . $fileName;
        $targetFile = $uploadDir . "/" . $uniqueName;

        $imageType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        $allowed = ['jpg', 'jpeg', 'png', 'gif'];

        if (!in_array($imageType, $allowed)) {
            echo "Invalid image type";
            exit();
        }

        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
            $imagePath = "img/testimonial/" . $uniqueName;

            $res = Database::search("SELECT image FROM `testimonial` WHERE `Testimonial_id` = {$id}");
            if ($res && mysqli_num_rows($res) > 0) {
                $row = mysqli_fetch_assoc($res);
                $oldPath = __DIR__ . "/" . $row["image"];
                if (file_exists($oldPath)) {
                    unlink($oldPath);
                }
            }
            Database::iud("UPDATE `testimonial` SET 
                name='{$name}', description='{$description}', rating='{$rating}', image='{$imagePath}'
                WHERE `Testimonial_id`={$id}");
        } else {
            echo "Failed to move new image.";
            exit();
        }
    } else {
        Database::iud("UPDATE `testimonial` SET 
            name='{$name}', description='{$description}', rating='{$rating}'
            WHERE `Testimonial_id`={$id}");
    }

    echo "success";
} else if ($command == "DeleteTestimonial") {
    $id = intval($_POST["Testimonial_id"]);

    $res = Database::search("SELECT image FROM `testimonial` WHERE `Testimonial_id` = {$id}");
    if ($res && mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        $imagePath = __DIR__ . "/" . $row["image"];
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
    }

    Database::iud("DELETE FROM `testimonial` WHERE `Testimonial_id` = {$id}");
    echo  "success";
} else if ($command == "loadTestimonial") {
    $result = Database::search("SELECT * FROM testimonial");

    if ($result && mysqli_num_rows($result) > 0) {
        $data = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = [
                "Testimonial_id" => $row["Testimonial_id"],
                "name" => $row["name"],
                "description" => $row["description"],
                "rating" => $row["rating"],
                "image" => $row["image"]
            ];
        }

        echo json_encode([
            "status" => "success",
            "data" => $data
        ]);
    } else {
        echo json_encode([
            "status" => "empty"
        ]);
    }
}
