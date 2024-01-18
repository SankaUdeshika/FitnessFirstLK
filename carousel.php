<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carousel</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Big Screen -->
    <div id="carouselExampleCaptions" class="carousel slide" style="width: 100%;">
        <div class="carousel-indicators d-none">
            <button type="button" id="Cbtn1" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" id="Cbtn2" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" id="Cbtn3" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" id="Cbtn4" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="Resources/images/gym03.jpg" class="d-block w-100" style="object-fit: cover;" alt="...">
            </div>
            <div class="carousel-item">
                <img src="Resources/images/gym02.jpg" class="d-block w-100" alt="...">

            </div>
            <div class="carousel-item">
                <img src="Resources/images/gym01.jpeg" class="d-block w-100" alt="...">

            </div>
            <div class="carousel-item">
                <img src="Resources/images/gym04.jpeg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="col-12">
        <!-- text and button start -->
        <div class="CarouselTextCover d-lg-block d-none" style="position: absolute; top: 25%;">
            <span class="partnerText ">YOUR PARTNER IN</span><br>
            <span class="FITNESStext ">FITNESS</span>
            <br>
            <button class="redBoxBtn ">Book a visit</button>
            <br>
            <div class="col-12 mt-4 offset-2">
                <label for="Cbtn1" class="CarouselButton"></label>
                <label for="Cbtn2" class="CarouselButton"></label>
                <label for="Cbtn3" class="CarouselButton"></label>
                <label for="Cbtn4" class="CarouselButton"></label>
            </div>
        </div>
        <!-- small -->
        <div class="CarouselTextCover d-lg-none d-block" style="position: absolute; top: 55%;">
            <span class="partnerTextsmall ">YOUR PARTNER IN</span><br>
            <span class="FITNESStextsmall ">FITNESS</span>
            <br>
            <button class="redBoxBtn ">Book a visit</button>
            <br>
            <div class="col-12 mt-4 offset-2">
                <label for="Cbtn1" class="CarouselButton"></label>
                <label for="Cbtn2" class="CarouselButton"></label>
                <label for="Cbtn3" class="CarouselButton"></label>
                <label for="Cbtn4" class="CarouselButton"></label>
            </div>
        </div>
    </div>

    <script src="js/script.js">
    </script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.js"></script>
</body>

</html>