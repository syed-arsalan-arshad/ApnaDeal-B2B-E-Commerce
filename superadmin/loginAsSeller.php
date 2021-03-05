<?php
$id = $_GET["id"];
include("../includes/dbconnect.php");
session_start();
$data = getVendor($id);
$_SESSION["vid"] = $data["id"];
$_SESSION["vname"] = $data["name"];
$_SESSION["vmaincat"] = $data["maincatid"];
$_SESSION["vmobile"] = $data["mobile"];
header("location: ../vendor/index.php");

