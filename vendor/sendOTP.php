<?php 
$mob = $_POST["mobile"];
$otp = rand(1000,9999);
$api_key = 'rkg5yfk0lw9ZZGjJ';
$contacts = $mob;
$from = 'DIGIHI';
$sms_text = urlencode($otp.' is your one time password(OTP) for change your password');
//
$api_url = "http://gnecmedia.org/V2/http-api.php?apikey=".$api_key."&senderid=".$from."&number=".$contacts."&message=".$sms_text."&format=json";
$response = file_get_contents( $api_url);
if($response){
    session_start();
    $_SESSION["mid"] = $mob;
$out = '';
$out .='
<div class="card-header">
                    <h4>Verify OTP</h4>
                </div>
                <div class="card-body text-left">
                    <form method="post" action="">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>
                            </div>
                            <input type="text" id="verOTP" class="form-control" required placeholder="Enter OTP" name="mobile" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <input type="button" onclick="verifyOTP('.$otp.');" value="Verify OTP" class="btn btn-info btn-block">
                    </form>
                </div>
';
echo $out;
}else{
    echo 1;
}
?>