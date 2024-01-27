<?php
session_start();
include "Connections/connection.php";

$BlogId = $_GET["id"];

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
                                            <a class="nav-link " href="adminManageContent.php">Manage Content</a>
                                            <a class="nav-link active" aria-current="page" href="adminManageBlogs.php">Manage Blog</a>
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

                        <div class="col-12 ">
                            <div class="row g-2">

                                <div class="col-12 text-center">
                                    <h1>Update Blog Post</h1>
                                </div>

                                <?php
                                $blog_rs = Database::search("SELECT * FROM `blog` INNER JOIN `blogcategory` ON `blogcategory`.`BCid` = `blog`.`blogCategory` WHERE `Bid` = '" . $BlogId . "'  ");
                                $Updateblog_data = $blog_rs->fetch_assoc();
                                ?>

                                <div class="col-12 d-flex  justify-content-center">
                                    <input type="text" class="form-control " placeholder="Blog Name" value="<?php echo ($Updateblog_data["BlogName"]) ?>" id="blogName">
                                </div>

                                <div class="col-6">
                                    <div class="col-12">
                                        <span>Select Category</span>
                                        <select name="" class="form-select" id="Category">
                                            <option class="bg-danger" value="<?php echo ($Updateblog_data["BCid"]) ?>"><?php echo ($Updateblog_data["category"]) ?></option>
                                            <?php
                                            $blogCategory_rs = Database::search("SELECT * FROM `blogcategory` ");
                                            $blognum = $blogCategory_rs->num_rows;

                                            for ($i = 0; $i < $blognum; $i++) {
                                                $blog_data = $blogCategory_rs->fetch_assoc();
                                            ?>
                                                <option value="<?php echo ($blog_data["BCid"]) ?>"><?php echo ($blog_data["category"]) ?></option>
                                            <?php
                                            }

                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-6 ">
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-center">
                                            <img src="<?php echo ($Updateblog_data["BlogMainImage"]) ?>" id="Cimage" style="width: 50%;" alt="">
                                        </div>
                                        <div class="col-12 d-flex justify-content-center">
                                            <input type="file" onchange="ChangeUpdateIBlogImage('<?php echo ($Updateblog_data['Bid']) ?>');" id="AddBlogImage" class="visually-hidden" name="<?php echo ($Updateblog_data["BlogMainImage"]) ?>">
                                            <label for="AddBlogImage" class="btn btn-primary">Change Image</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="row">
                                        <textarea name="" style="width: 100%;" id="content" placeholder="Please type Your Content" cols="30" rows="10"><?php echo ($Updateblog_data["content"]) ?></textarea>
                                    </div>
                                </div>

                                <div class="col-12 d-grid">
                                    <button class="fw-bold fs-1 btn btn-outline-info" onclick="UpdateBlog('<?php echo ($Updateblog_data['Bid']) ?>');">Update Post</button>
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