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

<body class="bg-black">

    <!-- preloader -->
    <div class="col-12 preloader " id="preloader">
        <?php include "preloader.php" ?>
    </div>

    <!-- Header -->
    <div class="col-12" style="position: fixed; z-index: 4;">
        <?php include "header.php" ?>
    </div>

    <div class="container-fluid">
        <div class="row">
            <!-- search bar -->
            <div class="col-12 Search-cover text-center ">
                <div class="row">
                    <div class="col-12">
                        <div class="row ">
                            <div class="col-12">
                                <span class="Blog-Search-text">The Inside Track Blog</span><br>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 offset-lg-3">
                        <div class="col-12 bg-body">
                            <div class="row">
                                <div class="col-2 Blog-SearchIcon">
                                    <span class=""><i class="bi bi-search"></i></span>
                                </div>
                                <div class="col-8 d-grid">
                                    <input type="text" placeholder="Search for an article" class="Blog-SearchInput d-grid">
                                </div>
                                <div class="col-2">
                                    <button class="Blog-searchBtn">Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Blog Category -->

            <div class="col-12 text-center d-flex justify-content-center text-center mt-5 mb-5">
                <div class="col-3">
                    <span class="text-white-50 fw-bold fs-3">All</span>
                </div>
                <div class="col-3">
                    <span class="text-white-50 fw-bold fs-3">Fitness</span>
                </div>
                <div class="col-3">
                    <span class="text-white-50 fw-bold fs-3">Nutrition</span>
                </div>
                <div class="col-3">
                    <span class="text-white-50 fw-bold fs-3">Archive</span>
                </div>
            </div>


            <!-- Blog Divs -->
            <div class="col-12">
                <div class="row">

                    <div class="col-5 offset-lg-1 d-flex justify-content-center">
                        <div class="row">
                            <div class="col-12 overflow-hidden">
                                <img src="Resources/images/gym03.jpg" class="BlogCategoryImages" alt="">
                            </div>
                            <div class="col-12 text-white">
                                <div class="row">
                                    <div class="col-12 mt-3 mb-2">
                                        <span style="font-family: monospace;">FITNESS</span>
                                    </div>
                                    <div class="col-12">
                                        <span class="BlogThmbnailTopic">How To Get Fit In The New Year</span>
                                    </div>
                                    <div class="col-12">
                                        <small class="text-white-50 ">DECEMBER 20 2023 6 MIN READ</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-5 d-flex justify-content-center">
                        <div class="row">
                            <div class="col-12 overflow-hidden">
                                <img src="Resources/images/gym04.jpeg" class="BlogCategoryImages" alt="">
                            </div>
                            <div class="col-12 text-white">
                                <div class="row">
                                    <div class="col-12 mt-3 mb-2">
                                        <span style="font-family: monospace;">FITNESS</span>
                                    </div>
                                    <div class="col-12">
                                        <span class="BlogThmbnailTopic">What Is Body Mass Index?</span>
                                    </div>
                                    <div class="col-12">
                                        <small class="text-white-50 ">DECEMBER 20 2023 6 MIN READ</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- second row -->
                    <div class="col-5 d-flex justify-content-center mt-5 offset-lg-1">
                        <div class="row">
                            <div class="col-12 overflow-hidden">
                                <img src="Resources/images/gym01.jpeg" class="BlogCategoryImages" alt="">
                            </div>
                            <div class="col-12 text-white">
                                <div class="row">
                                    <div class="col-12 mt-3 mb-2">
                                        <span style="font-family: monospace;">FITNESS</span>
                                    </div>
                                    <div class="col-12">
                                        <span class="BlogThmbnailTopic">What Is Body Mass Index?</span>
                                    </div>
                                    <div class="col-12">
                                        <small class="text-white-50 ">DECEMBER 20 2023 6 MIN READ</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-5 d-flex justify-content-center mt-5">
                        <div class="row">
                            <div class="col-12 overflow-hidden">
                                <img src="Resources/images/gym02.jpg" class="BlogCategoryImages" alt="">
                            </div>
                            <div class="col-12 text-white">
                                <div class="row">
                                    <div class="col-12 mt-3 mb-2">
                                        <span style="font-family: monospace;">FITNESS</span>
                                    </div>
                                    <div class="col-12">
                                        <span class="BlogThmbnailTopic">What Is Body Mass Index?</span>
                                    </div>
                                    <div class="col-12">
                                        <small class="text-white-50 ">DECEMBER 20 2023 6 MIN READ</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- realted Topics -->
                    <div class="col-12 mt-5">
                        <div class="row">
                            <div class="col-10 offset-lg-1">
                                <div class="row">
                                    <!-- 1 -->
                                    <div class="col-3 ">
                                        <div class="row">
                                            <div class="col-12">
                                                <img src="Resources/images/gym04.jpeg" class="BlogCategoryImages" alt="">
                                            </div>
                                            <div class="col-12 text-white">
                                                <div class="row">
                                                    <div class="col-12 mt-3 mb-2">
                                                        <span style="font-family: monospace;">FITNESS</span>
                                                    </div>
                                                    <div class="col-12">
                                                        <span class="BlogThmbnailTopic">What Is Body Mass Index?</span>
                                                    </div>
                                                    <div class="col-12">
                                                        <small class="text-white-50 ">DECEMBER 20 2023 6 MIN READ</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 1 -->
                                    <div class="col-3">
                                        <div class="row">
                                            <div class="col-12">
                                                <img src="Resources/images/gym01.jpeg" class="BlogCategoryImages" alt="">
                                            </div>
                                            <div class="col-12 text-white">
                                                <div class="row">
                                                    <div class="col-12 mt-3 mb-2">
                                                        <span style="font-family: monospace;">FITNESS</span>
                                                    </div>
                                                    <div class="col-12">
                                                        <span class="BlogThmbnailTopic">What Is Body Mass Index?</span>
                                                    </div>
                                                    <div class="col-12">
                                                        <small class="text-white-50 ">DECEMBER 20 2023 6 MIN READ</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 1 -->
                                    <div class="col-3 ">
                                        <div class="row">
                                            <div class="col-12">
                                                <img src="Resources/images/gym03.jpg" class="BlogCategoryImages" alt="">
                                            </div>
                                            <div class="col-12 text-white">
                                                <div class="row">
                                                    <div class="col-12 mt-3 mb-2">
                                                        <span style="font-family: monospace;">FITNESS</span>
                                                    </div>
                                                    <div class="col-12">
                                                        <span class="BlogThmbnailTopic">What Is Body Mass Index?</span>
                                                    </div>
                                                    <div class="col-12">
                                                        <small class="text-white-50 ">DECEMBER 20 2023 6 MIN READ</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 1 -->
                                    <div class="col-3 ">
                                        <div class="row">
                                            <div class="col-12">
                                                <img src="Resources/images/gym01.jpeg" class="BlogCategoryImages" alt="">
                                            </div>
                                            <div class="col-12 text-white">
                                                <div class="row">
                                                    <div class="col-12 mt-3 mb-2">
                                                        <span style="font-family: monospace;">FITNESS</span>
                                                    </div>
                                                    <div class="col-12">
                                                        <span class="BlogThmbnailTopic">What Is Body Mass Index?</span>
                                                    </div>
                                                    <div class="col-12">
                                                        <small class="text-white-50 ">DECEMBER 20 2023 6 MIN READ</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Second Row -->
                                    <div class="col-3 mt-5 ">
                                        <div class="row">
                                            <div class="col-12">
                                                <img src="Resources/images/gym01.jpeg" class="BlogCategoryImages" alt="">
                                            </div>
                                            <div class="col-12 text-white">
                                                <div class="row">
                                                    <div class="col-12 mt-3 mb-2">
                                                        <span style="font-family: monospace;">FITNESS</span>
                                                    </div>
                                                    <div class="col-12">
                                                        <span class="BlogThmbnailTopic">What Is Body Mass Index?</span>
                                                    </div>
                                                    <div class="col-12">
                                                        <small class="text-white-50 ">DECEMBER 20 2023 6 MIN READ</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3 mt-5 ">
                                        <div class="row">
                                            <div class="col-12">
                                                <img src="Resources/images/gym02.jpg" class="BlogCategoryImages" alt="">
                                            </div>
                                            <div class="col-12 text-white">
                                                <div class="row">
                                                    <div class="col-12 mt-3 mb-2">
                                                        <span style="font-family: monospace;">FITNESS</span>
                                                    </div>
                                                    <div class="col-12">
                                                        <span class="BlogThmbnailTopic">What Is Body Mass Index?</span>
                                                    </div>
                                                    <div class="col-12">
                                                        <small class="text-white-50 ">DECEMBER 20 2023 6 MIN READ</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3 mt-5 ">
                                        <div class="row">
                                            <div class="col-12">
                                                <img src="Resources/images/gym03.jpg" class="BlogCategoryImages" alt="">
                                            </div>
                                            <div class="col-12 text-white">
                                                <div class="row">
                                                    <div class="col-12 mt-3 mb-2">
                                                        <span style="font-family: monospace;">FITNESS</span>
                                                    </div>
                                                    <div class="col-12">
                                                        <span class="BlogThmbnailTopic">What Is Body Mass Index?</span>
                                                    </div>
                                                    <div class="col-12">
                                                        <small class="text-white-50 ">DECEMBER 20 2023 6 MIN READ</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3 mt-5 ">
                                        <div class="row">
                                            <div class="col-12">
                                                <img src="Resources/images/gym04.jpeg" class="BlogCategoryImages" alt="">
                                            </div>
                                            <div class="col-12 text-white">
                                                <div class="row">
                                                    <div class="col-12 mt-3 mb-2">
                                                        <span style="font-family: monospace;">FITNESS</span>
                                                    </div>
                                                    <div class="col-12">
                                                        <span class="BlogThmbnailTopic">What Is Body Mass Index?</span>
                                                    </div>
                                                    <div class="col-12">
                                                        <small class="text-white-50 ">DECEMBER 20 2023 6 MIN READ</small>
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




    <?php include "footer.php" ?>
    <script src="js/script.js">
    </script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.js"></script>

</body>

</html>