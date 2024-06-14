<?php
session_start();
require "Connections/FlexConnection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | FITNESS FIRST</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body style="background-color: #74EBD5;background-image: linear-gradient(90deg,#74EBD5 0%,#9FACE6 100%);">

    <div class="container-fluid">
        <div class="row">

            <div class="col-12 col-lg-2">
                <div class="row">
                    <div class="col-12 align-items-start bg-dark vh-100">
                        <div class="row g-1 text-center">

                            <div class="col-12 mt-5">
                                <h4 class="text-white">Welcome <?php echo ($_SESSION["admin"]["firstname"] . " " . $_SESSION["admin"]["lastname"]) ?></h4>
                                <hr class="border border-white border-1" />
                            </div>

                            <div class="col-12 text-center">
                                <div class="nav flex-column nav-pills me-3 mt-3" role="tablist" aria-orientation="vertical">
                                    <nav class="nav flex-column">
                                        <a class="nav-link active" aria-current="page" href="adminDashboard.php">Dashboard</a>
                                        <a class="nav-link" href="adminManageContent.php">Manage Content</a>
                                        <a class="nav-link " href="adminManageBlogs.php">Manage Blog</a>
                                        <a class="nav-link " href="FlexManage.php">Manage Flex</a>
                                    </nav>
                                </div>
                            </div>

                            <div class="col-12 mt-5">
                                <hr class="border border-white border-1" />
                                <h4 class="text-white fw-bold"> Developing?</h4>
                                <hr class="border border-white border-1" />
                            </div>

                            <div class="col-12 mt-3 d-grid">
                                <label class="form-label fs-6 fw-bold btn btn-outline-info  text-white " onclick="adminLogOut();">LogOut <i class="bi bi-box-arrow-right"></i> </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-10">
                <div class="row">
                    <div class="text-white fw-bold mb-1 mt-3">
                        <h2 class="fw-bold ml-5">Product manage</h2>
                    </div>
                    <div class="col-12">
                        <hr />
                    </div>



                    <div class="col-12 bg-dark">
                        <div class="row">
                            <div class="col-12 col-lg-2 text-center my-3">
                                <label class="form-label fs-4 fw-bold text-white">Total Active Time</label>
                            </div>
                            <div class="col-12 col-lg-10 text-center my-3">
                                <?php

                                $start_date = new DateTime("2024-06-14 00:00:00");

                                $tdate = new DateTime();
                                $tz = new DateTimeZone("Asia/Colombo");
                                $tdate->setTimezone($tz);

                                $end_date = new DateTime($tdate->format("Y-m-d H:i:s"));

                                $difference = $end_date->diff($start_date);

                                ?>
                                <label class="form-label fs-4 fw-bold text-warning">
                                    <?php

                                    echo $difference->format('%Y') . " Years " . $difference->format('%m') . " Months " .
                                        $difference->format('%d') . " Days " . $difference->format('%H') . " Hours " .
                                        $difference->format('%i') . " Minutes " . $difference->format('%s') . " Seconds ";
                                    ?>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <hr>
                    </div>


                    <div class="col-12 bg-dark text-white rounded  rounded-3">
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row d-flex justify-content-center">
                                                    <div class="col-12">
                                                        <img src="Resources/images/LOGO/addImage (2).png" id="MainImage" width="100%" alt="">
                                                    </div>
                                                    <div class="col-4">
                                                        <img src="Resources/images/LOGO/addImage (2).png" id="SecondImage" width="100%" alt="">
                                                    </div>
                                                    <div class="col-4">
                                                        <img src="Resources/images/LOGO/addImage (2).png" id="ThirdImage" width="100%" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 d-grid mb-3">
                                                <div class="row">
                                                    <div class="col-12 d-grid">
                                                        <input type="file" id="AddPrductimginput" onchange="ChangeMainProductViewImage();" class="d-none">
                                                        <label class="btn btn-dark" for="AddPrductimginput">Add Main Image</label>
                                                    </div>
                                                    <div class="col-12 d-grid">
                                                        <input type="file" id="AddSecondPrductimginput" onchange="ChangeSecondProductViewImage();" class="d-none">
                                                        <label class="btn btn-dark" for="AddSecondPrductimginput">Add Second Image</label>
                                                    </div>
                                                    <div class="col-12 d-grid">
                                                        <input type="file" id="AddThirdPrductimginput" onchange="ChangeThirrdProductViewImage();" class="d-none">
                                                        <label class="btn btn-dark" for="AddThirdPrductimginput">Add Third Image</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-8">
                                        <div class="row">
                                            <div class="col-12 mt-3 p-2">
                                                <input type="text" class="form-control" id="ProductName" placeholder="Product Name">
                                            </div>
                                            <div class="col-12 mt-3 p-2">
                                                <div class="row">
                                                    <div class="col-1 mt-2">
                                                        <span>Rs.</span>
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="text" class="form-control" id="price" placeholder="Price">
                                                    </div>
                                                    <div class="col-4">
                                                        <select name="" id="" class="form-select">
                                                            <option value="">Select Category</option>
                                                            <?php
                                                            $productCategory_rs = FlexDatabase::search("SELECT * FROM `category` ");
                                                            $productCategory_num = $productCategory_rs->num_rows;

                                                            for ($x = 0; $x < $productCategory_num; $x++) {
                                                                $ProductCategory_data = $productCategory_rs->fetch_assoc();
                                                            ?>
                                                                <option value="<?php echo ($ProductCategory_data["c_id"]) ?>"><?php echo ($ProductCategory_data["category_name"]) ?></option>
                                                            <?php
                                                            }

                                                            ?>
                                                        </select>

                                                    </div>
                                                    <div class="col-3 ">
                                                        <input type="number" class="form-control" min="1" placeholder="Quanitity" id="Quanitity">
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col-12 text-center mt-4">
                                                                <span>Type New Flavour Or Select a Flavor</span>
                                                            </div>
                                                            <div class="col-6 mt-3">
                                                                <input type="text" class="form-control" id="NewFlavour" placeholder="or Type new flavor">
                                                            </div>
                                                            <div class="col-6 mt-3">
                                                                <select name="" id="FlavourSelector" class="form-select">
                                                                    <option value="0">Select Flavoyr</option>
                                                                    <?php
                                                                    $productFlavour_rs = FlexDatabase::search("SELECT * FROM `flavors` ");
                                                                    $productFlavour_num = $productFlavour_rs->num_rows;

                                                                    for ($x = 0; $x < $productFlavour_num; $x++) {
                                                                        $ProductFlavour_data = $productFlavour_rs->fetch_assoc();
                                                                    ?>
                                                                        <option value="<?php echo ($ProductFlavour_data["flavour_name"]) ?>"><?php echo ($ProductFlavour_data["flavour_name"]) ?></option>
                                                                    <?php
                                                                    }

                                                                    ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mt-3">
                                                        <textarea name="" class="form-control" id="Description" placeholder="Description" cols="30" rows="10"></textarea>
                                                    </div>
                                                    <div class="col-12 d-grid">
                                                        <button class="btn btn-primary" onclick="AddFlexProduct();"> Add Product </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-12 mt-5">
                        <div class="row">

                            <table class="table table-bordered">
                                <tr>
                                    <th>Product Name</th>
                                    <th>Description</th>
                                    <th>Product Images</th>
                                    <th>Quanitity</th>
                                    <th>price</th>
                                    <th>Flavor</th>
                                </tr>

                                <?php
                                $Flex_rs =  FlexDatabase::search("SELECT * FROM `product` INNER JOIN `product_images` ON `product_images`.`product_Product_id` = `product`.`Product_id`  ");
                                $flex_num = $Flex_rs->num_rows;

                                for ($i = 0; $i < $flex_num; $i++) {
                                    $flex_data = $Flex_rs->fetch_assoc();
                                ?>
                                    <tr>
                                        <td><input type="text" class="form-control" value="<?php echo ($flex_data["Product_name"]) ?>" id="ProductName<?php echo ($flex_data["Product_id"]) ?>"></td>
                                        <td><textarea name="" class="form-control" id="ProductDescription<?php echo ($flex_data["Product_id"]) ?>" cols="30" rows="10"> <?php echo ($flex_data["Description"]) ?> </textarea></td>
                                        <td>
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <img width="100%" id="MainView<?php echo ($flex_data["Product_id"]) ?>" src="<?php echo ($flex_data["Main_Image"]) ?>">
                                                        </div>
                                                        <div class="col-12 d-flex justify-content-center">
                                                            <input type="file" class="d-none" id="Main<?php echo ($flex_data["Product_id"]) ?>" onchange="ChangeUpdateMainImage('<?php echo ($flex_data['Product_id']) ?>');">
                                                            <label for="Main<?php echo ($flex_data["Product_id"]) ?>" class="btn btn-success">Change Main</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <img width="100%" id="SecondView<?php echo ($flex_data["Product_id"]) ?>" src="<?php echo ($flex_data["Seciond_Image"]) ?>">
                                                        </div>
                                                        <div class="col-12 d-flex justify-content-center">
                                                            <input type="file" class="d-none" id="Second<?php echo ($flex_data["Product_id"]) ?>" onchange="ChangeUpdateSecondImage('<?php echo ($flex_data['Product_id']) ?>');">
                                                            <label for="Second<?php echo ($flex_data["Product_id"]) ?>" class="btn btn-success">Change Second</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <img width="100%" id="ThirdView<?php echo ($flex_data["Product_id"]) ?>" src="<?php echo ($flex_data["Third_Image"]) ?>">
                                                        </div>
                                                        <div class="col-12 d-flex justify-content-center">
                                                            <input type="file" class="d-none" id="third<?php echo ($flex_data["Product_id"]) ?>" onchange="ChangeUpdateThirdImage('<?php echo ($flex_data['Product_id']) ?>');">
                                                            <label for="third<?php echo ($flex_data["Product_id"]) ?>" class="btn btn-success">Change Third</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td><input type="number" class="form-control" min="0" value="<?php echo ($flex_data["Qty"]) ?>" id="ProductQty<?php echo ($flex_data["Product_id"]) ?>"></td>
                                        <td><input type="text" class="form-control" value="<?php echo ($flex_data["Price"]) ?>" id="ProductPrice<?php echo ($flex_data["Product_id"]) ?>"></td>
                                        <td>
                                            <?php
                                            $Flvaour_rs = FlexDatabase::search("SELECT * FROM `product_flavour`  INNER JOIN `flavors` ON `flavors`.`flavour_id` = `product_flavour`.`pf_flavour_id` WHERE `pf_product_id` = '" . $flex_data["Product_id"] . "' ");
                                            $Flvaour_num = $Flvaour_rs->num_rows;

                                            for ($x = 0; $x < $Flvaour_num; $x++) {
                                                $Flvaour_data = $Flvaour_rs->fetch_assoc();
                                            ?>
                                                <button class="btn btn-outline-danger"><?php echo ($Flvaour_data["flavour_name"]) ?></button>
                                            <?php
                                            }

                                            ?>
                                            <!-- <input type="text" class="form-control" value="<?php echo ($flex_data["Flavor_F_id"]) ?>" id="ProductFlavor<?php echo ($flex_data["Product_id"]) ?>"> -->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">
                                            <div class="col-12">
                                                <button class="btn btn-info d-grid" onclick="ChangeProductInfo('<?php echo ($flex_data['Product_id']) ?>');">Update Product</button>
                                            </div>
                                        </td>
                                        <td colspan="3">
                                            <div class="col-12">
                                                <button class="btn btn-danger d-grid" onclick="DeleteProduct('<?php echo ($flex_data['Product_id']) ?>');">Delete Product</button>
                                            </div>
                                        </td>
                                    </tr>
                                <?php
                                }

                                ?>

                            </table>

                        </div>
                    </div>



                </div>
            </div>

        </div>
    </div>

    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/script.js"></script>
    <script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script>
</body>

</html>