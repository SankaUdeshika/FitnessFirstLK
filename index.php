<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | fitness</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>

    <!-- preloader -->
    <div class="col-12 preloader " id="preloader">
        <?php include "preloader.php" ?>
    </div>


    <!-- Header -->
    <div class="col-12">
        <?php include "header.php" ?>
    </div>


    <div class="container-fluid">
        <div class="row">
            <!-- Virtual Tour and Bmi Calculator -->
            <div class="col-12 VirtualBMIROw">
                <div class="row ">

                    <div class="col-6 TourSection text-center ">
                        <span class="TourText">Virtual Tour</span>
                    </div>

                    <div class="col-6 BMISection text-center ">
                        <span class="TourText">Virtual Tour</span>
                    </div>

                </div>
            </div>


            <!-- About Part -->
            <div class="col-12 bg-black">
                <div class="row">
                    <!-- ABout Image -->
                    <div class="col-6 AboutImageCover mt-5">
                        <img src="Resources/images/gym01.jpeg" class="aboutImage" alt="">
                    </div>

                    <!-- ABout Text -->
                    <div class="col-6 mt-5">
                        <div class="row">
                            <div class="col-12 fs-1 mt-5">
                                <span class="aboutTopicRed">ABOUT FITNESS </span> <span class="aboutTopicwhite"> FIRST LK</span>
                            </div>

                            <div class="col-12 mt-3">
                                <p class="aboutPara">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labour සහ dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                            </div>

                            <!-- list -->
                            <div class="col-12 mt-3">
                                <ul>
                                    <li class="mb-3"><span class=" border border-3 border-danger bg-danger p-0 text-black rounded-5 fs-5 fw-bold"><i class="bi bi-chevron-right"></i></span> &nbsp; <span class="text-white fw-bold"> 10,000+ Happy Clients</span></li>
                                    <li class="mb-3"><span class=" border border-3 border-danger bg-danger p-0 text-black rounded-5 fs-5 fw-bold"><i class="bi bi-chevron-right"></i></span> &nbsp;<span class="text-white fw-bold"> 12+ Years of Experience</span></li>
                                    <li class="mb-3"><span class=" border border-3 border-danger bg-danger p-0 text-black rounded-5 fs-5 fw-bold"><i class="bi bi-chevron-right"></i></span> &nbsp;<span class="text-white fw-bold"> 30+ Certified Trainers</span></li>
                                </ul>
                            </div>

                        </div>
                    </div>




                </div>
            </div>

            <!-- why FITNESS FIRST LK Part -->
            <div class="col-12 bg-black">
                <div class="row">

                    <div class="col-12 mt-5 text-center">
                        <span class="aboutTopicwhite fs-1">WHY FITNESS</span> &nbsp;; <span class="aboutTopicRed fs-1 "> FIRST LK ?</span>
                    </div>

                    <div class="col-12 mt-2 mb-5">
                        <div class="row">
                            <!-- 1 -->
                            <div class="col-4 WhyPart">
                                <div class="row ">
                                    <div class="col-12">
                                        <img src="Resources/images/gym01.jpeg" class="whyImage" alt="">
                                    </div>
                                    <div class="col-12 text-center">
                                        <span class="whyText fs-1">PERSONAL TRAINING</span>
                                    </div>
                                </div>
                            </div>

                            <!-- 2 -->
                            <div class="col-4 WhyPart">
                                <div class="row ">
                                    <div class="col-12">
                                        <img src="Resources/images/gym02.jpeg" class="whyImage" alt="">
                                    </div>
                                    <div class="col-12 text-center">
                                        <span class="whyText fs-1">VARIETY OF CLASSES</span>
                                    </div>
                                </div>
                            </div>

                            <!-- 3 -->
                            <div class="col-4 WhyPart">
                                <div class="row ">
                                    <div class="col-12">
                                        <img src="Resources/images/gym03.jpeg" class="whyImage" alt="">
                                    </div>
                                    <div class="col-12 text-center">
                                        <span class="whyText fs-1">PRIME &nbsp; &nbsp; LOCATIONS</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <!-- TRUSTED BY COPORATES -->
            <div class="col-12 bg-black">
                <div class="row">

                    <div class="col-12 text-center mt-5">
                        <span class="aboutTopicwhite fs-1">COPORATES</span> &nbsp; <span class="aboutTopicRed fs-1">TRUSTED BY </span>
                    </div>

                  
                        <div class="col-12 mt-5 d-flex justify-content-center">
                            <div class="row">
                                <div class="col-3">
                                    <img src="Resources/images/LOGO/FedExLogo.png" style="width: 100%;" alt="">
                                </div>
                                <div class="col-3">
                                    <img src="Resources/images/LOGO/FedExLogo.png" style="width: 100%;" alt="">
                                </div>
                                <div class="col-3">
                                    <img src="Resources/images/LOGO/FedExLogo.png" style="width: 100%;" alt="">
                                </div>
                                <div class="col-3">
                                    <img src="Resources/images/LOGO/FedExLogo.png" style="width: 100%;" alt="">
                                </div>
                            </div>
                        </div>
                

                    <div class="col-12 d-flex justify-content-center  mb-5 mt-5">
                        <button class="QuoteBtn">Request for a Quote</button>
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