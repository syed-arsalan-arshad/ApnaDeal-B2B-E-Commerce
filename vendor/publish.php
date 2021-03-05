<?php
include("../includes/dbconnect.php");
$id = $_GET["id"];
publishProduct($id);
header("location: viewProduct.php");

?>