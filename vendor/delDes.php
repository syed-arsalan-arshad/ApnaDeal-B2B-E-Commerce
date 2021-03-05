<?php
include("../includes/dbconnect.php");
$con = getCon();
$id = $_POST["id"];
$sql = "DELETE FROM productspec WHERE id = '".$id."'";
mysqli_query($con,$sql);
echo 1;

?>