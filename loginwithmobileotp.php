<?php
include("includes/dbconnect.php");
$otp = $_POST["cotp"];
session_start();
if($_SESSION["loginotp"] == $otp){
    $mobile = $_SESSION["loginmob"];
    $url = "";
    if(isset($_SESSION["url"])){
        $url = "..".$_SESSION["url"];
        
    }
    loginWithMobileOtp($mobile);
    echo $url;
}


?>