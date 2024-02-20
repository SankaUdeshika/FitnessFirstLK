<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flex Catelog | Fitness First LK</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body class="bg-black">

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="row">
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
                    <div class="col-12 position-sticky top-0 " style="z-index: 4;">
                        <div class="row">
                            <?php include "FlexHeader.php" ?>
                        </div>
                    </div>


                    <div class="col-12 d-flex justify-content-center mt-5 mb-5 ">
                        <div class="HomeProductViewCover">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 fw-bold text-white mt-2 mb-2">
                                        <h1 class="text-white fw-bold">Products</h1>
                                    </div>

                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <small class="text-white-50">Filter :</small>
                                                    </div>
                                                    <div class="col-3">
                                                        <small class="text-white-50">Availability <i class="bi bi-chevron-down"></i></small>
                                                    </div>

                                                    <div class="col-3">
                                                        <small class="text-white-50">Price <i class="bi bi-chevron-down"></i></small>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-6">
                                                <div class="row d-flex justify-content-end"> 
                                                    <div class="col-2 text-end">
                                                        <small class="text-white-50">Sort By :</small>
                                                    </div>
                                                    <div class="col-4 text-end">
                                                        <small class="text-white-50">Alphabetically, A-Z <i class="bi bi-chevron-down"></i></small>
                                                    </div>

                                                    <div class="col-3 text-end">
                                                        <small class="text-white-50">6 Products </small>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- Items -->
                                    <div class="col-12 Fade DownToUP">
                                        <div class="row">


                                            <div class="col-3 mt-5">
                                                <div class="row">
                                                    <div class="col-11 FlexProductCard  ">
                                                        <div class="row">

                                                            <div class="col-10 offset-1 ProductImageCover ">
                                                                <div class="row">
                                                                    <div class="col-12 ProductFirstImageCover">
                                                                        <img src="Resources/images/Suppliment1.jpg" class="FlexProductImage1" alt="">
                                                                    </div>
                                                                    <div class="col-12 ProductSecondImageCover ">
                                                                        <img src="Resources/images/Suppliment2.jpg" class="FlexProductImage2" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-10 offset-1 mt-1 fw-bold fs-5 text-white">
                                                                <span>WHEY Premeum High Quauty Weigt Protin</span>
                                                            </div>

                                                            <div class="col-10 offset-1 text-white-50">
                                                                <span>Rs.8,500</span>
                                                            </div>
                                                            <!-- Button -->
                                                            <div class="col-10 mt-2 offset-1 position-relative overflow-hidden ">
                                                                <div class="col-12 ViewProductButton2 ">
                                                                    <span class="ViewProductButtonText">Choose Option</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-3 mt-5">
                                                <div class="row">
                                                    <div class="col-11 FlexProductCard  ">
                                                        <div class="row">

                                                            <div class="col-10 offset-1 ProductImageCover ">
                                                                <div class="row">
                                                                    <div class="col-12 ProductFirstImageCover">
                                                                        <img src="Resources/images/Suppliment1.jpg" class="FlexProductImage1" alt="">
                                                                    </div>
                                                                    <div class="col-12 ProductSecondImageCover ">
                                                                        <img src="Resources/images/Suppliment2.jpg" class="FlexProductImage2" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-10 offset-1 mt-1 fw-bold fs-5 text-white">
                                                                <span>WHEY Premeum High Quauty Weigt Protin</span>
                                                            </div>

                                                            <div class="col-10 offset-1 text-white-50">
                                                                <span>Rs.8,500</span>
                                                            </div>
                                                            <!-- Button -->
                                                            <div class="col-10 mt-2 offset-1 position-relative overflow-hidden ">
                                                                <div class="col-12 ViewProductButton2 ">
                                                                    <span class="ViewProductButtonText">Choose Option</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-3 mt-5">
                                                <div class="row">
                                                    <div class="col-11 FlexProductCard  ">
                                                        <div class="row">

                                                            <div class="col-10 offset-1 ProductImageCover ">
                                                                <div class="row">
                                                                    <div class="col-12 ProductFirstImageCover">
                                                                        <img src="Resources/images/Suppliment1.jpg" class="FlexProductImage1" alt="">
                                                                    </div>
                                                                    <div class="col-12 ProductSecondImageCover ">
                                                                        <img src="Resources/images/Suppliment2.jpg" class="FlexProductImage2" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-10 offset-1 mt-1 fw-bold fs-5 text-white">
                                                                <span>WHEY Premeum High Quauty Weigt Protin</span>
                                                            </div>

                                                            <div class="col-10 offset-1 text-white-50">
                                                                <span>Rs.8,500</span>
                                                            </div>
                                                            <!-- Button -->
                                                            <div class="col-10 mt-2 offset-1 position-relative overflow-hidden ">
                                                                <div class="col-12 ViewProductButton2 ">
                                                                    <span class="ViewProductButtonText">Choose Option</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-3 mt-5">
                                                <div class="row">
                                                    <div class="col-11 FlexProductCard  ">
                                                        <div class="row">

                                                            <div class="col-10 offset-1 ProductImageCover ">
                                                                <div class="row">
                                                                    <div class="col-12 ProductFirstImageCover">
                                                                        <img src="Resources/images/Suppliment1.jpg" class="FlexProductImage1" alt="">
                                                                    </div>
                                                                    <div class="col-12 ProductSecondImageCover ">
                                                                        <img src="Resources/images/Suppliment2.jpg" class="FlexProductImage2" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-10 offset-1 mt-1 fw-bold fs-5 text-white">
                                                                <span>WHEY Premeum High Quauty Weigt Protin</span>
                                                            </div>

                                                            <div class="col-10 offset-1 text-white-50">
                                                                <span>Rs.8,500</span>
                                                            </div>
                                                            <!-- Button -->
                                                            <div class="col-10 mt-2 offset-1 position-relative overflow-hidden ">
                                                                <div class="col-12 ViewProductButton2 ">
                                                                    <span class="ViewProductButtonText">Choose Option</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-3 mt-5">
                                                <div class="row">
                                                    <div class="col-11 FlexProductCard  ">
                                                        <div class="row">

                                                            <div class="col-10 offset-1 ProductImageCover ">
                                                                <div class="row">
                                                                    <div class="col-12 ProductFirstImageCover">
                                                                        <img src="Resources/images/Suppliment1.jpg" class="FlexProductImage1" alt="">
                                                                    </div>
                                                                    <div class="col-12 ProductSecondImageCover ">
                                                                        <img src="Resources/images/Suppliment2.jpg" class="FlexProductImage2" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-10 offset-1 mt-1 fw-bold fs-5 text-white">
                                                                <span>WHEY Premeum High Quauty Weigt Protin</span>
                                                            </div>

                                                            <div class="col-10 offset-1 text-white-50">
                                                                <span>Rs.8,500</span>
                                                            </div>
                                                            <!-- Button -->
                                                            <div class="col-10 mt-2 offset-1 position-relative overflow-hidden ">
                                                                <div class="col-12 ViewProductButton2 ">
                                                                    <span class="ViewProductButtonText">Choose Option</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-3 mt-5">
                                                <div class="row">
                                                    <div class="col-11 FlexProductCard  ">
                                                        <div class="row">

                                                            <div class="col-10 offset-1 ProductImageCover ">
                                                                <div class="row">
                                                                    <div class="col-12 ProductFirstImageCover">
                                                                        <img src="Resources/images/Suppliment1.jpg" class="FlexProductImage1" alt="">
                                                                    </div>
                                                                    <div class="col-12 ProductSecondImageCover ">
                                                                        <img src="Resources/images/Suppliment2.jpg" class="FlexProductImage2" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-10 offset-1 mt-1 fw-bold fs-5 text-white">
                                                                <span>WHEY Premeum High Quauty Weigt Protin</span>
                                                            </div>

                                                            <div class="col-10 offset-1 text-white-50">
                                                                <span>Rs.8,500</span>
                                                            </div>
                                                            <!-- Button -->
                                                            <div class="col-10 mt-2 offset-1 position-relative overflow-hidden ">
                                                                <div class="col-12 ViewProductButton2 ">
                                                                    <span class="ViewProductButtonText">Choose Option</span>
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
                    </div>

                </div>
            </div>
            <div class="col-12">
                <div class="row">
                    <?php include "footer.php" ?>
                </div>
            </div>
        </div>
    </div>


    <div class="col-12">
        <div class="row">
            <div class="offcanvas  bg-black text-white offcanvas-end" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title text-white" id="staticBackdropLabel" type="button" class="btn-close btn-danger" data-bs-dismiss="offcanvas" aria-label="Close"><i class="bi bi-x-lg"></i></h5>
                    <!-- <button type="button" class="btn-close btn-danger"  data-bs-dismiss="offcanvas" aria-label="Close"></button> -->
                </div>
                <div class="offcanvas-body  position-relative">
                    <div class="col-12 ">
                        <div class="row">
                            <!-- titile -->
                            <div class="col-12 text-center">
                                <h2>Your Cart</h2>
                            </div>
                            <!-- Sections -->
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-6 text-start">
                                        <small class="text-white-50">Product</small>
                                    </div>
                                    <div class="col-6 text-end">
                                        <small class="text-white-50">Total</small>
                                    </div>
                                </div>
                            </div>
                            <!-- Product Details -->
                            <div class="col-12">
                                <div class="row">

                                    <div class="col-4">
                                        <img src="Resources/images/Suppliment1.jpg" class="cartProductImage" alt="cartSuppliment">
                                    </div>

                                    <div class="col-5">
                                        <span class="fw-bold text-white">WHEY Premeum High Quauty Weigt Protin</span>
                                        <br>
                                        <span class="text-white-50">Rs.8,500</span>
                                    </div>
                                    <div class="col-3 text-end">
                                        <span class="text-white fw-bold">Rs.8,500</span>

                                    </div>
                                </div>
                            </div>

                            <!-- Quntity -->
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-4"></div>
                                    <div class="col-7 ">
                                        <div class="row">
                                            <div class="col-8 mt-3 px-3 py-3 pt-3 pb-3 border border-1 border-white">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <span class="fw-bold text-white">-</span>
                                                    </div>
                                                    <div class="col-4">
                                                        <span class="fw-bold text-white">1</span>
                                                    </div>
                                                    <div class="col-4">
                                                        <span class="fw-bold text-white">+</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4 d-flex  justify-content-center align-items-center">
                                                <span><i class="bi bi-trash3"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Checkout out -->
                            <div class="col-12 CheckoutCover">
                                <div class="row">
                                    <div class="col-12">
                                        <hr class="text-white text-center">
                                    </div>
                                    <div class="col-12 mt-3">
                                        <div class="row">
                                            <div class="col-6 text-start">
                                                <span class="fw-bold text-white">Estimated total</span>
                                            </div>
                                            <div class="col-6 text-end">
                                                <span class=" text-white">Rs.8,500</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <small class="text-white-50">Taxes, Discounts and shipping calculated at checkout</small>
                                    </div>
                                    <div class="col-12 p-3 d-grid">
                                        <button class="cartCheckoutBtn">Check out</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <script src="js/script.js">
    </script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.js"></script>
</body>

</html>