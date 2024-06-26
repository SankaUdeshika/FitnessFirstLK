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


                    <div class="col-12">
                        <div class="row">
                            <!-- From -->
                            <div class="col-lg-6 col-12 border-0 border-end border-white">
                                <div class="row">
                                    <div class="col-lg-8 col-12 offset-lg-2">
                                        <div class="row">
                                            <div class="col-12">
                                                <h1 class="text-white">Contact</h1>
                                            </div>
                                            <div class="col-12">
                                                <input type="text" class="form-control" placeholder="Email" id="Email">
                                            </div>

                                            <div class="col-12 mt-3">
                                                <input type="text" class="form-control" placeholder="Phone Number" id="mobile">
                                            </div>


                                            <div class="col-6 mt-3">
                                                <input type="text" class="form-control" placeholder="First Name" id="fname">
                                            </div>

                                            <div class="col-6 mt-3">
                                                <input type="text" class="form-control" placeholder="Last Name" id="lname">
                                            </div>


                                            <div class="col-12 mt-5">
                                                <h1 class="text-white">Delevery</h1>
                                            </div>
                                            <div class="col-12">
                                                <textarea name="" class="form-control" placeholder="Address" id="Address" cols="20" rows="5"></textarea>
                                            </div>

                                            <div class="col-6 mt-3">
                                                <input type="text" class="form-control" placeholder="City" id="City">
                                            </div>

                                            <div class="col-6 mt-3">
                                                <input type="text" class="form-control" placeholder="Postal Code" id="Pcode">
                                            </div>


                                            <div class="col-12 mt-5">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <span class="text-white-50 fw-bold">Shipping method</span>
                                                    </div>
                                                    <div class="col-12">
                                                        <input type="text" value="Free Shipping" disabled class="form-control bg-black mt-3 text-white">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 mb-5">
                                                <div class="row d-flex justify-content-center">
                                                    <div class=" col-12 d-grid SingleProductViewBtn mt-3 text-center" onclick="AddOrder();">
                                                        Pay Now
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12 border-0 border-end border-white">
                                <div class="row">

                                    <div class="col-12">
                                        <div class="row">
                                            <!-- Load Cart -->
                                            <?php
                                            $cookie_rs = FlexDatabase::search("SELECT * FROM `cookie` WHERE `cookie` = '" . $_COOKIE["User"] . "'");
                                            $cookie_data = $cookie_rs->fetch_assoc();

                                            $cart_rs = FlexDatabase::search("SELECT * FROM `cart` WHERE `Cookie_C_id` = '" . $cookie_data["C_id"] . "' ");
                                            $cart_num = $cart_rs->num_rows;

                                            $subTotal = 0;
                                            $Total = 0;
                                            // Shipping
                                            $shipping = 0;

                                            for ($i = 0; $i < $cart_num; $i++) {
                                                $cart_data = $cart_rs->fetch_assoc();

                                                $product_rs = FlexDatabase::search("SELECT * FROM `product` INNER JOIN `product_images` ON `product_images`.`product_Product_id` = `product`.`Product_id`
                                         WHERE `Product_id` = '" . $cart_data["product_Product_id"] . "'  ");
                                                $product_data = $product_rs->fetch_assoc();

                                                // SubTotal
                                                $subTotal = $subTotal + $cart_data["Qty"] * $product_data["Price"];




                                                // Total
                                                $Total = $subTotal + $shipping;

                                            ?>
                                                <div class="col-12 mt-2">
                                                    <div class="row">
                                                        <div class="col-2 ">
                                                            <img src="<?php echo ($product_data["Main_Image"]) ?>" width="100%" class="rounded rounded-2" alt="">
                                                        </div>

                                                        <div class="col-5">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <span class="fw-bold text-white"><?php echo ($product_data["Product_name"]) ?></span>
                                                                </div>
                                                                <div class="col-12">
                                                                    <small class="text-white-50">Rs.<?php echo ($product_data["Price"]) ?></small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-1">
                                                            <span class="text-white "> <?php echo ($cart_data["Qty"]) ?> X </span>
                                                        </div>
                                                        <div class="col-1">
                                                            <span class="text-white "> <?php echo ($cart_data["Qty"] * $product_data["Price"]) ?> </span>
                                                        </div>
                                                        <!-- <hr class="text-white mt-1"> -->
                                                    </div>
                                                </div>
                                            <?php

                                            }

                                            ?>

                                            <div class="col-10  mt-5">
                                                <div class="row">

                                                    <hr class="fw-bold text-white">

                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <span class="text-white fs-6">SubTotal</span>
                                                            </div>
                                                            <div class="col-6 text-white-50 text-end">
                                                                <span>Rs.<?php echo ($subTotal) ?></span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <small class="text-white ">Shipping</small>
                                                            </div>

                                                            <div class="col-6 text-white-50 text-end">
                                                                <small>Rs.<?php echo ($shipping) ?></small>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <span class="text-white fs-5">Total</span>
                                                            </div>
                                                            <div class="col-6 text-white fw-bold text-end">
                                                                <span class="text-decoration-underline"> Rs.<?php echo ($Total) ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr class="text-white fw-bold">


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
            <div class="col-12">
                <div class="row">
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

    <!-- Load Customer Data to the TextField  -->

    <script>
        function LoadData(CookieId) {
            var command = "LoadCheckoutCustomerData";
            var CookieId = CookieId;

            var f = new FormData();
            f.append("command", command);
            f.append("CookieId", CookieId);


            var r = new XMLHttpRequest();
            r.onreadystatechange = function() {
                if (r.readyState == 4 && r.status == 200) {
                    var response = r.responseText;

                    var JSONObj = JSON.parse(response);

                    if (JSONObj.Action = "Have") {
                        document.getElementById("Email").value = JSONObj.Email;
                        document.getElementById("mobile").value = JSONObj.PhoneNo;
                        document.getElementById("fname").value = JSONObj.First_name;
                        document.getElementById("lname").value = JSONObj.LastName;
                        document.getElementById("Address").value = JSONObj.Address;
                        document.getElementById("City").value = JSONObj.City;
                        document.getElementById("Pcode").value = JSONObj.PostalCode;
                    }

                }
            };
            r.open("POST", "FlexBackendPross.php", true);
            r.send(f);
        }

        window.addEventListener("load", LoadData('<?php echo ($_COOKIE["User"]) ?>'));
    </script>



    <script src="js/script.js">
    </script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.js"></script>
</body>

</html>