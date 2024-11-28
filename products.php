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
  <title>Product Page - Admin </title>
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:400,700" />
  <!-- https://fonts.google.com/specimen/Roboto -->
  <link rel="stylesheet" href="css/fontawesome.min.css" />
  <!-- https://fontawesome.com/ -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <!-- https://getbootstrap.com/ -->
  <link rel="stylesheet" href="css/templatemo-style.css">
  <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
</head>

<body id="reportsPage">
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
              <a class="dropdown-item" href="pendingordermanagement.php">Pending Orders</a>
              <a class="dropdown-item" href="confirmordermanagement.php">Confirm Orders</a>
              <a class="dropdown-item" href="canceledordermanagement.php">Canceled Orders</a>
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
  <div class="container mt-5">
    <div class="row tm-content-row">
      <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 tm-block-col">
        <div class="tm-bg-primary-dark tm-block tm-block-products">
          <div class="tm-product-table-container">
            <table class="table table-hover tm-table-small tm-product-table">
              <thead>
                <tr>
                  <!-- <th scope="col">&nbsp;</th> -->
                  <th scope="col">ID</th>
                  <th scope="col">PRODUCT NAME</th>
                  <th scope="col">DESCRIPTION</th>
                  <th scope="col">Quantity</th>
                  <th scope="col">Price</th>
                  <th scope="col">&nbsp;</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $Flex_rs =  FlexDatabase::search("SELECT * FROM `product` INNER JOIN `product_images` ON `product_images`.`product_Product_id` = `product`.`Product_id`  ");
                $flex_num = $Flex_rs->num_rows;

                for ($i = 0; $i < $flex_num; $i++) {
                  $flex_data = $Flex_rs->fetch_assoc();
                ?>
                  <tr onclick="window.location='edit-product.php?pid=<?php echo ($flex_data['Product_id']) ?>'">
                    <td><?php echo ($flex_data["Product_id"]) ?></td>
                    <td><?php echo ($flex_data["Product_name"]) ?></td>
                    <td><?php echo ($flex_data["Description"]) ?></td>
                    <td><?php echo ($flex_data["Qty"]) ?></td>
                    <td><?php echo ($flex_data["Price"]) ?></td>
                  </tr>

                <?php
                }
                ?>
              </tbody>
            </table>
          </div>
          <!-- table container -->
          <a
            href="add-product.php"
            class="btn btn-primary btn-block text-uppercase mb-3">Add new product</a>
          <!-- <button class="btn btn-primary btn-block text-uppercase">
            Delete selected products
          </button> -->
        </div>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 tm-block-col">
        <div class="tm-bg-primary-dark tm-block tm-block-product-categories">
          <h2 class="tm-block-title">Product Flavours</h2>
          <div class="tm-product-table-container">
            <table class="table tm-table-small tm-product-table">
              <tbody>
                <?php
                $productCategory_rs = FlexDatabase::search("SELECT * FROM `flavors` ");
                $productCategory_num = $productCategory_rs->num_rows;

                for ($x = 0; $x < $productCategory_num; $x++) {
                  $ProductCategory_data = $productCategory_rs->fetch_assoc();
                ?>
                  <tr>
                    <td class="tm-product-name"><?php echo $ProductCategory_data["flavour_name"] ?></td>
                    <td class="text-center">
                      <a class="tm-product-delete-link" onclick="DeleteFlavourOnProductpage('<?php echo $ProductCategory_data['flavour_name'] ?>')">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>
                <?php
                }
                ?>
              </tbody>
            </table>
          </div>
          <!-- table container -->
          <button class="btn btn-primary btn-block text-uppercase mb-3">
            Add new category
          </button>
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


  <!-- My Scripts -->
  <script src="js/bootstrap.bundle.js"></script>
  <script src="js/script.js"></script>

  <script src="js/jquery-3.3.1.min.js"></script>
  <!-- https://jquery.com/download/ -->
  <script src="js/bootstrap.min.js"></script>
  <!-- https://getbootstrap.com/ -->
  <script>
    $(function() {
      $(".tm-product-name").on("click", function() {
        window.location.href = "edit-product.html";
      });
    });
  </script>
</body>

</html>