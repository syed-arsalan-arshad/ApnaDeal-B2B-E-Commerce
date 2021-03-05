<?php
session_start();
unset($_SESSION["vid"]);
header("location: vendorlogin.php");

?>