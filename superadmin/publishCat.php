<?php
include("../includes/dbconnect.php");
$id = $_GET["id"];
$sql = "UPDATE maincat SET status = 1 WHERE id = '$id'";
mysqli_query(getCon(),$sql);
header("location: supadvicategory.php");
?>