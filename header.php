<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Header -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 headerCover d-lg-block d-none">
                <div class="row">

                    <div class="col-3 text-center LogoCover">
                        <span class="FitnesFirstTextLogo1white">FITNESS </span><span class="FitnesFirstTextLogored">FIRST LK</span>
                    </div>

                    <div class="col-7 text-center SectionCover">
                        <div class="row">
                            <div class="col-3">
                                <span>MEMBERSHIPS</span>
                            </div>
                            <div class="col-3">
                                <span>CLASSES</span>
                            </div>
                            <div class="col-3">
                                <span>FACULITIES</span>
                            </div>
                            <div class="col-3">
                                <span>BLOG</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-2 d-flex justify-content-center">
                        <img src="Resources/images/LOGO/Flex.png" class="FlexImage">
                    </div>

                </div>
            </div>
            <!-- small Screen -->
            <div class="col-12 headerCover d-lg-none d-blcok">
                <div class="row">

                    <div class="col-6 text-center LogoCover">
                        <span class="FitnesFirstTextLogo1white">FITNESS </span><span class="FitnesFirstTextLogored">FIRST LK</span>
                    </div>

                    <div class="col-6 d-flex justify-content-end text-white fs-1 fw-bold">
                        <button class="bg-transparent text-white border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop"><i class="bi bi-list"></i></button>
                    </div>

                    <div class="offcanvas offcanvas-top bg-dark" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                        <div class="offcanvas-header">
                            <div class="col-12 text-center LogoCover">
                                <span class="FitnesFirstTextLogo1white">FITNESS </span><span class="FitnesFirstTextLogored">FIRST LK</span>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>

                        </div>
                        <div class="offcanvas-body">
                            <div class="col-12 text-center SectionCover">
                                <div class="row">
                                    <div class="col-3">
                                        <span>MEMBERSHIPS</span>
                                    </div>
                                    <div class="col-3">
                                        <span>CLASSES</span>
                                    </div>
                                    <div class="col-3">
                                        <span>FACULITIES</span>
                                    </div>
                                    <div class="col-3">
                                        <span>BLOG</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>