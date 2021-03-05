<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("../vendor/link.php"); ?>
</head>

<body>
    <?php include("header.php"); ?>
    <div class="container mt-5 mb-5">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 ">
                        <h4>View Product</h4>
                    </div>


                    <div class="col-12 ">
                       <?php
                        $rs = getAllInvoice();
                        while($data = mysqli_fetch_assoc($rs)):
                        $dven = getVendor($data["vid"]);
                        ?>
                        <div class="p-3 mb-2">
                            <button class="btn btn-success" data-toggle="collapse" data-target="#demo<?php echo $dven["id"] ?>">ShopName: <?php echo $dven["shopname"] ?></button>

                        <div id="demo<?php echo $dven["id"] ?>" class="collapse">
                           
                            <table class="table table-stripped table-responsive">
                            <tr>
                                <td>S.No</td>
                                <td>Invoice No</td>
                                <td>Order No</td>
                                <td>Order Date</td>
                                <td>Sub Total</td>
                                <td>GST</td>
                                <td>Grand Total</td>
                                <td>Action</td>
                                <td>Action</td>
                            </tr>
                            <?php $rsorder = getAllInvoiceByVendor($dven["id"]);
                            while($dataorder = mysqli_fetch_assoc($rsorder)):
                                
                                 
                            ?>
                            
                            <tr>
                                <td><?php echo $dataorder["id"]; ?></td>

                                <td><?php echo $dataorder["invoiceno"]; ?></td>
                                <td><?php echo $dataorder["orderno"]; ?></td>
                                <td><?php echo $dataorder["date"]; ?></td>
                                <td><?php echo $dataorder["subtotal"]; ?></td>
                                <td><?php echo $dataorder["gst"]; ?></td>
                                <td><?php echo $dataorder["grandtotal"]; ?></td>
                                <td><a href="viewOrderDetails.php?id=<?php echo $dataorder["id"]; ?>" class="btn btn-danger">View Details</a></td>
                                <td><a href="genInvoice.php?id=<?php echo $dataorder["id"] ?>" class="btn btn-success" target="_blank">Invoice</a></td>
                                
                               
                            </tr>
                            <?php endwhile; ?>

                        </table>
                        </div>
                        </div>
                        <?php endwhile; ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>