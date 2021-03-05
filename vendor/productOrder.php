<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("link.php"); ?>
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
                        $rs = getAllInvoiceByVendor($_SESSION["vid"]);
                        while($data = mysqli_fetch_assoc($rs)):
                        $ord = getOrder($data["orderno"]);
                        ?>
                        <div class="p-3 mb-2">
                            <button class="btn btn-success" data-toggle="collapse" data-target="#demo<?php echo $data["id"] ?>">Invoice No: <?php echo $data["invoiceno"] ?></button>
                            <a href="genInvoice.php?id=<?php echo $data["id"]; ?>" class="btn btn-success" target="_blank">Download Invoice</a>

                        <div id="demo<?php echo $data["id"] ?>" class="collapse">
                           
                            <table class="table table-stripped">
                            <tr>
                                <td>S.No</td>
                                <td>User Name</td>
                                <td>User Mobile</td>
                                <td>Product Name</td>
                                <td>Sale Price</td>
                                <td>Quantity</td>
                                <td>Sub Total</td>
                                <td>GST</td>
                                <td>Grand Total</td>
                                <td>Payment Method</td>
                                <td>Order Date</td>
                            </tr>
                            <?php $rsorder = getOrderList($data["orderno"],$_SESSION["vid"]);
                            while($dataorder = mysqli_fetch_assoc($rsorder)):
                                $datapro = getProdById($dataorder["productid"]);
                                $datauser = getUserById($dataorder["userid"]);
                                 if($ord["paymethod"] == 0){ 
                                    $paymeth = "<button class='btn btn-success'>Cash On Delivery</button>";
                                 }
                                else{
                                    $paymeth = "<button class='btn btn-success'>Online Payment</button>";
                                }
                                
                            ?>
                            
                            <tr>
                                <td><?php echo $dataorder["id"]; ?></td>

                                <td><?php echo $datauser["name"]; ?></td>
                                <td><?php echo $datauser["mobile"]; ?></td>
                                <td><?php echo $datapro["name"]; ?></td>
                                <td><?php echo $dataorder["saleprice"]; ?></td>
                                <td><?php echo $dataorder["qty"]; ?></td>
                                <td><?php echo $dataorder["subtotal"]; ?></td>
                                <td><?php echo $dataorder["gst"]; ?></td>
                                <td><?php echo $dataorder["grandtotal"]; ?></td>
                                <td>
                                    <?php echo $paymeth; ?>
                                </td>
                                <td><?php echo $dataorder["orderdate"]; ?></td>
                               
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