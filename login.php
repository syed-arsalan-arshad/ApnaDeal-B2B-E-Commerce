<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("toplink.php"); 
    if(isset($_SESSION["uid"]))
        header("location: index.php");
    ?>
</head>

<body>
<?php
    if(isset($_POST["btnLogin"])){
        $mobile = $_POST["mobile"];
        $pass = $_POST["pass"];
        
        if(userLogin($mobile,$pass) != 1)
        {
            echo '<script type="text/javascript">';
            echo 'setTimeout(function () { swal("Alert","Password Not Matched OR User Not Registered");';
            echo '}, 1000);</script>';
        }
           
        else
        {
            if(isset($_SESSION["url"])){
                $url = $_SESSION["url"];
                header("location: ..$url");
            }
            else{
                header("location: index.php");
            }
        }
    }
    
    if(isset($_POST["btnReg"])){
        $email = $_POST["email"];
        $name = $_POST["name"];
        $mobile = $_POST["mobile"];
        $pass = $_POST["pass"];
        $cpass = $_POST["cpass"];
        
        if(checkUser($email,$mobile) == 1){
            echo '<script type="text/javascript">';
            echo 'setTimeout(function () { swal("Alert","This Email Id OR Mobile Number is Already Registered");';
            echo '}, 1000);</script>';
        }else{
            if(userReg($name,$email,$pass,$cpass,$mobile) != 1){
            echo '<script type="text/javascript">';
            echo 'setTimeout(function () { swal("Alert","Password Not Matched");';
            echo '}, 1000);</script>';
        }
        else{
            echo '<script type="text/javascript">';
            echo 'setTimeout(function () { swal("Alert","User Registered Successfully");';
            echo '}, 1000);</script>';
        }
        }
           
    }
    
    
    ?>
    <!-- ...:::: Start Header Section:::... -->
        <?php include("headerLG.php"); ?>
     <!-- ...:::: End Header Section:::... -->

    <!-- ...:::: Start Offcanvas Mobile Menu Section:::... -->
    <div id="offcanvas-wishlish" class="offcanvas offcanvas-rightside offcanvas-add-cart-section">
        <!-- Start Offcanvas Header -->
        <div class="offcanvas-header text-right">
            <button class="offcanvas-close"><i class="fa fa-times"></i></button>
        </div> <!-- ENd Offcanvas Header -->

        <!-- Start Offcanvas Mobile Menu Wrapper -->
        <div class="offcanvas-wishlist-wrapper">
            <h4 class="offcanvas-title">Wishlist</h4>
            <ul class="offcanvas-wishlist">
                <li class="offcanvas-wishlist-item-single">
                    <div class="offcanvas-wishlist-item-block">
                        <a href="" class="offcanvas-wishlist-item-image-link">
                            <img src="assets/images/products_images/aments_products_image_6.jpg" alt="" class="offcanvas-wishlist-image">
                        </a>
                        <div class="offcanvas-wishlist-item-content">
                            <a href="" class="offcanvas-wishlist-item-link">Car Wheel</a>
                            <div class="offcanvas-wishlist-item-details">
                                <span class="offcanvas-wishlist-item-details-quantity">1 x </span>
                                <span class="offcanvas-wishlist-item-details-price">$49.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="offcanvas-wishlist-item-delete text-right">
                        <a href="#" class="offcanvas-wishlist-item-delete"><i class="fa fa-trash-o"></i></a>
                    </div>
                </li>
                <li class="offcanvas-wishlist-item-single">
                    <div class="offcanvas-wishlist-item-block">
                        <a href="" class="offcanvas-wishlist-item-image-link">
                            <img src="assets/images/categories_images/aments_categories_08.jpg" alt="" class="offcanvas-wishlist-image">
                        </a>
                        <div class="offcanvas-wishlist-item-content">
                            <a href="" class="offcanvas-wishlist-item-link">Car Vails</a>
                            <div class="offcanvas-wishlist-item-details">
                                <span class="offcanvas-wishlist-item-details-quantity">3 x </span>
                                <span class="offcanvas-wishlist-item-details-price">$500.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="offcanvas-wishlist-item-delete text-right">
                        <a href="#" class="offcanvas-wishlist-item-delete"><i class="fa fa-trash-o"></i></a>
                    </div>
                </li>
                <li class="offcanvas-wishlist-item-single">
                    <div class="offcanvas-wishlist-item-block">
                        <a href="" class="offcanvas-wishlist-item-image-link">
                            <img src="assets/images/products_images/aments_products_image_2.jpg" alt="" class="offcanvas-wishlist-image">
                        </a>
                        <div class="offcanvas-wishlist-item-content">
                            <a href="" class="offcanvas-wishlist-item-link">Shock Absorber</a>
                            <div class="offcanvas-wishlist-item-details">
                                <span class="offcanvas-wishlist-item-details-quantity">1 x </span>
                                <span class="offcanvas-wishlist-item-details-price">$350.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="offcanvas-wishlist-item-delete text-right">
                        <a href="#" class="offcanvas-wishlist-item-delete"><i class="fa fa-trash-o"></i></a>
                    </div>
                </li>
            </ul>
            <ul class="offcanvas-wishlist-action-button">
                <li class="offcanvas-wishlist-action-button-list"><a href="" class="offcanvas-wishlist-action-button-link">View wishlist</a></li>
            </ul>
        </div> <!-- End Offcanvas Mobile Menu Wrapper -->

    </div> <!-- ...:::: End Offcanvas Mobile Menu Section:::... -->

    <div class="offcanvas-overlay"></div>

    <!-- ...:::: Start Breadcrumb Section:::... -->
    <div class="breadcrumb-section d-none d-lg-block">
        <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-between justify-content-md-between  align-items-center flex-md-row flex-column">
                        <h3 class="breadcrumb-title">Login</h3>
                        <div class="breadcrumb-nav">
                            <nav aria-label="breadcrumb">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="#">Shop</a></li>
                                    <li class="active" aria-current="page">Login</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Breadcrumb Section:::... -->

    <!-- ...:::: Start Customer Login Section :::... -->
    <div class="customer_login d-none d-lg-block">
        <div class="container">
            <div class="row">
                <!--login area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form">
                        <h3>login</h3>
                        <form action="<?php $_PHP_SELF ?>" method="POST">
                            <div class="default-form-box mb-20">
                                
                                <input type="text" required name="mobile" placeholder="Mobile No*">
                            </div>
                            <div class="default-form-box mb-20">
                                
                                <input type="password" required name="pass" placeholder="Password*">
                            </div>
                            <div class="login_submit">
                                <button class="mb-20" type="submit" name="btnLogin">login</button>
                                <label class="checkbox-default mb-20" for="offer">
                                    <input type="checkbox" id="offer">
                                    <span>Remember me</span>
                                </label>
                                <a href="#">Lost your password?</a>

                            </div>
                        </form>
                    </div>
                </div>
                <!--login area start-->

                <!--register area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form register">
                        <h3>Register</h3>
                        <form action="<?php $_PHP_SELF; ?>" method="post">
                           <div class="default-form-box mb-20">
                                
                                <input type="text" required name="name" placeholder="Name*">
                            </div>
                            <div class="default-form-box mb-20">
                                
                                <input type="text" required name="mobile" placeholder="Mobile No*">
                            </div>
                            <div class="default-form-box mb-20">
                               
                                <input type="email" required name="email" placeholder="Email address*">
                            </div>
                            <div class="default-form-box mb-20">
                                
                                <input type="password" required name="pass" placeholder="Password*">
                            </div>
                            <div class="default-form-box mb-20">
                                
                                <input type="password" required name="cpass" placeholder="Confirm Password*">
                            </div>
                            <div class="login_submit">
                                <button type="submit" name="btnReg">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!--register area end-->
                
                
                <!--login area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form">
                        <h3>login</h3>
                        <form action="<?php $_PHP_SELF ?>" method="POST">
                            <div class="default-form-box mb-20">
                                
                                <input type="text" id="mob" required name="mobile" placeholder="Mobile No*">
                            </div>
                            <div id="otpSection">
                                
                            </div>
                            
                            <div class="login_submit" id="sendOTP">
                                <button class="mb-20" onclick="sendOTP()" type="button" id="btnOTP" name="btnSendOTP">Send OTP</button>   
                            </div>
                            <script>
                                function sendOTP(){
                                    var mob = $("#mob").val();
                                    if(mob.length == 10){
                                        $.ajax({
                                            type: "post",
                                            url: "sendLoginOTP.php",
                                            data: {
                                                mobile: mob
                                            },
                                            success: function(data){
                                                if(data == 1){
                                                    swal("Alert","There is some issue while sending OTP! Please Try Again");
                                                }else{
                                                    swal("Alert","OTP is sent on your mobile number.");
                                                   $("#mob").prop("readonly", true);
                                                    $("#otpSection").html(data);
                                                    $("#sendOTP").empty();
                                                }
                                            }
                                        });
                                    }else{
                                        swal("Alert","Wrong Mobile Number");
                                    }
                                }
                                function verifyOTP(otp){
                                    var otpval = $("#otpval").val();
                                    if(otp == otpval){
                                        $.ajax({
                                            type: "post",
                                            url: "loginwithotp.php",
                                            data: {
                                                cotp: otpval
                                            },
                                            success: function(data){
                                                if(data == "")
                                                    window.location.href = "index.php";
                                                else
                                                    window.location.href = data;
                                            }
                                        });
                                    }else{
                                        swal("ALert","OTP You Entered Is Wrong");
                                    }
                                }
                                
                            </script>
                        </form>
                    </div>
                </div>
                <!--login area start-->
            </div>
        </div>
    </div> 
    <style>
        .bg {
            background-image: url(assets/img/andBg.png);
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;


        }
        .outer {
  display: table;
  position: absolute;
  top: 0;
  height: 100%;
  width: 100%;
}

.middle {
  display: table-cell;
  vertical-align: middle;
    text-align: center;
}

.inner {
  margin-left: auto;
  margin-right: auto;
  /*whatever width you want*/
}
    </style>
    <div class="customer_login d-block d-lg-none bg" style="height:100vh">
        <div class="container-fluid">
            <div class="row outer">

                <!--login area start-->
                <div class="col-12 middle p-0">
                    <div class="inner">
                        <form action="<?php $_PHP_SELF ?>" method="POST">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <img src="assets/img/india.png" height="25px" alt="">
                                        </span>
                                    </div>
                                    <input id="mobsm" name="mobile" type="text" class="form-control" placeholder="Mobile No*" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div id="otpSectionsm">

                            </div>

                            <div class="form-group" id="sendOTPsm">
                                <button class="btn btn-block btn-dark" onclick="sendOTPs()" type="button" id="btnOTPsm" name="btnSendOTP">Send OTP</button>
                            </div>
                            <script>
                                function sendOTPs() {
                                    var mob = $("#mobsm").val();
                                    if (mob.length == 10) {
                                        $.ajax({
                                            type: "post",
                                            url: "sendLoginMobOTP.php",
                                            data: {
                                                mobile: mob
                                            },
                                            success: function(data) {
                                                if (data == 1) {
                                                    swal("Alert", "There is some issue while sending OTP! Please Try Again");
                                                } else {
                                                    swal("Alert", "OTP is sent on your mobile number.");
                                                    $("#mobsm").prop("readonly", true);
                                                    $("#otpSectionsm").html(data);
                                                    $("#sendOTPsm").empty();
                                                }
                                            }
                                        });
                                    } else {
                                        swal("Alert", "Wrong Mobile Number");
                                    }
                                }

                                function verifyOTPs(otp) {
                                    var otpval = $("#otpvalsm").val();
                                    if (otp == otpval) {
                                        $.ajax({
                                            type: "post",
                                            url: "loginwithmobileotp.php",
                                            data: {
                                                cotp: otpval
                                            },
                                            success: function(data) {
                                                if (data == "")
                                                    window.location.href = "index.php";
                                                else
                                                    window.location.href = data;
                                            }
                                        });
                                    } else {
                                        swal("ALert", "OTP You Entered Is Wrong");
                                    }
                                }
                            </script>
                        </form>
                    </div>
                </div>
                <!--login area start-->
            </div>
        </div>
    </div>
    <!-- ...:::: End Customer Login Section :::... -->

   
    <!-- ...:::: Start Footer Section:::... -->
    <?php include("footer.php") ?> 
    <!-- ...:::: End Footer Section:::... -->

    <!-- material-scrolltop button -->
    <button class="material-scrolltop" type="button"></button>

    
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