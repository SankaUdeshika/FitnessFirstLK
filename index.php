<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome| FitnessFirstLk</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="icon" href="resources/Images/blacklogo.jfif">
    <meta name="keywords" content="FitnessFirstLk,Fitness,First,Lk,Gym">
    <meta name="description" content="Best Fitness centers & gyms in Colombo, Western Province, Sri Lanka. High Octane Fitness, Get U Fit Gym, Ultimate Gym">
</head>

<body style="background-color: black; color:white;">
    <!-- preloader -->
    <div class="col-12 preloader " id="preloader">
        <?php include "preloader.php" ?>
    </div>

    <!-- Header -->
    <div class="col-12" style="position: fixed; z-index: 4;">
        <?php include "header.php" ?>
    </div>
    <!-- Contaent -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 overflow-x-hidden ">
                <div class="row">
                    <!-- TopImage -->
                    <!-- Large Screen -->
                    <div class="col-12" class="indexTopImageCover FirstDownToUPAnimation">
                        <img src="Resources/images/carouselImages/FFLOGO 2.png" class="IndexTopImage " alt="MainTopImage">
                        <img src="Resources/images/LOGO/FitnessFirstTextLogo.svg" class="FitnesFirstTextLogo" alt="">
                        <div class="col-10 offset-1 TrustedByIcons">
                            <div class="row">
                                <div class="col-12">
                                    <span class="TrustedText">Trusted By</span>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12">
                                            <img src="Resources/images/LOGO/BrandRow.png" style="width: 100%; height: auto;" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Explore Our Program -->
                    <div class="col-10 offset-1 mt-5 mb-lg-5 mb-0">
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-9 ">
                                        <h1 class="ExploreTextWhite FirstFadeUp mt-lg-0 mt-5" id="outtext"> Our Program</h1>
                                    </div>

                                    <div class="col-12  mt-5">
                                        <div class="row">
                                            <div class="col-3  d-flex justify-content-center  text-center">
                                                <button class="PrgrammeCategories">Cardio Strength</bu>
                                            </div>

                                            <div class="col-3  d-flex justify-content-center  text-center">
                                                <button class="PrgrammeCategories">&nbsp;&nbsp;&nbsp;&nbsp; Fat Loss &nbsp;&nbsp;&nbsp;&nbsp;</bu>
                                            </div>

                                            <div class="col-3  d-flex justify-content-center  text-center">
                                                <button class="PrgrammeCategories">Pre & Pose Natel</bu>
                                            </div>

                                            <div class="col-3  d-flex justify-content-center  text-center">
                                                <button class="PrgrammeCategories">Elderly Training</bu>
                                            </div>


                                        </div>
                                    </div>


                                </div>
                            </div>
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
                                            <div class="col-7">
                                                <input type="range" class="form-range " onchange="ChangeHeight();" value="50" max="272" id="HeightRangeInput">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-9 col-8 ">
                                        <div class="row">
                                            <div class="col-10 offset-1 p-5 ">
                                            </div>
                                            <div class="col-10 offset-1 p-5 ">
                                                <input type="range" class="form-range " onchange="ChangeWeight();" max="635" value="45" id="WeightRangeInput">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-4">
                                        <div class="row">
                                            <div class="col-10 offset-1 p-3  ">
                                            </div>
                                            <div class="col-10 offset-1 p-3 ">
                                                <span class="ExploreTextWhite2" id="WeightText">Weight</span>
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

                    <!-- Join Now Second -->
                    <div class="col-10 offset-1 mt-5 mb-5 rounded-4 DownToUP Fade" style="background-color: #0D0D0D;">
                        <div class="row">
                            <div class="col-7 m-3">
                                <span class="text-white fs-1"> Enhance user experience with healthy nutrition tips, support resources, and social elements.</span>
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
                                                <div class="col-10 offset-1 bg-black text-center rounded-4 p-3 m-3 Fade" style="animation-delay: 1s;">
                                                    <span class="text-white-50 fw-bold fs-4 Fade " style="animation-delay: 2s;"> Gents Package</span>
                                                </div>
                                            </div>
                                            <!-- Ladies Package -->
                                            <div class="col-6 d-flex justify-content-center">
                                                <div class="col-10 offset-1  text-center rounded-4 p-3 m-3">
                                                    <span class="text-black-50 fw-bold fs-4  Fade " style="animation-delay: 2s;"> Ladies Package</span>
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
                                    <div class="col-lg-2 col-8 offset-lg-0 offset-4 rounded-4 mt-5 Fade " style="background-color: #0D0D0D;">
                                        <div class="row p-1">
                                            <div class="col-10 offset-1">
                                                <div class="row">
                                                    <div class="col-12 mt-5">
                                                        <span class="fs-4 fw-bold" style="color: white;">Ja Ela</span>
                                                    </div>
                                                    <div class="col-12">
                                                        <span class=" text-white " style="font-size: 25px;">Rs.60,000</span>
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
                                    <div class="col-lg-2 col-8 offset-lg-0 offset-4 mt-lg-0 mt-5 rounded-4 mx-5 Fade" style="background-color: #786F6A; overflow: hidden; animation-delay: 3s;">
                                        <div class="row p-1">
                                            <div class="col-10 offset-1" style="position: relative; ">
                                                <div class="row">

                                                    <div class="col-12 mt-5 ">
                                                        <span class="fs-4 fw-bold" style="color: white;">Colombo 7 </span>
                                                    </div>
                                                    <div class="col-12">
                                                        <span class=" text-white " style="font-size: 30px;">RS.105,000</span>
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
                                    <div class="col-lg-2 col-8 offset-lg-0 offset-4 rounded-4 mt-5 Fade " style="background-color: #0D0D0D;">
                                        <div class="row p-1">
                                            <div class="col-10 offset-1">
                                                <div class="row">
                                                    <div class="col-12 mt-5">
                                                        <span class="fs-4 fw-bold" style="color: white;">WT</span>
                                                    </div>
                                                    <div class="col-12">
                                                        <span class=" text-white " style="font-size: 25px;">Rs.75,000</span>
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
                                                                <span class="fs-3 text-white">Jonathan Edward</span>
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

                    <!-- Subscribe Section -->
                    <div class="col-12 mt-5 mb-5 Fade DownToUP">
                        <div class="row ">
                            <div class="col-lg-10 col-12 p-5 border border-1 border-white rounded-5 offset-lg-1 offset-0">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <span class=" IndexSubscribeText ">Subscribe out fitness tips</span>
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