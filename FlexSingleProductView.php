<?php
$Pid = $_GET["id"];
require "Connections/FlexConnection.php";
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
                                    <div class="col-12 ">
                                        <h1 class="fw-bold fs-1 text-white"><?php echo ($product_data["Product_name"]) ?> </h1>
                                    </div>

                                    <div class="col-12 ">
                                        <small class="text-white-50 fs-6 fw-bold"> <?php echo ($product_data["Flavor_F_id"]) ?> </small>
                                    </div>

                                    <div class="col-12 ">
                                        <span class="text-white-50 fs-3">Rs.<?php echo ($product_data["Price"]) ?> </span>
                                    </div>
                                    <div class="col-12">
                                        <span class="text-white">Quantity</span>
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
                                                <div class="col-lg-10 col-12 d-grid SingleProductViewBtn text-center">
                                                    Add to cart
                                                </div>
                                                <div class="col-lg-10 col-12 d-grid SingleProductViewBtn mt-3 text-center">
                                                    Buy Now
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }

                                    ?>



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
                            <div class="col-12">
                                <div class="row">

                                    <div class="col-4">
                                        <img src="Resources/images/Suppliment1.jpg" class="cartProductImage" alt="cartSuppliment">
                                    </div>

                                    <div class="col-5">
                                        <span class="fw-bold text-white">WHEY Premeum High Quauty Weigt Protin</span>
                                        <br>
                                        <span class="text-white-50">Rs.8,500</span>
                                    </div>
                                    <div class="col-3 text-end">
                                        <span class="text-white fw-bold">Rs.8,500</span>

                                    </div>
                                </div>
                            </div>

                            <!-- Quntity -->
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-4"></div>
                                    <div class="col-7 ">
                                        <div class="row">
                                            <div class="col-8 mt-3 px-3 py-3 pt-3 pb-3 border border-1 border-white">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <span class="fw-bold text-white">-</span>
                                                    </div>
                                                    <div class="col-4">
                                                        <span class="fw-bold text-white">1</span>
                                                    </div>
                                                    <div class="col-4">
                                                        <span class="fw-bold text-white">+</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4 d-flex  justify-content-center align-items-center">
                                                <span><i class="bi bi-trash3"></i></span>
                                            </div>
                                        </div>
                                    </div>
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





    <script src="js/script.js">
    </script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.js"></script>
</body>

</html>