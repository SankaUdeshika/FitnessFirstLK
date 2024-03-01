<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offcanvas</title>
</head>

<body>

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
                                <h2>Your Cart</h2>g
                            </div>
                            <!-- Sections -->
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-6 text-start">
                                        <small class="text-white-50">Product</small>
                                    </div>
                                    <div class="col-6 text-end">
                                        <small class="text-white-50">Unit Price</small>
                                    </div>
                                </div>
                            </div>
                            <!-- Product Details -->
                            <div class="col-12 overflow-y-scroll " style="height: 40vh;">
                                <div class="row ">


                                    <?php
                                    $total = 0;
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

                                                                    $total = $total + ($Mcart_data["Price"] * $cartQty_data["Qty"]);
                                                                    ?>
                                                                    <input type="number" id="Mcart_id<?php echo ($Mcart_data["Product_id"]) ?>" min="1" max="<?php echo ($Mcart_data["Qty"]) ?>" value="<?php echo ($cartQty_data["Qty"]) ?>" onchange="ChangeTotal('<?php echo ($Mcart_data['Product_id']) ?>');">
                                                                </div>
                                                            </div>
                                                            <div class="col-4 d-flex  justify-content-center align-items-center" onclick="removefromCart('<?php echo ($Mcart_data['Product_id']) ?>')">
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
                                        <div class="col-12">
                                            <div class="row d-flex justify-content-center align-items-center">
                                                <span class="text-white-50 fw-bold text-center fs-1">Empty</span>
                                            </div>
                                        </div>
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
                                                <span class=" text-white" id="TotalPrice">Rs.<?php echo($total)?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <small class="text-white-50">Taxes, Discounts and shipping calculated at checkout</small>
                                    </div>
                                    <div class="col-12 p-3 d-grid">
                                        <button class="cartCheckoutBtn" onclick="window.location = 'Checkout.php'">Check out</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>