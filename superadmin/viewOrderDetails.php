<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("../vendor/link.php");
    $inv = $_GET["id"];
    $dinv = getInvoiceById($inv);
    ?>
</head>

<body>
    <?php include("header.php"); ?>
    <div class="container mt-5 mb-5">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-6 ">
                        <h4><button class="btn btn-secondary">Invoice No:</button> <span class="text-success p-2" style="font-weight:bold">
                            <?php echo $dinv["invoiceno"]; ?>
                        </span></h4>
                    </div>
                    <div class="col-6 ">
                       <h4 class="text-right"><button class="btn btn-secondary">Order No:</button> <span class="text-success p-2" style="font-weight:bold">
                            <?php echo $dinv["orderno"]; ?>
                        </span></h4>
                    </div>

                    <div class="col-12 ">

                        <table class="table table-stripped">
                            <tr>
                                <td>S.No</td>
                                <td>Product Name</td>
                                <td>Sale Price</td>
                                <td>Quantity</td>
                                <td>Sub Total</td>
                                <td>GST</td>
                                <td>Grand Total</td>
                            </tr>
                            <?php
                        $rs = getOrderListByOrderNo($dinv["orderno"]);
                        while($data = mysqli_fetch_assoc($rs)):
                        $dpro = getProdById($data["productid"]);
                        ?>
                            <tr>
                                <td><?php echo $data["id"]; ?></td>

                                <td><?php echo $dpro["name"]; ?></td>
                                <td><?php echo $data["saleprice"]; ?></td>
                                <td><?php echo $data["qty"]; ?></td>
                                <td><?php echo $data["subtotal"]; ?></td>
                                <td><?php echo $data["gst"]; ?></td>
                                <td><?php echo $data["grandtotal"]; ?></td>



                            </tr>
                            <?php endwhile; ?>

                        </table>




                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>