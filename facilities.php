<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <div class="col-12" style="position: fixed; z-index: 4;">
        <?php include "header.php" ?>
    </div>


    <div class="container-fluid">
        <div class="row">


            <!-- Top bar -->
            <div class="col-12 Classes-cover  ">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="row ">
                            <div class="col-12">
                                <span class="fs-4 fw-bold text-white" style="font-family: monospace;">OUR</span>
                            </div>

                            <div class="col-12">
                                <span class="Blog-Search-text">FACILITIES</span><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-12">
                <div class="row">

                    <div class="col-12 mt-5 mb-5 FirstDownToUPAnimation">
                        <div class="row">
                            <div class="col-12 text-center mt-5">
                                <span class="aboutTopicwhite facilitiyAboutText  ">ABOUT THE </span> <br> <span class="aboutTopicRed facilitiyAboutText"> FITNESS FACILITIES</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mt-5 FirstUpToDownAnimation">
                        <div class="row">
                            <div class="col-lg-8 col-12 offset-lg-2 text-center text-white">
                                <?php
                                require "Connections/connection.php";
                                $aboutpara_rs = Database::search("SELECT * FROM `facilitiesabout` WHERE `FA_id` = '1' ");
                                $aboutpara_data = $aboutpara_rs->fetch_assoc();
                                ?>
                                <p><?php echo ($aboutpara_data["AboutPara"]) ?></p>
                                <h5>Come train with us!</h5>
                            </div>
                        </div>
                    </div>


                    <div class="col-12 mt-5 mb-5">
                        <div class="row">

                            <div class="col-lg-6 offset-lg-2  text-white Fade ">
                                <span class="fs-1 mx-5 fw-bold">Our Facility Features:</span>
                            </div>

                            <div class="col-12 text-white-50 mt-4">
                                <div class="row">

                                    <div class="col-lg-8 col-12 offset-lg-2">
                                        <div class="row">
                                            <div class="col-6 LeftToRight Fade">
                                                <ul>
                                                    <li> <span class="fs-3 ">Over 18,000 square feet of space</span></li>
                                                    <li> <span class="fs-3">Locker rooms with private showers and day lockers</span></li>
                                                    <li> <span class="fs-3">Two levels of cardio equipment</span></li>
                                                    <li> <span class="fs-3">60 feet of turf for sleds</span></li>
                                                    <li> <span class="fs-3">Rogue Glute Hamstring Developer</span></li>
                                                </ul>
                                            </div>

                                            <div class="col-6 RightToLeft Fade">
                                                <li> <span class="fs-3">Dumbbells up to 150 lbs</span></li>
                                                <li> <span class="fs-3">Hammer Strength plate loaded equipment</span></li>
                                                <li> <span class="fs-3">Pin loaded weight training machines</span></li>
                                                <li> <span class="fs-3">7 squat racks</span></li>
                                                <li> <span class="fs-3">4 deadlift platforms with bumper plates</span></li>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mb-5  ">
                        <div class="row d-flex justify-content-center">

                            <div class="col-3  border border-1 rounded rounded-5 border-white Fade DownToUP">
                                <div class="row">
                                    <div class="col-12 mt-4">
                                        <img src="Resources/images/suna.jpeg" class="facilitieImage" width="100%" alt="">
                                    </div>
                                    <div class="col-12 mt-3">
                                        <div class="row">
                                            <div class="col-12 text-center">
                                                <span class="fw-bold fs-1 text-white">Sauna & Steam Room</span>
                                            </div>
                                            <div class="col-12 p-3 text-center text-white-50">
                                                <p class="fs-4">Rest and Recover at our Sauna & steam room built to world class standards, while enjoying an immersive experience.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-3 mx-5 border border-1 rounded rounded-5 border-white Fade UPToDown">
                                <div class="row">
                                    <div class="col-12 mt-4">
                                        <img src="Resources/images/SwimmingPool.jpeg" class="facilitieImage" width="100%" alt="">
                                    </div>
                                    <div class="col-12 mt-3">
                                        <div class="row">
                                            <div class="col-12 text-center">
                                                <span class="fw-bold fs-1 text-white">Swimming Pool</span>
                                            </div>
                                            <div class="col-12 p-3 text-center text-white-50">
                                                <p class="fs-4">Get Free access to our state of the Art rooftop swimming pool, built with all moden amenities.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="col-3  border border-1 rounded rounded-5 border-white DownToUP">
                                <div class="row">
                                    <div class="col-12 mt-4">
                                        <img src="Resources/images/sportMassage.jpeg" class="facilitieImage" width="100%" alt="">
                                    </div>
                                    <div class="col-12 mt-3">
                                        <div class="row">
                                            <div class="col-12 text-center">
                                                <span class="fw-bold fs-1 text-white">Sports Massage</span>
                                            </div>
                                            <div class="col-12 p-3 text-center text-white-50">
                                                <p class="fs-4">Release the tension in your muscles with a sports massage from our well qualified therapists.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>




                    <div class="col-12 mt-5 mb-5">
                        <hr class="text-white">
                    </div>


                    <div class="col-12 mb-5">
                        <div class="row">

                            <div class="col-12 col-lg-6 col-12 offset-lg-1 Fade">
                                <span class="aboutTopicwhite fs-1">The</span> &nbsp; <span class="aboutTopicRed fs-1">SUPPLIMENT FACTORY</span>
                            </div>

                            <div class="col-lg-6 col-12 offset-lg-1 text-white-50 mt-5">
                                <div class="row">
                                    <div class="col-12">
                                        <p class="fs-4">
                                            The Supplement Factory is your source for nutrition and supplements. We have your nutrition needs covered including protein shakes made to order, protein bars and other snacks, as well as a wide array of supplements, to take home.
                                        </p>
                                    </div>

                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-12 text-white">
                                                        <span>The Shake Bar</span>
                                                    </div>
                                                    <div class="col-12">
                                                        <ul>
                                                            <li>Protein Shakes Made to Order</li>
                                                            <li> Pre Workout Drinks & Powder</li>
                                                            <li>BCAAs & EAAs</li>
                                                            <li>Protein Bars & Other Snacks</li>
                                                            <li> Bottled Water </li>
                                                            <li>Energy Drinks</li>
                                                            <li>Ready to Drink Protein</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-12  text-white">
                                                        <span>Retail & merchandise</span>
                                                    </div>
                                                    <div class="col-12">
                                                        <ul>
                                                            <li>Protein Tubs</li>
                                                            <li> Pre Workout</li>
                                                            <li>Intra Workout</li>
                                                            <li>Custom Apparel</li>
                                                            <li> Shaker Bottles</li>
                                                            <li>Combination Locks</li>
                                                            <li>Ear Buds</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-lg-4 co-12">
                                <img src="Resources/images/SuplimentImage.jpg" width="100%" alt="">
                            </div>

                        </div>
                    </div>


                </div>
            </div>



        </div>
    </div>







    <?php include "footer.php" ?>


    <script src="js/script.js">
    </script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.js"></script>

</body>

</html>