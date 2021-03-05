<?php

$mob = $_POST["mobile"];
$otp = rand(1000,9999);
$api_key = 'rkg5yfk0lw9ZZGjJ';
$contacts = $mob;
$from = 'DIGIHI';
$sms_text = urlencode($otp.' is your one time password(OTP) for login in ApnaDeal.com');
//
$api_url = "http://gnecmedia.org/V2/http-api.php?apikey=".$api_key."&senderid=".$from."&number=".$contacts.",
XXXXXXXXXXX,XXXXXXXXXXX&message=".$sms_text."&format=json";
//
////Submit to server
//
$response = file_get_contents( $api_url);
if($response)
{
    session_start();
    $_SESSION["loginotp"] = $otp;
    $_SESSION["loginmob"] = $mob;
    $out = '';
$out .= '<div class="form-group">
<div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <img src="assets/img/padlock.png" height="25px" alt="">
                                        </span>
                                    </div>
                                    <input type="text" id="otpvalsm" class="form-control" required name="otpno" placeholder="Enter OTP*" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
        </div>';
$out .= '<div class="form-group">
        <button class="btn btn-success btn-block" onclick="verifyOTPs('.$otp.')" type="button" id="verify" name="btnLogin">Login With OTP</button>   
        </div>';
$out .= '<div class="form-group mt-2">
        <button class="btn btn-primary btn-block" onclick="sendOTPs()" type="button" id="resendOTP" name="">Resend OTP</button>   
        </div>';
echo $out;
   
}else{
    echo 1;
}



?>