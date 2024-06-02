<?php
require "Connections/connection.php";
$blogId = $_GET["Bid"];
$Blog_rs = Database::search("SELECT * FROM `blog` INNER JOIN `blogcategory` ON `blogcategory`.`BCid` = `blog`.`blogCategory` WHERE `Bid` = '" . $blogId . "' ");
$blog_data = $Blog_rs->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog View | Fitness First</title>
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

            <div class="col-12">
                <div class="row">

                    <div class="col-lg-8 offset-lg-2 col-12 mt-5">
                        <div class="row">

                            <div class="col-12 mt-5 ">
                                <span class="text-white fw-bold" style="font-size: 50px;"><?php echo ($blog_data["BlogName"]) ?></span>
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
                                <span class="text-white-50 " style="font-size:small;"><?php echo ($month . " " . $NumberDate . " " . $NumberYear) ?></span>
                            </div>



                            <div class="col-12">
                                <img src="<?php echo ($blog_data["BlogMainImage"]) ?>" style="width: 100%; height: 400px; object-fit: cover;" alt="">
                            </div>

                            <div class="col-12 text-white mt-5 mb-4 fs-4 ">
                                <p><?php echo ($blog_data["content"]) ?></p>
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