<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("toplink.php") ?>
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
</head>

<body class="d-block d-lg-none d-md-none bg">
    <div class="customer_login">
        <div class="container">
            <div class="row outer">

                <!--login area start-->
                <div class="col-lg-6 col-md-6 middle">
                    <div class="inner">
                        <form action="<?php $_PHP_SELF ?>" method="POST">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <img src="assets/img/india.png" height="25px" alt="">
                                        </span>
                                    </div>
                                    <input id="mob" name="mobile" type="text" class="form-control" placeholder="Mobile No*" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div id="otpSection">

                            </div>

                            <div class="form-group" id="sendOTP">
                                <button class="btn btn-block btn-dark" onclick="sendOTP()" type="button" id="btnOTP" name="btnSendOTP">Send OTP</button>
                            </div>
                            <script>
                                function sendOTP() {
                                    var mob = $("#mob").val();
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
                                                    $("#mob").prop("readonly", true);
                                                    $("#otpSection").html(data);
                                                    $("#sendOTP").empty();
                                                }
                                            }
                                        });
                                    } else {
                                        swal("Alert", "Wrong Mobile Number");
                                    }
                                }

                                function verifyOTP(otp) {
                                    var otpval = $("#otpval").val();
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