<?php
include("../includes/dbconnect.php");
$pid = $_POST["pid"];
$label = $_POST["label"];
$value = $_POST["value"];
$sql = "INSERT INTO productspec VALUES('','".$label."','".$value."','".$pid."')";
mysqli_query(getCon(),$sql);

?>