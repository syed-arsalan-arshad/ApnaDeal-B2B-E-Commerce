<?php
include("../includes/dbconnect.php");
$id = $_GET["id"];
$sql = "UPDATE vendor SET status = 3 WHERE id = '$id'";
$sql2 = "UPDATE product SET status = 0 WHERE vid = '$id'";
mysqli_query(getCon(),$sql);
mysqli_query(getCon(),$sql2);
header("location: supadseller.php");

?>