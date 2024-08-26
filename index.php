<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome| FitnessFirstLk</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="icon" href="resources/Images/LOGO/NewFitnessFirst_LOGO.svg">
    <meta name="keywords" content="FitnessFirstLk,Fitness,First,Lk,Gym">
    <meta name="description" content="Best Fitness centers & gyms in Colombo, Western Province, Sri Lanka. High Octane Fitness, Get U Fit Gym, Ultimate Gym">
</head>

<body style="background-color: black; color:white;">
    <!-- preloader -->
    <div class="col-12 preloader " id="preloader">
        <?php include "preloader.php" ?>
    </div>

    <!-- Header -->
    <div class="col-12 FlexLOGO" style="position: fixed; z-index: 4; ">
        <?php include "header.php" ?>
    </div>
    <span class="Number" style="z-index: -100;">sanka</span>

    <!-- Contaent -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 overflow-x-hidden ">
                <div class="row">
                    <!-- TopImage -->
                    <!-- Large Screen -->
                    <div class="col-12" class="indexTopImageCover FirstDownToUPAnimation">
                        <video autoplay muted loop id="myVideo" class="IndexTopImage">
                            <source src="Resources/Videos/4745810-uhd_3840_2160_25fps (2).mp4" type="video/mp4">
                            Your browser does not support HTML5 video.
                        </video>
                        <!-- <video src="Resources/Videos/4745810-uhd_3840_2160_25fps (1).mp4" autoplay class="IndexTopImage " alt="MainTopImage"></video> -->
                        <img src="Resources/images/LOGO/FitnessFirstTextLogo1.svg" class="FitnesFirstTextLogo" alt="">
                    </div>


                    <!-- ImagesGrid -->
                    <div class="col-12  ">
                        <?php include "AboutHomePage.php" ?>
                    </div>

                    <!-- Thid Section -->

                    <div class="col-12">
                        <div class="row">

                            <div class="col-10 offset-1">
                                <div class="row">
                                    <div class="col-lg-6 col-12 findGymBox" onclick="window.location = '#LocationMap'">
                                        <div class="row">

                                            <div class="col-12 overflow-hidden">
                                                <img src="Resources/images/carouselImages/4.jpeg" class="findGymImage">
                                            </div>

                                            <div class="col-12 text-center mt-5 findGymText">
                                                <p class="GymFOnt" style="font-size: 100px;">FIND A <br><span class="GymFOnt" style="font-size: 160px; color: red;">GYM</span> <br> <span class="GymFOnt" style="font-size: 130px;">Near</span> <br> <span class="GymFOnt" style="font-size: 180px;">YOU</span> </p>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-12 mt-lg-0 mt-4 gymsupliment overflow-overflow-x-hidden overflow-y-hidden ">
                                        <div class="row">
                                            <div class="col-12 overflow-hidden overflow-x-hidden position-relative">
                                                <img src="Resources/images/blogImage/blog7How To Get Fit In The New Year.jpeg" class="SupplimentBOX">
                                                <div class="col-12 supplimentRow ">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="FlexButtonDIV"> <button class="flexShoppingButton" onclick="window.location = 'FlexHome.php'">Flex Shopping</button> </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="supplimentBOXOVERLAY d-flex justify-content-center align-items-center"> Visit our <br> Suppliment <br> Shop </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 mt-4 position-relative overflow-x-hidden overflow-y-hidden overflow-hidden">
                                                <img src="Resources/images/storyboxImage/story4.jpeg" class="BlogBOX">
                                                <div class="col-12 BLOGRow ">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="BLOGBOXOVERLAY d-flex justify-content-center align-items-center"> Discover insights and <br> stories on our blog <br> Dive in here! </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="FlexButtonDIV"> <button class="flexShoppingButton" onclick="window.location = 'blog.php'">BLOGS</button> </div>
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

                    <!-- This Section -->
                    <div class="col-12 mt-5">
                        <div class="row mt-5">
                            <?php
                            include "hoverglitch.php"
                            ?>
                        </div>
                    </div>




                    <div class="col-10 offset-1 mt-5 mb-5">
                        <div class="row">
                            <div class="col-12 mt-5 mb-5 text-center">
                                <span class="ExploreTextWhite">What Your BMI ?</span>
                            </div>
                            <div class="col-12 border border-1 border-white">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <span class="ExploreTextWhite" id="BMIoutput">7.8</span>
                                    </div>
                                    <div class="col-12 text-center">
                                        <span class="fs-3 fw-bold text-white" id="ClassOutput">OBESE CLASS iii (VERY SEVERELY OBESE)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 border-1 border border-white border-top-0">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row">
                                            <!-- Wegiht -->
                                            <div class="col-8 p-5">
                                                <input type="range" class="form-range " onchange="ChangeHeight();" value="50" max="272" id="HeightRangeInput">
                                            </div>
                                            <div class="col-4 text-center">
                                                <span class="ExploreTextWhite2" id="HeightText">Heigth</span>
                                            </div>

                                            <!-- Height -->
                                            <div class="col-8 p-5">
                                                <input type="range" class="form-range " onchange="ChangeWeight();" max="635" value="45" id="WeightRangeInput">
                                            </div>
                                            <div class="col-4 text-center">
                                                <span class="ExploreTextWhite2 " id="WeightText">Weight</span>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-center mt-3 mb-5">
                                <button class="BMICalculateBtn" onclick="CalculateBMI();">Calculate</button>
                            </div>
                        </div>
                    </div>

                    <!-- EventList -->
                    <div class="col-12 position-relative">
                        <div class="row">
                            <div class="EventImage position-relative"></div>
                            <marquee behavior="" direction="left" class="marqueeElement" style="position: absolute; top: 0px;">
                                <div class=""><span class="EventListText">FIGHTNIGHT </span> </div>
                            </marquee>

                            <!-- <marquee behavior="" direction="right" class="marqueeElement" style="position: absolute; top: 100px;">
                                <div class=""><span class="EventListText2">Example1 </span> </div>
                            </marquee> -->
                        </div>
                    </div>


                    <!-- Details Section -->
                    <!-- Details tab -->
                    <div class="ag-offer-block">
                        <div class="ag-format-container">
                            <ul class="ag-offer_list">
                                <li class="ag-offer_item">
                                    <div class="ag-offer_visible-item">
                                        <div class="ag-offer_img-box">
                                            <img src="https://raw.githack.com/SochavaAG/example-mycode/master/pens/1_images/icon-64-1.svg" class="ag-offer_img" alt="" />
                                        </div>
                                        <div class="ag-offer_title">
                                            Evetns
                                        </div>
                                    </div>
                                    <div class="ag-offer_hidden-item">
                                        <p class="ag-offer_text">
                                            "Join us at the gym, where we organize exciting events for our members! Get a membership and be part of our vibrant community—don't miss out on the fun and fitness.""
                                        </p>
                                    </div>
                                </li>
                                <li class="ag-offer_item">
                                    <div class="ag-offer_visible-item">
                                        <div class="ag-offer_img-box">
                                            <img src="https://raw.githack.com/SochavaAG/example-mycode/master/pens/1_images/icon-64-2.svg" class="ag-offer_img" alt="" />
                                        </div>
                                        <div class="ag-offer_title">
                                            Facilities
                                        </div>
                                    </div>
                                    <div class="ag-offer_hidden-item">
                                        <p class="ag-offer_text">
                                            "We offer a range of facilities including a Supplement Shop, Merchandise, Swimming Pool Access, and much more!"
                                        </p>
                                    </div>
                                </li>
                                <li class="ag-offer_item">
                                    <div class="ag-offer_visible-item">
                                        <div class="ag-offer_img-box">
                                            <img src="https://raw.githack.com/SochavaAG/example-mycode/master/pens/1_images/icon-64-3.svg" class="ag-offer_img" alt="" />
                                        </div>
                                        <div class="ag-offer_title">
                                            Gym Trainers
                                        </div>
                                    </div>
                                    <div class="ag-offer_hidden-item">
                                        <p class="ag-offer_text">
                                            "We have highly experienced gym trainers who are dedicated to helping you achieve your fitness goals."
                                        </p>
                                    </div>
                                </li>
                                <li class="ag-offer_item">
                                    <div class="ag-offer_visible-item">
                                        <div class="ag-offer_img-box">
                                            <img src="https://raw.githack.com/SochavaAG/example-mycode/master/pens/1_images/icon-64-4.svg" class="ag-offer_img" alt="" />
                                        </div>
                                        <div class="ag-offer_title">
                                            Equipments
                                        </div>
                                    </div>
                                    <div class="ag-offer_hidden-item">
                                        <p class="ag-offer_text">
                                            "Whatever your fitness needs, we’ve got you covered with our complete range of gym equipment!" </p>
                                    </div>
                                </li>
                                <li class="ag-offer_item">
                                    <div class="ag-offer_visible-item">
                                        <div class="ag-offer_img-box">
                                            <img src="https://raw.githack.com/SochavaAG/example-mycode/master/pens/1_images/icon-64-5.svg" class="ag-offer_img" alt="" />
                                        </div>
                                        <div class="ag-offer_title">
                                            Supplements
                                        </div>
                                    </div>
                                    <div class="ag-offer_hidden-item">
                                        <p class="ag-offer_text">
                                            "We offer premium supplements crafted with the highest quality ingredients to support your health and wellness goals." </p>
                                    </div>
                                </li>
                                <li class="ag-offer_item">
                                    <div class="ag-offer_visible-item">
                                        <div class="ag-offer_img-box">
                                            <img src="https://raw.githack.com/SochavaAG/example-mycode/master/pens/1_images/icon-64-6.svg" class="ag-offer_img" alt="" />
                                        </div>
                                        <div class="ag-offer_title">Loacations</div>
                                    </div>
                                    <div class="ag-offer_hidden-item">
                                        <a href="#LocationMap" class="ag-offer_btn">
                                            View Locations
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>



                    <!-- Join Now Second -->
                    <div class="col-8 offset-2 mt-5 mb-5 rounded-4 DownToUP Fade" style="background-color: #0D0D0D;">
                        <div class="row">
                            <div class="col-7 m-3">
                                <span class="text-white fs-3 d-lg-block d-none"> Enhance user experience with healthy nutrition tips, support resources, and social elements.</span>
                                <span class="text-white fs-4 d-lg-none d-block"> Enhance user experience with healthy nutrition tips, support resources, and social elements.</span>
                            </div>
                            <div class="col-4 d-flex justify-content-end alginitems-center">
                                <div class="row">
                                    <div class="col-6 d-flex align-items-center">
                                        <span class="fw-bold fs-1 text-white"><i class="bi bi-instagram"></i></span>
                                    </div>
                                    <div class="col-6 d-flex align-items-center">
                                        <span class="fw-bold fs-1 text-white"><i class="bi bi-facebook"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Pricing List -->
                    <div class="col-12 mt-5 mb-5 " id="price">
                        <div class="row">
                            <div class="col-12 text-center">
                                <span class="text-primary fs-4 Fade">Pricing</span>
                            </div>
                            <div class="col-12 text-center">
                                <span class="ExploreTextWhite Fade DownToUP ">Our List Packages</span>
                            </div>
                            <!-- Switch -->
                            <div class="col-12 mb-5">
                                <div class="row">
                                    <div class="col-lg-4 offset-lg-4 col-10 offset-1 PricingSwitchWhite Fade">
                                        <div class="row">
                                            <!-- Gents Package -->
                                            <div class="col-6 d-flex justify-content-center">
                                                <div class="col-10 offset-1  text-center rounded-4 Gentsactive p-3 m-3 Fade" id="GentsBtn" onclick="TrunGentsPackeage();" style="animation-delay: 1s;">
                                                    <span class=" fw-bold fs-4 Fade  " style="animation-delay: 2s;"> Gents Package</span>
                                                </div>
                                            </div>
                                            <!-- Ladies Package -->
                                            <div class="col-6 d-flex justify-content-center">
                                                <div class="col-10 offset-1  text-center rounded-4 p-3 m-3 Ladies" id="LadiesBtn" onclick="TrunLadiesPackeage();">
                                                    <span class=" fw-bold fs-4  Fade " style="animation-delay: 2s;"> Ladies Package</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>




                            <!-- Pricing Cards -->
                            <div class="col-12   mt-5">
                                <div class="row d-flex justify-content-center">
                                    <!-- Ja ela -->
                                    <div class="col-lg-2 col-8 offset-lg-0  rounded-4 mt-5 Fade " style="background-color: #0D0D0D;">
                                        <div class="row p-1">
                                            <div class="col-10 offset-1">
                                                <div class="row">
                                                    <div class="col-12 mt-5">
                                                        <span class="fs-4 fw-bold" style="color: white;">Ja Ela</span>
                                                    </div>
                                                    <div class="col-12">
                                                        <span class=" text-white " style="font-size: 25px;" id="JaelaPrice">Rs.60,000</span>
                                                    </div>
                                                    <div class="col-12">
                                                        <span class=" text-white-50 fs-4 ">Annual</span>
                                                    </div>
                                                    <div class="col-12 mt-5 mb-5">
                                                        <div class="row">
                                                            <div class="col-12 mt-1 mb-1">
                                                                <span class="PriceListTickIcon"><i class="bi bi-check-lg"></i></span> &nbsp; <span class="text-white fs-5">Unlimited Gym Access</span></li>
                                                            </div>
                                                            <div class="col-12 mt-1 mb-1">
                                                                <span class="PriceListTickIcon"><i class="bi bi-check-lg"></i></span> &nbsp; <span class="text-white fs-5">Free Meal Plan</span></li>
                                                            </div>
                                                            <div class="col-12 mt-1 mb-1">
                                                                <span class="PriceListTickIcon"><i class="bi bi-check-lg"></i></span> &nbsp; <span class="text-white fs-5">Free Workout Schedule</span></li>
                                                            </div>
                                                            <div class="col-12 mt-1 mb-1">
                                                                <span class="PriceListTickIcon"><i class="bi bi-check-lg"></i></span> &nbsp; <span class="text-white fs-5">Free Sport Therapy</span></li>
                                                            </div>
                                                            <div class="col-12 mt-1 mb-1">
                                                                <span class="PriceListTickIcon"><i class="bi bi-check-lg"></i></span> &nbsp; <span class="text-white fs-5">Flexx Supplement Offers</span></li>
                                                            </div>
                                                            <div class="col-12 mt-1 mb-1">
                                                                <span class="PriceListTickIcon"><i class="bi bi-check-lg"></i></span> &nbsp; <span class="text-white fs-5">Ample Parking</span></li>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 PricingListBtn text-center rounded-3 mb-5 pt-3 pb-3 ">
                                                        <span class="text-white fs-3">Buy Now</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- Colombo 7 -->
                                    <div class="col-lg-2 col-8 offset-lg-0 offset-4 mt-lg-0 mt-5 rounded-4 mx-5 Fade" style="background-color: #ff0000; overflow: hidden; animation-delay: 3s;">
                                        <div class="row p-1">
                                            <div class="col-10 offset-1" style="position: relative; ">
                                                <div class="row">

                                                    <div class="col-12 mt-5 ">
                                                        <span class="fs-4 fw-bold" style="color: white;">Colombo 7 </span>
                                                    </div>
                                                    <div class="col-12">
                                                        <span class=" text-white " style="font-size: 30px;" id="colombo-7Price">RS.105,000</span>
                                                    </div>
                                                    <div class="col-12">
                                                        <span class=" text-white fs-4 ">Annual</span>
                                                    </div>
                                                    <div class="col-12 mt-5 mb-5">
                                                        <div class="row">
                                                            <div class="col-12 mt-1 mb-1">
                                                                <span class="PriceListTickIcon"><i class="bi bi-check-lg"></i></span> &nbsp; <span class="text-white fs-5">Unlimited Gym Access</span></li>
                                                            </div>
                                                            <div class="col-12 mt-1 mb-1">
                                                                <span class="PriceListTickIcon"><i class="bi bi-check-lg"></i></span> &nbsp; <span class="text-white fs-5">Access To All Branches</span></li>
                                                            </div>

                                                            <div class="col-12 mt-1 mb-1">
                                                                <span class="PriceListTickIcon"><i class="bi bi-check-lg"></i></span> &nbsp; <span class="text-white fs-5">Free Meal Plan</span></li>
                                                            </div>
                                                            <div class="col-12 mt-1 mb-1">
                                                                <span class="PriceListTickIcon"><i class="bi bi-check-lg"></i></span> &nbsp; <span class="text-white fs-5">Free Workout Schedule</span></li>
                                                            </div>
                                                            <div class="col-12 mt-1 mb-1">
                                                                <span class="PriceListTickIcon"><i class="bi bi-check-lg"></i></span> &nbsp; <span class="text-white fs-5">Free Sport Therapy</span></li>
                                                            </div>
                                                            <div class="col-12 mt-1 mb-1">
                                                                <span class="PriceListTickIcon"><i class="bi bi-check-lg"></i></span> &nbsp; <span class="text-white fs-5">Flexx Supplement Offers</span></li>
                                                            </div>
                                                            <div class="col-12 mt-1 mb-1">
                                                                <span class="PriceListTickIcon"><i class="bi bi-check-lg"></i></span> &nbsp; <span class="text-white fs-5">Boost Cafe</span></li>
                                                            </div>
                                                            <div class="col-12 mt-1 mb-1">
                                                                <span class="PriceListTickIcon"><i class="bi bi-check-lg"></i></span> &nbsp; <span class="text-white fs-5">Ample Parking</span></li>
                                                            </div>
                                                            <div class="col-12 mt-1 mb-1">
                                                                <span class="PriceListTickIcon"><i class="bi bi-check-lg"></i></span> &nbsp; <span class="text-white fs-5">Pool, sauna & steam Room</span></li>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 minPricingListBtn text-center rounded-3 mb-5 mt-0 pt-3 pb-3 ">
                                                        <span class="text-white fs-3">Buy Now</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- WTC -->
                                    <div class="col-lg-2 col-8 offset-lg-0 offset-0 rounded-4 mt-5 Fade " style="background-color: #0D0D0D;">
                                        <div class="row p-1">
                                            <div class="col-10 offset-1">
                                                <div class="row">
                                                    <div class="col-12 mt-5">
                                                        <span class="fs-4 fw-bold" style="color: white;">WTC</span>
                                                    </div>
                                                    <div class="col-12">
                                                        <span class=" text-white " style="font-size: 25px;" id="WTCPrice">Rs.75,000</span>
                                                    </div>
                                                    <div class="col-12">
                                                        <span class=" text-white-50 fs-4 ">Annual</span>
                                                    </div>
                                                    <div class="col-12 mt-5 mb-5">
                                                        <div class="row">
                                                            <div class="col-12 mt-1 mb-1">
                                                                <span class="PriceListTickIcon"><i class="bi bi-check-lg"></i></span> &nbsp; <span class="text-white fs-5">Unlimited Gym Access</span></li>
                                                            </div>
                                                            <div class="col-12 mt-1 mb-1">
                                                                <span class="PriceListTickIcon"><i class="bi bi-check-lg"></i></span> &nbsp; <span class="text-white fs-5">Free Meal Plan</span></li>
                                                            </div>
                                                            <div class="col-12 mt-1 mb-1">
                                                                <span class="PriceListTickIcon"><i class="bi bi-check-lg"></i></span> &nbsp; <span class="text-white fs-5">Free Workout Schedule</span></li>
                                                            </div>
                                                            <div class="col-12 mt-1 mb-1">
                                                                <span class="PriceListTickIcon"><i class="bi bi-check-lg"></i></span> &nbsp; <span class="text-white fs-5">Free Sport Therapy</span></li>
                                                            </div>
                                                            <div class="col-12 mt-1 mb-1">
                                                                <span class="PriceListTickIcon"><i class="bi bi-check-lg"></i></span> &nbsp; <span class="text-white fs-5">Flexx Supplement Offers</span></li>
                                                            </div>
                                                            <div class="col-12 mt-1 mb-1">
                                                                <span class="PriceListTickIcon"><i class="bi bi-check-lg"></i></span> &nbsp; <span class="text-white fs-5">Ample Parking</span></li>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 PricingListBtn text-center rounded-3 mb-5 pt-3 pb-3 ">
                                                        <span class="text-white fs-3">Buy Now</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Moors Club -->
                                    <div class="col-lg-2 col-8 offset-lg-0 offset-4 rounded-4 mx-5 mt-5 Fade " style="background-color: #0D0D0D;">
                                        <div class="row p-1">
                                            <div class="col-10 offset-1">
                                                <div class="row">
                                                    <div class="col-12 mt-5">
                                                        <span class="fs-4 fw-bold" style="color: white;">Moors Club</span>
                                                    </div>
                                                    <div class="col-12">
                                                        <span class=" text-white " style="font-size: 25px;">Rs.xxxxx</span>
                                                    </div>
                                                    <div class="col-12">
                                                        <span class=" text-white-50 fs-4 ">Annual</span>
                                                    </div>
                                                    <div class="col-12 mt-5 mb-5">
                                                        <div class="row">
                                                            <div class="col-12 mt-1 mb-1">
                                                                <span class="PriceListTickIcon"><i class="bi bi-check-lg"></i></span> &nbsp; <span class="text-white fs-5">Unlimited Gym Access</span></li>
                                                            </div>
                                                            <div class="col-12 mt-1 mb-1">
                                                                <span class="PriceListTickIcon"><i class="bi bi-check-lg"></i></span> &nbsp; <span class="text-white fs-5">Ladies & Unisex Gym</span></li>
                                                            </div>
                                                            <div class="col-12 mt-1 mb-1">
                                                                <span class="PriceListTickIcon"><i class="bi bi-check-lg"></i></span> &nbsp; <span class="text-white fs-5">Free Meal Plan</span></li>
                                                            </div>
                                                            <div class="col-12 mt-1 mb-1">
                                                                <span class="PriceListTickIcon"><i class="bi bi-check-lg"></i></span> &nbsp; <span class="text-white fs-5">Free Workout Schedule</span></li>
                                                            </div>
                                                            <div class="col-12 mt-1 mb-1">
                                                                <span class="PriceListTickIcon"><i class="bi bi-check-lg"></i></span> &nbsp; <span class="text-white fs-5">Free Sport Therapy</span></li>
                                                            </div>
                                                            <div class="col-12 mt-1 mb-1">
                                                                <span class="PriceListTickIcon"><i class="bi bi-check-lg"></i></span> &nbsp; <span class="text-white fs-5">Flexx Supplement Offers</span></li>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 PricingListBtn text-center rounded-3 mb-5 pt-3 pb-3 ">
                                                        <span class="text-white fs-3">Buy Now</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- CUstomer Comments  -->
                    <div class="col-12 mt-5">
                        <div class="row">
                            <div class="col-10 offset-1">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <div class="row">
                                            <div class="col-12 mb-5">
                                                <span class="ExploreTextWhite Fade ">What Our Member Say About Us?</span>
                                            </div>
                                            <div class="col-12 mt-5">
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <img src="Resources/images/ProfileImage/Profile.svg" class="mt-5" width="36" height="auto" alt="">
                                                        <img src="Resources/images/ProfileImage/Profile.svg" class="mt-5" width="36" height="auto" alt="">
                                                        <img src="Resources/images/ProfileImage/Profile.svg" class="mt-5" width="36" height="auto" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <span class="text-white-50 fs-4">10K + Satisfied Customer</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12 p-5 rounded-5" style="background-color:#0D0D0D ;">
                                        <div class="row">
                                            <div class="col-10 mt-5 mb-5 offset-1 d-flex justify-content-end">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <span class="text-warning fs-3 Fade" style="animation-delay: 1s;"><i class="bi bi-star-fill"></i></span>
                                                    </div>
                                                    <div class="col-2">
                                                        <span class="text-warning fs-3 Fade" style="animation-delay: 3s;"><i class="bi bi-star-fill"></i></span>
                                                    </div>
                                                    <div class="col-2">
                                                        <span class="text-warning fs-3 Fade" style="animation-delay: 6s;"><i class="bi bi-star-fill"></i></span>
                                                    </div>
                                                    <div class="col-2">
                                                        <span class="text-warning fs-3 Fade" style="animation-delay: 9s ;"><i class="bi bi-star-fill"></i></span>
                                                    </div>
                                                    <div class="col-2">
                                                        <span class="text-warning fs-3 Fade" style="animation-delay: 12s;"><i class="bi bi-star-fill"></i></span>
                                                    </div>
                                                    <div class="col-2">
                                                        <span class="text-warning fs-3 Fade " style="animation-delay: 15s;"><i class="bi bi-star-fill"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-10 mb-5 offset-1 text-end">
                                                <p class="fs-4 Fade"> “ Join this fitness member, the best choice that I’ve. They’re very professional and give you suggestion about what food and nutrition that you can eat” </p>
                                            </div>
                                            <div class="col-10 mt-5 offset-1 Fade" style="animation-delay: 2s;">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <img src="Resources/images/ProfileImage/Profile.svg" class="mt-5" width="100%" height="55" alt="">
                                                    </div>
                                                    <div class="col-6 d-flex mt-5 align-items-center">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <span class="fs-3 text-white" id="LocationMap">Jonathan Edward</span>
                                                            </div>
                                                            <div class="col-12">
                                                                <span class="fs-4 text-white-50">Office Worker</span>
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

                    <!-- FITNESSFIRST LOCATION -->

                    <div class="col-12 mt-5">
                        <div class="row mt-5">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-lg-3 col-4 text-center">
                                        <span class="GymLocationText" onclick="showGoogleLocation('colombo');">colombo7</span>
                                    </div>
                                    <div class="col-lg-3 col-4 text-center">
                                        <span class="GymLocationText" onclick="showGoogleLocation('jaela');">Ja Ela </span>
                                    </div>
                                    <div class="col-lg-3 col-4 text-center">
                                        <span class="GymLocationText" onclick="showGoogleLocation('wtc');"> WTC </span>
                                    </div>
                                    <div class="col-lg-3 col-12 text-center">
                                        <span class="GymLocationText" onclick="showGoogleLocation('wtc');"> Moors Club </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <iframe style="transition: 0.5s ease-in-out;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31686.815227955212!2d79.82922301083981!3d6.9083058999999984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2597a85531ecb%3A0xd24f023f2b2a2bd5!2sFitness%20First%20-%20Colombo%207!5e0!3m2!1sen!2slk!4v1723187781024!5m2!1sen!2slk" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="GoogleMap"></iframe>
                            </div>
                        </div>
                    </div>



                    <!-- Subscribe Section -->
                    <div class="col-12 mt-5 mb-5 Fade DownToUP">
                        <div class="row ">
                            <div class="col-lg-10 col-12 p-5 border border-1 border-white rounded-5 offset-lg-1 offset-0">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <span class=" IndexSubscribeText ">Subscribe our fitness tips</span>
                                    </div>
                                    <div class="col-8 offset-2 text-center">
                                        <span class="fs-5">Clearly communicate the benefits of subscribing, such as exclusive content and breaking news.</span>
                                    </div>

                                    <div class="col-12 mt-5 d-flex justify-content-center">
                                        <div class="row">
                                            <div class="col-12  bg-white rounded-5">
                                                <div class="row">
                                                    <div class="col-8 d-grid">
                                                        <input type="text" placeholder="Enter Your Email address" class="SubscribeInput">
                                                    </div>
                                                    <div class="col-4 mt-3  mb-3  d-flex justify-content-center  ">
                                                        <button class="text-white border-0 fs-4 rounded-4" style="background-color: red; padding-left: 5px; padding-right: 5px; margin-right: 10px;"> Subscribe</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- footer -->
                    <div class="col-12 mt-5">
                        <div class="row">
                            <?php include "footer.php" ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <script src="js/script.js"></script>
</body>

</html>