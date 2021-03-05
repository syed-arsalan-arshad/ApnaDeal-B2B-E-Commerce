<?php
include("../includes/dbconnect.php");
$con = getCon();
$pid = $_POST["pid"];
$sql = "SELECT * FROM productspec WHERE pid = '".$pid."'";
$rs = mysqli_query($con,$sql);
$out = '';
if(mysqli_num_rows($rs) >= 1){
    $i = 1;
    while($data = mysqli_fetch_assoc($rs)){
        $out .= '<tr>';
        $out .= '<td>'.$i.'</td>';
        $out .= '<td>'.$data["label"].'</td>';
        $out .= '<td>'.$data["value"].'</td>';
        $out .= '<td><a href="#" onclick="deleteDes('.$data["id"].')">Delete</a></td>';
        $out .= '</tr>';
        $i++;
    }
}
else{
        $out .= '<tr>';
        $out .= '<td colspan="4">Data Not Available</td>';
        $out .= '</tr>';
}

echo $out;

?>