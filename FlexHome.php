<?php
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
    <title>Flex Home | Fitness First LK</title>
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

                    <!-- Flex Home Image -->
                    <div class="col-12 position-relative">
                        <div class="row">
                            <div class="col-12">
                                <img src="Resources/images/Areas/gym02.jpg" class="FlexHomeImage" width="100%">
                            </div>
                            <div class="col-12 HomeImageTextButtonCover   text-center">
                                <div class="row">
                                    <div class="col-12 ">
                                        <span class="FlexCatouselText">Free Shipping</span>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <span class="ShopNowBtn " onclick="window.location ='FlexCatelog.php'">Shop Now</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Flex Item  -->
                    <div class="col-12 d-flex justify-content-center mt-5 mb-5 ">
                        <div class="HomeProductViewCover">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 fw-bold text-white mt-2 ">
                                        <h2>Latest Collection</h1>
                                    </div>

                                    <!-- Items Start -->
                                    <div class="col-12 Fade DownToUP">
                                        <div class="row  d-flex justify-content-center">

                                            <!-- Connect Database -->
                                            <?php

                                            $product_rs =  FlexDatabase::search("SELECT * FROM `product` INNER JOIN `product_images` ON `product_images`.`product_Product_id` = `product`.`Product_id` ");
                                            $product_num = $product_rs->num_rows;

                                            for ($i = 0; $i < $product_num; $i++) {
                                                $product_data = $product_rs->fetch_assoc();
                                            ?>
                                                <div class="col-lg-4 col-6 mt-5 p-4">
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

                                            ?>


                                            <!-- ................................................................................................. -->






                                        </div>
                                    </div>
                                </div>
                            </div>
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


    <div class="col-12">
        <div class="row">
            <div class="offcanvas  bg-black text-white offcanvas-end" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title text-white" id="staticBackdropLabel" type="button" class="btn-close btn-danger" data-bs-dismiss="offcanvas" aria-label="Close"><i class="bi bi-x-lg"></i></h5>
                    <!-- <button type="button" class="btn-close btn-danger"  data-bs-dismiss="offcanvas" aria-label="Close"></button> -->
                </div>
                <div class="offcanvas-body  position-relative">
                    <div class="col-12 ">
                        <div class="row">
                            <!-- titile -->
                            <div class="col-12 text-center">
                                <h2>Your Cart</h2>
                            </div>
                            <!-- Sections -->
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-6 text-start">
                                        <small class="text-white-50">Product</small>
                                    </div>
                                    <div class="col-6 text-end">
                                        <small class="text-white-50">Total</small>
                                    </div>
                                </div>
                            </div>
                            <!-- Product Details -->
                            <div class="col-12 overflow-y-scroll " style="height: 40vh;">
                                <div class="row ">


                                    <?php
                                    $CookieCheck_rs  = FlexDatabase::search("SELECT * FROM `cookie` WHERE `Cookie` = '" . $_COOKIE["User"] . "' ");
                                    $CookieCheck_num = $CookieCheck_rs->num_rows;

                                    if ($CookieCheck_num == 1) {
                                        $CookieCheck_data = $CookieCheck_rs->fetch_assoc();

                                        $Mcart_rs = FlexDatabase::search("SELECT * FROM `cart` INNER JOIN `product` ON `product`.`Product_id` = `cart`.`product_Product_id` INNER JOIN `product_images` ON `product_images`.`product_Product_id` = `product`.`Product_id`   WHERE `Cookie_C_id` = '" . $CookieCheck_data["C_id"] . "'");
                                        $Mcart_num = $Mcart_rs->num_rows;

                                        for ($i = 0; $i < $Mcart_num; $i++) {
                                            $Mcart_data = $Mcart_rs->fetch_assoc();
                                    ?>
                                            <div class="col-4">
                                                <img src="<?php echo ($Mcart_data["Main_Image"]) ?>" class="cartProductImage" alt="cartSuppliment">
                                            </div>

                                            <div class="col-5">
                                                <span class="fw-bold text-white"><?php echo ($Mcart_data["Product_name"]) ?></span>
                                                <br>
                                                <span class="text-white-50">Rs.<?php echo ($Mcart_data["Price"]) ?></span>
                                            </div>
                                            <div class="col-3 text-end">
                                                <span class="text-white fw-bold">Rs.<?php echo ($Mcart_data["Price"]) ?></span>
                                            </div>
git add .
                                            <!-- Quntity -->
                                            <div class="col-12 mb-3">
                                                <div class="row">
                                                    <div class="col-4"></div>
                                                    <div class="col-7 ">
                                                        <div class="row">
                                                            <div class="col-8 mt-3 px-3 py-3 pt-3 pb-3 border border-1 border-white">
                                                                <div class="row">
                                                                    <?php
                                                                    $cartQty_rs = FlexDatabase::search("SELECT * FROM `cart`   WHERE `product_Product_id` = '" . $Mcart_data["Product_id"] . "'");
                                                                    $cartQty_data = $cartQty_rs->fetch_assoc();
                                                                    ?>
                                                                    <input type="number" min="1" max="<?php echo ($Mcart_data["Qty"]) ?>" value="<?php echo ($cartQty_data["Qty"]) ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-4 d-flex  justify-content-center align-items-center">
                                                                <span><i class="bi bi-trash3"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr class="text-white-50">
                                            </div>


                                        <?php
                                        }
                                    } else {
                                        ?>
                                        <span>Empty</span>
                                    <?php
                                    }

                                    ?>


                                </div>
                            </div>



                            <!-- Checkout out -->
                            <div class="col-12 CheckoutCover">
                                <div class="row">
                                    <div class="col-12">
                                        <hr class="text-white text-center">
                                    </div>
                                    <div class="col-12 mt-3">
                                        <div class="row">
                                            <div class="col-6 text-start">
                                                <span class="fw-bold text-white">Estimated total</span>
                                            </div>
                                            <div class="col-6 text-end">
                                                <span class=" text-white">Rs.8,500</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <small class="text-white-50">Taxes, Discounts and shipping calculated at checkout</small>
                                    </div>
                                    <div class="col-12 p-3 d-grid">
                                        <button class="cartCheckoutBtn">Check out</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


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