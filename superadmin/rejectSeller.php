<?php
include("../includes/dbconnect.php");
$id = $_GET["id"];
$sql = "UPDATE vendor SET status = 3 WHERE id = '$id'";
mysqli_query(getCon(),$sql);
header("location: sellerRequest.php");

?>