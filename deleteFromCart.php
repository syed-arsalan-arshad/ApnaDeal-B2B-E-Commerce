<?php

$id = $_POST["id"];

include("includes/dbconnect.php");
deleteFromCart($id);

?>