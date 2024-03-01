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
                        <h2 class="fw-bold ml-5">Order Manager</h2>
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

                                $start_date = new DateTime("2022-09-27 00:00:00");

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


                    <div class="col-12">
                        <div class="row">

                            <table class="table table-dark">
                                <tr>
                                    <th>OrderId</th>
                                    <th>User Email</th>
                                    <th>Data Time</th>
                                    <th>Name</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                    <th>Bill</th>
                                </tr>
                                <?php
                                $Order_rs = FlexDatabase::Search("SELECT * FROM `order` INNER JOIN `user` ON `user`.`Email` = `Order`.`User_Email`  ");
                                $Order_num = $Order_rs->num_rows;

                                for ($i = 0; $i < $Order_num; $i++) {
                                    $Order_data = $Order_rs->fetch_assoc();
                                ?>
                                    <tr>
                                        <td><?php echo ($Order_data["Order_id"]) ?></td>
                                        <td><?php echo ($Order_data["User_Email"]) ?></td>
                                        <td><?php echo ($Order_data["OrderDate"] . " " . $Order_data["OrderTime"]) ?></td>
                                        <td><?php echo ($Order_data["FIrst_name"] . " " . $Order_data["Last_name"]) ?></td>
                                        <td><?php echo ($Order_data["Total"]) ?></td>
                                        <td><button class="btn btn-success">Confirm Order</button></td>
                                        <td><button class="btn btn-warning">Check Bill</button></td>
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