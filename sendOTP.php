<?php 
$mob = $_POST["mobile"];
$otp = rand(1000,9999);
$api_key = 'rkg5yfk0lw9ZZGjJ';
$contacts = $mob;
$from = 'DIGIHI';
$sms_text = urlencode($otp.' is your one time password(OTP) for login in ApnaDeal.com');
//
$api_url = "http://gnecmedia.org/V2/http-api.php?apikey=".$api_key."&senderid=".$from."&number=".$contacts."&message=".$sms_text."&format=json";
$response = file_get_contents( $api_url);
if($response){
$out = '';
$out .='<div class="form-group mt-2">';
$out .='<label>Verify OTP</label>';
$out .= '<input id="otp" class="border" type="text" placeholder="Enter OTP" class="">';
$out .= '<input type="button" onclick="verifyOTP('.$otp.');" value="Verify OTP" class="btn btn-info mt-1">';
$out .= '</div>';
echo $out;
}else{
    echo 1;
}
?>