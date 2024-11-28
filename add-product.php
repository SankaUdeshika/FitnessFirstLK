<?php
session_start();
require "Connections/FlexConnection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Add Product - Dashboard HTML Template</title>
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:400,700" />
  <!-- https://fonts.google.com/specimen/Roboto -->
  <link rel="stylesheet" href="css/fontawesome.min.css" />
  <!-- https://fontawesome.com/ -->
  <link
    rel="stylesheet"
    href="jquery-ui-datepicker/jquery-ui.min.css"
    type="text/css" />
  <!-- http://api.jqueryui.com/datepicker/ -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <!-- https://getbootstrap.com/ -->
  <link rel="stylesheet" href="css/templatemo-style.css" />
  <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
</head>

<body>
  <nav class="navbar navbar-expand-xl">
    <div class="container h-100">
      <a class="navbar-brand" href="index.html">
        <h1 class="tm-site-title mb-0">Product Admin</h1>
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
            <a class="nav-link" href="index.html">
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
              <a class="dropdown-item" href="#">All Orders</a>
              <a class="dropdown-item" href="#">Weekly Report</a>
              <a class="dropdown-item" href="#">Yearly Report</a>
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
              <h2 class="tm-block-title d-inline-block">Add Product</h2>
            </div>
          </div>
          <div class="row tm-edit-product-row">
            <div class="col-xl-6 col-lg-6 col-md-12">
              <div class="form-group mb-3">
                <label for="name">Product Name </label>
                <input
                  id="ProductName"
                  name="ProductName"
                  type="text"
                  class="form-control validate"
                  required
                  placeholder="Product Name" />
              </div>
              <div class="form-group mb-3">
                <label for="description">Description</label>
                <textarea
                  id="Description"
                  class="form-control validate"
                  rows="3"
                  placeholder="Description"></textarea>
              </div>
              <!-- Flavor -->
              <div class="form-group mb-3">
                <label for="category">Flavor</label>
                <div class="col-12 text-center text-white mt-4">
                  <span>Type New Flavour Or Select a Flavor</span>
                </div>
                <div class="col-12 mb-3 mt-3">
                  <input type="text" class="form-control validate" id="NewFlavour" placeholder="or Type new flavor">
                </div>
                <select
                  class="custom-select tm-select-accounts"
                  id="FlavourSelector">
                  <option selected value="0">Select Flavor</option>
                  <?php
                  $productFlavour_rs = FlexDatabase::search("SELECT * FROM `flavors` ");
                  $productFlavour_num = $productFlavour_rs->num_rows;

                  for ($x = 0; $x < $productFlavour_num; $x++) {
                    $ProductFlavour_data = $productFlavour_rs->fetch_assoc();
                  ?>
                    <option value="<?php echo ($ProductFlavour_data["flavour_name"]) ?>"><?php echo ($ProductFlavour_data["flavour_name"]) ?></option>
                  <?php
                  }

                  ?>
                </select>

              </div>
              <!-- category -->
              <div class="form-group mb-3">
                <label for="category">Category</label>
                <select
                  class="custom-select tm-select-accounts"
                  id="ProductCategorySelector">
                  <option selected value="0">Select Category</option>
                  <?php
                  $productCategory_rs = FlexDatabase::search("SELECT * FROM `category` ");
                  $productCategory_num = $productCategory_rs->num_rows;

                  for ($x = 0; $x < $productCategory_num; $x++) {
                    $ProductCategory_data = $productCategory_rs->fetch_assoc();
                  ?>
                    <option value="<?php echo ($ProductCategory_data["c_id"]) ?>"><?php echo ($ProductCategory_data["category_name"]) ?></option>
                  <?php
                  }

                  ?>
                </select>
              </div>

              <div class="row">
                <div class="form-group mb-3 col-xs-12 col-sm-6">
                  <label for="expire_date">Quantity </label>
                  <input
                    id="Quanitity"
                    name="Quanitity"
                    type="text"
                    class="form-control validate"
                    min="1"
                    placeholder="1"
                    data-large-mode="true" />
                </div>
                <div class="form-group mb-3 col-xs-12 col-sm-6">
                  <label for="stock">Price </label>
                  <input
                    id="price"
                    name="price"
                    type="text"
                    class="form-control validate"
                    placeholder="Price" />
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
              <!-- image1 main image -->
              <div class="tm-product-img-dummy mx-auto">
                <img src="Resources/images/LOGO/addImage (2).png" id="MainImage" width="70%" alt="">
              </div>
              <div class="custom-file mt-3 mb-3">
                <input id="AddPrductimginput" onchange="ChangeMainProductViewImage();" type="file" style="display: none" />
                <label class="btn btn-primary btn-block mx-auto" for="AddPrductimginput">ADD MAIN IMAGE</label>
              </div>

              <!-- image2 SECOND image -->
              <div class="tm-product-img-dummy mx-auto">
                <img src="Resources/images/LOGO/addImage (2).png" id="SecondImage" width="70%" alt="">
              </div>
              <div class="custom-file mt-3 mb-3">
                <input id="AddSecondPrductimginput" onchange="ChangeSecondProductViewImage();" type="file" style="display: none" />
                <label class="btn btn-primary btn-block mx-auto" for="AddSecondPrductimginput">ADD SECOND IMAGE</label>
              </div>


              <!-- image3 THIRD image -->
              <div class="tm-product-img-dummy mx-auto">
                <img src="Resources/images/LOGO/addImage (2).png" id="ThirdImage" width="70%" alt="">
              </div>
              <div class="custom-file mt-3 mb-3">
                <input id="AddThirdPrductimginput" onchange="ChangeThirrdProductViewImage();" type="file" style="display: none" />
                <label class="btn btn-primary btn-block mx-auto" for="AddThirdPrductimginput">ADD SECOND IMAGE</label>
              </div>

            </div>







            <div class="col-12">
              <button
                type="submit"
                class="btn btn-primary btn-block text-uppercase" onclick="AddFlexProduct();">
                Add Product Now
              </button>
            </div>




          </div>
          <hr color="white">

          <div class="row">
            <div class="col-12 text-center">
              <h3 class="text-white fw-bold fs-3"> Category Adding and Delete</h3>
            </div>

            <div class="col-10">
              <input type="text" class="form-control" placeholder="Add Category" id="addNewCategory">
            </div>
            <div class="col-2">
              <button class="btn btn-primary" onclick="adminaddnewCategory();">Add </button>
            </div>
          </div>

          <div class="col-12 mt-3 ">
            <select name="" id="ProductCategorySelector" class="custom-select tm-select-accounts">
              <option value="0">Select Category</option>
              <?php
              $productCategory_rs = FlexDatabase::search("SELECT * FROM `category` ");
              $productCategory_num = $productCategory_rs->num_rows;

              for ($x = 0; $x < $productCategory_num; $x++) {
                $ProductCategory_data = $productCategory_rs->fetch_assoc();
              ?>
                <option value="<?php echo ($ProductCategory_data["c_id"]) ?>"><?php echo ($ProductCategory_data["category_name"]) ?></option>
              <?php
              }
              ?>
            </select>
          </div>

          <hr color="white">

          <div class="col-12 text-center">
            <h3 class="text-white fw-bold fs-3"> Delete Flavour</h3>
          </div>

          <div class="col-6 mt-3">
            <div class="row">
              <div class="col-12">
                <select name="" id="FlavourSelector" class="custom-select tm-select-accounts">
                  <option value="0">Select Flavoyr</option>
                  <?php
                  $productFlavour_rs = FlexDatabase::search("SELECT * FROM `flavors` ");
                  $productFlavour_num = $productFlavour_rs->num_rows;

                  for ($x = 0; $x < $productFlavour_num; $x++) {
                    $ProductFlavour_data = $productFlavour_rs->fetch_assoc();
                  ?>
                    <option value="<?php echo ($ProductFlavour_data["flavour_name"]) ?>"><?php echo ($ProductFlavour_data["flavour_name"]) ?></option>
                  <?php
                  }
                  ?>
                </select>
              </div>
              <div class="col-12">
                <button class="btn btn-danger" onclick="DeleteFlavourOnProductAdding()">Delete Flavour</button>
              </div>
            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
  <footer class="tm-footer row tm-mt-small">
    <div class="col-12 font-weight-light">
      <p class="text-center text-white mb-0 px-4 small">
        Copyright &copy; <b>2018</b> All rights reserved. Design:
        <a
          rel="nofollow noopener"
          href="https://templatemo.com"
          class="tm-footer-link">Template Mo</a>
      </p>
    </div>
  </footer>


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
      $("#expire_date").datepicker();
    });
  </script>
</body>

</html>