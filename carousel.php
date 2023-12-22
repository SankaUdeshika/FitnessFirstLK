<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Image SLider Start -->
    <div class="slider">
        <div class="slides">
            <!-- radio Button Start -->
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">
            <!-- radio Button End -->
            <!-- slide image Start -->
            <div class="slide first ">
                <img src="Resources/images/carouselImages/1.jpg" alt="">
            </div>
            <div class="slide  ">
                <img src="Resources/images/carouselImages/2.jpg" alt="">
            </div>
            <div class="slide  ">
                <img src="Resources/images/carouselImages/3.jpg" alt="">
            </div>
            <div class="slide  ">
                <img src="Resources/images/carouselImages/4.jpg" alt="">
            </div>
            <!-- slide image end -->



            <!-- text and button start -->
            <div class="CarouselTextCover d-lg-block d-none">
                <span class="partnerText ">YOUR PARTNER IN</span><br>
                <span class="FITNESStext ">FITNESS</span>
                <br>
                <button class="redBoxBtn ">Book a visit</button>
            </div>

            <div class="CarouselTextCoversmall d-lg-none d-block">
                <span class="partnerTextsmall ">YOUR PARTNER IN</span><br>
                <span class="FITNESStextsmall ">FITNESS</span>
                <br>
                <button class="redBoxBtn">Book a visit</button>
            </div>
            <!-- text and button end -->

            <div class="CarouselTextCover">
            </div>
            <!-- <span class="partnerTextsmall d-lg-none d-block">YOUR PARTNER IN</span><br> -->
            <!-- <span class="FITNESStextsmall d-lg-none d-block">FITNESS</span> -->
            <!-- <button class="redBoxBtn d-lg-none d-blcok">Book a visit</button> -->


            <!-- automatic navigation start -->
            <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
                <div class="auto-btn4"></div>
            </div>
            <!-- automatic navigation end -->

            <!-- Manual Naavigatin start -->
            <div class="navigation-manual">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
                <label for="radio4" class="manual-btn"></label>
            </div>
            <!-- Manual Naavigatin end -->
        </div>
    </div>
    <!-- Image SLider End -->


    <script>
        var counter = 1;
        setInterval(function() {
            document.getElementById("radio" + counter).checked = true;
            counter++;
            if (counter > 4) {
                counter = 1;
            }
        }, 5000);
    </script>
</body>

</html>