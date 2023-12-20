<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | fitness</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
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
    <!-- body -->
    <div class="contaienr-fluid">
        <div class="row">

            <!-- carousel -->
            <div class="col-12">
                <div id="carouselExampleDark" class="carousel carousel-dark slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <img src="..." class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="..." class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Second slide label</h5>
                                <p>Some representative placeholder content for the second slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="..." class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <!-- Virtual Tour and Bmi Calculator -->
            <div class="col-12 VirtualBMIROw">
                <div class="row ">

                    <div class="col-6 TourSection text-center " style="position: absolute;">
                        <span class="TourText">Virtual Tour</span>
                    </div>

                    <div class="col-6 BMISection text-center " style="position: absolute;">
                        <span class="TourText">Virtual Tour</span>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <script src="js/script.js"></script>

</body>

</html>