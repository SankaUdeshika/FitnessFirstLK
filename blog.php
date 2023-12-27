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

<body>

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

            <div class="col-12 text-center d-flex justify-content-center">
                <span>All</span>
                <span>Fitness</span>
                <span>Nutrition</span>
                <span>Archive</span>
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