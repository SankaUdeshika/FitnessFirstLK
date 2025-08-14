<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Gym Template">
    <meta name="keywords" content="Gym, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fitness First LK</title>
    <link rel="icon" type="image/png" href="img/FitnessFirstLKLogo.png">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/style2.css" type="text/css">

    <style>
        /* Make the container scrollable horizontally on small devices */
        .scrolling-wrapper {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .scrolling-wrapper::-webkit-scrollbar {
            height: 6px;
        }

        .scrolling-wrapper::-webkit-scrollbar-thumb {
            background: #ccc;
            border-radius: 3px;
        }

        @keyframes scrollBanner {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        .scrolling-banner {
            display: flex;
            animation: scrollBanner 15s linear infinite;
        }
    </style>
</head>

<body onload="onloadTestimonial();">
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="fa fa-close"></i>
        </div>
        <div class="canvas-search search-switch">
            <i class="fa fa-search"></i>
        </div>
        <nav class="canvas-menu mobile-menu">
            <ul>
                <li><a href="./index.php">Home</a></li>
                <li><a href="./about-us.php">About Us</a></li>
                <!-- <li><a href="./classes.html">Classes</a></li> -->
                <li><a href="./services.php">Amenities</a></li>
                <li><a href="./team.php">Our Team</a></li>
                <li><a href="./blog.php">Our blog</a></li>
                <li><a href="./membershipCheckout.php?id=1">Our Packages</a></li>
                <li><a href="./contact.php">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="canvas-social">
            <a href="https://www.facebook.com/profile.php?id=61567922141868"><i class="fa fa-facebook"></i></a>
            <!-- <a href="#"><i class="fa fa-twitter"></i></a> -->
            <!-- <a href="#"><i class="fa fa-youtube-play"></i></a> -->
            <a href="https://www.instagram.com/fitnessfirstlk?igsh=MWVoeGNjdDJobGtxOQ=="><i class="fa fa-instagram"></i></a>
        </div>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="logo">
                        <a href="./index.php">
                            <img src="img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="nav-menu">
                        <ul>
                            <li class="active"><a href="./index.php">Home</a></li>
                            <li><a href="./about-us.php">About Us</a></li>
                            <!-- <li><a href="./class-details.html">Classes</a></li> -->
                            <li><a href="./services.php">Amenities</a></li>
                            <li><a href="./team.php">Our Team</a></li>
                            <li><a href="./blog.php">Our blog</a></li>
                            <li><a href="./membershipCheckout.php?id=1">Our Packages</a></li>
                            <li><a href="./contact.php">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="top-option">
                        <!-- <div class="to-search search-switch">
                            <i class="fa fa-search"></i>
                        </div> -->
                        <div class="to-social">
                            <a href="https://www.facebook.com/profile.php?id=61567922141868"><i class="fa fa-facebook"></i></a>
                            <!-- <a href="#"><i class="fa fa-twitter"></i></a> -->
                            <!-- <a href="#"><i class="fa fa-youtube-play"></i></a> -->
                            <a href="https://www.instagram.com/fitnessfirstlk?igsh=MWVoeGNjdDJobGtxOQ=="><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="canvas-open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <?php
    require "./Connections/connection.php"; // adjust path
    $carousel_rs = Database::search("SELECT * FROM `homecarouselimages` ORDER BY `HCI_id` ASC LIMIT 2");
    $carousel_images = [];

    while ($row = $carousel_rs->fetch_assoc()) {
        $carousel_images[] = $row["HIC_path"];
    }
    ?>

    <section class="hero-section">
        <div class="hs-slider owl-carousel">
            <!-- First Slide -->
            <div class="hs-item set-bg vh-100" data-setbg="<?php echo $carousel_images[0]; ?>">
                <div class="container">
                    <div class="row h-100">
                        <div class="col-lg-6 offset-lg-6 d-flex align-items-center justify-content-center justify-content-lg-end text-center text-lg-start">
                            <div class="hi-text">
                                <span>Shape your body</span>
                                <h1 class="fw-bold">Be <strong>strong</strong> with a professional</h1>
                                <a class="primary-btn" onclick="window.open('https://docs.google.com/forms/d/e/1FAIpQLSeX0bJtgAX28lJNutZr2scCCX5ckGP5IDCNhmHaJxObAPqUXQ/viewform?usp=dialog', '_blank')">Free Day Trial</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Second Slide -->
            <div class="hs-item set-bg vh-100" data-setbg="<?php echo $carousel_images[1]; ?>">
                <div class="container">
                    <div class="row vh-100">
                        <div class="col-lg-6 offset-lg-6 d-flex text-center mb-5 text-lg-start align-items-center justify-content-center">
                            <div class="hi-text">
                                <span>Shape your body</span>
                                <h1 class="fw-bold">Buy <strong>Six Month</strong> Get <strong>Six Month</strong></h1>
                                <a class="primary-btn" onclick="window.open('https://docs.google.com/forms/d/e/1FAIpQLSeX0bJtgAX28lJNutZr2scCCX5ckGP5IDCNhmHaJxObAPqUXQ/viewform?usp=dialog', '_blank')">Free Day Trial</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Hero Section End -->

    <!-- Testimonial Section Begin -->
    <section class="testimonial-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Testimonial</span>
                        <h2>Our cilent say</h2>
                    </div>
                </div>
            </div>
            <div class="ts_slider owl-carousel">
                <div class="ts_item">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="ti_pic">
                                <img src="img/testimonial/testimonial-1.jpg" alt="">
                            </div>
                            <div class="ti_text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt<br /> ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                    gravida. Risus commodo<br /> viverra maecenas accumsan lacus vel facilisis.</p>
                                <h5>Marshmello Gomez</h5>
                                <div class="tt-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ts_item">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="ti_pic">
                                <img src="img/testimonial/testimonial-2.jpg" alt="">
                            </div>
                            <div class="ti_text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt<br /> ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                    gravida. Risus commodo<br /> viverra maecenas accumsan lacus vel facilisis.</p>
                                <h5>Marshmello Gomez</h5>
                                <div class="tt-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->
    <!-- ChoseUs Section Begin -->
    <section class="choseus-section spad">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Why chose us?</span>
                        <h2>PUSH YOUR LIMITS FORWARD</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-034-stationary-bike"></span>
                        <h4>Modern equipment</h4>
                        <p>Our gym is equipped with the latest state-of-the-art fitness machines and technology, designed to deliver maximum performance and safety. Whether you’re strength training or doing cardio, our equipment supports every fitness level and goal.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-033-juice"></span>
                        <h4>Healthy nutrition plan</h4>
                        <p>We go beyond the gym floor. With Fitness First meal plans, you’ll get nutritious, ready-to-follow food guidance that fuels performance and supports lasting health — because what you eat matters.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-002-dumbell"></span>
                        <h4>Proffesponal training plan</h4>
                        <p>Our certified trainers create structured, results-driven programs that help you train smarter, not harder. From strength and conditioning to fat loss and endurance, we’ve got the perfect plan for you.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-014-heart-beat"></span>
                        <h4>Unique to your needs</h4>
                        <p>Your fitness journey is personal, and so is our approach. From training plans to meal programs, everything we offer is uniquely crafted to match your individual needs and help you reach your goals faster.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ChoseUs Section End -->


    <!-- Classes Section Begin -->
    <section class="classes-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>SERVICE WE OFFER</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="class-item">
                        <div class="ci-pic">
                            <img src="img/classes/class-1.jpg" alt="">
                        </div>
                        <div class="ci-text">
                            <!-- <span>STRENGTH</span> -->
                            <h5>1-On-1 TRAINING</h5>
                            <!-- <a href="#"><i class="fa fa-angle-right"></i></a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="class-item">
                        <div class="ci-pic">
                            <img src="img/classes/class-2.jpg" alt="">
                        </div>
                        <div class="ci-text">
                            <!-- <span>Cardio</span> -->
                            <h5> Elderly Training</h5>
                            <!-- <a href="#"><i class="fa fa-angle-right"></i></a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="class-item">
                        <div class="ci-pic">
                            <img src="img/classes/class-3.jpg" alt="">
                        </div>
                        <div class="ci-text">
                            <!-- <span>STRENGTH</span> -->
                            <h5>Pre & Postnatal Training</h5>
                            <!-- <a href="#"><i class="fa fa-angle-right"></i></a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="class-item">
                        <div class="ci-pic">
                            <img src="img/classes/class-4.jpg" alt="">
                        </div>
                        <div class="ci-text">
                            <!-- <span>Cardio</span> -->
                            <h4>Body Conditioning Training</h4>
                            <!-- <a href="#"><i class="fa fa-angle-right"></i></a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="class-item">
                        <div class="ci-pic">
                            <img src="img/classes/class-5.jpg" alt="">
                        </div>
                        <div class="ci-text">
                            <!-- <span>Massage</span> -->
                            <h4>Muscle Rehabilitation Training</h4>
                            <!-- <a href="#"><i class="fa fa-angle-right"></i></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ChoseUs Section End -->

    <div class="row">
        <div class="col-12 mb-5 mt-5">
            <?php include "bmical.php" ?>
        </div>
    </div>
    <!-- Banner Section Begin -->
    <section class="banner-section set-bg" data-setbg="img/banner-bg.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="bs-text">
                        <h2>registration now to get more deals</h2>
                        <div class="bt-tips">Where health, beauty and fitness meet.</div>
                        <!-- <a href="#" class="primary-btn  btn-normal">Appointment</a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

    <!-- Pricing Section Begin -->
    <section class="pricing-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Monthly Deals</span>
                        <h2>Choose your Package</h2>
                    </div>
                </div>
            </div>

            <!-- Wrap row in a div with horizontal scroll on small devices -->
            <div class="scrolling-wrapper row flex-row flex-nowrap overflow-auto pb-3">
                <!-- Each package -->
                <div class="col-lg-3 col-md-8 flex-shrink-0 mt-3">
                    <div class="ps-item">
                        <?php
                        $first_discount_rs  = Database::search("SELECT * FROM `member_package` WHERE `member_ship_id` = '1' ");
                        $first_discount_num  = $first_discount_rs->num_rows;
                        if ($first_discount_num > 0) {
                            $first_discount_data = $first_discount_rs->fetch_assoc();
                        ?>
                            <h3><?php echo htmlspecialchars($first_discount_data["discount_text"]); ?></h3>
                            <div class="pi-price">
                                <h2>Rs.<?php echo htmlspecialchars($first_discount_data["membership_price"]); ?></h2>
                                <span><?php echo htmlspecialchars($first_discount_data["location"]); ?></span>
                            </div>
                            <ul>
                                <?php
                                $first_discount_Details_rs = Database::search("SELECT * FROM `membership_details` WHERE `member_package_member_ship_id` = '1'");
                                $first_discount_Details_num = $first_discount_Details_rs->num_rows;
                                if ($first_discount_Details_num > 0) {
                                    for ($x = 0; $x < $first_discount_Details_num; $x++) {
                                        $first_discount_Details_data = $first_discount_Details_rs->fetch_assoc();
                                ?>
                                        <li><?php echo htmlspecialchars($first_discount_Details_data["detail"]); ?></li>
                                <?php
                                    }
                                }
                                ?>
                            </ul>
                            <a href="membershipCheckout.php?id=1" class="primary-btn pricing-btn">Enroll now</a>
                        <?php
                        } else {
                            echo "<h3>Sorry, No Discounts</h3>";
                        }
                        ?>
                    </div>
                </div>

                <div class="col-lg-3 col-md-8 flex-shrink-0 mt-3">
                    <div class="ps-item">
                        <?php
                        $second_discount_rs  = Database::search("SELECT * FROM `member_package` WHERE `member_ship_id` = '2' ");
                        $second_discount_num  = $second_discount_rs->num_rows;
                        if ($second_discount_num > 0) {
                            $second_discount_data = $second_discount_rs->fetch_assoc();
                        ?>
                            <h3><?php echo htmlspecialchars($second_discount_data["discount_text"]); ?></h3>
                            <div class="pi-price">
                                <h2>Rs.<?php echo htmlspecialchars($second_discount_data["membership_price"]); ?></h2>
                                <span><?php echo htmlspecialchars($second_discount_data["location"]); ?></span>
                            </div>
                            <ul>
                                <?php
                                $second_discount_Details_rs = Database::search("SELECT * FROM `membership_details` WHERE `member_package_member_ship_id` = '2'");
                                $second_discount_Details_num = $second_discount_Details_rs->num_rows;
                                if ($second_discount_Details_num > 0) {
                                    for ($x2 = 0; $x2 < $second_discount_Details_num; $x2++) {
                                        $second_discount_Details_data = $second_discount_Details_rs->fetch_assoc();
                                ?>
                                        <li><?php echo htmlspecialchars($second_discount_Details_data["detail"]); ?></li>
                                <?php
                                    }
                                }
                                ?>
                            </ul>
                            <a href="membershipCheckout.php?id=2" class="primary-btn pricing-btn">Enroll now</a>
                        <?php
                        } else {
                            echo "<h3>Sorry, No Discounts</h3>";
                        }
                        ?>
                    </div>
                </div>

                <div class="col-lg-3 col-md-8 flex-shrink-0 mt-3">
                    <div class="ps-item">
                        <?php
                        $third_discount_rs  = Database::search("SELECT * FROM `member_package` WHERE `member_ship_id` = '3' ");
                        $third_discount_num  = $third_discount_rs->num_rows;
                        if ($third_discount_num > 0) {
                            $third_discount_data = $third_discount_rs->fetch_assoc();
                        ?>
                            <h3><?php echo htmlspecialchars($third_discount_data["discount_text"]); ?></h3>
                            <div class="pi-price">
                                <h2>Rs.<?php echo htmlspecialchars($third_discount_data["membership_price"]); ?></h2>
                                <span><?php echo htmlspecialchars($third_discount_data["location"]); ?></span>
                            </div>
                            <ul>
                                <?php
                                $third_discount_Details_rs = Database::search("SELECT * FROM `membership_details` WHERE `member_package_member_ship_id` = '3'");
                                $third_discount_Details_num = $third_discount_Details_rs->num_rows;
                                if ($third_discount_Details_num > 0) {
                                    for ($x3 = 0; $x3 < $third_discount_Details_num; $x3++) {
                                        $third_discount_Details_data = $third_discount_Details_rs->fetch_assoc();
                                ?>
                                        <li><?php echo htmlspecialchars($third_discount_Details_data["detail"]); ?></li>
                                <?php
                                    }
                                }
                                ?>
                            </ul>
                            <a href="membershipCheckout.php?id=3" class="primary-btn pricing-btn">Enroll now</a>
                        <?php
                        } else {
                            echo "<h3>Sorry, No Discounts</h3>";
                        }
                        ?>
                    </div>
                </div>

                <div class="col-lg-3 col-md-8 flex-shrink-0 mt-3">
                    <div class="ps-item">
                        <?php
                        $fourth_discount_rs  = Database::search("SELECT * FROM `member_package` WHERE `member_ship_id` = '4' ");
                        $fourth_discount_num  = $fourth_discount_rs->num_rows;
                        if ($fourth_discount_num > 0) {
                            $fourth_discount_data = $fourth_discount_rs->fetch_assoc();
                        ?>
                            <h3><?php echo htmlspecialchars($fourth_discount_data["discount_text"]); ?></h3>
                            <div class="pi-price">
                                <h2>Rs.<?php echo htmlspecialchars($fourth_discount_data["membership_price"]); ?></h2>
                                <span><?php echo htmlspecialchars($fourth_discount_data["location"]); ?></span>
                            </div>
                            <ul>
                                <?php
                                $fourth_discount_Details_rs = Database::search("SELECT * FROM `membership_details` WHERE `member_package_member_ship_id` = '4'");
                                $fourth_discount_Details_num = $fourth_discount_Details_rs->num_rows;
                                if ($fourth_discount_Details_num > 0) {
                                    for ($x4 = 0; $x4 < $fourth_discount_Details_num; $x4++) {
                                        $fourth_discount_Details_data = $fourth_discount_Details_rs->fetch_assoc();
                                ?>
                                        <li><?php echo htmlspecialchars($fourth_discount_Details_data["detail"]); ?></li>
                                <?php
                                    }
                                }
                                ?>
                            </ul>
                            <a href="membershipCheckout.php?id=4" class="primary-btn pricing-btn">Enroll now</a>
                        <?php
                        } else {
                            echo "<h3>Sorry, No Discounts</h3>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing Section End -->
    <!-- Bmi eca methana Dapn -->

    <!-- Gallery Section End -->

    <!-- Team Section Begin -->
    <section class="team-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="team-title">
                        <div class="section-title">
                            <span>Our Team</span>
                            <h2>TRAIN WITH EXPERTS</h2>
                        </div>
                        <!-- <a href="#" class="primary-btn btn-normal appoinment-btn">appointment</a> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="ts-slider owl-carousel">
                    <div class="col-lg-4">
                        <div class="ts-item set-bg" data-setbg="img/team/piyumi.png">
                            <div class="ts_text">
                                <h4>Piumi</h4>
                                <span>Gym Trainer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ts-item set-bg" data-setbg="img/team/ashanthi.png">
                            <div class="ts_text">
                                <h4>Ashanthi</h4>
                                <span>Gym Trainer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ts-item set-bg" data-setbg="img/team/afran.png">
                            <div class="ts_text">
                                <h4>Afran</h4>
                                <span>Gym Trainer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ts-item set-bg" data-setbg="img/team/raveen.png">
                            <div class="ts_text">
                                <h4>Raveen</h4>
                                <span>Gym Trainer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ts-item set-bg" data-setbg="img/team/sashika.png">
                            <div class="ts_text">
                                <h4>Sashika</h4>
                                <span>Gym Trainer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ts-item set-bg" data-setbg="img/team/saminda.png">
                            <div class="ts_text">
                                <h4>Saminda</h4>
                                <span>Gym Trainer</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->
    <div class="col-12 overflow-hidden" style="position: relative; height: 65px;">
        <div class="row d-flex justify-content-center align-items-center">
            <h5>Trusted Partners</h5>
        </div>
        <div class="scrolling-banner" style="white-space: nowrap; display: inline-block;">
            <img src="img/Corporates.png" alt="Partner Logo" style="height: 30px; display: inline-block; object-fit:cover; margin-right: 30px;">
            <img src="img/Corporates.png" alt="Partner Logo" style="height: 30px; display: inline-block; object-fit:cover; margin-right: 30px;">
            <img src="img/Corporates.png" alt="Partner Logo" style="height: 30px; display: inline-block; object-fit:cover; margin-right: 30px;">
        </div>
    </div>
    <!-- Get In Touch Section Begin -->
    <div class="gettouch-section">
        <div class="container">

            <div class="row">
                <div class="col-md-4">
                    <div class="gt-text">
                        <i class="fa fa-map-marker"></i>
                        <p>Colombo 1, World Trade Center</br> Colombo 2, Moors Sports Club <br /> Colombo 7, Maitland Crescent<br /> Kandana Ja-ela </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gt-text">
                        <i class="fa fa-mobile"></i>
                        <ul>
                            <p>Colombo 7</p>
                            <li>011-269-5331</li>
                            <li>077-834-5678</li>
                            <p>Moors Sport Club</p>
                            <li>011-212-1755</li>
                            <li>075-711-9033</li>
                            <p>World Trade Center</p>
                            <li>011-233-8842</li>
                            <li>077-840-5889</li>
                            <p>Ja-ela</p>
                            <li>011-222-9747</li>
                            <li>077-834-5678</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gt-text email">
                        <i class="fa fa-envelope"></i>
                        <p>fitnessfirstcolombo@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Get In Touch Section End -->

    <!-- Footer Section Begin -->
    <section class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="fs-about">
                        <div class="fa-logo">
                            <a href="#"><img src="img/logo.png" alt=""></a>
                        </div>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore dolore magna aliqua endisse ultrices gravida lorem.</p> -->
                        <div class="fa-social">
                            <a href="https://www.facebook.com/profile.php?id=61567922141868"><i class="fa fa-facebook"></i></a>
                            <!-- <a href="#"><i class="fa fa-twitter"></i></a> -->
                            <!-- <a href="#"><i class="fa fa-youtube-play"></i></a> -->
                            <a href="https://www.instagram.com/fitnessfirstlk?igsh=MWVoeGNjdDJobGtxOQ=="><i class="fa fa-instagram"></i></a>
                            <a href="fitnessfirstcolombo@gmail.com"><i class="fa  fa-envelope-o"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="fs-widget">
                        <h4>Useful links</h4>
                        <ul>

                            <li><a href="terms&conditions.php">Terms & Condition </a></li>
                            <li><a href="privacyPolicy.php">Privacy Policy </a></li>
                            <li><a href="refundPolicy.php">Refund Policy </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="fs-widget">
                        <h4>Support</h4>
                        <ul>
                            <li><a href="https://fitnessfirst.lk/adminLogin.php">Login</a></li>
                            <!-- <li><a href="#">My account</a></li> -->
                            <!-- <li><a href="#">Subscribe</a></li> -->
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <!-- <div class="col-lg-4 col-md-6">
                    <div class="fs-widget">
                        <h4>Tips & Guides</h4>
                        <div class="fw-recent">
                            <h6><a href="#">Physical fitness may help prevent depression, anxiety</a></h6>
                            <ul>
                                <li>3 min read</li>
                                <li>20 Comment</li>
                            </ul>
                        </div>
                        <div class="fw-recent">
                            <h6><a href="#">Fitness: The best exercise to lose belly fat and tone up...</a></h6>
                            <ul>
                                <li>3 min read</li>
                                <li>20 Comment</li>
                            </ul>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="copyright-text">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | <i class="fa fa-star" aria-hidden="true"></i> by <a href="https://www.linkedin.com/in/sanka-udeshika-6298311bb/" target="_blank">Sanka</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/jquery.barfiller.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/script.js"></script>

</body>

</html>