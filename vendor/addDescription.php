<?php
include("../includes/dbconnect.php");
$status = $_POST["status"];
if($status == 0){
    $pid = $_POST["pid"];
    $data = fetchProductDes($pid);
    if($data["description"] == "")
        echo "No Description Added";
    else
        echo $data["description"];
}else{
    $pid = $_POST["pid"];
    $des = $_POST["des"];
    updateProductDes($pid,$des);
}

?>