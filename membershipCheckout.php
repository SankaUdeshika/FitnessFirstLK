<?php
require "Connections/connection.php";
// Coookie Set

$package_Id = $_GET["id"];

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

    <!-- Header -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 headerCover d-lg-block d-none">
                <div class="row">
                    <div class="col-2 LogoCover" onclick="window.location='index.php'">
                        <img src="Resources/images/LOGO/NewFitnessFirst_LOGO.png" class="FlexImage" alt="NewFitnessFirstLogo">
                    </div>

                    <div class="col-8 text-center SectionCover2">
                        <div class="row">
                            <div class="col-4">
                                <span class="HeaderTabs" onclick="window.location = 'index.php'">Home</span>
                            </div>
                            <div class="col-4">
                                <span class="HeaderTabs" onclick="window.location = 'index.php#price'">Pricing</span>
                            </div>
                            <!-- <div class="col-3">
                                <span class="HeaderTabs" onclick="window.location = 'FlexHome.php'">Suppliments</span>
                            </div> -->
                            <div class="col-4">
                                <span class="HeaderTabs" onclick="window.location = 'blog.php'">Blogs</span>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="col-2  LogoCover">
                        <img src="Resources/images/LOGO/NewFlexHeader.svg" onclick="window.location = 'FlexHome.php'" class="FlexImage">
                    </div> -->

                </div>
            </div>

            <!-- small Screen -->
            <div class="col-12 headerCover d-lg-none d-blcok">
                <div class="row">

                    <div class="col-10  LogoCover2">
                        <img src="Resources/images/LOGO/NewFitnessFirst_LOGO.png" class="FlexImage2" alt="NewFitnessFirstLogo">
                    </div>

                    <div class="col-2 d-flex justify-content-end text-white fs-1 fw-bold">
                        <button class="bg-transparent text-white border-0 text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop"><i class="bi bi-list"></i></button>
                    </div>

                    <div class="offcanvas offcanvas-top bg-dark" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                        <div class="offcanvas-header">
                            <button type="button" class="btn-close fs-1 fw-bold text-white" data-bs-dismiss="offcanvas" aria-label="Close"><i class="bi bi-x-lg"></i></button>
                        </div>
                        <div class="offcanvas-body SectionCover">
                            <!-- Logo -->

                            <div class="col-12 text-center SectionCover">
                                <div class="row">
                                    <!-- fitnessfirt Logo -->
                                    <!-- <div class="col-6 d-flex justify-content-center">
                                        <div class="row">
                                            <div class="col-12 mt-3">
                                                <img src="Resources/images/LOGO/NewFitnessFirst_LOGO.png" onclick="window.location = 'index.php'" class="FlexImage" alt="NewFitnessFirstLogo">
                                            </div>
                                            <div class="col-12">
                                                <span class="fw-bold fs-4 text-white-50">FitnessFirstLK</span>
                                            </div>
                                        </div>
                                    </div> -->
                                    <!-- Flexx -->
                                    <!-- <div class="col-6 d-flex justify-content-center">
                                        <div class="row">
                                            <div class="col-12 mt-3">
                                                <img src="Resources/images/LOGO/NewFlexHeader.svg" onclick="window.location = 'FlexHome.php'" class="FlexImage">
                                            </div>
                                            <div class="col-12">
                                                <span class="fw-bold fs-4 text-white-50">Flex</span>
                                            </div>
                                        </div>
                                    </div> -->

                                    <div class="col-10 offset-1">
                                        <hr>
                                    </div>




                                </div>
                            </div>

                            <div class="col-12 text-center SectionCover">
                                <div class="row">
                                    <div class="col-12">
                                        <span class="HeaderTabs" onclick="window.location = 'index.php'">HOME</span>
                                    </div>
                                    <div class="col-12">
                                        <span class="HeaderTabs" onclick="window.location = 'index.php#price'">PRICE</span>
                                    </div>
                                    <!-- <div class="col-12">
                                        <span class="HeaderTabs" onclick="window.location = 'FlexHome.php'">SUPPLIMENTS</span>
                                    </div> -->
                                    <div class="col-12">
                                        <span class="HeaderTabs" onclick="window.location = 'blog.php'">BLOGS</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>



    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="row">



                    <!-- Flex Header -->


                    <!-- Content -->


                    <div class="col-12 mt-5">
                        <div class="row">
                            <!-- From -->
                            <div class="col-lg-6 col-12 border-0 border-end border-white">
                                <div class="row">




                                    <!-- Find Packages -->
                                    <div class="col-12">
                                        <h1 class="text-white">Package Name</h1>
                                    </div>
                                    <div class="col-12">
                                        <label for="branch" class="form-label text-white">Branch:</label>
                                        <select id="branch" name="branch" class="form-select">
                                            <option value="Colombo 7">Colombo 7</option>
                                            <option value="WTC">WTC</option>
                                            <option value="Moors">Moors</option>
                                            <option value="Ja ela">Ja-Ela</option>
                                        </select>
                                    </div>

                                    <div class="col-12 mt-3">
                                        <label for="time" class="form-label text-white">Time:</label>
                                        <select id="time" name="time" class="form-select">
                                            <option value="Full Time">Full Time</option>
                                            <option value="Off Peak">Off Peak</option>
                                        </select>
                                    </div>

                                    <div class="col-6 mt-3">
                                        <label for="category" class="form-label text-white">Package Name:</label>
                                        <select id="category" name="category" class="form-select">
                                            <option value="Individual Ladies">Individual Ladies</option>
                                            <option value="Individual Gents">Individual Gents</option>
                                            <option value="Couple">Couple</option>
                                            <option value="Student">Students</option>
                                        </select>
                                    </div>

                                    <div class="col-6 mt-3">
                                        <label for="membership" class="form-label text-white">Membership:</label>
                                        <select id="membership" name="membership" class="form-select">
                                            <option value="Daily">Daily</option>
                                            <option value="Monthly">Monthly</option>
                                            <option value="Quarterly">Quarterly</option>
                                            <option value="Bi-Annual">Bi-Annual</option>
                                            <option value="Annual">Annual</option>
                                        </select>
                                    </div>

                                    <div class="col-12 mb-5">
                                        <div class="row d-flex justify-content-center">
                                            <div class=" col-12 d-grid SingleProductViewBtn mt-3 text-center" onclick="find();">
                                                Find
                                            </div>
                                        </div>
                                    </div>














                                </div>
                            </div>

                            <div class="col-lg-6 col-12 border-0 border-end border-white">
                                <div class="row" id="noInfomationTag">

                                    <div class="col-12">
                                        <div class="row">
                                            <!-- Load Cart -->

                                            <?php
                                            $package_rs = Database::search("SELECT * FROM `member_package` WHERE `member_ship_id`  = '" . $package_Id . "'");
                                            $package_count = $package_rs->num_rows;

                                            if ($package_count > 0) {
                                                $package_details = $package_rs->fetch_assoc();
                                            ?>
                                                <h1><?php echo $package_details["PacakageName"] ?></h1>

                                            <?php
                                            }

                                            ?>

                                            <div class="col-12 mt-2">
                                                <div class="row">
                                                    <div class="col-2 ">
                                                        <img src="Resources/images/LOGO/NewFitnessFirst_LOGO.png" width="100%" class="rounded rounded-2" alt="">
                                                    </div>

                                                    <div class="col-5">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <span class="fw-bold text-white" style="color: white;"> <?php echo $package_details["PacakageName"] ?></span>
                                                            </div>
                                                            <div class="col-12">
                                                                <small class="text-white-50">Rs.<?php echo $package_details["membership_price"] ?></small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-1">
                                                        <span class="text-white "> 1 X </span>
                                                    </div>
                                                    <div class="col-1">
                                                        <span class="text-white ">Rs.<?php echo $package_details["membership_price"] ?> </span>
                                                    </div>
                                                    <hr class="text-white mt-1">
                                                </div>
                                            </div>


                                            <div class="col-12  mt-5">
                                                <div class="row">

                                                    <div class="col-12 mb-3 p-3 ">
                                                        <div class="row">
                                                            <input type="text" class="bg-black text-white border-0" placeholder="Promotion Code here!">
                                                        </div>
                                                    </div>

                                                    <hr class="fw-bold text-white">



                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <span class="text-white fs-5">Total</span>
                                                            </div>
                                                            <div class="col-6 text-white fw-bold text-end">
                                                                <span class="text-decoration-underline"> Rs.<?php echo $package_details["membership_price"] ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr class="text-white fw-bold">

                                                    <div class="col-12">
                                                        <div class="row">
                                                            <!-- contact Details -->
                                                            <div class="col-12">
                                                                <div class="row">
                                                                    <!-- From -->
                                                                    <div class=" col-12 border-0 border-end border-white">
                                                                        <div class="row">
                                                                            <div class=" col-12 ">
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

                                                                                    <div class="col-12 mb-5">
                                                                                        <div class="row d-flex justify-content-center">
                                                                                            <div class=" col-12 d-grid SingleProductViewBtn mt-3 text-center" onclick="addMembership(<?php echo $package_Id ?>);">
                                                                                                Pay Now
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







        <script src="js/script.js">
        </script>
        <script src="js/bootstrap.bundle.js"></script>
        <script src="js/bootstrap.js"></script>
        <script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>