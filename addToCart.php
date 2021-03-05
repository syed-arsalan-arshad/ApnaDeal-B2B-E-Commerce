<?php

$uid = $_POST["uid"];
$pid = $_POST["pid"];
$qty = $_POST["qty"];
$vid = $_POST["vid"];

include("includes/dbconnect.php");
addToCart($uid,$pid,$qty,$vid);
echo countCart($uid);

?>