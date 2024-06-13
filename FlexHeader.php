<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flex Home | Fitness First LK</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- hedderCover -->
            <div class="col-12 bg-black text-white hedderCover">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-lg-1   d-lg-block d-none d-flex  align-items-center justify-content-end">
                                <img src="Resources/images/LOGO/FlexRedLogo.png" class="FlexImage" alt="">
                            </div>
                            <div class="col-lg-1  col-3 d-flex  align-items-center justify-content-start">
                                <img src="Resources/images/LOGO/NewFitnessFirst_LOGO.svg" class="FlexImage" onclick="window.location='index.php'" style="width: 100%;" alt="">
                            </div>
                            <!-- SmallSceen Flex Logo Image -->
                            <div class="col-6   d-lg-none d-block d-flex justify-content-center bgdanger">
                                <img src="Resources/images/LOGO/FlexTransparent.png" class="" width="150%" alt="">
                            </div>
                            <!-- Flex Tabs -->
                            <div class="col-lg-4 offset-2 d-lg-block d-none offset col-8 text-center ">
                                <div class="row">
                                    <div class="col-3 mt-5 text-center">
                                        <span class=" FlexHeadrTab" onclick="window.location = 'flexhome.php'">Home</span>
                                    </div>
                                    <div class="col-3 mt-5 text-center">
                                        <span class=" FlexHeadrTab" onclick="window.location = 'FlexCatelog.php'">Catalog</span>
                                    </div>
                                    <div class="col-3 mt-5 text-center">
                                        <span class=" FlexHeadrTab" onclick="window.location = 'flexhome.php'">Gift Pack</span>
                                    </div>
                                    <div class="col-3 mt-5 text-center">
                                        <span class=" FlexHeadrTab" onclick="window.location = 'flexhome.php'">Merch</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Drop Down Search -->
                            <div class="col-lg-1  offset-lg-2 offset-0 col-1 d-flex  align-items-center justify-content-end">

                                <div class="dropdown">
                                    <span class="fs-1 fw-bold offset-5 FlexHeadrTab " data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside"><i class="bi bi-search"></i></span>

                                    <div class="dropdown-menu p-4 bg-dark text-white">
                                        <div class="row">

                                            <div class="mb-1">
                                                <label for="exampleDropdownFormEmail2" class="form-label">Product Name</label>
                                                <input type="text" class="form-control" id="SearchProductName" placeholder="Name">
                                            </div>
                                            <button class="btn btn-danger" onclick="SearchProductByName();">Search</button>

                                            <div class="col-12">
                                                <hr class="text-white">
                                            </div>

                                            <div class="col-12 mb-2">
                                                <div class="row">
                                                    <div class="col-12 text-center fw-bold">
                                                        <label for="exampleDropdownFormEmail2" class="form-label">Price</label>
                                                    </div>
                                                    <div class="col-6">
                                                        <label for="exampleDropdownFormEmail2" class="form-label">Min</label>
                                                        <input type="email" class="form-control d-grid" id="SearchMinPrice" placeholder="0">
                                                    </div>
                                                    <div class="col-6">
                                                        <label for="exampleDropdownFormEmail2" class="form-label">Max</label>
                                                        <input type="email" class="form-control d-grid" id="z" placeholder="0">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 mb-1 d-grid">
                                                <button type="submit" class="btn btn-danger fs-6" onclick="SearchProductByPrice();">Search</button>
                                            </div>

                                            <div class="col-12 d-grid">
                                                <button type="submit" class="btn btn-secondary fs-6" onclick="window.location.reload();">Refresh</button>
                                            </div>



                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1 col-2 text-end d-flex align-items-center ">
                                <?php
                                // Show Cart Number Icons
                                $Cookie_rs  = FlexDatabase::search("SELECT * FROM `cookie` WHERE `Cookie` = '" . $_COOKIE["User"] . "' ");
                                $Cookie_num = $Cookie_rs->num_rows;
                                if ($Cookie_num == 1) {
                                    $Cookie_data = $Cookie_rs->fetch_assoc();
                                    $cartBatch_rs = FlexDatabase::search("SELECT * FROM `cart` WHERE `Cookie_C_id` = '" . $Cookie_data["C_id"] . "' ");
                                    $cartBatch_num = $cartBatch_rs->num_rows;
                                ?>
                                    <span class="fs-1 fw-bold offset-5 FlexHeadrTab" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop"><i class="bi bi-cart4"></i></span>
                                    <small class="text-center text-danger"><?php echo ($cartBatch_num) ?></small>
                                <?php
                                } else {
                                ?>
                                    <span class="fs-1 fw-bold offset-5 FlexHeadrTab" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop"><i class="bi bi-cart4"></i></span>
                                <?php
                                }
                                ?>
                            </div>
                            <div class="col-12  text-center d-lg-none d-block">
                                <span class="fs-1 fw-bold text-white" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="true" aria-controls="collapseExample"><i class="bi bi-list"></i></span>
                                <div class="collapse position-absolute" style="width: 100%;" id="collapseExample">
                                    <div class="card card-body " style="background-color: red; width: 100%;">

                                        <button type="button" class="btn-close btn-close-white" aria-label="Close" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="true" aria-controls="collapseExample"></button>
                                        <hr>
                                        <?php
                                        $Category_rs = FlexDatabase::search("SELECT * FROM `category`");
                                        $Category_num = $Category_rs->num_rows;
                                        for ($x = 0; $x < $Category_num; $x++) {
                                            $Category_data = $Category_rs->fetch_assoc();
                                        ?>
                                            <span class="mb-2 fw-bold" onclick="smallScreenCategorySearch('<?php echo ($Category_data['category_name']) ?>');" value=""><?php echo ($Category_data["category_name"]) ?></span>
                                        <?php
                                        }
                                        ?>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</body>

</html>