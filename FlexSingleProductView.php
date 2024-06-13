<?php
$Pid = $_GET["id"];
require "Connections/FlexConnection.php";
// Coookie Set
if (!isset($_COOKIE["User"])) {
    $cookie_name = "User";
    $cookie_value = uniqid("user");
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flex Contact | Fitness First LK</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
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

                    <!-- Content -->

                    <!-- connecti Database -->
                    <?php
                    $product_rs =  FlexDatabase::search("SELECT * FROM `product` INNER JOIN `product_images` ON `product_images`.`product_Product_id` = `product`.`Product_id`  WHERE `Product_id` = '" . $Pid . "' ");
                    $product_data = $product_rs->fetch_assoc();
                    ?>
                    <div class="col-lg-10 col-12 offset-lg-1 mb-5 mt-5">
                        <div class="row">

                            <div class="col-lg-6 col-12">
                                <div class="row">
                                    <div class="col-12 d-lg-none d-block text-center ">
                                        <h1 class="fw-bold fs-1 text-white"><?php echo ($product_data["Product_name"]) ?> </h1>
                                    </div>
                                    <div class="col-lg-11 col-12">
                                        <img src="<?php echo ($product_data["Main_Image"]) ?>" id="BigImage" class="SingleProductViewImage" alt="<?php echo ($product_data["Product_name"]) ?>">
                                    </div>
                                    <div class="col-lg-11 col-12  mt-4">
                                        <div class="row  d-flex justify-content-center ">
                                            <div class="col-3" onclick="ChangeSingleMainChangeImage();">
                                                <img src="<?php echo ($product_data["Main_Image"]) ?>" id="MainImage" class="SmallSingleProductViewImage" alt="<?php echo ($product_data["Product_name"]) ?>">
                                            </div>
                                            <div class="col-3" onclick="ChangeSingleSecondChangeImage();">
                                                <img src="<?php echo ($product_data["Seciond_Image"]) ?>" id="SecondImage" class="SmallSingleProductViewImage" alt="<?php echo ($product_data["Product_name"]) ?>">
                                            </div>
                                            <div class="col-3" onclick="ChangeSingleThirdChangeImage();">
                                                <img src="<?php echo ($product_data["Third_Image"]) ?>" id="ThirdImage" class="SmallSingleProductViewImage" alt="<?php echo ($product_data["Product_name"]) ?>">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-10    offset-lg-0 offset-1 mt-lg-0 mt-3 ">
                                <div class="row d-lg-block d-flex justify-content-center">
                                    <div class="col-12 d-lg-block d-none ">
                                        <h1 class="fw-bold fs-1 text-white"><?php echo ($product_data["Product_name"]) ?> </h1>
                                    </div>

                                    <div class="col-12 ">
                                        <small class="text-white-50 fs-6 fw-bold"> <?php echo ($product_data["Flavor_F_id"]) ?> </small>
                                    </div>

                                    <div class="col-12 ">
                                        <span class="text-white-50 fs-3">Rs.<?php echo ($product_data["Price"]) ?> </span>
                                    </div>
                                    <!-- Flavours -->
                                    <div class="col-12 mt-3 mb-3">
                                        <div class="col-12">
                                            <span class="text-white fw-bold "> Flavours </span>

                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <?php
                                                $Flavour_rs = FlexDatabase::search("SELECT * FROM `product_flavour` INNER JOIN `product`  ON `product_flavour`.`pf_product_id` = `product`.`Product_id` INNER JOIN `flavors` ON `flavors`.`flavour_id` = `product_flavour`.`pf_flavour_id` WHERE `Product_id` = '" . $Pid . "'  ");
                                                $Flavour_num = $Flavour_rs->num_rows;

                                                for ($x = 0; $x < $Flavour_num; $x++) {
                                                    $Flavour_data = $Flavour_rs->fetch_assoc();
                                                ?>
                                                    <div class="col-lg-4 col-6 m-2 text-center text-white btn btn-secondary">
                                                        <span><?php echo ($Flavour_data["flavour_name"]) ?></span>
                                                    </div>
                                                <?php
                                                }


                                                ?>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-12">
                                        <span class="text-white fw-bold">Quantity</span>
                                    </div>
                                    <?php

                                    if ($product_data["Qty"] == 0) {
                                    ?>
                                        <span class="text-danger">Sold Out</span>
                                    <?php
                                    } else {
                                    ?>
                                        <div class="col-6  mt-2 border border-1 border-white">
                                            <div class="row ">
                                                <div class="col-4 p-3  text-center" onclick="ChangeQuantitiy('-')">
                                                    <span class=" QTYUdt"><i class="bi bi-dash-lg"></i></span>
                                                </div>
                                                <div class="col-4 p-3  text-center">
                                                    <span class="text-white" id="QTYNo">1</span>
                                                </div>
                                                <div class="col-4 p-3  text-center" onclick="ChangeQuantitiy('+')">
                                                    <span class=" QTYUdt"><i class="bi bi-plus"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12  mt-3">
                                            <div class="row">
                                                <?php
                                                // Check inside Cart or no?
                                                $cookie_rs = FlexDatabase::search("SELECT * FROM `cookie` WHERE `cookie` = '" . $_COOKIE["User"] . "'");
                                                $cookie_num = $cookie_rs->num_rows;

                                                if ($cookie_num == 1) {
                                                    $cookie_data = $cookie_rs->fetch_assoc();

                                                    $cart_rs = FlexDatabase::search("SELECT * FROM `cart` WHERE `Cookie_C_id` = '" . $cookie_data["C_id"] . "' AND `product_Product_id` = '" . $Pid . "' ");
                                                    $cart_num = $cart_rs->num_rows;

                                                    if ($cart_num == 0) {
                                                ?>
                                                        <div class="col-lg-10 col-12 d-grid SingleProductViewBtn text-center" onclick="AddToCart('<?php echo ($Pid) ?>');">
                                                            Add to cart
                                                        </div>
                                                    <?php
                                                    } else if ($cart_num != 0) {
                                                    ?>
                                                        <div class="col-lg-10 col-12 d-grid SingleProductViewBtn text-center" onclick="removefromCart('<?php echo ($Pid) ?>');">
                                                            Remove from cart
                                                        </div>
                                                    <?php
                                                    }
                                                } else {
                                                    ?>
                                                    <div class="col-lg-10 col-12 d-grid SingleProductViewBtn text-center" onclick="AddToCart('<?php echo ($Pid) ?>');">
                                                        Add to cart
                                                    </div>
                                                <?php
                                                }


                                                ?>
                                                <!-- Buy Now Button -->
                                                <div class="col-lg-10 col-12 d-grid SingleProductViewBtn mt-3 text-center">
                                                    Buy Now
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }

                                    ?>


                                    <div class="col-lg-10 col-12 mt-5 d-lg-none d-block ">
                                        <span class="fs-1 fw-bold text-white"><?php echo ($product_data["Product_name"]) ?></span>
                                    </div>


                                    <div class="col-lg-10 col-12 mt-5 d-lg-none d-block ">
                                        <span class="fs-3 fw-bold text-white-50">DESCRIPTION</span>
                                    </div>

                                    <div class="col-lg-10 col-12 mt-3 text-white-50">
                                        <p><?php echo ($product_data["Description"]) ?></p>
                                    </div>

                                </div>
                            </div>



                            <!-- Also Like -->

                            <div class="col-12 mt-5">
                                <h2 class="fw-bold fs-1 text-white">You may also like</h2>
                            </div>
                            <!-- items -->

                            <?php

                            $otherResults_rs =  FlexDatabase::search("SELECT * FROM `product` INNER JOIN `product_images` ON `product_images`.`product_Product_id` = `product`.`Product_id`  WHERE `Product_id` != '" . $Pid . "' LIMIT 3");
                            $otherResults_num = $otherResults_rs->num_rows;

                            for ($i = 0; $i < $otherResults_num; $i++) {
                                $otherResults_data = $otherResults_rs->fetch_assoc();
                            ?>
                                <div class="col-lg-4 col-6 mt-5 p-4">
                                    <div class="row ">
                                        <div class="col-12 FlexProductCard  ">
                                            <div class="row">
                                                <div class="col-lg-10 col-12 offset-lg-1 ProductImageCover ">
                                                    <div class="row">
                                                        <div class="col-12 ProductFirstImageCover">
                                                            <img src="<?php echo ($otherResults_data["Main_Image"]) ?>" class="FlexProductImage1" alt="<?php echo ($otherResults_data["Main_Image"]) ?>">
                                                        </div>
                                                        <div class="col-12 ProductSecondImageCover ">
                                                            <img src="<?php echo ($otherResults_data["Seciond_Image"]) ?>" class="FlexProductImage2" alt="<?php echo ($otherResults_data["Seciond_Image"]) ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Large Screen -->
                                                <div class="col-lg-10  col-12 offset-lg-1 mt-1 fw-bold fs-5 text-white d-lg-block d-none">
                                                    <span><?php echo ($otherResults_data["Product_name"]) ?></span>
                                                </div>
                                                <!-- Small Screen -->
                                                <div class="col-lg-10  col-12 offset-lg-1 mt-1 fw-bold fs-6 text-white d-lg-none d-block">
                                                    <small><?php echo ($otherResults_data["Product_name"]) ?></small>
                                                </div>
                                                <div class="col-lg-10 offset-lg-1 col-12 text-white-50">
                                                    <small>Rs.<?php echo ($otherResults_data["Price"]) ?></small>
                                                </div>


                                                <!-- Button -->
                                                <div class="col-10 mt-2 offset-1 position-relative overflow-hidden ">
                                                    <div class="col-12 ViewProductButton2 text-center ">
                                                        <span class="ViewProductButtonText" onclick="window.location='FlexSingleProductView.php?id=<?php echo ($otherResults_data['Product_id']) ?>'">Choose Option</span>
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


                </div>
            </div>
            <div class="col-12">
                <div class="row">
                    <?php include "footer.php" ?>
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
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.js"></script>
</body>

</html>