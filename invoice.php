<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Invoice | JainNaturals</title>

    <link rel="stylesheet" href="css/other/style.css">
    <link rel="stylesheet" href="css/Bootstarp/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="icon" href="resources/Images/blacklogo.jfif">
</head>

<?php
session_start();
require "Connections/connection.php";
$Order_id = $_GET["id"];
?>

<body class="mt-2" style="background-color: #f7f7ff;">
    <div class="container-fluid" id="DownloadContent">
        <div class="row">

            <div class="col-12">
                <hr />
            </div>

            <div class="col-12 btn-toolbar justify-content-end">
                <button class="btn btn-danger me-2" onclick="downloadAsPDF();"><i class="bi bi-filetype-pdf"></i> Download as PDF</button>
            </div>

            <div class="col-12">
                <hr />
            </div>


            <div class="col-12" id="page">
                <div class="row">

                    <div class="col-6">
                        <div class="ms-5 invoiceHeaderImage"></div>
                    </div>

                    <div class="col-6">
                        <div class="row">
                            <div class="col-12 text-success text-decoration-underline text-end">
                                <h2>Jain Naturals</h2>
                            </div>
                            <div class="col-12 fw-bold text-end">
                                <span>85/5, Vihara Mawwatha, Bellanwila, Boralesgamuwa, Sri Lanka</span><br />
                                <span>070 646 4522</span><br />
                                <span>JainNaturals@gmail.com</span>
                            </div>
                        </div>
                    </div>


                    <div class="col-12">
                        <hr class="border border-1 border-primary" />
                    </div>


                    <!-- address  -->

                    <div class="col-12 mb-4">
                        <div class="row">

                            <?php
                            $customer_Rs = Database::search("SELECT * FROM `customer` INNER JOIN `invoice` ON
                                  `invoice`.`Customer_Nic` = `customer`.`Nic` 
                                  WHERE `invoice`.`Order_id`  = '" . $Order_id . "'");
                            $customer_data = $customer_Rs->fetch_assoc();

                            $address_rs = Database::search("SELECT * FROM `customer_adress` WHERE `Customer_Nic`='" . $customer_data["Nic"] . "'");
                            $address_data = $address_rs->fetch_assoc();




                            ?>

                            <script>
                                window.onload = function() {
                                    SendBuyEmailMessage('<?php echo $customer_data["Order_id"] ?>');
                                }
                            </script>

                            <div class="col-6">
                                <h5 class="fw-bold">INVOICE TO :</h5>
                                <h2><?php echo $customer_data["First_name"] . " " . $customer_data["Last_name"]; ?></h2>
                                <span><?php echo $address_data["Customer_Address"]; ?></span><br />
                                <span><?php echo $customer_data["Email"]; ?></span>
                            </div>

                            <?php
                            $invoice_rs = Database::search("SELECT * FROM `invoice` 
                            INNER JOIN `paymentmethod` ON `invoice`.`PaymentMethod` =`paymentmethod`.`pid`
                            INNER JOIN `product` ON `product`.`Product_id` = `invoice`.`Product_Product_id`
                             WHERE `Order_id`='" . $Order_id . "'");
                            $invoice_num = $invoice_rs->num_rows;

                            $invoice_data = $invoice_rs->fetch_assoc();

                            ?>
                            <div class="col-6 text-end mt-4">
                                <h1 class="text-success">INVOICE <?php echo $invoice_data["Invoice_id"]; ?></h1>
                                <span class="fw-bold">Data & Time of Invoice : </span>&nbsp;
                                <span class="fw-bold"><?php echo $invoice_data["Purchesed_datetime"]; ?></span>
                            </div>

                        </div>
                    </div>



                    <div class="col-12">
                        <table class="table">
                            <thead>
                                <tr class="border border-1 border-secondary">
                                    <th>#</th>
                                    <th>Order ID & Product</th>
                                    <th class="text-end">Unit Price</th>
                                    <th class="text-end">Quantity</th>
                                    <th class="text-end">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $GrandSub = 0;
                                $product_rs = Database::search("SELECT * FROM `invoice` INNER JOIN `product` ON
                                `product`.`Product_id` = `invoice`.`Product_Product_id`
                                 WHERE `Order_id`='" . $Order_id. "'");
                                 $product_num = $product_rs->num_rows;
                                for ($x = 0; $x < $product_num; $x++) {
                                    $product_data = $product_rs->fetch_assoc();
                                    $GrandSub = $GrandSub+($product_data["Price"]*$product_data["qty"]);
                                ?>
                                    <tr style="height: 72px;">
                                        <td class="bg-success text-white fs-3"><?php echo $invoice_data["Invoice_id"]; ?></td>
                                        <td>
                                            <span class="fw-bold text-success text-decoration-underline p-2"><?php echo $invoice_data["Order_id"]; ?></span><br />


                                            <span class="fw-bold text-success fs-3 p-2"><?php echo $product_data["Product_name"]; ?></span>
                                        </td>
                                        <td class="fw-bold fs-6 text-end pt-3 bg-secondary text-white">Rs. <?php echo $product_data["Price"]; ?> .00</td>
                                        <td class="fw-bold fs-6 text-end pt-3"><?php echo $invoice_data["qty"]; ?></td>
                                        <td class="fw-bold fs-6 text-end pt-3 bg-secondary text-white">Rs.<?php echo  $product_data["Price"] * $invoice_data["qty"]; ?>.00</td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                            <tfoot>


                                <tr>
                                    <td colspan="3" class="border-0"></td>
                                    <td class="fs-5 text-end fw-bold">Payment Method</td>
                                    <td class="text-end text-danger fw-bold"> <?php echo $invoice_data["method"]; ?></td>
                                </tr>

                                <tr>
                                    <td colspan="3" class="border-0"></td>
                                    <td class="fs-5 text-end fw-bold">SUBTOTAL</td>
                                    <td class="text-end">Rs. <?php echo $GrandSub; ?> .00</td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="border-0"></td>
                                    <td class="fs-5 text-end fw-bold border-primary">Delivery Fee</td>
                                    <td class="text-end border-primary">Rs. <?php echo $invoice_data["Delevery_Cost"]; ?> .00</td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="border-0"></td>
                                    <td class="fs-5 text-end fw-bold border-primary text-success">GRAND TOTAL</td>
                                    <td class="fs-5 text-end fw-bold border-primary text-success">Rs. <?php echo $invoice_data["Total_Cost"]; ?> .00</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>


                    <div class="col-12 mt-3 mb-3 border-0 border-start border-5 border-primary rounded" style="background-color: #e7f2ff;">
                        <div class="row">
                            <div class="col-12 mt-3 mb-3">
                                <label class="form-label fs-5 fw-bold">Thank You </label>
                                <br />
                                <label class="form-label fs-6">You can check your purchesed Items <a href="PurchesedItems.php">Click Here</a>.</label><br>
                                <label class="form-label fs-6" onclick="downloadAsPDF();">You Can download This Invoice As a PDF only .</label>
                                <!-- <label class="form-label fs-6" onclick="SendBuyEmailMessage('<?php echo $customer_data['Nic'] ?>');">You Can Get the Email from.</label><span style="color: lightblue;"><u>Click Here</u></span> -->

                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <hr class="border border-1 border-primary" />
                    </div>

                    <div class="col-12 text-center mb-3">
                        <label class="form-label fs-5 text-black-50 fw-bold">
                            Invoice was created on a computer and is valid without the Signature and Seal.
                        </label>
                    </div>




                </div>
            </div>




        </div>
    </div>
    <?php include "footer.php" ?>

    <script src="Js/other/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.0/jspdf.umd.min.js"></script>

</body>

</html>