<?php
require "Connections/FlexConnection.php";
// Flex Catelog Categories
session_start();
if ($_SESSION["CatelogProduct"] == null) {
    $_SESSION["CatelogProduct"] = "none";
    header("Location: http://localhost/fitnesFirst/FlexCatelog.php");
}
// Coookie Set
if (!isset($_COOKIE["User"])) {
    $cookie_name = "User";
    $cookie_value = uniqid("user");
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
}

// Pagination Variable
$pageno;

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

                    <div class="col-12">
                        <div class="row">
                            <div class="col-lg-12 ">
                                <img src="Resources/images/carouselImages/flexx03 1.png" class="FlexHomeImagecatelog" width="100%">
                            </div>
                        </div>
                    </div>


                    <div class="col-12 d-flex justify-content-center mt-5 mb-5 ">
                        <div class="HomeProductViewCover">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 fw-bold text-white mt-2 mb-2">
                                        <?php
                                        if ($_SESSION["CatelogProduct"] == "none") {
                                        ?>
                                            <h1 class="text-white fw-bold">All Products</h1>
                                        <?php
                                        } else {
                                        ?>
                                            <h1 class="text-white fw-bold"> <?php echo ($_SESSION["CatelogProduct"]) ?></h1>
                                        <?php
                                        }
                                        ?>
                                    </div>

                                    <div class="col-10 offset-1 mt-5">
                                        <div class="row">




                                            <div class="col-12 nt-4 ">
                                                <div class="row">
                                                    <div class="col-2 mx-4 text-center  FlexCategoryTabs" onclick="ChangeCatelogCategory('endergydrinks');">
                                                        <span>Energy Drinks</span>
                                                    </div>
                                                    <div class="col-2 offset-1 text-center FlexCategoryTabs" onclick="ChangeCatelogCategory('protien');">
                                                        <span>Protien</span>
                                                    </div>
                                                    <div class="col-2 offset-1 text-center FlexCategoryTabs" onclick="ChangeCatelogCategory('pre-workout');">
                                                        <span>Pre-wrokout</span>
                                                    </div>

                                                    <div class="col-2 offset-1 " onchange="ChangeCatelogDropDown();" type="button" data-bs-toggle="dropdown" aria-expanded="false" on>
                                                        <select name="" id="CatelogDropDown" class="border-0 FlexCategoryTabs" style="padding-left: 15px; padding-right:15px; padding-top:10px; padding-bottom:15px; background-color: red;">
                                                            <option value="other">Other </option>
                                                            <?php
                                                            $Category_rs = FlexDatabase::search("SELECT * FROM `category`  ");
                                                            $Category_num = $Category_rs->num_rows;
                                                            for ($x = 0; $x < $Category_num; $x++) {
                                                                $Category_data = $Category_rs->fetch_assoc();
                                                            ?>
                                                                <option value="<?php echo ($Category_data["category_name"]) ?>"><?php echo ($Category_data["category_name"]) ?></option>
                                                            <?php
                                                            }
                                                            ?>
                                                        </select>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Items -->
                                    <div class="col-12 FirstDownToUPAnimation ">
                                        <div class="row" id="ShowSearchItems">




                                            <!-- connecti Database -->
                                            <?php

                                            // Pagination Calculator
                                            if (isset($_GET["page"])) {
                                                $pageno = $_GET["page"];
                                            } else {
                                                $pageno = 1;
                                            }

                                            $CategoryCatelog = $_SESSION["CatelogProduct"];


                                            // can only show 8 products 

                                            $pagination_Product_rs = FlexDatabase::search("SELECT * FROM `product` WHERE `product`.`Qty` != '0' ");
                                            $pagination_product_num = $pagination_Product_rs->num_rows;

                                            $result_per_page = 8;
                                            $number_of_page = ceil($pagination_product_num / $result_per_page);

                                            $page_result = ($pageno - 1) * $result_per_page;

                                            // Original SQl  Querry
                                            if ($_SESSION["CatelogProduct"] == "none") {
                                                $product_rs =  FlexDatabase::search("SELECT * FROM `product` INNER JOIN `product_images` ON `product_images`.`product_Product_id` = `product`.`Product_id` INNER JOIN `category` ON `category`.`c_id` = `product`.`Category_id` WHERE `product`.`Qty` != '0'  LIMIT " . $result_per_page . " OFFSET " . $page_result . " ");
                                            } else if ($_SESSION["CatelogProduct"] != "none") {
                                                $product_rs =  FlexDatabase::search("SELECT * FROM `product` INNER JOIN `product_images` ON `product_images`.`product_Product_id` = `product`.`Product_id` INNER JOIN `category` ON `category`.`c_id` = `product`.`Category_id` WHERE `category_name` = '" . $CategoryCatelog . "' AND `product`.`Qty` != '0'  LIMIT " . $result_per_page . " OFFSET " . $page_result . " ");
                                            }

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

                                            <!-- PAGEINATION START............................................................................................... -->
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="offset-2 offset-lg-3 col-8 col-lg-6 text-center mb-3 mt-5">
                                                        <nav aria-label="Page navigation example">
                                                            <ul class="pagination pagination-lg justify-content-center">
                                                                <li class="page-item">
                                                                    <a class="page-link" href="<?PHP
                                                                                                if ($pageno <= 1) {
                                                                                                    echo "#";
                                                                                                } else {
                                                                                                    echo "?page=" . ($pageno - 1);
                                                                                                }
                                                                                                ?>" aria-label="Previous">
                                                                        <span aria-hidden="true">&laquo;</span>
                                                                    </a>

                                                                </li>
                                                                <?php

                                                                for ($x = 1; $x <= $number_of_page; $x++) {
                                                                    if ($x == $pageno) {
                                                                ?>
                                                                        <li class="page-item active">
                                                                            <a class="page-link" href="<?php echo "?page=" . ($x); ?>"><?php echo $x ?></a>
                                                                        </li>
                                                                    <?php
                                                                    } else {
                                                                    ?>
                                                                        <li class="page-item">
                                                                            <a class="page-link" href="<?php echo "?page=" . ($x); ?>"><?php echo $x ?></a>
                                                                        </li>
                                                                <?php
                                                                    }
                                                                }

                                                                ?>

                                                                <li class="page-item">
                                                                    <a class="page-link" href="<?PHP
                                                                                                if ($pageno >= $number_of_page) {
                                                                                                    echo "#";
                                                                                                } else {
                                                                                                    echo "?page=" . ($pageno + 1);
                                                                                                }
                                                                                                ?>" aria-label="Next">
                                                                        <span aria-hidden="true">&raquo;</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </nav>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- PAGEINATION end............................................................................................... -->



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
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>