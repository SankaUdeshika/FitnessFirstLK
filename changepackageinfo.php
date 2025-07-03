<?php
session_start();
include "Connections/connection.php";

if (isset($_SESSION["admin"])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Manage Content | </title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    </head>

    <body style="background-color: #74EBD5;background-image: linear-gradient(90deg,#74EBD5 0%,#9FACE6 100%);">

        <div class="container-fluid">
            <div class="row">

                <div class="col-12 col-lg-2">
                    <div class="row">
                        <div class="col-12 align-items-start bg-dark" style="height: 300vh;">
                            <div class="row g-1 text-center">

                                <div class="col-12 mt-5">
                                    <h4 class="text-white">Welcome <?php echo ($_SESSION["admin"]["firstname"] . " " . $_SESSION["admin"]["lastname"]) ?></h4>
                                    <hr class="border border-white border-1" />
                                </div>

                                <div class="col-12 text-center">
                                    <div class="nav flex-column nav-pills me-3 mt-3" role="tablist" aria-orientation="vertical">
                                        <nav class="nav flex-column">
                                            <a class="nav-link " href="adminDashboard.php">Dashboard</a>
                                            <a class="nav-link active" aria-current="page" href="adminManageContent.php">Manage Content</a>

                                        </nav>
                                    </div>
                                </div>

                                <div class="col-12 mt-5">
                                    <hr class="border border-white border-1" />
                                    <h4 class="text-white fw-bold"> Developing?</h4>
                                    <hr class="border border-white border-1" />
                                </div>

                                <div class="col-12 mt-3 d-grid">
                                    <label class="form-label fs-6 fw-bold btn btn-outline-info  text-white ">Testing</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-10">
                    <div class="row">

                        <div class="text-white fw-bold mb-1 mt-3">
                            <h2 class="fw-bold ml-5">Manage Content</h2>
                        </div>
                        <div class="col-12">
                            <hr />
                        </div>

                        <div class="container" style="background-color: white
                        ;">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="section-title">
                                        <span>Monthly Deals</span>
                                        <h2>Choose your Package</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-lg-4 col-md-8">
                                    <div class="ps-item">
                                        <h3>Gents Annual 50% OFF</h3>
                                        <div class="pi-price">
                                            <h2>Rs.40000/=</h2>
                                            <span>Moors Sport Club</span>
                                        </div>
                                        <ul>
                                            <li>Fully equipment gym</li>
                                            <li>Ladies Only Area</li>
                                            <li>Certified trainers</li>
                                            <li>Shower & Changing room facilities</li>
                                            <li>Free meal plan & workout schedules</li>
                                            <li>Body assessment</li>
                                            <li>Ample parking</li>
                                        </ul>
                                        <a href="#" class="primary-btn pricing-btn" onclick="window.location = 'membershipCheckout.php?id=1'">Enroll now</a>
                                        <!-- <a href="#" class="thumb-icon"><i class="fa fa-picture-o"></i></a> -->
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-8">
                                    <div class="ps-item">
                                        <h3>Buy 6months Get 6months</h3>
                                        <div class="pi-price">
                                            <h2>Rs.80000/=</h2>
                                            <span>Colombo 7</span>
                                        </div>
                                        <ul>
                                            <li>Fully equipment gym</li>
                                            <li>Swimming pool, sauna & steam room</li>
                                            <li>Certified trainers</li>
                                            <li>Access to all 4 branches</li>
                                            <li>In-house suppliments store</li>
                                            <li>Shower & Changing room facilities</li>
                                            <li>Free meal plan & workout schedules</li>
                                            <li>Body assessment</li>
                                            <li>Ample parking</li>
                                        </ul>
                                        <a href="#" class="primary-btn pricing-btn" onclick="window.location = 'membershipCheckout.php?id=1'">Enroll now</a>
                                        <!-- <a href="#" class="thumb-icon"><i class="fa fa-picture-o"></i></a> -->
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-8">
                                    <div class="ps-item">
                                        <h3>Ladies Annual 50% OFF </h3>
                                        <div class="pi-price">
                                            <h2>Rs.35000/=</h2>
                                            <span>JA-ELA</span>
                                        </div>
                                        <ul>
                                            <li>Fully equipment gym</li>
                                            <li>Certified trainers</li>
                                            <li>Shower & Changing room facilities</li>
                                            <li>Free meal plan & workout schedules</li>
                                            <li>Body assessment</li>
                                            <li>Ample parking</li>
                                        </ul>
                                        <a href="#" class="primary-btn pricing-btn" onclick="window.location = 'membershipCheckout.php?id=1'">Enroll now</a>
                                        <!-- <a href="#" class="thumb-icon"><i class="fa fa-picture-o"></i></a> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- content -->

                        <div class="col-12 p-4">
                            <div class="row">
                                <?php
                                $member_package = Database::search("SELECT * FROM `member_package`");
                                $member_package_num = $member_package->num_rows;
                                ?>

                                <table class="table table-bordered table-striped table-hover">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>member_ship_id</th>
                                            <th>location</th>
                                            <th>membership_price</th>
                                            <th>PacakageName</th>
                                            <th>workoutTime</th>
                                            <th>duration</th>
                                            <th>Update / Insert</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        for ($i = 0; $i < $member_package_num; $i++) {
                                            $member_package_data = $member_package->fetch_assoc();
                                        ?>
                                            <tr>
                                                <td contenteditable="false"><?php echo $member_package_data["member_ship_id"]; ?></td>
                                                <td contenteditable="true"><?php echo $member_package_data["location"]; ?></td>
                                                <td contenteditable="true"><?php echo $member_package_data["membership_price"]; ?></td>
                                                <td contenteditable="true"><?php echo $member_package_data["PacakageName"]; ?></td>
                                                <td contenteditable="true"><?php echo $member_package_data["workoutTime"]; ?></td>
                                                <td contenteditable="true"><?php echo $member_package_data["duration"]; ?></td>
                                                <td><button class="btn btn-primary btn-sm" onclick="updateRow(this)">Update</button></td>
                                            </tr>
                                        <?php
                                        }
                                        ?>

                                        <tr>
                                            <td contenteditable="false"></td>
                                            <td contenteditable="true"></td>
                                            <td contenteditable="true"></td>
                                            <td contenteditable="true"></td>
                                            <td contenteditable="true"></td>
                                            <td contenteditable="true"></td>
                                            <td><button class="btn btn-danger btn-sm" onclick="InsertRow(this)">Insert</button></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>



                    </div>
                </div>
            </div>

            <script src="js/bootstrap.js"></script>
            <script src="js/script.js"></script>
            <script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script>
    </body>

    </html>
<?php
} else {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact | RASIKA OFFICIAL</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    </head>

    <body style="background-color: #74EBD5;background-image: linear-gradient(90deg,#74EBD5 0%,#9FACE6 100%);">

        <div class="col-12 d-flex justify-content-center align-items-center text-white" style="width: 100%; height: 100vh;">
            <h1>Please Log In first</h1>
        </div>


        <script src="bootstrap.bundle.js"></script>
        <script src="script.js"></script>
        <script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script>
    </body>

    </html>
<?php
}

?>