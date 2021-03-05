<?php
include("../includes/dbconnect.php");
$con = getCon();
$label = $_POST["label"];
$value = $_POST["value"];
$pid = $_POST["pid"];
$sql = "INSERT INTO productspec VALUES('','".$label."','".$value."','".$pid."')";
mysqli_query($con,$sql);
echo 1;

?>