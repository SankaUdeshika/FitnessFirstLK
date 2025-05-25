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

    <!-- Header -->
    <div class="col-12" style="position: fixed; z-index: 4;">
        <?php include "header.php" ?>
    </div>


    <div class="container-fluid">
        <div class="row">


            <!-- Top bar -->
            <!-- <div class="col-12 Classes-cover  ">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="row ">
                            <div class="col-12">
                                <span class="fs-4 fw-bold text-white" style="font-family: monospace;">OUR</span>
                            </div>

                            <div class="col-12">
                                <span class="Blog-Search-text">FACILITIES</span><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->


            <div class="col-12" style="margin-top: 40px;">
                <div class="row">

                    <div class="col-12 mt-5 mb-5 FirstDownToUPAnimation">
                        <div class="row">
                            <div class="col-12  text-center mt-5">
                                <span class="aboutTopicwhite facilitiyAboutText  ">ABOUT THE </span> <br> <span class="aboutTopicRed facilitiyAboutText"> FITNESS FACILITIES</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mt-5 FirstUpToDownAnimation">
                        <div class="row">
                            <div class="col-lg-8 col-12 offset-lg-2 text-center text-white">
                                <?php
                                require "Connections/connection.php";
                                $aboutpara_rs = Database::search("SELECT * FROM `facilitiesabout` WHERE `FA_id` = '1' ");
                                $aboutpara_data = $aboutpara_rs->fetch_assoc();
                                ?>
                                <p><?php echo ($aboutpara_data["AboutPara"]) ?></p>
                                <h5>Come train with us!</h5>
                            </div>
                        </div>
                    </div>


                    <div class="col-12 mt-5 mb-5">
                        <div class="row">

                            <div class="col-lg-6 offset-lg-2  text-white Fade ">
                                <span class="fs-1 mx-5 fw-bold">Our Facility Features:</span>
                            </div>

                            <div class="col-12 text-white-50 mt-4">
                                <div class="row">

                                    <div class="col-lg-8 col-12 offset-lg-2">
                                        <div class="row">

                                            <?php
                                            $facilitieFeatures_rs = Database::search("SELECT * FROM `facilitiesfeatures` ");
                                            $facilitieFeatures_num = $facilitieFeatures_rs->num_rows;

                                            for ($i = 0; $i < $facilitieFeatures_num; $i++) {
                                                $number = $i % 2;
                                                $facilitieFeatures_data = $facilitieFeatures_rs->fetch_assoc();
                                                if ($number == 0) {
                                            ?>
                                                    <div class="col-6 LeftToRight Fade">
                                                        <ul>
                                                            <li> <span class="fs-3 "><?php echo ($facilitieFeatures_data["text"]) ?></span></li>
                                                        </ul>
                                                    </div>
                                                <?php
                                                } else if ($number == 1) {
                                                ?>
                                                    <div class="col-6 RightToLeft Fade">
                                                        <li> <span class="fs-3 "><?php echo ($facilitieFeatures_data["text"]) ?></span></li>
                                                    </div>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    $Pfacilitie_rs = Database::search("SELECT * FROM `premiumfacilities` WHERE `PF_id` = '1' ");
                    $Pfacilitie_data = $Pfacilitie_rs->fetch_assoc();

                    ?>
                    <div class="col-12 mb-5  ">
                        <div class="row d-flex justify-content-center">

                            <div class="col-lg-3 col-12  border border-1 rounded rounded-5 border-white Fade DownToUP">
                                <div class="row">
                                    <div class="col-12 mt-4">
                                        <img src="<?php echo ($Pfacilitie_data["ImagePath"]) ?>" class="facilitieImage" width="100%" alt="">
                                    </div>
                                    <div class="col-12 mt-3">
                                        <div class="row">
                                            <div class="col-12 text-center">
                                                <span class="fw-bold fs-1 text-white"><?php echo ($Pfacilitie_data["ImageHeadline"]) ?></span>
                                            </div>
                                            <div class="col-12 p-3 text-center text-white-50">
                                                <p class="fs-4"><?php echo ($Pfacilitie_data["ImagePara"]) ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php
                            $Pfacilitie_rs2 = Database::search("SELECT * FROM `premiumfacilities` WHERE `PF_id` = '2' ");
                            $Pfacilitie_data2 = $Pfacilitie_rs2->fetch_assoc();

                            ?>
                            <div class="col-lg-3 col-12 mx-5 border border-1 rounded rounded-5 border-white Fade UPToDown">
                                <div class="row">
                                    <div class="col-12 mt-4">
                                        <img src="<?php echo ($Pfacilitie_data2["ImagePath"]) ?>" class="facilitieImage" width="100%" alt="">
                                    </div>
                                    <div class="col-12 mt-3">
                                        <div class="row">
                                            <div class="col-12 text-center">
                                                <span class="fw-bold fs-1 text-white"><?php echo ($Pfacilitie_data2["ImageHeadline"]) ?></span>
                                            </div>
                                            <div class="col-12 p-3 text-center text-white-50">
                                                <p class="fs-4"><?php echo ($Pfacilitie_data2["ImagePara"]) ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <?php
                            $Pfacilitie_rs3 = Database::search("SELECT * FROM `premiumfacilities` WHERE `PF_id` = '3' ");
                            $Pfacilitie_data3 = $Pfacilitie_rs3->fetch_assoc();

                            ?>
                            <div class="col-lg-3 col-12  border border-1 rounded rounded-5 border-white DownToUP">
                                <div class="row">
                                    <div class="col-12 mt-4">
                                        <img src="<?php echo ($Pfacilitie_data3["ImagePath"]) ?>" class="facilitieImage" width="100%" alt="">
                                    </div>
                                    <div class="col-12 mt-3">
                                        <div class="row">
                                            <div class="col-12 text-center">
                                                <span class="fw-bold fs-1 text-white"><?php echo ($Pfacilitie_data3["ImageHeadline"]) ?></span>
                                            </div>
                                            <div class="col-12 p-3 text-center text-white-50">
                                                <p class="fs-4"><?php echo ($Pfacilitie_data3["ImagePara"]) ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>




                    <div class="col-12 mt-5 mb-5">
                        <hr class="text-white">
                    </div>


                    <div class="col-12 mb-5">
                        <div class="row">

                            <div class="col-12 col-lg-6 col-12 offset-lg-1 Fade">
                                <span class="aboutTopicwhite fs-1">The</span> &nbsp; <span class="aboutTopicRed fs-1">SUPPLIMENT FACTORY</span>
                            </div>

                            <div class="col-lg-6 col-12 offset-lg-1 text-white-50 mt-5">
                                <div class="row">
                                    <?php
                                    $factory_rs = Database::search("SELECT * FROM `factoryimage` WHERE `FI_id` = '1' ");
                                    $factory_data = $factory_rs->fetch_assoc();
                                    ?>
                                    <div class="col-12">
                                        <p class="fs-4">
                                            <?php echo ($factory_data["para"]) ?>
                                        </p>
                                    </div>

                                    <div class="col-12">
                                        <div class="row">
                                            <?php
                                            $faactoryCategory_rs = Database::search("SELECT * FROM `factorycategory`");
                                            $faactoryCategory_num = $faactoryCategory_rs->num_rows;

                                            for ($i = 0; $i < $faactoryCategory_num; $i++) {
                                                $faactoryCategory_data = $faactoryCategory_rs->fetch_assoc();
                                            ?>
                                                <div class="col-6">
                                                    <div class="row">
                                                        <div class="col-12 text-white">
                                                            <span><?php echo ($faactoryCategory_data["FactoryCategory"]) ?></span>
                                                        </div>
                                                        <div class="col-12">
                                                            <ul>
                                                                <?php
                                                                $factoryItem_rs = Database::search("SELECT * FROM `factoryinfo` WHERE `FactoryCategory` = '" . $faactoryCategory_data["FC_id"] . "' ");
                                                                $factoryItem_num = $factoryItem_rs->num_rows;
                                                                for ($x = 0; $x < $factoryItem_num; $x++) {
                                                                    $factoryItem_data = $factoryItem_rs->fetch_assoc();
                                                                ?> <li><?php echo($factoryItem_data["ProductName"])?></li>
                                                                <?php
                                                                }
                                                                ?>
                                                            </ul>
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

                            <div class="col-
                                <img src=" <?php echo ($factory_data["iamgePath"]) ?>" width="100%" alt="">
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