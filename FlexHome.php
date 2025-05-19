<?php
require "Connections/FlexConnection.php";
// FilterHomeProducts
session_start();

// Flex Product Flavour initialize (Flex Flavour Session) Hided
// $_SESSION["Flavour"] = "";

if ($_SESSION["HomeProduct"] == null) {
    $_SESSION["HomeProduct"] = "TopSellers";
    header("Location: http://localhost/fitnesFirst/FlexHome.php");
}


// Coookie Set
if (!isset($_COOKIE["User"])) {
    $cookie_name = "User";
    $cookie_value = uniqid("user");
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
    header("Location: http://localhost/fitnesFirst/FlexHome.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flex Home | Fitness First LK</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="icon" href="resources/Images/LOGO/NewFitnessFirst_LOGO.png">
    <meta name="keywords" content="FitnessFirstLk,Fitness,First,Lk,Gym">
    <meta name="description" content="Best Fitness centers & gyms in Colombo, Western Province, Sri Lanka. High Octane Fitness, Get U Fit Gym, Ultimate Gym">
</head>

<body class="bg-black">

    <!-- preloader -->
    <div class="col-12 preloader " id="preloader">
        <?php include "preloader.php" ?>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="row">


                    <!-- Top red Bar -->
                    <div class="col-12" style="background-color:red;">
                        <div class="row ">
                            <div class="col-lg-4">
                            </div>
                            <div class="col-lg-4 col-12 text-center mt-2 mb-2 ">
                                <label class=" Number visually-hidden  " id="Number">0</label>
                                <span class="FlexTopRedBarTopic">Exclusive Suppliment🔥</span>
                            </div>
                        </div>
                    </div>

                    <!-- Flex Header -->
                    <div class="col-12 position-sticky top-0 " style="z-index: 4;">
                        <div class="row">
                            <?php include "FlexHeader.php" ?>
                        </div>
                    </div>

                    <!-- Flex Home Image -->
                    <div class="col-12 position-relative">
                        <div class="row">

                            <div class="col-lg-12 d-lg-block d-none  ">
                                <img src="Resources/images/carouselImages/Hero Section.png" class="FlexHomeImageLargeScreens" width="100%">
                            </div>

                            <div class="col-lg-12 d-lg-none d-block  ">
                                <img src="Resources/images/carouselImages/flexx 1.png" class="FlexHomeImage" width="100%" id="FlexHomeCarosuelImage">
                            </div>

                        </div>
                    </div>
                    <!-- Category Tabs -->
                    <div class="col-10 d-lg-block d-none offset-1 mt-5">
                        <div class="row">
                            <div class="col-12 fw-bold text-white mt-2 ">
                                <h2 class="FlexTopicText">Best Seller</h1>
                            </div>
                            <!-- <h1><?php echo ($_SESSION["HomeProduct"]) ?></h1> -->
                            <div class="col-12 nt-4 ">
                                <div class="row">
                                    <?php
                                    if ($_SESSION["HomeProduct"] == "TopSellers") {
                                    ?>
                                        <div class="col-2 mx-4 text-center  FlexCategoryTabsActive" onclick="ChangeHomeCategory('TopSellers');">
                                            <span>Top Sellers</span>
                                        </div>
                                        <div class="col-2 offset-1 text-center FlexCategoryTabs" onclick="ChangeHomeCategory('EndergyDrink');">
                                            <span>Energy Drink</span>
                                        </div>
                                        <div class="col-2 offset-1 text-center FlexCategoryTabs" onclick="ChangeHomeCategory('Protein');">
                                            <span>Protein</span>
                                        </div>
                                    <?php
                                    } else if ($_SESSION["HomeProduct"] == "EnergyDrink") {
                                    ?>
                                        <div class="col-2 mx-4 text-center  FlexCategoryTabs" onclick="ChangeHomeCategory('TopSellers');">
                                            <span>Top Sellers</span>
                                        </div>
                                        <div class="col-2 offset-1 text-center FlexCategoryTabsActive" onclick="ChangeHomeCategory('EndergyDrink');">
                                            <span>Energy Drink</span>
                                        </div>
                                        <div class="col-2 offset-1 text-center FlexCategoryTabs" onclick="ChangeHomeCategory('Protein');">
                                            <span>Protein</span>
                                        </div>
                                    <?php
                                    } else if ($_SESSION["HomeProduct"] == "Protein") {
                                    ?>
                                        <div class="col-2 mx-4 text-center  FlexCategoryTabs" onclick="ChangeHomeCategory('TopSellers');">
                                            <span>Top Sellers</span>
                                        </div>
                                        <div class="col-2 offset-1 text-center FlexCategoryTabs" onclick="ChangeHomeCategory('EndergyDrink');">
                                            <span>Energy Drink</span>
                                        </div>
                                        <div class="col-2 offset-1 text-center FlexCategoryTabsActive" onclick="ChangeHomeCategory('Protein');">
                                            <span>Protein</span>
                                        </div>
                                    <?php
                                    }
                                    ?>

                                    <div class="col-2 offset-1 text-center FlexCategoryTabs" onclick="window.location = 'FlexCatelog.php'">
                                        <span>All Products</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Flex Item  -->
                    <div class="col-12 d-flex justify-content-center mt-5 mb-5 ">
                        <div class="HomeProductViewCover" id="SearchResultShow">
                            <div class="col-12">
                                <div class="row">



                                    <!-- Items Start Large Itmes-->
                                    <div class="col-12 Fade DownToUP d-lg-block d-none">
                                        <div class="row  d-flex justify-content-center" id="ShowSearchItems">

                                            <!-- Connect Database -->
                                            <?php

                                            if ($_SESSION["HomeProduct"] == "TopSellers") {
                                                $product_rs =  FlexDatabase::search("SELECT * FROM `product` INNER JOIN `product_images` ON `product_images`.`product_Product_id` = `product`.`Product_id` WHERE `product`.`Qty` != '0'  ORDER BY `Qty` DESC LIMIT 8 ");
                                            } else if ($_SESSION["HomeProduct"] == "EnergyDrink") {
                                                $product_rs =  FlexDatabase::search("SELECT * FROM `product` INNER JOIN `product_images` ON `product_images`.`product_Product_id` = `product`.`Product_id` INNER JOIN `category` ON `category`.`c_id` = `product`.`Category_id` WHERE `category_name` = 'Energy Drink' AND `product`.`Qty` != '0' LIMIT 8 ");
                                            } else if ($_SESSION["HomeProduct"] == "Protein") {
                                                $product_rs =  FlexDatabase::search("SELECT * FROM `product` INNER JOIN `product_images` ON `product_images`.`product_Product_id` = `product`.`Product_id` INNER JOIN `category` ON `category`.`c_id` = `product`.`Category_id` WHERE `category_name` = 'Protein' AND `product`.`Qty` != '0' LIMIT 8 ");
                                            }

                                            $product_num = $product_rs->num_rows;

                                            for ($i = 0; $i < $product_num; $i++) {
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
                                                                        <div class="col-12 ProductSecondImageCover " onclick="window.location='FlexSingleProductView.php?id=<?php echo ($product_data['Product_id']) ?>'" style="cursor: pointer;">
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
                                                                        <div class="col-lg-10  col-12 offset-lg-1 mt-1 fw-bold text-white  d-lg-none d-block" >
                                                                            <small><?php echo ($product_data["Product_name"]) ?></small>
                                                                        </div>
                                                                        <div class="col-lg-10 offset-lg-1 col-12 text-white-50">
                                                                            <span>Rs.<?php echo ($product_data["Price"]) ?></span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- Button -->
                                                                <div class="col-lg-10 col-12 mt-2 offset-lg-1 position-relative overflow-hidden ">
                                                                    <div class="col-12 ViewProductButton " style="cursor: pointer;" onclick="window.location='FlexSingleProductView.php?id=<?php echo ($product_data['Product_id']) ?>'">
                                                                        <div class="col-11 ViewProductButto2 d-lg-block d-none  ">
                                                                        </div>
                                                                        <span class="ViewProductButtonText text-center" >Buy Now</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php
                                            }

                                            ?>

                                        </div>
                                    </div>

                                    <!-- Items Start Samll Sceens -->
                                    <div class="col-12 Fade DownToUP d-lg-none d-block">
                                        <div class="row  d-flex justify-content-center" id="ShowSearchItemssmall">
                                            <!-- Energy Drinks -->
                                            <div class="col-12">
                                                <div class="col-10 mx-4 text-center  FlexCategoryTabs" onclick="ChageEnergyDrinks();">
                                                    <span>Energy Drinks</span>
                                                </div>
                                            </div>
                                            <div class="col-12 " style="display: flex; overflow: hidden;">
                                                <div class=" EnergyDrinkSmallSceenCarousel" id="EnergyDrinksInnerCarosuel">
                                                    <?php
                                                    $EnergyDrinkProduct_rs =  FlexDatabase::search("SELECT * FROM `product` INNER JOIN `product_images` ON `product_images`.`product_Product_id` = `product`.`Product_id` INNER JOIN `category` ON `category`.`c_id` = `product`.`Category_id` WHERE `category_name` = 'Energy Drink' AND `product`.`Qty` != '0' LIMIT 4 ");
                                                    $EnergyDrinkProduct_num = $EnergyDrinkProduct_rs->num_rows;

                                                    for ($i = 0; $i < $EnergyDrinkProduct_num; $i++) {
                                                        $EnergyDrinkProduct_data = $EnergyDrinkProduct_rs->fetch_assoc();
                                                    ?>
                                                        <div class=" col-6  mt-5 p-4">
                                                            <div class="row">
                                                                <div class="col-12 FlexProductCard  ">
                                                                    <div class="row">
                                                                        <div class="col-lg-10 col-12 offset-lg-1 ProductImageCover ">
                                                                            <div class="row">
                                                                                <div class="col-12 ProductFirstImageCover">
                                                                                    <img src="<?php echo ($EnergyDrinkProduct_data["Main_Image"]) ?>" class="FlexProductImage1" alt="<?php echo ($EnergyDrinkProduct_data["Main_Image"]) ?>">
                                                                                </div>
                                                                                <div class="col-12 ProductSecondImageCover ">
                                                                                    <img src="<?php echo ($EnergyDrinkProduct_data["Seciond_Image"]) ?>" class="FlexProductImage2" alt="<?php echo ($EnergyDrinkProduct_data["Seciond_Image"]) ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- Large Screen -->
                                                                        <div class="col-12 " style="height: 90px;">
                                                                            <div class="row">
                                                                                <div class="col-lg-10  col-12 offset-lg-1 mt-1 fw-bold fs-5 text-white d-lg-block d-none">
                                                                                    <span><?php echo ($EnergyDrinkProduct_data["Product_name"]) ?></span>
                                                                                </div>
                                                                                <!-- Small Screen -->
                                                                                <div class="col-lg-10  col-12 offset-lg-1 mt-1 fw-bold text-white  d-lg-none d-block">
                                                                                    <small><?php echo ($EnergyDrinkProduct_data["Product_name"]) ?></small>
                                                                                </div>
                                                                                <div class="col-lg-10 offset-lg-1 col-12 text-white-50">
                                                                                    <span>Rs.<?php echo ($EnergyDrinkProduct_data["Price"]) ?></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <!-- Button -->
                                                                        <div class="col-lg-10 col-12 mt-2 offset-lg-1 position-relative overflow-hidden ">
                                                                            <div class="col-12 ViewProductButton ">
                                                                                <div class="col-11 ViewProductButto2 d-lg-block d-none  ">
                                                                                </div>
                                                                                <span class="ViewProductButtonText text-center" onclick="window.location='FlexSingleProductView.php?id=<?php echo ($EnergyDrinkProduct_data['Product_id']) ?>'">Buy Now </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php

                                                    }
                                                    ?>
                                                </div>
                                            </div>

                                            <div class="col-12 mt-3">
                                                <div class="row">
                                                    <div class="col-6 text-center">
                                                        <span class="text-white fs-1" onclick="EnergyCarouselRight();"><i class="bi bi-caret-left-fill"></i></span>
                                                    </div>
                                                    <div class="col-6 text-center">
                                                        <span class="text-white fs-1" onclick="EnergyCarouselleft();"><i class="bi bi-caret-right-fill"></i></span>
                                                    </div>
                                                </div>
                                            </div>





                                            <!-- Protien -->
                                            <div class="col-12 mt-5">
                                                <div class="col-10 mx-4 text-center  FlexCategoryTabs" onclick="ChageEnergyDrinks();">
                                                    <span>Protien</span>
                                                </div>
                                            </div>
                                            <div class="col-12 " style="display: flex; overflow: hidden;">
                                                <div class=" EnergyDrinkSmallSceenCarousel" id="ProteinInnerCarosuel">
                                                    <?php
                                                    $ProtienProduct_rs =  FlexDatabase::search("SELECT * FROM `product` INNER JOIN `product_images` ON `product_images`.`product_Product_id` = `product`.`Product_id` INNER JOIN `category` ON `category`.`c_id` = `product`.`Category_id` WHERE `category_name` = 'Protein' AND `product`.`Qty` != '0' LIMIT 4 ");
                                                    $ProtienProduct_num = $ProtienProduct_rs->num_rows;

                                                    for ($i = 0; $i < $ProtienProduct_num; $i++) {
                                                        $ProtienProduct_data = $ProtienProduct_rs->fetch_assoc();
                                                    ?>
                                                        <div class=" col-6  mt-5 p-4">
                                                            <div class="row">
                                                                <div class="col-12 FlexProductCard  ">
                                                                    <div class="row">
                                                                        <div class="col-lg-10 col-12 offset-lg-1 ProductImageCover ">
                                                                            <div class="row">
                                                                                <div class="col-12 ProductFirstImageCover">
                                                                                    <img src="<?php echo ($ProtienProduct_data["Main_Image"]) ?>" class="FlexProductImage1" alt="<?php echo ($ProtienProduct_data["Main_Image"]) ?>">
                                                                                </div>
                                                                                <div class="col-12 ProductSecondImageCover ">
                                                                                    <img src="<?php echo ($ProtienProduct_data["Seciond_Image"]) ?>" class="FlexProductImage2" alt="<?php echo ($ProtienProduct_data["Seciond_Image"]) ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- Large Screen -->
                                                                        <div class="col-12 " style="height: 90px;">
                                                                            <div class="row">
                                                                                <div class="col-lg-10  col-12 offset-lg-1 mt-1 fw-bold fs-5 text-white d-lg-block d-none">
                                                                                    <span><?php echo ($ProtienProduct_data["Product_name"]) ?></span>
                                                                                </div>
                                                                                <!-- Small Screen -->
                                                                                <div class="col-lg-10  col-12 offset-lg-1 mt-1 fw-bold text-white  d-lg-none d-block">
                                                                                    <small><?php echo ($ProtienProduct_data["Product_name"]) ?></small>
                                                                                </div>
                                                                                <div class="col-lg-10 offset-lg-1 col-12 text-white-50">
                                                                                    <span>Rs.<?php echo ($ProtienProduct_data["Price"]) ?></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <!-- Button -->
                                                                        <div class="col-lg-10 col-12 mt-2 offset-lg-1 position-relative overflow-hidden ">
                                                                            <div class="col-12 ViewProductButton ">
                                                                                <div class="col-11 ViewProductButto2 d-lg-block d-none  ">
                                                                                </div>
                                                                                <span class="ViewProductButtonText text-center" onclick="window.location='FlexSingleProductView.php?id=<?php echo ($ProtienProduct_data['Product_id']) ?>'">Buy Now </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php

                                                    }
                                                    ?>
                                                </div>
                                            </div>

                                            <div class="col-12 mt-3">
                                                <div class="row">
                                                    <div class="col-6 text-center">
                                                        <span class="text-white fs-1" onclick="ProteinCarouselRight2();"><i class="bi bi-caret-left-fill"></i></span>
                                                    </div>
                                                    <div class="col-6 text-center">
                                                        <span class="text-white fs-1" onclick="ProteinCarouselleft();"><i class="bi bi-caret-right-fill"></i></span>
                                                    </div>
                                                </div>
                                            </div>





                                            <!-- Pre-Workout -->
                                            <div class="col-12 mt-5">
                                                <div class="col-10 mx-4 text-center  FlexCategoryTabs" onclick="ChageEnergyDrinks();">
                                                    <span>Pre Workout</span>
                                                </div>
                                            </div>
                                            <div class="col-12 " style="display: flex; overflow: hidden;">
                                                <div class=" EnergyDrinkSmallSceenCarousel" id="PreWorkoutInnerCarosuel">
                                                    <?php
                                                    $PreWorkoutProduct_rs =  FlexDatabase::search("SELECT * FROM `product` INNER JOIN `product_images` ON `product_images`.`product_Product_id` = `product`.`Product_id` INNER JOIN `category` ON `category`.`c_id` = `product`.`Category_id` WHERE `category_name` = 'Pre-Workout' AND `product`.`Qty` != '0' LIMIT 4 ");
                                                    $PreWorkoutProduct_num = $PreWorkoutProduct_rs->num_rows;

                                                    for ($i = 0; $i < $PreWorkoutProduct_num; $i++) {
                                                        $PreWorkoutProduct_data = $PreWorkoutProduct_rs->fetch_assoc();
                                                    ?>
                                                        <div class=" col-6  mt-5 p-4">
                                                            <div class="row">
                                                                <div class="col-12 FlexProductCard  ">
                                                                    <div class="row">
                                                                        <div class="col-lg-10 col-12 offset-lg-1 ProductImageCover ">
                                                                            <div class="row">
                                                                                <div class="col-12 ProductFirstImageCover">
                                                                                    <img src="<?php echo ($PreWorkoutProduct_data["Main_Image"]) ?>" class="FlexProductImage1" alt="<?php echo ($PreWorkoutProduct_data["Main_Image"]) ?>">
                                                                                </div>
                                                                                <div class="col-12 ProductSecondImageCover ">
                                                                                    <img src="<?php echo ($PreWorkoutProduct_data["Seciond_Image"]) ?>" class="FlexProductImage2" alt="<?php echo ($PreWorkoutProduct_data["Seciond_Image"]) ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- Large Screen -->
                                                                        <div class="col-12 " style="height: 90px;">
                                                                            <div class="row">
                                                                                <div class="col-lg-10  col-12 offset-lg-1 mt-1 fw-bold fs-5 text-white d-lg-block d-none">
                                                                                    <span><?php echo ($PreWorkoutProduct_data["Product_name"]) ?></span>
                                                                                </div>
                                                                                <!-- Small Screen -->
                                                                                <div class="col-lg-10  col-12 offset-lg-1 mt-1 fw-bold text-white  d-lg-none d-block">
                                                                                    <small><?php echo ($PreWorkoutProduct_data["Product_name"]) ?></small>
                                                                                </div>
                                                                                <div class="col-lg-10 offset-lg-1 col-12 text-white-50">
                                                                                    <span>Rs.<?php echo ($PreWorkoutProduct_data["Price"]) ?></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <!-- Button -->
                                                                        <div class="col-lg-10 col-12 mt-2 offset-lg-1 position-relative overflow-hidden ">
                                                                            <div class="col-12 ViewProductButton ">
                                                                                <div class="col-11 ViewProductButto2 d-lg-block d-none  ">
                                                                                </div>
                                                                                <span class="ViewProductButtonText text-center" onclick="window.location='FlexSingleProductView.php?id=<?php echo ($PreWorkoutProduct_data['Product_id']) ?>'">Buy Now </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php

                                                    }
                                                    ?>
                                                </div>
                                            </div>

                                            <div class="col-12 mt-3">
                                                <div class="row">
                                                    <div class="col-6 text-center">
                                                        <span class="text-white fs-1" onclick="ProteinCarouselRight();"><i class="bi bi-caret-left-fill"></i></span>
                                                    </div>
                                                    <div class="col-6 text-center">
                                                        <span class="text-white fs-1" onclick="PreWorkoutCarouselleft();"><i class="bi bi-caret-right-fill"></i></span>
                                                    </div>
                                                </div>
                                            </div>





                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Subscribe Section -->
                    <div class="col-lg-10 col-12 offset-lg-1 offset-0 mt-5 mb-5 Fade DownToUP">
                        <div class="row ">
                            <div class="col-lg-10 col-12 p-5 border border-1 border-white rounded-2 offset-lg-1 offset-0">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <span class=" IndexSubscribeText ">Subscribe out fitness tips</span>
                                    </div>
                                    <div class="col-lg-8 col-12 offset-lg-2 text-center">
                                        <span class="fs-5 text-white">Clearly communicate the benefits of subscribing, such as exclusive content and breaking news.</span>
                                    </div>

                                    <div class="col-12 mt-5 d-flex justify-content-center">
                                        <div class="row">
                                            <div class="col-12  bg-white rounded-2">
                                                <div class="row">
                                                    <div class="col-8 d-grid">
                                                        <input type="text" placeholder="Enter Your Email address" class="SubscribeInput">
                                                    </div>
                                                    <div class="col-4 mt-3  mb-3  d-flex justify-content-center  ">
                                                        <button class="text-white border-0 fs-4 rounded-1" style="background-color: black; padding-left: 5px; padding-right: 5px; margin-right: 10px;"> Subscribe</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>




                </div>
            </div>
            <div class="col-12 fs-6">
                <div class="row">
                    <?php include "flexfooter.php" ?>
                </div>
            </div>
        </div>
    </div>


    <!-- Offcanvas -->

    <?php include "Offcanvas.php" ?>

    <script>
        var Quanitity = 0;
        var MaxQuantity = <?php echo ($product_data["Qty"]) ?>;
    </script>


    <script src="js/script.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>