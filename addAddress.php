<?php
$name = $_POST["name"];
$mobile = $_POST["mobile"];
$email = $_POST["email"];
$address = $_POST["address"];
$pincode = $_POST["pincode"];
$city = $_POST["city"];
$state = $_POST["state"];
$uid = $_POST["uid"];
$vid = $_POST["vid"];
$url = "checkout.php?vid=".$vid;
include("includes/dbconnect.php");
addUserAddress($name,$mobile,$email,$address,$pincode,$city,$state,$uid);
header("location: $url");



?>