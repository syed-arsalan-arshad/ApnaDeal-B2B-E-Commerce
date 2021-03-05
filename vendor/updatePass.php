<?php
session_start();
$pass = $_POST["pass"];
$mobile = $_SESSION["mid"];
include("../includes/dbconnect.php");
$sql = "UPDATE vendor SET password = '".md5($pass)."' WHERE mobile = '".$mobile."'";
mysqli_query(getCon(),$sql);
echo 1;