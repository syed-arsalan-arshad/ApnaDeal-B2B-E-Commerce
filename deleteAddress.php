<?php
$id = $_POST["id"];
include("includes/dbconnect.php");
deleteUserAddress($id);

?>