<?php
include("../includes/dbconnect.php");
$id = $_GET["id"];
unpublishProduct($id);
header("location: viewProduct.php");

?>