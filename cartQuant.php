<?php
include("includes/dbconnect.php");
$id = $_POST["id"];
$q = $_POST["q"];
$data = getCartById($id);
$dataprod = getProdById($data["proid"]);
if($q == 1){
    $qty = $data["quantity"];
    $dif = $dataprod["returnduration"];
    $stock = $dataprod["stock"];
    $newqty = $qty + $dif;
    if($newqty > $stock)
        $newqty = $qty;
    $con = getCon();
    $sql = "UPDATE shoppingcart SET quantity = '".$newqty."' WHERE id = '".$id."'";
    mysqli_query($con,$sql);
    
}else{
    $qty = $data["quantity"];
    $dif = $dataprod["returnduration"];
    $stock = $dataprod["stock"];
    $newqty = $qty - $dif;
    if($newqty <= 0)
        $newqty = $qty;
    $con = getCon();
    $sql = "UPDATE shoppingcart SET quantity = '".$newqty."' WHERE id = '".$id."'";
    mysqli_query($con,$sql);
}


?>