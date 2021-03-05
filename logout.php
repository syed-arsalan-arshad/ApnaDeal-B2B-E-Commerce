<?php

session_start();
unset($_SESSION["umobile"]);
unset($_SESSION["uid"]);
header("location: index.php");

?>