<?php
session_start();
include "Connections/connection.php";

if (isset($_SESSION["admin"])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Manage Content | </title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    </head>

    <body style="background-color: #74EBD5;background-image: linear-gradient(90deg,#74EBD5 0%,#9FACE6 100%);">

        <div class="container-fluid">
            <div class="row">

                <div class="col-12 col-lg-2">
                    <div class="row">
                        <div class="col-12 align-items-start bg-dark" style="height: 300vh;">
                            <div class="row g-1 text-center">

                                <div class="col-12 mt-5">
                                    <h4 class="text-white">Welcome <?php echo ($_SESSION["admin"]["firstname"] . " " . $_SESSION["admin"]["lastname"]) ?></h4>
                                    <hr class="border border-white border-1" />
                                </div>

                                <div class="col-12 text-center">
                                    <div class="nav flex-column nav-pills me-3 mt-3" role="tablist" aria-orientation="vertical">
                                        <nav class="nav flex-column">
                                            <a class="nav-link " href="adminDashboard.php">Dashboard</a>
                                            <a class="nav-link active" aria-current="page" href="adminManageContent.php">Manage Content</a>

                                        </nav>
                                    </div>
                                </div>

                                <div class="col-12 mt-5">
                                    <hr class="border border-white border-1" />
                                    <h4 class="text-white fw-bold"> Developing?</h4>
                                    <hr class="border border-white border-1" />
                                </div>

                                <div class="col-12 mt-3 d-grid">
                                    <label class="form-label fs-6 fw-bold btn btn-outline-info  text-white ">Testing</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-10">
                    <div class="row">

                        <div class="text-white fw-bold mb-1 mt-3">
                            <h2 class="fw-bold ml-5">Manage Content</h2>
                        </div>
                        <div class="col-12">
                            <hr />
                        </div>

                        <div class="col-12 bg-dark">
                            <div class="row">
                                <div class="col-12 col-lg-2 text-center my-3">
                                    <label class="form-label fs-4 fw-bold text-white">Total Active Time</label>
                                </div>
                                <div class="col-12 col-lg-10 text-center my-3">
                                    <?php

                                    $start_date = new DateTime("2022-09-27 00:00:00");

                                    $tdate = new DateTime();
                                    $tz = new DateTimeZone("Asia/Colombo");
                                    $tdate->setTimezone($tz);

                                    $end_date = new DateTime($tdate->format("Y-m-d H:i:s"));

                                    $difference = $end_date->diff($start_date);

                                    ?>
                                    <label class="form-label fs-4 fw-bold text-warning">
                                        <?php

                                        echo $difference->format('%Y') . " Years " . $difference->format('%m') . " Months " .
                                            $difference->format('%d') . " Days " . $difference->format('%H') . " Hours " .
                                            $difference->format('%i') . " Minutes " . $difference->format('%s') . " Seconds ";
                                        ?>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- content -->

                        <div class="col-12">
                            <div class="row">

                                <div class="col-12">
                                    <h1>Facilities About </h1>
                                </div>

                                <?php
                                $FA_rs = Database::Search("SELECT * FROM `facilitiesabout` ");
                                $FA_data = $FA_rs->fetch_assoc();

                                ?>
                                <div class="col-12">
                                    <textarea name="" style="width: 100%;" id="Fabout" cols="30" rows="10"><?php echo ($FA_data["AboutPara"]) ?></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-success" onclick="ChangeFacilitiesPara();">Change Paragraph</button>
                                </div>
                            </div>
                        </div>

                        <hr class="mt-5 mb-5">

                        <div class="col-12">
                            <div class="row">
                                <!-- add Features -->
                                <div class="col-12">
                                    <h1>Facilities Features </h1>
                                </div>
                                <div class="col-6">
                                    <div class="col-12">
                                        <span>Add Features</span>
                                    </div>
                                    <div class="col-12">
                                        <input type="text" class="form-control" id="addFeaturesInput" placeholder="Enter Features">
                                    </div>
                                    <div class="col-12 mt-1">
                                        <button class="btn btn-primary" onclick="addFeaturess();">Add +</button>
                                    </div>
                                </div>

                                <!-- Delete Features -->
                                <div class="col-6">
                                    <div class="row">
                                        <?php
                                        $List_rs = Database::search("SELECT * FROM `facilitiesfeatures` ");
                                        $list_num = $List_rs->num_rows;

                                        for ($i = 0; $i < $list_num; $i++) {
                                            $list_data = $List_rs->fetch_assoc();
                                        ?>

                                            <div class="col-2 mb-3">
                                                <button class="btn btn-danger" onclick="DeleteFacilites('<?php echo ($list_data['FF_id']) ?>');">Delete</button>
                                            </div>
                                            <div class="col-10 mt-2">
                                                <span id="FeutreView<?php echo ("FF_id") ?>"><?php echo ($list_data["text"]) ?></span>
                                            </div>
                                            <hr>
                                        <?php
                                        }

                                        ?>
                                    </div>
                                </div>

                                <!-- Image Features -->
                                <div class="col-12 mt-5">
                                    <hr>
                                    <div class="row">
                                        <?php
                                        $iamge_rs = Database::search("SELECT * FROM `premiumfacilities` ");
                                        $image_num = $iamge_rs->num_rows;

                                        for ($i = 0; $i < $image_num; $i++) {
                                            $iamge_data = $iamge_rs->fetch_assoc();
                                        ?>
                                            <div class="col-3 m-4">
                                                <div class="row">
                                                    <div class="col-12 bg-info">
                                                        <div class="col-12 d-grid">
                                                            <label for="ImageInput<?php echo ($iamge_data["PF_id"]) ?>" class="btn btn-outline-dark">Change Image</label>
                                                        </div>
                                                        <div class="col-12 d-flex justify-content-center">
                                                            <img src="<?php echo ($iamge_data["ImagePath"]) ?>" id="Cimage<?php echo ($iamge_data['PF_id']) ?>" style="width: 100%;">
                                                            <input type="file" class="visually-hidden" onchange="ChangePremiumImage('<?php echo ($iamge_data['PF_id']) ?>');" id="ImageInput<?php echo ($iamge_data["PF_id"]) ?>">
                                                        </div>

                                                    </div>
                                                    <div class="col-12">
                                                    </div>
                                                    <div class="col-12 p-3">
                                                        <input type="text" class="form-control" id="faTopic<?php echo ($iamge_data['PF_id']) ?>" value="<?php echo ($iamge_data["ImageHeadline"]) ?>">
                                                    </div>
                                                    <div class="col-12 ">
                                                        <textarea name="" id="fapara<?php echo ($iamge_data['PF_id']) ?>" style="width: 100%;" cols="30" rows="10"><?php echo ($iamge_data["ImagePara"]) ?></textarea>
                                                    </div>
                                                    <div class="col-12 d-grid">
                                                        <button class="fw-bold btn btn-outline-dark" onclick="changefacilitiesInfomations('<?php echo ($iamge_data['PF_id']) ?>');">Change Infomations</button>
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

            <script src="js/bootstrap.js"></script>
            <script src="js/script.js"></script>
            <script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script>
    </body>

    </html>
<?php
} else {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact | RASIKA OFFICIAL</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    </head>

    <body style="background-color: #74EBD5;background-image: linear-gradient(90deg,#74EBD5 0%,#9FACE6 100%);">

        <div class="col-12 d-flex justify-content-center align-items-center text-white" style="width: 100%; height: 100vh;">
            <h1>Please Log In first</h1>
        </div>


        <script src="bootstrap.bundle.js"></script>
        <script src="script.js"></script>
        <script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script>
    </body>

    </html>
<?php
}

?>