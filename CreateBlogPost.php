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



                        <!-- content -->

                        <div class="col-12 ">
                            <div class="row g-2">

                                <div class="col-12 text-center">
                                    <h1>Create a New Blog Post</h1>
                                </div>

                                <div class="col-12 d-flex  justify-content-center">
                                    <input type="text" class="form-control" placeholder="Blog Name" id="blogName">
                                </div>

                                <div class="col-6">
                                    <div class="col-12">
                                        <span>Select Category</span>

                                        <select name="" class="form-select" id="Category">
                                            <option value="0">Select Category</option>
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
                                            <img src="Resources/images/LOGO/addImage (2).png" id="Cimage" style="width: 50%;" alt="">
                                        </div>
                                        <div class="col-12 d-flex justify-content-center mt-4 ">
                                            <input type="file" onchange="BlogViewImage();" id="AddBlogImage" class="visually-hidden">
                                            <label for="AddBlogImage" class="btn btn-primary">Select Cover Image</label>
                                        </div>
                                    </div>
                                </div>
                                <hr>

                                <div class="col-6">
                                    <div class="col-12">
                                        <span class="fw-bold">Author</span>
                                    </div>
                                    <div class="col-6">
                                        <span>Add Author Image</span>
                                    </div>

                                    <div class="col-12 d-flex  justify-content-center">
                                        <input type="file" class="form-control" id="authorImage">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="col-6 mt-4">
                                        <span>Add Author Name</span>
                                    </div>
                                    <div class="col-12 d-flex  justify-content-center">
                                        <input type="text" class="form-control" placeholder="Author Name" id="authorName">
                                    </div>
                                </div>

                                <hr>

                                <div class="col-6">
                                    <div class="row">


                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-12">
                                                    <span class="fw-bold">Contents</span>
                                                </div>
                                                <div class="col-12">
                                                    <textArea class="form-control" id="content1"></textArea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-12">
                                                    <span class="fw-bold" >Contents</span>
                                                </div>
                                                <div class="col-12">
                                                    <textArea class="form-control" id="content2"></textArea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-12">
                                                    <span class="fw-bold" >Contents</span>
                                                </div>
                                                <div class="col-12">
                                                    <textArea class="form-control" id="content3"></textArea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-grid">
                                    <button class="fw-bold fs-1 btn btn-dark " onclick="AddBlog();">Publish Post</button>
                                </div>
                                            
                            </div>
                        </div>

                    </div>
                </div>
            </div>



            <script src="js/bootstrap.js"></script>
            <script src="js/script.js"></script>
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