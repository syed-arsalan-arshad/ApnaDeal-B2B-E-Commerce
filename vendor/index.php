<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("link.php"); 
    if(!isset($_SESSION["vid"]))
    header("location: vendorlogin.php");
    ?>
    
    <?php
    if(isset($_POST["btnUpdate"])){
        $name = $_POST["name"];
        $shopname = $_POST["shopname"];
        $email = $_POST["email"];
        $mobile = $_POST["mobile"];
        $dealin = $_POST["dealin"];
        $minorder = $_POST["minorder"];
        $bname = $_POST["bname"];
        $bacno = $_POST["bacno"];
        $bifsc = $_POST["bifsc"];
        $brandname = $_POST["brandname"];
        $bacholder = $_POST["bacholder"];
        $dataven2 = getVendor($_SESSION["vid"]);
        $shoplogo = $dataven2["shoplogo"];
        $logopath = "";
        if(isset($_FILES["shoplogo"]["name"]) && $_FILES["shoplogo"]["name"] != ""){
            $shoplogo = $_FILES["shoplogo"]["name"];
            $logopath = $_FILES["shoplogo"]["tmp_name"];
        }
        updateVendorProfile($name,$shopname,$email,$mobile,$dealin,$minorder,$bname,$bacno,$bifsc,$shoplogo,$logopath,$_SESSION["vid"],$bacholder,$brandname);
            
        
    }
    
    ?>
</head>
<body>
    <?php include("header.php") ?>
    <div class="container">
        <div class="row mt-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="p-3">
                            <strong>Dashboard Area</strong>
                        </div>
                        <div class="p-3">
                            <table class="table table-stripped table-border">
                                <tr>
                                    <th>Seller Name</th><td><?php echo $_SESSION["vname"]; ?></td>
                                    
                                </tr>
                                <tr>
                                    <th>Seller Mobile</th><td><?php echo $_SESSION["vmobile"]; ?></td>
                                </tr>
                                <tr>
                                   <?php $da = maincat($_SESSION["vmaincat"]); ?>
                                    <th>Seller Category</th><td><button class="btn btn-info"><?php echo $da["name"]; ?></button></td>
                                </tr>
                                <?php $dataven = getVendor($_SESSION["vid"]); ?>
                                <tr>
                                    <th>Seller Email</th>
                                    <td><?php echo $dataven["email"] ?></td>
                                </tr>
                                <tr>
                                    <th>Seller Shop Name</th>
                                    <td><?php echo $dataven["shopname"] ?></td>
                                </tr>
                                <tr>
                                    <th>Seller Brand Name</th>
                                    <td><?php echo $dataven["brandname"] ?></td>
                                </tr>
                                <tr>
                                    <th>Seller Shop Logo</th>
                                    <td><a href="../vendorImage/shop/<?php echo $dataven["shoplogo"] ?>" download><img class="img-fluid" style="height:80px" src="../vendorImage/shop/<?php echo $dataven["shoplogo"] ?>" alt=""></a></td>
                                </tr>
                                <tr>
                                    <th>Seller GST No</th>
                                    <td><?php echo $dataven["gstno"] ?></td>
                                </tr>
                                <tr>
                                    <th>Seller Adhaar/PanCard</th>
                                    <td><a href="../vendorImage/gst/<?php echo $dataven["gstfile"] ?>" download>Download Attachment</a></td>
                                </tr>
                                <tr>
                                    <th>Seller Deal In</th>
                                    <td><?php echo $dataven["dealin"] ?></td>
                                </tr>
                                <tr>
                                    <th>Seller Minimum Order</th>
                                    <td><?php echo $dataven["minorder"] ?></td>
                                </tr>
                                <tr>
                                    <th>Seller Bank Name</th>
                                    <td><?php echo $dataven["bankname"] ?></td>
                                </tr>
                                <tr>
                                    <th>Seller Bank Account No</th>
                                    <td><?php echo $dataven["bankaccountno"] ?></td>
                                </tr>
                                <tr>
                                    <th>Seller IFSC Code</th>
                                    <td><?php echo $dataven["ifsccode"] ?></td>
                                </tr>
                                <tr>
                                    <th class="">
                                        <a href="vendorlogout.php" class="btn btn-danger">Logout</a>
                                    </th>
                                    <th class="">
                                        <a href="#" data-toggle="modal" data-target="#addressModal" class="btn btn-danger">Edit Profile</a>
                                    </th>
                                </tr>
                            </table>
                            <div class="modal fade" id="addressModal" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog  modal-dialog-centered modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col text-right">
                                                    <button type="button" class="close modal-close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true"> <i class="fa fa-times"></i></span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <form action="<?php $_PHP_SELF ?>" method="post" enctype="multipart/form-data">
                                                                <div class="row mt-2">
                                                                    <div class="col-6 mb-2">
                                                                        <label for="">Name</label>
                                                                        <input type="text" name="name" value="<?php echo $dataven["name"]; ?>" required placeholder="Full Name" class="form-control">
                                                                    </div>
                                                                    <div class="col-6 mb-2">
                                                                        <label for="">Shop Name</label>
                                                                        <input type="text" name="shopname" value="<?php echo $dataven["shopname"]; ?>" required placeholder="Full Name" class="form-control">
                                                                    </div>
                                                                    <div class="col-6 mb-2">
                                                                        <label for="">Mobile</label>
                                                                        <input type="text" name="mobile" value="<?php echo $dataven["mobile"]; ?>" required placeholder="Mobile No" class="form-control">
                                                                    </div>
                                                                    <div class="col-6 mb-2">
                                                                        <label for="">Email</label>
                                                                        <input type="email" value="<?php echo $dataven["email"]; ?>" name="email" required placeholder="Email Id" class="form-control">
                                                                    </div>
                                                                    <div class="col-6 mb-2">
                                                                        <label for="">Deal In</label>
                                                                        <input type="text" name="dealin" value="<?php echo $dataven["dealin"]; ?>" required placeholder="Full Name" class="form-control">
                                                                    </div>
                                                                    <div class="col-6 mb-2">
                                                                        <label for="">Minimum Order</label>
                                                                        <input type="text" name="minorder" value="<?php echo $dataven["minorder"]; ?>" required placeholder="Full Name" class="form-control">
                                                                    </div>
                                                                    <div class="col-6 mb-2">
                                                                        <label for="">Brand Name</label>
                                                                        <input type="text" name="brandname" value="<?php echo $dataven["brandname"]; ?>" required placeholder="Brand Name" class="form-control">
                                                                    </div>
<!--
                                                                    <div class="col-6 mb-2">
                                                                        <label for="">Main Category</label>
                                                                        <select name="maincat" id="" class="form-control">
                                                                    <?php $rsmaincat = getMainCat();
                                                                        while($datamaincat = mysqli_fetch_assoc($rsmaincat)):
                                                                            if($datamaincat["id"] == $dataven["maincatid"]){
                                                                        ?>
                                                                        <option selected value="<?php echo $datamaincat["id"] ?>"><?php echo $datamaincat["name"] ?></option>
                                                                        <?php }else{ ?>
                                                                        <option value="<?php echo $datamaincat["id"] ?>"><?php echo $datamaincat["name"] ?></option>
                                                                        <?php } endwhile;?>
                                                                        
                                                                        </select>
                                                                       
                                                                    </div>
-->
                                                                    <div class="col-6">
                                                                        <label for="">Shop Logo</label>
                                                                        <input type="file" name="shoplogo"  class="form-control">
                                                                    </div>
                                                                    <div class="col-6 mb-2">
                                                                        <label for="">Bank Name</label>
                                                                        <input type="text" name="bname" value="<?php echo $dataven["bankname"]; ?>" required placeholder="Full Name" class="form-control">
                                                                    </div>
                                                                    <div class="col-6 mb-2">
                                                                        <label for="">Account Number</label>
                                                                        <input type="text" name="bacno" value="<?php echo $dataven["bankaccountno"]; ?>" required placeholder="Full Name" class="form-control">
                                                                    </div>
                                                                    <div class="col-6 mb-2">
                                                                        <label for="">IFSC Code</label>
                                                                        <input type="text" name="bifsc" value="<?php echo $dataven["ifsccode"]; ?>" required placeholder="Full Name" class="form-control">
                                                                    </div>
                                                                    <div class="col-6 mb-2">
                                                                        <label for="">Account Holder Name</label>
                                                                        <input type="text" name="bacholder" value="<?php echo $dataven["accountholdername"]; ?>" required placeholder="Full Name" class="form-control">
                                                                    </div>
                                                                    <div class="col-12 mb-2">
                                                                        <input type="submit" name="btnUpdate" value="Update Profile" class="btn btn-success btn-block">
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>