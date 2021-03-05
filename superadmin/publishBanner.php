<?php
include("../includes/dbconnect.php");
$id = $_GET["id"];
$sql = "UPDATE banner SET status = 1 WHERE id = '$id'";
mysqli_query(getCon(),$sql);
header("location: supvibanner.php");
?>