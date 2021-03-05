<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('link.php'); ?>
</head>
<?php

if(isset($_SESSION["vid"]))
    header("location: index.php");


?>

<body style="background-color:wheat">
    <?php include('loginheader.php'); ?>
    <div class="container text-center mt-5">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="card" style="opacity:0.9" id="cardC">
                    <div class="card-header">
                        <h4>Forgot Password</h4>
                    </div>
                    <div class="card-body text-left">
                        <form method="post" action="<?php $_PHP_SELF; ?>">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>
                                </div>
                                <input type="text" id="mob" class="form-control" required placeholder="Mobile" name="mobile" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <input type="button" name="submit" onclick="sendOTP();" value="Send OTP" class="btn btn-info btn-block">
                        </form>
                    </div>
                    <script>
                        function sendOTP() {
                            var mob = $("#mob").val();
                            $.ajax({
                                type: "POST",
                                url: "sendOTP.php",
                                data: {
                                    mobile: mob
                                },
                                success: function(data) {
                                    swal("Alert", "OTP Send Successfully");
                                    $("#cardC").html(data);
                                }
                            });
                        }

                        function verifyOTP(otp) {
                            var otpB = $("#verOTP").val();
                            if (otp == otpB) {
                                $.ajax({
                                    type: "post",
                                    url: "passwordView.php",
                                    success: function(data) {
                                        $("#cardC").html(data);
                                    }
                                });
                            } else {
                                swal("Alert", "Wrong OTP");
                            }
                        }

                        function verifyPassword() {
                            var pass = $("#pass").val();
                            var cpass = $("#cpass").val();
                            if (pass == cpass) {
                                $.ajax({
                                    type: "post",
                                    url: "updatePass.php",
                                    data: {
                                        pass: pass
                                    },
                                    success: function(data) {
                                        setTimeout(function() {
                                            swal({
                                                title: "Alert",
                                                text: "Password Changed Successfully",
                                                type: "success"
                                            }, function() {
                                                window.location = "vendorlogin.php";
                                            });
                                        }, 1000);
                                    }
                                });
                            } else {
                                swal("Password And Confirm Password Must Be Same");
                            }
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
</body>

</html>