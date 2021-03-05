<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("../includes/link.php");
$id = $_GET["id"];
$qry = "SELECT * FROM vendor WHERE `id` = '$id'";
$result = mysqli_query(getCon(),$qry);
$data = mysqli_fetch_assoc($result);
?>
</head>

<body>
    <?php include("header.php"); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <div class="card w-90" style="margin-top: 40px;">
                    <div class="card-body">
                        <h3 class="card-title text-center">Seller Detail</h3>
                        <div class="p-3">
                            <table class="table table-stripped table-border">
                                <tr>
                                    <th>Seller Name</th>
                                    <td><?php echo $data["name"] ?></td>
                                </tr>
                                <tr>
                                    <th>Seller Mobile</th>
                                    <td><?php echo $data["mobile"] ?></td>
                                </tr>
                                <tr>
                                    <?php $d = maincat($data["maincatid"]); ?>
                                    <th>Seller Category</th>
                                    <td><button class="btn btn-success"><?php echo $d["name"] ?></button></td>
                                </tr>
                                <tr>
                                    <th>Seller Email</th>
                                    <td><?php echo $data["email"] ?></td>
                                </tr>
                                <tr>
                                    <th>Seller Shop Name</th>
                                    <td><?php echo $data["shopname"] ?></td>
                                </tr>
                                <tr>
                                    <th>Seller Shop Logo</th>
                                    <td><img class="img-fluid" style="height:80px;" src="../vendorimage/shop/<?php echo $data["shoplogo"]; ?>" alt="logo"></td>
                                </tr>
                                <tr>
                                    <th>Seller Address</th>
                                    <td><?php echo $data["address"] ?></td>
                                </tr>
                                <tr>
                                    <th>Seller Pincode</th>
                                    <td><?php echo $data["pincode"] ?></td>
                                </tr>
                                <tr>
                                    <th>Seller City</th>
                                    <td><?php echo $data["city"] ?></td>
                                </tr>
                                <tr>
                                    <th>Seller State</th>
                                    <td><?php echo $data["state"] ?></td>
                                </tr>
                                <tr>
                                    <th>Seller GST No</th>
                                    <td><?php echo $data["gstno"] ?></td>
                                </tr>
                                <tr>
                                    <th>Seller Adhaar/PanCard</th>
                                    <td><a href="../vendorImage/gst/<?php echo $data["gstfile"] ?>" download>Download Attachment</a></td>
                                </tr>
                                <tr>
                                    <th>Seller Deal In</th>
                                    <td><?php echo $data["dealin"] ?></td>
                                </tr>
                                <tr>
                                    <th>Seller Minimum Order</th>
                                    <td><?php echo $data["minorder"] ?></td>
                                </tr>
                                <tr>
                                    <th>Seller Bank Name</th>
                                    <td><?php echo $data["bankname"] ?></td>
                                </tr>
                                <tr>
                                    <th>Seller Bank Account No</th>
                                    <td><?php echo $data["bankaccountno"] ?></td>
                                </tr>
                                <tr>
                                    <th>Seller IFSC Code</th>
                                    <td><?php echo $data["ifsccode"] ?></td>
                                </tr>
                                <tr>
                                    <th>Seller Account Holder Name</th>
                                    <td><?php echo $data["accountholdername"] ?></td>
                                </tr>
                                <tr>
                                    <th>Seller Order Id</th>
                                    <td><?php echo $data["vendorid"] ?></td>
                                </tr>
                                <tr>
                                    <th>Seller Minimum Order</th>
                                    <td><?php echo $data["minorder"] ?></td>
                                </tr>
                                <tr>
                                    <th>
                                        Login In Seller Panel
                                    </th>
                                    <td>
                                        <a href="loginAsSeller.php?id=<?php echo $id; ?>">Click Here</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-1"></div>
        </div>
    </div>
</body>

</html>