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
    <title>Flex Catelog | Fitness First LK</title>
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


                    <div class="col-12 d-flex justify-content-center mt-5 mb-5 ">
                        <div class="HomeProductViewCover">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 fw-bold text-white mt-2 mb-2">
                                        <h1 class="text-white fw-bold">Products</h1>
                                    </div>

                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <small class="text-white-50">Filter :</small>
                                                    </div>
                                                    <div class="col-3">
                                                        <small class="text-white-50">Availability <i class="bi bi-chevron-down"></i></small>
                                                    </div>

                                                    <div class="col-3">
                                                        <small class="text-white-50">Price <i class="bi bi-chevron-down"></i></small>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-6">
                                                <div class="row d-flex justify-content-end">
                                                    <div class="col-2 text-end">
                                                        <small class="text-white-50">Sort By :</small>
                                                    </div>
                                                    <div class="col-4 text-end">
                                                        <small class="text-white-50">Alphabetically, A-Z <i class="bi bi-chevron-down"></i></small>
                                                    </div>

                                                    <div class="col-3 text-end">
                                                        <small class="text-white-50">6 Products </small>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- Items -->
                                    <div class="col-12 FirstDownToUPAnimation ">
                                        <div class="row">


                                            <!-- connecti Database -->
                                            <?php
                                            $product_rs =  FlexDatabase::search("SELECT * FROM `product` INNER JOIN `product_images` ON `product_images`.`product_Product_id` = `product`.`Product_id` ");
                                            $product_num = $product_rs->num_rows;

                                            for ($i = 0; $i < $product_num; $i++) {
                                                $product_data = $product_rs->fetch_assoc();
                                            ?>
                                                <div class="col-lg-3 col-6 mt-5 p-4">
                                                    <div class="row ">
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
                                                                <div class="col-lg-10  col-12 offset-lg-1 mt-1 fw-bold fs-6 text-white d-lg-block d-none">
                                                                    <span><?php echo ($product_data["Product_name"]) ?></span>
                                                                </div>
                                                                <!-- Small Screen -->
                                                                <div class="col-lg-10  col-12 offset-lg-1 mt-1 fw-bold  text-white d-lg-none d-block">
                                                                    <small><?php echo ($product_data["Product_name"]) ?></small>
                                                                </div>
                                                                <div class="col-lg-10 offset-lg-1 col-12 text-white-50">
                                                                    <small>Rs.<?php echo ($product_data["Price"]) ?></small>
                                                                </div>
                                                                <!-- Button -->
                                                                <div class="col-10 mt-2 offset-1 position-relative overflow-hidden ">
                                                                    <div class="col-12 ViewProductButton2 text-center ">
                                                                        <small class="ViewProductButtonText" onclick="window.location='FlexSingleProductView.php?id=<?php echo ($product_data['Product_id']) ?>'">Choose Option</small>
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