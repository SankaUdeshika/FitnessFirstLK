<?php
session_start();
require "Connections/connection.php";

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

                        <div class="container" style="background-color: white ;">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="section-title">
                                        <span>Monthly Deals</span>
                                        <h2 class="text-dark">Choose your Package</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <?php


                                // Handle update submission
                                if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["update_package"])) {
                                    $id = Database::escape($_POST["id"]);
                                    $location = Database::escape($_POST["location"]);
                                    $price = Database::escape($_POST["price"]);
                                    $discount = Database::escape($_POST["discount"]);
                                    $details = $_POST["details"];

                                    // Update package
                                    Database::iud("UPDATE `member_package` SET `location` = '$location', `membership_price` = '$price', `discount_text` = '$discount' WHERE `member_ship_id` = '$id'");

                                    // Replace details
                                    Database::iud("DELETE FROM `membership_details` WHERE `member_package_member_ship_id` = '$id'");
                                    foreach ($details as $detail) {
                                        $escapedDetail = Database::escape($detail);
                                        Database::iud("INSERT INTO `membership_details` (`detail`, `member_package_member_ship_id`) VALUES ('$escapedDetail', '$id')");
                                    }

                                    echo "<script>alert('Package ID $id updated successfully!');</script>";
                                }

                                $result = Database::search("SELECT * FROM `member_package` WHERE `member_ship_id` IN (1, 2, 3)");

                                while ($row = $result->fetch_assoc()) {
                                    $packageId = $row["member_ship_id"];
                                    $detailsResult = Database::search("SELECT `detail` FROM `membership_details` WHERE `member_package_member_ship_id` = $packageId");
                                ?>
                                    <div class="col-lg-4 col-md-8">
                                        <form method="POST">
                                            <div class="ps-item text-center" style="text-align: center;">
                                                <h3>
                                                    <input type="text" name="discount" value="<?php echo htmlspecialchars($row["discount_text"]); ?>"
                                                        style="border: none; background: transparent; width: 100%; font-size: 30px; text-align: center;" />
                                                </h3>
                                                <div class="pi-price" style="margin-bottom: 10px;">
                                                    <h2 class="text-danger fw-bold" style="font-size: 40px;">
                                                        Rs.
                                                        <input type="number" name="price" value="<?php echo $row["membership_price"]; ?>"
                                                            class="form-control-plaintext d-inline text-danger fw-bold"
                                                            style="border: none; background: transparent; width: 130px; font-size: 40px; text-align: center;" />/=
                                                    </h2>
                                                    <span>
                                                        <input type="text" name="location" value="<?php echo htmlspecialchars($row["location"]); ?>"
                                                            style="border: none; background: transparent; width: 100%; text-align: center;" />
                                                    </span>
                                                </div>
                                                <ul style="padding: 0; list-style-position: inside;">
                                                    <?php
                                                    while ($detailRow = $detailsResult->fetch_assoc()) {
                                                        echo '<li><input type="text" name="details[]" value="' . htmlspecialchars($detailRow["detail"]) . '" style="border: none; background: transparent; width: 100%; text-align: center;"></li>';
                                                    }
                                                    ?>
                                                </ul>
                                                <input type="hidden" name="id" value="<?php echo $packageId; ?>">
                                                <button type="submit" name="update_package"class="btn btn-dark text-uppercase fw-bold py-2 mt-3" style="width: 100%; display: block; margin: 0 auto; border-radius: 0;">
                                                    Update Now
                                                </button>

                                            </div>
                                        </form>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>




                        </div>
                    </div>

                    <!-- content -->

                    <div class="col-12 p-4">
                        <div class="row">
                            <?php
                            $member_package = Database::search("SELECT * FROM `member_package`");
                            $member_package_num = $member_package->num_rows;
                            ?>

                            <table class="table table-bordered table-striped table-hover">
                                <thead class="table-dark">
                                    <tr>
                                        <th>member_ship_id</th>
                                        <th>location</th>
                                        <th>membership_price</th>
                                        <th>PacakageName</th>
                                        <th>workoutTime</th>
                                        <th>duration</th>
                                        <th>Update / Insert</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    for ($i = 0; $i < $member_package_num; $i++) {
                                        $member_package_data = $member_package->fetch_assoc();
                                    ?>
                                        <tr>
                                            <td contenteditable="false"><?php echo $member_package_data["member_ship_id"]; ?></td>
                                            <td contenteditable="true"><?php echo $member_package_data["location"]; ?></td>
                                            <td contenteditable="true"><?php echo $member_package_data["membership_price"]; ?></td>
                                            <td contenteditable="true"><?php echo $member_package_data["PacakageName"]; ?></td>
                                            <td contenteditable="true"><?php echo $member_package_data["workoutTime"]; ?></td>
                                            <td contenteditable="true"><?php echo $member_package_data["duration"]; ?></td>
                                            <td><button class="btn btn-primary btn-sm" onclick="updateRow(this)">Update</button></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>

                                    <tr>
                                        <td contenteditable="false"></td>
                                        <td contenteditable="true"></td>
                                        <td contenteditable="true"></td>
                                        <td contenteditable="true"></td>
                                        <td contenteditable="true"></td>
                                        <td contenteditable="true"></td>
                                        <td><button class="btn btn-danger btn-sm" onclick="InsertRow(this)">Insert</button></td>
                                    </tr>

                                </tbody>
                            </table>
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