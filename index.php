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
    <div class="col-12" style="position: fixed;">
        <?php include "header.php" ?>
    </div>

    <!-- caorusel -->
    <div class="col-12">
        <?php include "carousel.php" ?>
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
                        <span class="TourText" onclick="ShowBmiCalcutorModel();">Check Your BMI</span>
                    </div>

                </div>
            </div>





            <!-- About Part -->
            <div class="col-12 bg-black overflow-hidden">
                <div class="row">
                    <!-- ABout Image -->
                    <div class="col-lg-6 col-12 AboutImageCover Fade mt-5">
                        <img src="Resources/images/gym01.jpeg" class="aboutImage" alt="">
                    </div>

                    <!-- ABout Text -->
                    <div class="col-lg-6 col-12 mt-5">
                        <div class="row">
                            <div class="col-12 fs-1 mt-5 UPToDown Fade  ">
                                <span class=" aboutTopicwhite  ">ABOUT FITNESS </span> <span class=" aboutTopicRed "> FIRST LK</span>
                            </div>

                            <div class="col-12 mt-3 Fade DownToUP ">
                                <p class="aboutPara">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labour සහ dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                            </div>

                            <!-- list -->
                            <div class="col-12 mt-3">
                                <ul>
                                    <li class="mb-3 RightToLeft Fade"><span class=" border border-3 border-danger bg-danger p-0 text-black rounded-5 fs-5 fw-bold "><i class="bi bi-chevron-right"></i></span> &nbsp; <span class="text-white fw-bold"> 10,000+ Happy Clients</span></li>
                                    <li class="mb-3 RightToLeft Fade" style="transition-delay: 0.3s;"><span class=" border border-3 border-danger bg-danger p-0 text-black rounded-5 fs-5 fw-bold "><i class="bi bi-chevron-right"></i></span> &nbsp;<span class="text-white fw-bold"> 12+ Years of Experience</span></li>
                                    <li class="mb-3 RightToLeft Fade" style="transition-delay:0.4s;"><span class=" border border-3 border-danger bg-danger p-0 text-black rounded-5 fs-5 fw-bold "><i class="bi bi-chevron-right"></i></span> &nbsp;<span class="text-white fw-bold"> 30+ Certified Trainers</span></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- why FITNESS FIRST LK Part -->
            <div class="col-12 bg-black overflow-hidden">
                <div class="row">

                    <div class="col-12 mt-5 text-center Fade">
                        <span class="aboutTopicwhite fs-1">WHY FITNESS</span> &nbsp;; <span class="aboutTopicRed fs-1 "> FIRST LK ?</span>
                    </div>

                    <div class="col-12 mt-2 mb-5  ">
                        <div class="row">
                            <!-- 1 -->
                            <div class="col-lg-4  col-12 WhyPart Fade LeftToRight ">
                                <div class="row ">
                                    <div class="col-12">
                                        <img src="Resources/images/gym01.jpeg" class="whyImage" alt="">
                                    </div>
                                    <div class="col-12 text-center">
                                        <span class="whyText fs-1">PERSONAL </br> TRAINING</span>
                                    </div>
                                </div>
                            </div>

                            <!-- 2 -->
                            <div class="col-lg-4 col-12 WhyPart Fade">
                                <div class="row ">
                                    <div class="col-12">
                                        <img src="Resources/images/gym02.jpeg" class="whyImage" alt="">
                                    </div>
                                    <div class="col-12 text-center">
                                        <span class="whyText fs-1">VARIETY </br>  OF CLASSES</span>
                                    </div>
                                </div>
                            </div>

                            <!-- 3 -->
                            <div class="col-lg-4 col-12 WhyPart RightToLeft ">
                                <div class="row ">
                                    <div class="col-12">
                                        <img src="Resources/images/gym03.jpeg" class="whyImage" alt="">
                                    </div>
                                    <div class="col-12 ">
                                        <span class="whyText fs-1">PRIME </br>  LOCATIONS</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="col-12 bg-black">
                <div class="row">

                    <div class="col-12 text-center mb-5 Fade">
                        <span class="fs-1  text-white">SUCCESS STORIES</span>
                    </div>

                    <div class="col-1 d-flex justify-content-center align-items-center">
                        <img src="Resources/images/icons/leftbtn.png" class="LRbtn" onclick="CarouselLeft();">
                    </div>

                    <div class="col-10 Fade ">
                        <div class="box11 ">
                            <div class="col-lg-5 col-12 StoriesCarosuelSlider mb-5" id="firstBox">
                                <div class="row">

                                    <div class="col-12">
                                        <img src="Resources/images/gym01.jpeg" class="StorieProfileImg ">
                                    </div>

                                    <div class="col-12 text-center ">
                                        <p class="storiePara fw-bold">Lorem Upsun us simply dummy text of the printing and typesetting industry.Lorem Upsun us simply dummy text of the printing and typesetting industry.</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-5 offset-2 StoriesCarosuelSlider mb-5">
                                <div class="row">

                                    <div class="git pcol-12  ">
                                        <img src="Resources/images/gym01.jpeg" class="StorieProfileImg ">
                                    </div>

                                    <div class="col-12 text-center ">
                                        <p class="storiePara fw-bold">Lorem Upsun us simply dummy text of the printing and typesetting industry.Lorem Upsun us simply dummy text of the printing and typesetting industry.</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-5 offset-2 StoriesCarosuelSlider mb-5">
                                <div class="row">

                                    <div class="col-12  ">
                                        <img src="Resources/images/gym01.jpeg" class="StorieProfileImg ">
                                    </div>

                                    <div class="col-12 text-center ">
                                        <p class="storiePara fw-bold">Lorem Upsun us simply dummy text of the printing and typesetting industry.Lorem Upsun us simply dummy text of the printing and typesetting industry.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1 d-flex justify-content-center align-items-center ">
                        <img src="Resources/images/icons/rightbtn.png" class="LRbtn" onclick="Carouselright();" >
                    </div>
                </div>
            </div>



            <!-- TRUSTED BY COPORATES -->
            <div class="col-12 bg-black">
                <div class="row">

                    <div class="col-12 text-center mt-5 DownToUP ">
                        <span class="aboutTopicwhite fs-1"> TRUSTED BY </span> &nbsp; <span class="aboutTopicRed fs-1"> COPORATES </span>
                    </div>


                    <div class="col-12 mt-5 d-flex justify-content-center Fade">
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


                    <div class="col-12 d-flex justify-content-center  mb-5 mt-5 Fade">
                        <button class="QuoteBtn">Request for a Quote</button>
                    </div>


                </div>
            </div>

        </div>
    </div>

    <!-- BMI Calculator Model -->
    <div class="modal text-white" tabindex="-1" id="BmiModel">
        <div class="modal-dialog">
            <div class="modal-content" style="background-color: transparent; backdrop-filter: blur(14px);">
                <div class="modal-header text-center">
                    <!-- <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                    <div class="col-12 text-center">
                        <h1 class="modal-title fw-bold">Calculate Your BMI Calculator</h1>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-6">
                                <input type="text" placeholder="Weight" id="bmiWeight" class="form-control">
                            </div>
                            <div class="col-6">
                                <input type="text" placeholder="Height" id="bmiHeight" class="form-control">
                            </div>

                            <div class="col-12 mt-2 d-grid">
                                <button class="btn btn-outline-danger" onclick="calculateBMI();">Check</button>
                            </div>

                            <div class="col-12 text-white-50 text-center mt-3">
                                <h3 id="BMIOutput"></h3>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
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