<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("toplink.php") ?>
</head>
<?php

if(isset($_POST["addVendor"])){
    $shopname = $_POST["shopname"];
$propname = $_POST["propname"];
$mobile = $_POST["mobile"];
$address = $_POST["address"];
$pincode = $_POST["pincode"];
$city = $_POST["city"];
$state = $_POST["state"];
$email = $_POST["email"];
$gstno = $_POST["gstno"];
$pass = $_POST["pass"];
$cpass = $_POST["cpass"];
$maincat = $_POST["maincat"];
$dealin = $_POST["dealin"];
$minord = $_POST["minord"];
$brandname = $_POST["brandname"];
$gstfilename = $_FILES["gstfile"]["name"];
$gstfilepath = $_FILES["gstfile"]["tmp_name"];
$shoplogoname = $_FILES["shoplogo"]["name"];
$shoplogopath = $_FILES["shoplogo"]["tmp_name"];
if(checkVendor($mobile,$email) >= 1){
    echo '<script>
    setTimeout(function() {
        swal({
            title: "Alert!",
            text: "This Email or Mobile Number Is Already Registered!"
        }, function() {
            window.location = "index.php";
        });
    }, 1000);
</script>';
}else{
    if($pass == $cpass){
$pass = md5($pass);
insertVendor($shopname,$propname,$mobile,$address,$pincode,$city,$state,$email,$gstno,$pass,$maincat,$shoplogoname,$gstfilename,$shoplogopath,$gstfilepath,$dealin,$minord,$brandname);
    header("location: vendorRegBank.php");
}
    else{
        echo '<script>
    setTimeout(function() {
        swal({
            title: "ALert!",
            text: "Password and Confirm Password Should Be Match!"
        });
    }, 1000);
</script>';
    }
}

}


?>
<body>
    <!-- ...:::: Start Header Section:::... -->
    <?php include("headerLG.php") ?>
    <!-- ...:::: End Header Section:::... -->
    
    <!-- ...:::: Start Mobile Header Section:::... -->
    <?php include("headerMobile.php"); ?>
    <!-- ...:::: Start Mobile Header Section:::... -->

    <!-- ...:::: Start Offcanvas Mobile Menu Section:::... -->
    <?php include("leftSideMobile.php"); ?>
    <!-- ...:::: End Offcanvas Mobile Menu Section:::... -->

    <div class="offcanvas-overlay"></div>
    
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2">
                <div class="card">
                   <div class="card-header text-center">
                       <h3>Vendor Registration Form</h3>
                   </div>
                    <div class="card-body">
                        <form action="<?php $_PHP_SELF; ?>" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group mt-2">
                                        <label>Seller Name/Shop Name</label>
                                        <input required name="shopname" class="border" type="text" placeholder="Seller Name/Shop Name" class="">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group mt-2">
                                        <label>Proprieter Name</label>
                                        <input required name="propname" class="border" type="text" placeholder="Proprieter Name" class="">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group mt-2">
                                        <label>Mobile No</label>
                                        <input required name="mobile" id="mob" class="border" type="text" placeholder="Mobile No" class="">
                                        <input type="button" onclick="sendOTP();" value="Send OTP" class="btn btn-info mt-1">
                                    </div>
                                </div>
                                <div class="col-6" id="setVerify">
                                    
                                </div>
                                
                            </div>
                            <div class="row" id="setBelow">
                                
                            </div>
                        </form>
                        <script>
                            function sendOTP(){
                                var mob = $("#mob").val();
                                if(mob.length != 10)
                                    swal("Mobile No Must Be In 10 Character");
                                else{
                                    $.ajax({
                                        type: "post",
                                        url: "sendOTP.php",
                                        data: {
                                            mobile: mob
                                        },
                                        success: function(data){
                                             swal("OTP is sent successfully");
                                            $("#setVerify").html(data);
                                        }
                                    });
                                }
                                
                            }
                            function verifyOTP(realotp){
                                var otp = $("#otp").val();
                                if(otp != realotp)
                                    swal("Entered OTP is wrong");
                                else{
                                    $.ajax({
                                        type: "post",
                                        url: "verifyOTP.php",
                                        success: function(data){
                                            $("#otp").val("");
                                            $("#setBelow").html(data);
                                        }
                                    });
                                }
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    


    <!-- ...:::: Start Footer Section:::... -->
    <?php include("footer.php") ?>
    <!-- ...:::: End Footer Section:::... -->










    <!-- ::::::::::::::All JS Files here :::::::::::::: -->
    <!-- Global Vendor, plugins JS -->
    <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="assets/js/vendor/jquery-ui.min.js"></script>

    <!--Plugins JS-->
    <script src="assets/js/plugins/slick.min.js"></script>
    <script src="assets/js/plugins/material-scrolltop.js"></script>
    <script src="assets/js/plugins/jquery.nice-select.min.js"></script>
    <script src="assets/js/plugins/jquery.zoom.min.js"></script>
    <script src="assets/js/plugins/venobox.min.js"></script>

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <!-- <script src="assets/js/vendor.min.js"></script> 
    <script src="assets/js/plugins.min.js"></script> -->

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
</body>

</html>