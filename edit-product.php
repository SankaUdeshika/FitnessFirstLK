<?php
session_start();
require "Connections/FlexConnection.php";

$pid = $_GET["pid"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Edit Product - Dashboard Admin Template</title>
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:400,700" />
  <!-- https://fonts.google.com/specimen/Roboto -->
  <link rel="stylesheet" href="css/fontawesome.min.css" />
  <!-- https://fontawesome.com/ -->
  <link rel="stylesheet" href="jquery-ui-datepicker/jquery-ui.min.css" type="text/css" />
  <!-- http://api.jqueryui.com/datepicker/ -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <!-- https://getbootstrap.com/ -->
  <link rel="stylesheet" href="css/templatemo-style.css">
  <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
</head>

<body>
  <nav class="navbar navbar-expand-xl">
    <div class="container h-100">
      <a class="navbar-brand" href="adminindex.php">
        <h1 class="tm-site-title mb-0">Product Admin </h1>
      </a>
      <button
        class="navbar-toggler ml-auto mr-0"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation">
        <i class="fas fa-bars tm-nav-icon"></i>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto h-100">
          <li class="nav-item">
            <a class="nav-link" href="adminindex.php">
              <i class="fas fa-tachometer-alt"></i> Dashboard
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbarDropdown"
              role="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false">
              <i class="far fa-file-alt"></i>
              <span> Orders <i class="fas fa-angle-down"></i> </span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="newordermanage.php">All Orders</a>
              <a class="dropdown-item" href="#">Confirm Orders</a>
              <a class="dropdown-item" href="#">Pending Orders</a>
              <a class="dropdown-item" href="#">Canceled Orders</a>

            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="products.php">
              <i class="fas fa-shopping-cart"></i> Products
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="accounts.html">
              <i class="far fa-user"></i> Accounts
            </a>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbarDropdown"
              role="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false">
              <i class="fas fa-cog"></i>
              <span> Settings <i class="fas fa-angle-down"></i> </span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Profile</a>
              <a class="dropdown-item" href="#">Billing</a>
              <a class="dropdown-item" href="#">Customize</a>
            </div>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link d-block" href="login.html">
              Admin, <b>Logout</b>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container tm-mt-big tm-mb-big">
    <div class="row">
      <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
        <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
          <div class="row">
            <div class="col-12">
              <h2 class="tm-block-title d-inline-block">Edit Product :- <?php echo $pid ?></h2>
            </div>
          </div>

          <?php
          $Flex_rs =  FlexDatabase::search("SELECT * FROM `product` INNER JOIN `product_images` ON `product_images`.`product_Product_id` = `product`.`Product_id` WHERE `Product_id` = '" . $pid . "'  ");
          $flex_num = $Flex_rs->num_rows;

          $flex_data = $Flex_rs->fetch_assoc();

          ?>

          <div class="row tm-edit-product-row">
            <div class="col-xl-6 col-lg-6 col-md-12">

              <div class="form-group mb-3">
                <label
                  for="name">Product Name
                </label>
                <input
                  id="ProductName<?php echo ($flex_data["Product_id"]) ?>"
                  name="name"
                  type="text"
                  value="<?php echo $flex_data["Product_name"] ?>"
                  class="form-control validate" />
              </div>
              <div class="form-group mb-3">
                <label
                  for="description">Description</label>
                <textarea name="" class="form-control" id="ProductDescription<?php echo ($flex_data["Product_id"]) ?>" cols="30" rows="10"> <?php echo ($flex_data["Description"]) ?> </textarea>
              </div>
              <div class="form-group mb-3">
                <label
                  for="category">Flavor</label>
                <select
                  class="custom-select tm-select-accounts"
                  id="addFlavourSelector<?php echo ($flex_data["Product_id"]) ?>" onchange="selectAndAddFlavours('<?php echo ($flex_data['Product_id']) ?>');">
                  <option value="0">Add Flavor</option>
                  <?php
                  $FlvaourSelect_rs = FlexDatabase::search("SELECT * FROM `flavors` ");
                  $FlvaourSelect_num = $FlvaourSelect_rs->num_rows;

                  for ($x = 0; $x < $FlvaourSelect_num; $x++) {
                    $FlvaourSelect_data = $FlvaourSelect_rs->fetch_assoc();
                  ?>
                    <option value="<?php echo ($FlvaourSelect_data["flavour_id"]) ?>"><?php echo ($FlvaourSelect_data["flavour_name"]) ?></option>
                  <?php
                  }
                  ?>
                </select>
                <?php
                $Flvaour_rs = FlexDatabase::search("SELECT * FROM `product_flavour`  INNER JOIN `flavors` ON `flavors`.`flavour_id` = `product_flavour`.`pf_flavour_id` WHERE `pf_product_id` = '" . $flex_data["Product_id"] . "' ");
                $Flvaour_num = $Flvaour_rs->num_rows;

                for ($x = 0; $x < $Flvaour_num; $x++) {
                  $Flvaour_data = $Flvaour_rs->fetch_assoc();
                ?>
                  <button class="btn btn-danger mt-2" onclick="DeleteFlavouronUpdateProduct('<?php echo ($flex_data['Product_id']) ?>','<?php echo ($Flvaour_data['flavour_id']) ?>');"><?php echo ($Flvaour_data["flavour_name"]) ?></button>
                <?php
                }
                ?>
              </div>
              <div class="row">
                <div class="form-group mb-3 col-xs-12 col-sm-6">
                  <label
                    for="expire_date">Quanitity
                  </label>
                  <input
                    id="ProductQty<?php echo ($flex_data["Product_id"]) ?>"
                    min="0"
                    type="number"
                    value="<?php echo ($flex_data['Qty']) ?>"
                    class="form-control validate"
                    data-large-mode="true" />
                </div>
                <div class="form-group mb-3 col-xs-12 col-sm-6">
                  <label
                    for="stock">Price
                  </label>
                  <input
                    id="ProductPrice<?php echo ($flex_data["Product_id"]) ?>"
                    type="text"
                    value="<?php echo ($flex_data['Price']) ?>"
                    class="form-control validate" />
                </div>
              </div>

            </div>
            <!-- MAIN IMAGE -->
            <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
              <div class="tm-product-img-edit mx-auto">
                <img src="<?php echo ($flex_data["Main_Image"]) ?>" alt="Product main image" class="img-fluid d-block mx-auto" id="MainView<?php echo ($flex_data["Product_id"]) ?>">
                <!-- <i
                  class="fas fa-cloud-upload-alt tm-upload-icon"
                  onclick="document.getElementById('fileInput').click();"></i> -->
              </div>
              <div class="custom-file mt-3 mb-3">
                <input id="Main<?php echo ($flex_data["Product_id"]) ?>" onchange="ChangeUpdateMainImage('<?php echo ($flex_data['Product_id']) ?>');" type="file" style="display:none;" />
                <label for="Main<?php echo ($flex_data["Product_id"]) ?>" class="btn btn-primary btn-block mx-auto">CHANGE MAIN IMAGE NOW</label>
              </div>
            </div>




            <!-- SECOND IMAGE -->
            <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
              <div class="tm-product-img-edit mx-auto">
                <img src="<?php echo ($flex_data["Seciond_Image"]) ?>" alt="Product main image" class="img-fluid d-block mx-auto" id="SecondView<?php echo ($flex_data["Product_id"]) ?>">
                <!-- <i
                  class="fas fa-cloud-upload-alt tm-upload-icon"
                  onclick="document.getElementById('fileInput').click();"></i> -->
              </div>
              <div class="custom-file mt-3 mb-3">
                <input id="Second<?php echo ($flex_data["Product_id"]) ?>" onchange="ChangeUpdateSecondImage('<?php echo ($flex_data['Product_id']) ?>');" type="file" style="display:none;" />
                <label for="Second<?php echo ($flex_data["Product_id"]) ?>" class="btn btn-primary btn-block mx-auto">CHANGE SECOND IMAGE NOW</label>
              </div>
            </div>



            <!-- THIRD IMAGE -->
            <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
              <div class="tm-product-img-edit mx-auto">
                <img src="<?php echo ($flex_data["Third_Image"]) ?>" alt="Product main image" class="img-fluid d-block mx-auto" id="ThirdView<?php echo ($flex_data["Product_id"]) ?>">
                <!-- <i
                  class="fas fa-cloud-upload-alt tm-upload-icon"
                  onclick="document.getElementById('fileInput').click();"></i> -->
              </div>
              <div class="custom-file mt-3 mb-3">
                <input id="third<?php echo ($flex_data["Product_id"]) ?>" onchange="ChangeUpdateThirdImage('<?php echo ($flex_data['Product_id']) ?>');" type="file" style="display:none;" />
                <label for="third<?php echo ($flex_data["Product_id"]) ?>" class="btn btn-primary btn-block mx-auto">CHANGE THIRD IMAGE NOW</label>
              </div>
            </div>



            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-block text-uppercase" onclick="ChangeProductInfo('<?php echo ($flex_data['Product_id']) ?>');">Update Now</button>
              <button type="submit" class="btn btn-danger btn-block text-uppercase" onclick="DeleteProduct('<?php echo ($flex_data['Product_id']) ?>');">Delete Now</button>
            </div>


          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="tm-footer row tm-mt-small">
    <div class="col-12 font-weight-light">
      <p class="text-center text-white mb-0 px-4 small">
        Copyright &copy; <b>2018</b> All rights reserved.

        Design: <a rel="nofollow noopener" href="https://www.linkedin.com/in/sanka-udeshika-6298311bb/" class="tm-footer-link">Sanka Udeshika</a>

      </p>
    </div>
  </footer>
  <!-- MYsCRIPT F -->
  <script src="js/bootstrap.bundle.js"></script>
  <script src="js/script.js"></script>

  <script src="js/jquery-3.3.1.min.js"></script>
  <!-- https://jquery.com/download/ -->
  <script src="jquery-ui-datepicker/jquery-ui.min.js"></script>
  <!-- https://jqueryui.com/download/ -->
  <script src="js/bootstrap.min.js"></script>
  <!-- https://getbootstrap.com/ -->
  <script>
    $(function() {
      $("#expire_date").datepicker({
        defaultDate: "10/22/2020"
      });
    });
  </script>
</body>

</html>