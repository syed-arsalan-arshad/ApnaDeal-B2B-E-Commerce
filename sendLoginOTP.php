<?php

$mob = $_POST["mobile"];
$otp = rand(1000,9999);
$api_key = 'rkg5yfk0lw9ZZGjJ';
$contacts = $mob;
$from = 'DIGIHI';
$sms_text = urlencode($otp.' is your one time password(OTP) for login in ApnaDeal.com');
//
$api_url = "http://gnecmedia.org/V2/http-api.php?apikey=".$api_key."&senderid=".$from."&number=".$contacts."&message=".$sms_text."&format=json";

//Submit to server

$response = file_get_contents( $api_url);
if($response)
{
    session_start();
    $_SESSION["loginotp"] = $otp;
    $_SESSION["loginmob"] = $mob;
    $out = '';
$out .= '<div class="default-form-box mb-20">
        <input type="text" id="otpval" required name="otpno" placeholder="Enter OTP*">
        </div>';
$out .= '<div class="login_submit">
        <button class="mb-20" onclick="verifyOTP('.$otp.')" type="button" id="verify" name="btnLogin">Login With OTP</button>   
        </div>';
$out .= '<div class="login_submit">
        <button class="mb-20" onclick="sendOTP()" type="button" id="resendOTP" name="">Resend OTP</button>   
        </div>';
echo $out;
   
}else{
    echo 1;
}



?>