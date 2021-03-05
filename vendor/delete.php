<?php
include("../includes/dbconnect.php");
$id = $_GET["id"];
deleteProduct($id);
header("location: viewProduct.php");

?>