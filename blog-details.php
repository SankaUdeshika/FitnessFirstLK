<?php
require "Connections/connection.php";
$blog_id = $_GET["id"];

$blog_rs = Database::search("SELECT * FROM `blog` INNER JOIN `blogcategory` ON `blogcategory`.`BCid` = `blog`.`blogcategory_BCid` WHERE `Bid` = '" . $blog_id . "' ");

$blog_num = $blog_rs->num_rows;

if ($blog_num == 1) {
    $blog_data =  $blog_rs->fetch_assoc();
    $blog_name = $blog_data["BlogName"];
    $date = $blog_data["Bdate"];
    $formatted_date = date("M,d, Y", strtotime($date));
    $blog_category = $blog_data["blogcategory_BCid"];
    $author_name = $blog_data["author_name"];
    $author_pic = $blog_data["author_pic"];
    $blog_cover_pic = $blog_data["blog_cover_pic"];
    $blog_category_name = $blog_data["category"];
    $blog_content_1 = $blog_data["content1"];
    $blog_content_2 = $blog_data["content2"];
    $blog_content_3 = $blog_data["content3"];
} else {
?>
    <h1>Something wrong , please try again later</h1>
<?php
}
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
                <li><a href="./index.php">Home</a></li>
                <li><a href="./about-us.php">About Us</a></li>
                <!-- <li><a href="./classes.html">Classes</a></li> -->
                <li><a href="./services.php">Amenities</a></li>
                <li><a href="./team.php">Our Team</a></li>
                <li><a href="./blog.php">Our blog</a></li>
                <li><a href="./membershipCheckout.php?id=1">Our Packages</a></li>
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

    <!-- Blog Details Hero Section Begin -->
    <section class="blog-details-hero set-bg" data-setbg="<?php echo $blog_cover_pic ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 p-0 m-auto">
                    <div class="bh-text">
                        <h3><?php echo $blog_name ?></h3>
                        <ul>
                            <li>by <?php echo $author_name ?></li>
                            <li><?php echo $formatted_date ?></li>
                            <li>20 Comment</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Hero Section End -->

    <!-- Blog Details Section Begin -->
    <section class="blog-details-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 p-0 m-auto">
                    <div class="blog-details-text">
                        <div class="blog-details-title">

                            <div class="row">
                                <div class="col-12">
                                    <p><?php echo $blog_content_1 ?></p>
                                </div>
                                <br>
                                <div class="col-12">
                                    <p><?php echo $blog_content_2 ?></p>
                                </div>
                                <div class="col-12">
                                    <p><?php echo $blog_content_3 ?></p>
                                </div>
                            </div>



                        </div>

                        <div class="blog-details-tag-share">
                            <div class="tags">
                                <a href="#"><?php echo $blog_category_name; ?></a>
                            </div>
                            <div class="share">
                                <span>Share</span>
                                <a href="#"><i class="fa fa-facebook"></i> 82</a>
                                <a href="#"><i class="fa fa-twitter"></i> 24</a>
                                <a href="#"><i class="fa fa-envelope"></i> 08</a>
                            </div>
                        </div>
                        <div class="blog-details-author">
                            <div class="ba-pic">
                                <img src="<?php echo $author_pic ?>" alt="">
                            </div>
                            <div class="ba-text">
                                <h5><?php echo $author_name ?></h5>
                                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation.</p> -->
                                <div class="bp-social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="comment-option">
                                    <h5 class="co-title">Comment</h5>

                                    <?php
                                    $blog_comment_rs =  Database::search("SELECT * FROM `blogcomment` WHERE `blog_Bid` = '" . $blog_id . "' ");
                                    $blog_comment_num = $blog_comment_rs->num_rows;

                                    if ($blog_comment_num == 0) {
                                    ?>
                                        <span class="text-white fw-bold">No Comments</span>
                                        <?php
                                    } else {

                                        for ($i = 0; $i < $blog_comment_num; $i++) {
                                            $blog_comment_data = $blog_comment_rs->fetch_assoc();
                                        ?>
                                            <div class="co-item">
                                                <div class="co-widget">
                                                    <a href="#"><i class="fa fa-heart-o"></i></a>
                                                    <a href="#"><i class="fa fa-share-square-o"></i></a>
                                                </div>
                                                <div class="co-pic">
                                                    <img src="img\man.png" alt="">
                                                    <h5><?php echo $blog_comment_data["name"] ?></h5>
                                                </div>
                                                <div class="co-text">
                                                    <p><?php echo $blog_comment_data["comment"] ?></p>
                                                </div>
                                            </div>
                                        <?php

                                        }
                                        ?>



                                    <?php
                                    }


                                    ?>
                                    <!-- reply Comment  -->
                                    <!-- <div class="co-item reply-comment">
                                        <div class="co-widget">
                                            <a href="#"><i class="fa fa-heart-o"></i></a>
                                            <a href="#"><i class="fa fa-share-square-o"></i></a>
                                        </div>
                                        <div class="co-pic">
                                            <img src="img/blog/details/comment-2.jpg" alt="">
                                            <h5>Brandon Kelley</h5>
                                        </div>
                                        <div class="co-text">
                                            <p>Neque porro quisquam est, qui dolorem ipsum dolor sit amet, consectetur,
                                                adipisci velit dolore.</p>
                                        </div>
                                    </div> -->

                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="leave-comment">
                                    <h5>Leave a comment</h5>
                                    <form action="AddingBlogComments_process.php" method="post">
                                        <input type="text" name="Name" placeholder="Name" required>
                                        <input type="text" name="Email" placeholder="Email" required>
                                        <input type="hidden" name="blogId" id="blogId" value="<?php echo $blog_id ?>">
                                        <textarea name="Comment" placeholder="Comment" required></textarea>
                                        <button type="submit">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Section End -->

    <!-- Get In Touch Section Begin -->
    <div class="gettouch-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="gt-text">
                        <i class="fa fa-map-marker"></i>
                        <p>333 Middle Winchendon Rd, Rindge,<br /> NH 03461</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="gt-text">
                        <i class="fa fa-mobile"></i>
                        <ul>
                            <li>125-711-811</li>
                            <li>125-668-886</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="gt-text email">
                        <i class="fa fa-envelope"></i>
                        <p>Support.gymcenter@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Get In Touch Section End -->

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
                            <li><a href="#">Contact</a></li>
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