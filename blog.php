<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog | Fitness First LK</title>
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
            <div class="col-12" style="position: fixed; z-index: 4;">
                <?php include "header.php" ?>
            </div>

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
            <div class="col-12 mb-5">
                <div class="row">

                    <?php

                    if ($_SESSION["Category"] == "?") {
                        $blog_rs = Database::search("SELECT * FROM `blog` INNER JOIN `blogcategory` ON `blogcategory`.`BCid` = `blog`.`blogCategory`  ORDER BY `Bid` ASC limit 4 ");
                    } else {
                        $blog_rs = Database::search("SELECT * FROM `blog` INNER JOIN `blogcategory` ON `blogcategory`.`BCid` = `blog`.`blogCategory` WHERE `blogCategory` = '" . $_SESSION["Category"] . "' ");
                    }

                    $blog_num = $blog_rs->num_rows;

                    for ($i = 0; $i < $blog_num; $i++) {
                        $blog_data = $blog_rs->fetch_assoc();
                        $number = $i % 2;
                        if ($number == 0) {
                    ?>
                            <div class="col-lg-5 col-12 offset-lg-1 d-flex justify-content-center Fade" onclick="window.location = 'blogView.php?Bid=<?php echo ($blog_data['Bid']) ?>'">
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

                                                <?php

                                                $FullDate =  $blog_data["Bdate"];
                                                $DateArray = explode("-", $FullDate);
                                                $NumberMonth = $DateArray[1];
                                                $NumberYear = $DateArray[0];
                                                $NumberDate = $DateArray[2];

                                                if ($NumberMonth == '01') {
                                                    $month = "Jan";
                                                } else if ($NumberMonth == '02') {
                                                    $month = "Feb";
                                                } else if ($NumberMonth == '03') {
                                                    $month = "Mar";
                                                } else if ($NumberMonth == '04') {
                                                    $month = "Apr";
                                                } else if ($NumberMont == '05') {
                                                    $month = "May";
                                                } else if ($NumberMonth == '06') {
                                                    $month = "Jun";
                                                } else if ($NumberMonth == '07') {
                                                    $month = "Jul";
                                                } else if ($NumberMonth == '08') {
                                                    $month = "Aug";
                                                } else if ($NumberMonth == '09') {
                                                    $month = "Sep";
                                                } else if ($NumberMonth == '10') {
                                                    $month = "Oct";
                                                } else if ($NumberMonth == '11') {
                                                    $month = "Nov";
                                                } else if ($NumberMonth == '12') {
                                                    $month = "Sep";
                                                }
                                                ?>

                                                <small class="text-white-50 "><?php echo ($month . " " . $NumberDate . " " . $NumberYear) ?> </small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        } else if ($number == 1) {
                        ?>
                            <div class="col-lg-5 col-12 d-flex justify-content-center Fade" onclick="window.location = 'blogView.php?Bid=<?php echo ($blog_data['Bid']) ?>'">
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
                                                <?php

                                                $FullDate =  $blog_data["Bdate"];
                                                $DateArray = explode("-", $FullDate);
                                                $NumberMonth = $DateArray[1];
                                                $NumberYear = $DateArray[0];
                                                $NumberDate = $DateArray[2];

                                                if ($NumberMonth == '01') {
                                                    $month = "Jan";
                                                } else if ($NumberMonth == '02') {
                                                    $month = "Feb";
                                                } else if ($NumberMonth == '03') {
                                                    $month = "Mar";
                                                } else if ($NumberMonth == '04') {
                                                    $month = "Apr";
                                                } else if ($NumberMont == '05') {
                                                    $month = "May";
                                                } else if ($NumberMonth == '06') {
                                                    $month = "Jun";
                                                } else if ($NumberMonth == '07') {
                                                    $month = "Jul";
                                                } else if ($NumberMonth == '08') {
                                                    $month = "Aug";
                                                } else if ($NumberMonth == '09') {
                                                    $month = "Sep";
                                                } else if ($NumberMonth == '10') {
                                                    $month = "Oct";
                                                } else if ($NumberMonth == '11') {
                                                    $month = "Nov";
                                                } else if ($NumberMonth == '12') {
                                                    $month = "Sep";
                                                }
                                                ?>
                                                <small class="text-white-50 "><?php echo ($month . " " . $NumberDate . " " . $NumberYear) ?> </small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }

                    ?>
                    <div class="col-10 offset-1">
                        <hr class="text-white mt-5">
                    </div>

                    <!-- Other Blog -->
                    <div class="col-12 mt-5">
                        <div class="row">
                            <div class="col-lg-10 col-12 offset-lg-1">
                                <div class="row">
                                    <?php
                                    $blogCount_rs  = Database::search("SELECT * FROM `blog` ");
                                    $blogCount_num  = $blogCount_rs->num_rows;
                                    $blogCount_num = $blogCount_num - 4;

                                    $otherBlog_rs = Database::search("SELECT * FROM `blog` INNER JOIN `blogcategory` ON `blogcategory`.`BCid` = `blog`.`blogCategory` ORDER BY `Bid` ASC LIMIT " . $blogCount_num . "  OFFSET 4 ");
                                    $otherBlog_num = $otherBlog_rs->num_rows;

                                    for ($i = 0; $i < $otherBlog_num; $i++) {
                                        $otherBlog_data = $otherBlog_rs->fetch_assoc();
                                    ?>
                                        <div class="col-lg-3 col-6 Fade overflow-hidden mb-5 " onclick="window.location = 'blogView.php?Bid=<?php echo ($otherBlog_data['Bid']) ?>'">
                                            <div class="row">
                                                <div class="col-12">
                                                    <img src="<?php echo ($otherBlog_data["BlogMainImage"]) ?>" class="BlogCategoryImages" alt="">
                                                </div>
                                                <div class="col-12 text-white">
                                                    <div class="row">
                                                        <div class="col-12 mt-3 mb-2">
                                                            <span style="font-family: monospace;"><?php echo ($otherBlog_data["category"]) ?></span>
                                                        </div>
                                                        <div class="col-12">
                                                            <span class="BlogThmbnailTopic"><?php echo ($otherBlog_data["BlogName"]) ?></span>
                                                        </div>
                                                        <div class="col-12">
                                                            <?php

                                                            $FullDate =  $otherBlog_data["Bdate"];
                                                            $DateArray = explode("-", $FullDate);
                                                            $NumberMonth = $DateArray[1];
                                                            $NumberYear = $DateArray[0];
                                                            $NumberDate = $DateArray[2];

                                                            if ($NumberMonth == '01') {
                                                                $month = "Jan";
                                                            } else if ($NumberMonth == '02') {
                                                                $month = "Feb";
                                                            } else if ($NumberMonth == '03') {
                                                                $month = "Mar";
                                                            } else if ($NumberMonth == '04') {
                                                                $month = "Apr";
                                                            } else if ($NumberMont == '05') {
                                                                $month = "May";
                                                            } else if ($NumberMonth == '06') {
                                                                $month = "Jun";
                                                            } else if ($NumberMonth == '07') {
                                                                $month = "Jul";
                                                            } else if ($NumberMonth == '08') {
                                                                $month = "Aug";
                                                            } else if ($NumberMonth == '09') {
                                                                $month = "Sep";
                                                            } else if ($NumberMonth == '10') {
                                                                $month = "Oct";
                                                            } else if ($NumberMonth == '11') {
                                                                $month = "Nov";
                                                            } else if ($NumberMonth == '12') {
                                                                $month = "Sep";
                                                            }
                                                            ?>
                                                            <small class="text-white-50 "><?php echo ($month . " " . $NumberDate . " " . $NumberYear) ?> </small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>
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