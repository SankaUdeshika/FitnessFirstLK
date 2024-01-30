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
}
