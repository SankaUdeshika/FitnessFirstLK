<?php
session_start();
require "Connections/FlexConnection.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Admin - Dashboard HTML </title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">
    <link rel="stylesheet" href="css/style.css">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->

</head>

<body id="reportsPage">
    <div class="" id="home">
        <nav class="navbar navbar-expand-xl">
            <div class="container h-100">
                <a class="navbar-brand" href="index.php">
                    <h1 class="tm-site-title mb-0">Product Admin</h1>
                </a>
                <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars tm-nav-icon"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto h-100">
                        <li class="nav-item">
                            <a class="nav-link " href="adminindex.php">
                                <i class="fas fa-tachometer-alt"></i>
                                Dashboard
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="far fa-file-alt"></i>
                                <span>
                                    Orders <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="newordermanage.php">All Orders</a>
                                <a class="dropdown-item" href="pendingordermanagement.php">Pending Orders</a>
                                <a class="dropdown-item" href="confirmordermanagement.php">Confirm Orders</a>
                                <a class="dropdown-item" href="canceledordermanagement.php">Canceled Orders</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="products.php">
                                <i class="fas fa-shopping-cart"></i>
                                Products
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="accounts.html">
                                <i class="far fa-user"></i>
                                Accounts
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-cog"></i>
                                <span>
                                    Settings <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Profile</a>
                                <a class="dropdown-item" href="#">Billing</a>
                                <a class="dropdown-item" href="#">Customize</a>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link d-block" href="login.html">
                                Admin, <b>Logout</b>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </nav>
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="text-white mt-5 mb-5">Welcome back, <b>Cancel Order management</b></p>
                </div>
            </div>
            <!-- row -->
            <div class="row tm-content-row">


                <!-- orders -->

                <div class="col-12 tm-block-col">
                    <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-scroll">
                        <h2 class="tm-block-title">Orders List</h2>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ORDER NO.</th>
                                    <th scope="col">STATUS</th>
                                    <th scope="col">USER EMAIL</th>
                                    <th scope="col">NAME</th>
                                    <th scope="col">DATE TIME</th>
                                    <th scope="col">TOTAL</th>
                                    <th scope="col">BILL</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $Order_rs = FlexDatabase::Search("SELECT * FROM `order` INNER JOIN `user` ON `user`.`Email` = `order`.`User_Email` INNER JOIN `status` ON  `status`.`Sid` = `order`.`Status_Sid` WHERE `Sid` = '2'  ");
                                $Order_num = $Order_rs->num_rows;

                                for ($i = 0; $i < $Order_num; $i++) {
                                    $Order_data = $Order_rs->fetch_assoc();
                                ?>
                                    <tr>
                                        <td><?php echo ($Order_data["Order_id"]) ?></td>
                                        <?php
                                        // Pending
                                        if ($Order_data["Status"] == "PENDING") {
                                        ?>
                                            <td>
                                                <div class="tm-status-circle pending"
                                                    style="cursor: pointer;">
                                                </div>Pending
                                                <small class="text-warning pendingStatus" onmouseover="this.style.textShadow = '0px 0px 5px greenyellow';"
                                                    onmouseout="this.style.textShadow = 'none';" style="cursor: pointer;" onclick="CancelOrderStatus('<?php echo ($Order_data['Order_id']) ?>');">or Cancel</small>
                                            </td>

                                        <?php
                                        } else  if ($Order_data["Status"] == 'ACTIVE') {
                                        ?>
                                            <td>
                                                <div class="tm-status-circle moving">
                                                </div>Confirm
                                            </td>
                                        <?php
                                        } else  if ($Order_data["Status"] == 'DEACTIVE') {
                                        ?>
                                            <td>
                                                <div class="tm-status-circle cancelled">
                                                </div>Cancel
                                            </td>
                                        <?php
                                        }
                                        ?>
                                        <td><?php echo ($Order_data["User_Email"]) ?></td>
                                        <td><?php echo ($Order_data["FIrst_name"] . " " . $Order_data["Last_name"]) ?></td>
                                        <td><?php echo ($Order_data["OrderDate"] . " " . $Order_data["OrderTime"]) ?></td>
                                        <td><?php echo ($Order_data["Total"]) ?></td>
                                        <!-- Satatus Part -->

                                        <td><button class="btn btn-warning" onclick="window.location='invoice.php?id=<?php echo ($Order_data['Order_id']) ?>'">Check Bill</button></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <footer class="tm-footer row tm-mt-small">
            <div class="col-12 font-weight-light">
                <p class="text-center text-white mb-0 px-4 small">
                    Copyright &copy; <b>2024</b> All rights reserved.

                    Design: <a rel="nofollow noopener" href="https://www.linkedin.com/in/sanka-udeshika-6298311bb/" class="tm-footer-link">Sanka Udeshika</a>
                </p>
            </div>
        </footer>
    </div>



    <!-- My Scripts -->
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/script.js"></script>

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/moment.min.js"></script>
    <!-- https://momentjs.com/ -->
    <script src="js/Chart.min.js"></script>
    <!-- http://www.chartjs.org/docs/latest/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script src="js/tooplate-scripts.js"></script>
    <script>
        Chart.defaults.global.defaultFontColor = 'white';
        let ctxLine,
            ctxBar,
            ctxPie,
            optionsLine,
            optionsBar,
            optionsPie,
            configLine,
            configBar,
            configPie,
            lineChart;
        barChart, pieChart;
        // DOM is ready
        $(function() {
            drawLineChart(); // Line Chart
            drawBarChart(); // Bar Chart
            drawPieChart(); // Pie Chart

            $(window).resize(function() {
                updateLineChart();
                updateBarChart();
            });
        })
    </script>
</body>

</html>