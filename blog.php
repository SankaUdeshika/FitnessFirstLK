<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
require "Connections/connection.php";
?>


<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Gym Template">
    <meta name="keywords" content="Gym, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fitness First LK</title>
    <link rel="icon" type="image/png" href="img/FitnessFirstLKLogo.png">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">

    <style>
        @keyframes scrollBanner {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        .scrolling-banner {
            display: flex;
            animation: scrollBanner 15s linear infinite;
        }
    </style>
</head>

<body>
    <!-- Page Preloder -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="fa fa-close"></i>
        </div>
        <div class="canvas-search search-switch">
            <i class="fa fa-search"></i>
        </div>
        <nav class="canvas-menu mobile-menu">
            <ul>
                <li class="active"><a href="./index.php">Home</a></li>
                <li><a href="./about-us.php">About Us</a></li>
                <!-- <li><a href="./class-details.html">Classes</a></li> -->
                <li><a href="./services.php">Amenities</a></li>
                <li><a href="./team.php">Our Team</a></li>
                <li><a href="./blog.php">Our blog</a></li>
                <li><a href="./membershipCheckout.php?id=1">Our Packages</a></li>
                <li><a href="./coperates.php">Coperates</a></li>
                <li><a href="./contact.php">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="canvas-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-youtube-play"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="logo">
                        <a href="./index.php">
                            <img src="img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="nav-menu">
                        <ul>
                            <li class="active"><a href="./index.php">Home</a></li>
                            <li><a href="./about-us.php">About Us</a></li>
                            <!-- <li><a href="./class-details.html">Classes</a></li> -->
                            <li><a href="./services.php">Amenities</a></li>
                            <li><a href="./team.php">Our Team</a></li>
                            <li><a href="./blog.php">Our blog</a></li>
                            <li><a href="./membershipCheckout.php?id=1">Our Packages</a></li>
                            <li><a href="./coperates.php">Coperates</a></li>
                            <li><a href="./contact.php">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="top-option">
                        <!-- <div class="to-search search-switch">
                            <i class="fa fa-search"></i>
                        </div> -->
                        <div class="to-social">
                            <a href="https://www.facebook.com/profile.php?id=61567922141868"><i class="fa fa-facebook"></i></a>
                            <!-- <a href="#"><i class="fa fa-twitter"></i></a> -->
                            <!-- <a href="#"><i class="fa fa-youtube-play"></i></a> -->
                            <a href="https://www.instagram.com/fitnessfirstlk?igsh=MWVoeGNjdDJobGtxOQ=="><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="canvas-open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2>Our Blog</h2>
                        <div class="bt-option">
                            <a href="./index.php">Home</a>
                            <a href="#">Pages</a>
                            <span>Blog</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Blog Section Begin -->
    <section class="blog-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 p-0">
                    <?php

                    $page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int) $_GET['page'] : 1;
                    $resultsPerPage = 5;
                    $offset = ($page - 1) * $resultsPerPage;

                    $totalResult = Database::search("SELECT * FROM `blog`");
                    $totalBlogs = $totalResult->num_rows;

                    $totalPages = ceil($totalBlogs / $resultsPerPage);
                    $result = Database::search("SELECT blog.* FROM blog ORDER BY blog.Bdate DESC LIMIT $resultsPerPage OFFSET $offset");

                    while ($blog = $result->fetch_assoc()) {
                        $blogId = $blog['Bid'];
                        $commentResult = Database::search("SELECT * FROM `blogcomment` WHERE `blog_Bid` = '$blogId'");
                        $commentCount = $commentResult->num_rows;

                        $title = $blog['BlogName'];
                        $blog_cover_pic = $blog['blog_cover_pic'] ?? './img/logo.png';
                        $author_name = $blog['author_name'];
                        $date = date("M, d, Y", strtotime($blog['Bdate']));
                        $shortDesc = substr($blog['content'] ?? '', 0, 150) . "...";
                    ?>
                        <div class="blog-item">
                            <div class="bi-pic">
                                <img src="<?php echo htmlspecialchars($blog_cover_pic); ?>" alt="">
                            </div>
                            <div class="bi-text">
                                <h5>
                                    <a href="./blog-details.php?id=<?php echo htmlspecialchars($blogId); ?>">
                                        <?php echo htmlspecialchars($title); ?>
                                    </a>
                                </h5>
                                <ul>
                                    <li>by <?php echo htmlspecialchars($author_name); ?></li>
                                    <li><?php echo $date; ?></li>
                                    <li><?php echo $commentCount; ?> Comment<?php echo $commentCount != 1 ? 's' : ''; ?></li>
                                </ul>
                                <p><?php echo htmlspecialchars($shortDesc); ?></p>
                            </div>
                        </div>
                    <?php } ?>

                    <?php if ($totalPages > 0): ?>
                        <div class="blog-pagination d-flex justify-content-center">
                            <?php if ($totalPages > 1): ?>
                                <?php
                                $start = max(1, $page - 1);
                                $end = min($totalPages, $start + 2);
                                if ($end - $start < 2) {
                                    $start = max(1, $end - 2);
                                }
                                ?>

                                <?php if ($page > 1): ?>
                                    <a href="?page=<?php echo $page - 1; ?>">&laquo; Prev</a>
                                <?php endif; ?>

                                <?php for ($p = $start; $p <= $end; $p++): ?>
                                    <a href="?page=<?php echo $p; ?>" <?php if ($p === $page) echo 'class="active"'; ?>>
                                        <?php echo $p; ?>
                                    </a>
                                <?php endfor; ?>

                                <?php if ($page < $totalPages): ?>
                                    <a href="?page=<?php echo $page + 1; ?>">Next &raquo;</a>
                                <?php endif; ?>
                            <?php else: ?>
                                <a class="active">1</a>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                </div>

                <div class="col-lg-4 col-md-8 p-0">
                    <div class="sidebar-option">
                        <div class="so-categories">
                            <h5 class="title">Categories</h5>
                            <ul>
                                <?php

                                $result = Database::search("SELECT * FROM `blogcategory`");
                                $result_num = $result->num_rows;

                                for ($x = 0; $x < $result_num; $x++) {
                                    $result_data = $result->fetch_assoc();
                                    $bcid = $result_data["BCid"];

                                    $resultBlog = Database::search("SELECT * FROM `blog` WHERE `blogcategory_BCid` = '$bcid'");
                                    $resultBlog_num = $resultBlog->num_rows;
                                ?>

                                    <li>
                                        <a href="#"><?php echo $result_data["category"]; ?>
                                            <span><?php echo $resultBlog_num; ?></span>
                                        </a>
                                    </li>

                                <?php
                                }
                                ?>

                            </ul>
                        </div>
                        <div class="so-latest">
                            <h5 class="title">Feature posts</h5>
                            <div class="latest-large set-bg" data-setbg="img/letest-blog/latest-1.jpg">
                                <div class="ll-text">
                                    <h5><a href="./blog-details.html">This Japanese Way of Making Iced Coffee Is a Game...</a></h5>
                                    <ul>
                                        <li>Aug 20, 2019</li>
                                        <li>20 Comment</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="latest-item">
                                <div class="li-pic">
                                    <img src="img/letest-blog/latest-2.jpg" alt="">
                                </div>
                                <div class="li-text">
                                    <h6><a href="./blog-details.html">Grilled Potato and Green Bean Salad</a></h6>
                                    <span class="li-time">Aug 15, 2019</span>
                                </div>
                            </div>
                            <div class="latest-item">
                                <div class="li-pic">
                                    <img src="img/letest-blog/latest-3.jpg" alt="">
                                </div>
                                <div class="li-text">
                                    <h6><a href="./blog-details.html">The $8 French Rosé I Buy in Bulk Every Summer</a></h6>
                                    <span class="li-time">Aug 15, 2019</span>
                                </div>
                            </div>
                            <div class="latest-item">
                                <div class="li-pic">
                                    <img src="img/letest-blog/latest-4.jpg" alt="">
                                </div>
                                <div class="li-text">
                                    <h6><a href="./blog-details.html">Ina Garten's Skillet-Roasted Lemon Chicken</a></h6>
                                    <span class="li-time">Aug 15, 2019</span>
                                </div>
                            </div>
                            <div class="latest-item">
                                <div class="li-pic">
                                    <img src="img/letest-blog/latest-5.jpg" alt="">
                                </div>
                                <div class="li-text">
                                    <h6><a href="./blog-details.html">The Best Weeknight Baked Potatoes, 3 Creative Ways</a></h6>
                                    <span class="li-time">Aug 15, 2019</span>
                                </div>
                            </div>
                        </div>
                        <div class="so-tags">
                            <h5 class="title">Popular tags</h5>
                            <a href="#">Gyming</a>
                            <a href="#">Body buidling</a>
                            <a href="#">Yoga</a>
                            <a href="#">Weightloss</a>
                            <a href="#">Proffeponal</a>
                            <a href="#">Streching</a>
                            <a href="#">Cardio</a>
                            <a href="#">Karate</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->
    <div class="col-12 overflow-hidden" style="position: relative; height: 65px;">
        <div class="row d-flex justify-content-center align-items-center">
            <h5>Trusted Partners</h5>
        </div>
        <div class="scrolling-banner" style="white-space: nowrap; display: inline-block;">
            <img src="img/Corporates.png" alt="Partner Logo" style="height: 30px; display: inline-block; object-fit:cover; margin-right: 30px;">
            <img src="img/Corporates.png" alt="Partner Logo" style="height: 30px; display: inline-block; object-fit:cover; margin-right: 30px;">
            <img src="img/Corporates.png" alt="Partner Logo" style="height: 30px; display: inline-block; object-fit:cover; margin-right: 30px;">
        </div>
    </div>
    <!-- Get In Touch Section Begin -->
    <div class="gettouch-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mt-1">
                    <div class="gt-text">
                        <i class="fa fa-map-marker"></i>
                        <p class="mt-3">Colombo 7, Maitland Crescent<br /> Colombo 2, Moors Sports Club <br />Colombo 2, World Trade Center </br> Ja-ela </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gt-text">
                        <i class="fa fa-mobile"></i>
                        <ul>
                            <p>Colombo 7</p>
                            <li>011-269-5331</li>
                            <li>077-834-5678</li>
                            <p>Moors Sport Club</p>
                            <li>011-212-1755</li>
                            <li>075-711-9033</li>
                            <p>World Trade Center</p>
                            <li>011-233-8842</li>
                            <li>077-840-5889</li>
                            <p>Ja-ela</p>
                            <li>011-222-9747</li>
                            <li>077-834-5678</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gt-text email">
                        <i class="fa fa-envelope"></i>
                        <p>fitnessfirstcolombo@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Get In Touch Section End -->

    <!-- Footer Section Begin -->
    <section class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="fs-about">
                        <div class="fa-logo">
                            <a href="#"><img src="img/logo.png" alt=""></a>
                        </div>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore dolore magna aliqua endisse ultrices gravida lorem.</p> -->
                        <div class="fa-social">
                            <a href="https://www.facebook.com/profile.php?id=61567922141868"><i class="fa fa-facebook"></i></a>
                            <!-- <a href="#"><i class="fa fa-twitter"></i></a> -->
                            <!-- <a href="#"><i class="fa fa-youtube-play"></i></a> -->
                            <a href="https://www.instagram.com/fitnessfirstlk?igsh=MWVoeGNjdDJobGtxOQ=="><i class="fa fa-instagram"></i></a>
                            <a href="fitnessfirstcolombo@gmail.com"><i class="fa  fa-envelope-o"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="fs-widget">
                        <h4>Useful links</h4>
                        <ul>

                            <li><a href="terms&conditions.php">Terms & Condition </a></li>
                            <li><a href="privacyPolicy.php">Privacy Policy </a></li>
                            <li><a href="refundPolicy.php">Refund Policy </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="fs-widget">
                        <h4>Support</h4>
                        <ul>
                            <li><a href="https://fitnessfirst.lk/adminLogin.php">Login</a></li>
                            <!-- <li><a href="#">My account</a></li> -->
                            <!-- <li><a href="#">Subscribe</a></li> -->
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <!-- <div class="col-lg-4 col-md-6">
                    <div class="fs-widget">
                        <h4>Tips & Guides</h4>
                        <div class="fw-recent">
                            <h6><a href="#">Physical fitness may help prevent depression, anxiety</a></h6>
                            <ul>
                                <li>3 min read</li>
                                <li>20 Comment</li>
                            </ul>
                        </div>
                        <div class="fw-recent">
                            <h6><a href="#">Fitness: The best exercise to lose belly fat and tone up...</a></h6>
                            <ul>
                                <li>3 min read</li>
                                <li>20 Comment</li>
                            </ul>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="copyright-text">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </script> All rights reserved | <i class="fa fa-star" aria-hidden="true"></i> by <a href="https://www.linkedin.com/in/sanka-udeshika-6298311bb/" target="_blank">Sanka</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/jquery.barfiller.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>



</body>

</html>