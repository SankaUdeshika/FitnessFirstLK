<?php
require "Connections/connection.php";
?>

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
</head>

<body>
    <!-- Page Preloder -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

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
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-youtube-play"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
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

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2>Our Team</h2>
                        <div class="bt-option">
                            <a href="./index.php">Home</a>
                            <span>Our team</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Team Section Begin -->
    <section class="team-section team-page spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="team-title">
                        <div class="section-title">
                            <span>Our Team</span>
                            <h2>Higher Managment</h2>
                        </div>
                        <!-- <a href="#" class="primary-btn btn-normal appoinment-btn">appointment</a> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                $trainer_rs =  Database::search("SELECT * FROM `trainers` WHERE `position` = 'HIGHER MANAGEMENT' ");
                $trainer_num  = $trainer_rs->num_rows;

                for ($x = 0; $x < $trainer_num; $x++) {
                    $trainer_data = $trainer_rs->fetch_assoc();
                ?>
                    <div class="col-lg-4 col-sm-6">
                        <div class="ts-item set-bg" data-setbg="<?PHP echo $trainer_data["image"] ?>">
                            <div class="ts_text">
                                <h4><?PHP echo $trainer_data["name"] ?></h4>
                                <span><?PHP echo $trainer_data["position"] ?></span>
                                <div class="tt_social">
                                    <a href="<?PHP echo $trainer_data["facebook"] ?>"><i class="fa fa-facebook"></i></a>
                                    <a href="<?PHP echo $trainer_data["instagram"] ?>"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="team-title">
                        <div class="section-title">
                            <span>Our Team</span>
                            <h2>Front Office</h2>
                        </div>
                        <!-- <a href="#" class="primary-btn btn-normal appoinment-btn">appointment</a> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                $trainer_rs =  Database::search("SELECT * FROM `trainers` WHERE `position` = 'FRONT OFFICE' ");
                $trainer_num  = $trainer_rs->num_rows;

                for ($x = 0; $x < $trainer_num; $x++) {
                    $trainer_data = $trainer_rs->fetch_assoc();
                ?>
                    <div class="col-lg-4 col-sm-6">
                        <div class="ts-item set-bg" data-setbg="<?PHP echo $trainer_data["image"] ?>">
                            <div class="ts_text">
                                <h4><?PHP echo $trainer_data["name"] ?></h4>
                                <span><?PHP echo $trainer_data["position"] ?></span>
                                <div class="tt_social">
                                    <a href="<?PHP echo $trainer_data["facebook"] ?>"><i class="fa fa-facebook"></i></a>
                                    <a href="<?PHP echo $trainer_data["instagram"] ?>"><i class="fa fa-instagram"></i></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="team-title">
                            <div class="section-title">
                                <span>Our Team</span>
                                <h2>Gym Trainer</h2>
                            </div>
                            <!-- <a href="#" class="primary-btn btn-normal appoinment-btn">appointment</a> -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                    $trainer_rs =  Database::search("SELECT * FROM `trainers` WHERE `position` = 'GYM TRAINER' ");
                    $trainer_num  = $trainer_rs->num_rows;

                    for ($x = 0; $x < $trainer_num; $x++) {
                        $trainer_data = $trainer_rs->fetch_assoc();
                    ?>
                        <div class="col-lg-4 col-sm-6">
                            <div class="ts-item set-bg" data-setbg="<?PHP echo $trainer_data["image"] ?>">
                                <div class="ts_text">
                                    <h4><?PHP echo $trainer_data["name"] ?></h4>
                                    <span><?PHP echo $trainer_data["position"] ?></span>
                                    <div class="tt_social">
                                        <a href="<?PHP echo $trainer_data["facebook"]?>"><i class="fa fa-facebook"></i></a>
                                        <a href="<?PHP echo $trainer_data["instagram"]?>"><i class="fa fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>

                </div>
            </div>
        </div>
    </section>

    <!-- Team Section End -->

    <!-- Get In Touch Section Begin -->
    <div class="gettouch-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mt-1">
                    <div class="gt-text">
                        <i class="fa fa-map-marker"></i>
                        <p class="mt-3">Colombo 7, Maitland Crescent<br /> Colombo 2, Moors Sports Club <br />Colombo 2, World Trade Center </br> Ja-ela </p>
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
                            <li><a href="#">Contact</a></li>
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


</body>

</html>