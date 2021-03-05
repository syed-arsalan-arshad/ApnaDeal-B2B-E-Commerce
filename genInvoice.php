<?php 
include("includes/dbconnect.php");
$id = $_GET["id"];
$data = getInvoiceById($id);
$dataord = getOrder($data["orderno"]);
$datauser = getUserById($dataord["userid"]);
$datauseradd = getAddressById($dataord["addid"]);

$rs = getOrderListByOrderNo($data["orderno"]);
$out = '';
$i = 1;
$grandTotal = 0;
$grandGst = 0;
$grandSubtotal = 0;
while($dataordlist = mysqli_fetch_assoc($rs)){
    $dataprod = getProdById($dataordlist["productid"]);
    $grandSubtotal += $dataordlist["subtotal"];
    $grandGst += $dataordlist["gst"];
    $grandTotal += $dataordlist["grandtotal"];
    $out .= '<tr>
            <td class="no">'.$i++.'</td>
            <td class="desc">'.$dataprod["name"].'</td>
            <td class="unit">'.number_format($dataordlist["saleprice"],2).'</td>
            <td class="qty">'.$dataordlist["qty"].'</td>
            <td class="qty">'.number_format($dataordlist["subtotal"],2).'</td>
            <td class="qty">'.number_format($dataordlist["gst"],2).'</td>
            <td class="total">'.number_format($dataordlist["grandtotal"],2).'</td>
          </tr>';
}


$html = '<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    
  </head>
  <body>
   <style>
          @font-face {
  font-family: SourceSansPro;
  src: url(SourceSansPro-Regular.ttf);
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}

a {
  color: #0087C3;
  text-decoration: none;
}

body {
  position: relative;
  width: 21cm;  
  height: 29.7cm; 
  margin: 0 auto; 
  color: #555555;
  background: #FFFFFF; 
  font-family: Arial, sans-serif; 
  font-size: 14px; 
  font-family: SourceSansPro;
}

header {
  padding: 10px 0;
  margin-bottom: 20px;
  border-bottom: 1px solid #AAAAAA;
}

#logo {
  float: left;
  margin-top: 8px;
}

#logo img {
  height: 70px;
}

#company {
  float: right;
  text-align: right;
}


#details {
  margin-bottom: 50px;
}

#client {
  padding-left: 6px;
  border-left: 6px solid #0087C3;
  float: left;
}

#client .to {
  color: #777777;
}

h2.name {
  font-size: 1.4em;
  font-weight: normal;
  margin: 0;
}

#invoice {
  float: right;
  text-align: right;
}

#invoice h1 {
  color: #0087C3;
  font-size: 2.4em;
  line-height: 1em;
  font-weight: normal;
  margin: 0  0 10px 0;
}

#invoice .date {
  font-size: 1.1em;
  color: #777777;
}

table {
  width: 100%;
  border-collapse: collapse;
  border-spacing: 0;
  margin-bottom: 20px;
}

table th,
table td {
  padding: 20px;
  background: #EEEEEE;
  text-align: center;
  border-bottom: 1px solid #FFFFFF;
}

table th {
  white-space: nowrap;        
  font-weight: normal;
}

table td {
  text-align: right;
}

table td h3{
  color: #57B223;
  font-size: 1.2em;
  font-weight: normal;
  margin: 0 0 0.2em 0;
}

table .no {
  color: #FFFFFF;
  font-size: 1.6em;
  background: #57B223;
}

table .desc {
  text-align: left;
}

table .unit {
  background: #DDDDDD;
}

table .qty {
}

table .total {
  background: #57B223;
  color: #FFFFFF;
}

table td.unit,
table td.qty,
table td.total {
  font-size: 1.2em;
}

table tbody tr:last-child td {
  border: none;
}

table tfoot td {
  padding: 10px 20px;
  background: #FFFFFF;
  border-bottom: none;
  font-size: 1.2em;
  white-space: nowrap; 
  border-top: 1px solid #AAAAAA; 
}

table tfoot tr:first-child td {
  border-top: none; 
}

table tfoot tr:last-child td {
  color: #57B223;
  font-size: 1.4em;
  border-top: 1px solid #57B223; 

}

table tfoot tr td:first-child {
  border: none;
}

#thanks{
  font-size: 2em;
  margin-bottom: 50px;
}

#notices{
  padding-left: 6px;
  border-left: 6px solid #0087C3;  
}

#notices .notice {
  font-size: 1.2em;
}

footer {
  color: #777777;
  width: 100%;
  height: 30px;
  position: absolute;
  bottom: 0;
  border-top: 1px solid #AAAAAA;
  padding: 8px 0;
  text-align: center;
}


      </style>
    <header class="clearfix">
      <div id="logo">
        <img src="../assets/images/logo/favicon.ico.png">
      </div>
      <div id="company">
        <h2 class="name">ApnaDeal</h2>
        <div>Apna Deal B2B Private Limit Second Floor, D 35 Sector 2, Noida, UP, 201301, Nearest Delhi</div>
        <div>(+91) 9060956810</div>
        <div><a href="mailto:support@apnadealb2b.com">support@apnadealb2b.com</a></div>
      </div>
    </header>
    <main>
      <div id="details" class="clearfix">
        <div id="client">
          <div class="to">INVOICE TO:</div>
          <h2 class="name">'.$datauseradd["name"].'</h2>
          <div class="address">'.$datauseradd["addressline"].','.$datauseradd["city"].','.$datauseradd["state"].','.$datauseradd["pincode"].'</div>
          <div class="email"><a href="mailto:'.$datauseradd["email"].'">'.$datauseradd["email"].'</a></div>
          <div class="email"><a href="tel:'.$datauseradd["mobile"].'">'.$datauseradd["mobile"].'</a></div>
        </div>
        <div id="invoice">
          <h1>'.$data["invoiceno"].'</h1>
          <div class="date">Date of Invoice: '.$dataord["date"].'</div>
        </div>
      </div>
      <table border="0" cellspacing="0" cellpadding="0">
        <thead>
          <tr>
            <th class="no">S.No</th>
            <th class="desc">DESCRIPTION</th>
            <th class="unit">UNIT PRICE</th>
            <th class="qty">QUANTITY</th>
            <th class="qty">SUBTOTAL</th>
            <th class="qty">GST</th>
            <th class="total">TOTAL</th>
          </tr>
        </thead>
        <tbody>'.$out.'</tbody>
        <tfoot>
          <tr>
            <td colspan="3"></td>
            <td colspan="3">GRAND SUBTOTAL</td>
            <td>'.number_format($grandSubtotal,2).'</td>
          </tr>
          <tr>
            <td colspan="3"></td>
            <td colspan="3">TOTAL GST</td>
            <td>'.number_format($grandGst,2).'</td>
          </tr>
          <tr>
            <td colspan="3"></td>
            <td colspan="3">GRAND TOTAL</td>
            <td>'.number_format($grandTotal,2).'</td>
          </tr>
        </tfoot>
      </table>
      <div id="thanks">Thank you!</div>
      
    </main>
  </body>
</html>';
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$mpdf->addPage();
$mpdf->setTitle("Invoice");
$mpdf->WriteHTML($html);
$file = $data["invoiceno"].'.pdf';
$mpdf->Output($file,'D');