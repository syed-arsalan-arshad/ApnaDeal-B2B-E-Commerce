<?php
include("includes/dbconnect.php");
$addid = $_POST["addid"];
$uid = $_POST["uid"];
$vid = $_POST["vid"];
$ord = $_POST["ord"];
$pm = $_POST["pm"];
date_default_timezone_set('Asia/Kolkata');
$time =  date("h:i A");
$date = date("Y-m-d");
insertOrder($uid,$ord,$addid,$date,$pm);
$rscart = cartByVen($vid,$uid);
while($datacart = mysqli_fetch_assoc($rscart)){
    $datapro = getProdById($datacart["proid"]);
    $sale = $datapro["saleprice"];
    $set = $datapro["returnduration"];
    $qty = $datacart["quantity"];
    $q = $qty / $set;
    $total = $sale * $qty;
    $gst = (5/100)*$total;
    $grandTotal = $total+$gst;
    $sale = number_format((float)$sale, 2, '.', '');
    $total = number_format((float)$total, 2, '.', '');
    $gst = number_format((float)$gst, 2, '.', '');
    $grandTotal = number_format((float)$grandTotal, 2, '.', '');
   updateProductStock($datacart["proid"],$qty); insertOrderList($uid,$ord,$datacart["proid"],$datapro["vid"],$sale,"",$qty,$total,$date,0,$date,$gst,$grandTotal);
}
$rsinv = generateInvoiceData($ord,$vid);
while($datainv = mysqli_fetch_assoc($rsinv)){
    $today=date('YmdHi');
    $inv = "INV".$datainv["vid"].$today;
   $datainv["sale"] = number_format((float)$datainv["sale"], 2, '.', ''); 
   $datainv["tot"] = number_format((float)$datainv["tot"], 2, '.', ''); 
   $datainv["gst"] = number_format((float)$datainv["gst"], 2, '.', ''); 
   $datainv["gtot"] = number_format((float)$datainv["gtot"], 2, '.', ''); 
   $idate = date("d-m-Y"); 
    insertInvoice($inv,$ord,$datainv["vid"],$datainv["sale"],$datainv["tot"],0,$datainv["gst"],$datainv["gtot"],$uid,$idate);
    $address = getAddressById($addid);
$mob = $address["mobile"];
$api_key = 'rkg5yfk0lw9ZZGjJ';
$contacts = $mob;
$from = 'DIGIHI';
$sms_text = urlencode('Hi Sir,'."\n".'Thank you to order from ApnaDeal. your invoice number:-'.$inv.' total cost- '.$datainv["gtot"]);
//
$api_url = "http://gnecmedia.org/V2/http-api.php?apikey=".$api_key."&senderid=".$from."&number=".$contacts."&message=".$sms_text."&format=json";
$response = file_get_contents( $api_url);
}

deleteCart($uid,$vid);

?>