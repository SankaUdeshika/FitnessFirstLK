<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flex Home | Fitness First LK</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body class="bg-black">
    <!-- preloader -->
    <div class="col-12 preloader " id="preloader">
        <?php include "preloader.php" ?>
    </div>

    <!-- Top red Bar -->
    <div class="col-12" style="background-color:red;">
        <div class="row ">
            <div class="col-4">
            </div>
            <div class="col-4 text-center mt-2 mb-2 ">
                <label class=" Number visually-hidden  " id="Number">0</label>
                <span class="FlexTopRedBarTopic">Exclusive Suppliment🔥</span>
            </div>
        </div>
    </div>

    <!-- Flex Header -->
    <div class="col-12 position-sticky top-0 " style="z-index: 2;">
        <div class="row">
            <?php include "FlexHeader.php" ?>
        </div>
    </div>

    <!-- Flex Home Image -->
    <div class="col-12 position-relative">
        <div class="row">
            <div class="col-12">
                <img src="Resources/images/Areas/gym02.jpg" class="FlexHomeImage" width="100%">
            </div>
            <div class="col-12 HomeImageTextButtonCover   text-center">
                <div class="row">
                    <div class="col-12 ">
                        <span class="FlexCatouselText">Free Shipping</span>
                    </div>
                    <div class="col-12 mt-3">
                        <span class="ShopNowBtn">Shop Now</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Flex Item  -->

    <div class="col-12 d-flex justify-content-center">
        <div class="HomeProductViewCover">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 fw-bold text-white mt-2 mb-2">
                        <h2>Latest Collection</h1>
                    </div>

                    <div class="col-12">
                        <div class="row">
                            <div class="col-4 FlexProductCard">

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