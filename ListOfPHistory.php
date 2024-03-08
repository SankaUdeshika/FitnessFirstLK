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
                    <!-- Flex History Items  -->

                    <div class="col-lg-8 mt-5 offset-lg-2 mb-5">
                        <div class="row">

                            <div class="col-12">
                                <div class="row">

                                    <table class="table-dark text-white border border-1 border-white">
                                        <tr class="mb-4">
                                            <th>Order_id</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Total Price</th>
                                            <th>Order Status</th>
                                            <th>Check Bill</th>
                                        </tr>
                                        <?php
                                        $Cookie_rs = FlexDatabase::search("SELECT * FROM `cookie` WHERE `Cookie` = '" . $_COOKIE["User"] . "' ");
                                        $Cookie_data = $Cookie_rs->fetch_assoc();

                                        $Email_rs = FlexDatabase::search("SELECT * FROM `user` WHERE `Cookie_C_id` = '" . $Cookie_data["C_id"] . "' ");
                                        $Email_data = $Email_rs->fetch_assoc();

                                        $Order_rs = FlexDatabase::search("SELECT * FROM `order` WHERE `User_Email` = '" . $Email_data["Email"] . "' ");
                                        $Order_num = $Order_rs->num_rows;

                                        for ($i = 0; $i < $Order_num; $i++) {
                                            $Order_data = $Order_rs->fetch_assoc();
                                        ?>
                                            <tr>
                                                <td><?php echo ($Order_data["Order_id"]) ?></td>
                                                <td><?php echo ($Order_data["OrderDate"]) ?></td>
                                                <td><?php echo ($Order_data["OrderTime"]) ?></td>
                                                <td><?php echo ($Order_data["Total"]) ?></td>
                                                <?php
                                                // Pending
                                                if ($Order_data["Status_Sid"] == "3") {
                                                ?>
                                                    <td><span class="text-warning">Pending Order</span></td>
                                                <?php
                                                } else  if ($Order_data["Status_Sid"] == '1') {
                                                ?>
                                                    <td><span class="text-success">Confirm Order</span></td>
                                                <?php
                                                }
                                                ?>
                                                <td><button class=" btn btn-dark" onclick="window.location = 'invoice.php?id=<?php echo($Order_data['Order_id'])?>'">Check Bill</button></td>
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