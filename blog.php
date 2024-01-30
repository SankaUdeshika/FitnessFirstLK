<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body class="bg-black">
    <!-- preloader -->
    <div class="col-12 preloader " id="preloader">
        <?php include "preloader.php" ?>
    </div>

    <div class="container-fluid">
        <div class="row">

            <!-- Header -->
            <?php include "header.php" ?>

            <!-- search bar -->
            <div class="col-12 Search-cover text-center ">
                <div class="row">
                    <div class="col-12">
                        <div class="row ">
                            <div class="col-12">
                                <span class="Blog-Search-text" style="transition: 1s ease-in-out;">The Inside Track Blog</span><br>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12 offset-lg-3">
                        <div class="col-12 bg-body">
                            <div class="row">
                                <div class="col-2 Blog-SearchIcon">
                                    <span class=""><i class="bi bi-search"></i></span>
                                </div>
                                <div class="col-lg-8 col-7 d-grid">
                                    <input type="text" placeholder="Search for an article" class="Blog-SearchInput d-grid">
                                </div>
                                <div class="col-lg-2 col-3">
                                    <button class="Blog-searchBtn">Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Blog Category -->
            <div class="col-12 d-flex justify-content-around mt-5 mb-5  ">
                <div class="row">
                    <div class="col-3 text-center">
                        <small onclick="ChangeCategory('?');" class="HeaderTabs">All</small>
                    </div>
                    <?php
                    require "Connections/connection.php";
                    $BlogCateogry_rs = Database::search("SELECT * FROM `blogcategory` ");
                    $BlogCateogry_num = $BlogCateogry_rs->num_rows;
                    for ($i = 0; $i < $BlogCateogry_num; $i++) {
                        $BlogCateogry_data = $BlogCateogry_rs->fetch_assoc();

                    ?>
                        <div class="col-3 text-center">
                            <small onclick="ChangeCategory('<?php echo ($BlogCateogry_data['BCid']) ?>');" class="HeaderTabs"><?php echo ($BlogCateogry_data["category"]) ?> </small>

                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>


            <!-- Blog Divs -->
            <div class="col-12">
                <div class="row">

                    <?php

                    if ($_SESSION["Category"] == "?") {
                        $blog_rs = Database::search("SELECT * FROM `blog` INNER JOIN `blogcategory` ON `blogcategory`.`BCid` = `blog`.`blogCategory`  ORDER BY `Bid` ASC limit 4 ");
                    }else{
                        $blog_rs = Database::search("SELECT * FROM `blog` INNER JOIN `blogcategory` ON `blogcategory`.`BCid` = `blog`.`blogCategory` WHERE `blogCategory` = '" . $_SESSION["Category"] . "' ");
                    }

                    $blog_num = $blog_rs->num_rows;

                    for ($i = 0; $i < $blog_num; $i++) {
                        $blog_data = $blog_rs->fetch_assoc();
                        $number = $i % 2;
                        if ($number == 0) {
                    ?>
                            <div class="col-lg-5 col-12 offset-lg-1 d-flex justify-content-center Fade">
                                <div class="row">
                                    <div class="col-12 overflow-hidden">
                                        <img src="<?php echo ($blog_data["BlogMainImage"]) ?>" class="BlogCategoryImages" alt="">
                                    </div>
                                    <div class="col-12 text-white">
                                        <div class="row">
                                            <div class="col-12 mt-3 mb-2">
                                                <span style="font-family: monospace;"><?php echo ($blog_data["category"]) ?></span>
                                            </div>
                                            <div class="col-12">
                                                <span class="BlogThmbnailTopic"><?php echo ($blog_data["BlogName"]) ?></span>
                                            </div>
                                            <div class="col-12">
                                                <small class="text-white-50 ">DECEMBER 20 2023 6 MIN READ</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        } else if ($number == 1) {
                        ?>
                            <div class="col-lg-5 col-12 d-flex justify-content-center Fade">
                                <div class="row">
                                    <div class="col-12 overflow-hidden">
                                        <img src="<?php echo ($blog_data["BlogMainImage"]) ?>" class="BlogCategoryImages" alt="">
                                    </div>
                                    <div class="col-12 text-white">
                                        <div class="row">
                                            <div class="col-12 mt-3 mb-2">
                                                <span style="font-family: monospace;"><?php echo ($blog_data["category"]) ?></span>
                                            </div>
                                            <div class="col-12">
                                                <span class="BlogThmbnailTopic"><?php echo ($blog_data["BlogName"]) ?></span>
                                            </div>
                                            <div class="col-12">
                                                <small class="text-white-50 ">DECEMBER 20 2023 6 MIN READ</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }

                    ?>

                    <!-- realted Topics -->
                    <div class="col-12 mt-5">
                        <div class="row">
                            <div class="col-lg-10 col-12 offset-lg-1">
                                <div class="row">
                                    <!-- 1 -->
                                    <div class="col-lg-3 col-6 Fade">
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
                                    <div class="col-lg-3 col-6 Fade">
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
                                    <div class="col-lg-3 col-6 Fade ">
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
                                    <div class="col-lg-3 col-6 Fade">
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
                                    <div class="col-lg-3 col-6 mt-5 Fade ">
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
                                    <div class="col-lg-3 col-6 mt-5 Fade ">
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
                                    <div class="col-lg-3 col-6 mt-5  Fade">
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
                                    <div class="col-lg-3 col-6 mt-5 Fade ">
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