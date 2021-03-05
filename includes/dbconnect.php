<?php
function getCon(){
    $con = mysqli_connect("localhost","root","","apnadeal_new");
    return $con;
}
function getMainCat(){
    $con = getCon();
    $sql = "SELECT * FROM maincat";
    $rs = mysqli_query($con,$sql);
    return $rs;
}
function getVendorList($id){
    $con = getCon();
    $sql = "SELECT * FROM vendor WHERE maincatid = '".$id."' AND status = 1";
    $rs = mysqli_query($con,$sql);
    return $rs;
}
function login($mobile,$pass){
    $con = getCon();
    $sql = "SELECT * FROM vendor WHERE mobile = '".$mobile."' and password = '".md5($pass)."'";
    $rs = mysqli_query($con,$sql);
    if(mysqli_num_rows($rs) >= 1){
        $data = mysqli_fetch_assoc($rs);
        if($data["status"] == 1){
        $_SESSION["vid"] = $data["id"];
        $_SESSION["vname"] = $data["name"];
        $_SESSION["vmaincat"] = $data["maincatid"];
        $_SESSION["vmobile"] = $mobile;
        header("location: index.php");
        }else{
            echo '<script>alert("Your Request Is Not Approved By Super Admin");</script>';
        }
    }
    else
        echo '<script>alert("Credebtial Not Matched");</script>';
}

function vsubcat(){
    $con = getCon();
    $sql = "SELECT * FROM vendorspec WHERE vid = '".$_SESSION["vid"]."'";
    $rs = mysqli_query($con,$sql);
    return $rs;
}
function getMeasure(){
    $con = getCon();
    $sql = "SELECT * FROM measureunit";
    $rs = mysqli_query($con,$sql);
    return $rs;
}
function subcat(){
    $con = getCon();
    $vid = $_SESSION["vid"];
    $s = "SELECT maincatid FROM vendor WHERE id = '".$vid."'";
    $r = mysqli_query($con,$s);
    $d = mysqli_fetch_assoc($r);
    $sql = "SELECT * FROM subcat WHERE maincatid = '".$d["maincatid"]."'";
    $rs = mysqli_query($con,$sql);
    
    return $rs;
}
function maincat($id){
    $con = getCon();
    $sql = "SELECT * FROM maincat WHERE id = '".$id."'";
    $rs = mysqli_query($con,$sql);
    $data = mysqli_fetch_assoc($rs);
    return $data;
}
function insertProduct($pname,$sale,$mrp,$stock,$status,$fname,$fpath,$return){
    $con = getCon();
    $maincat = $_SESSION["vmaincat"];
    $vid = $_SESSION["vid"];
    $uni = $vid."_".date("YmdHi");
    $fname = $uni."".$fname;
    $sql = "INSERT INTO product (vid,maincatid,name,mrp,saleprice,stock,pic1,status,returnduration)VALUES('".$vid."','".$maincat."','".$pname."','".$mrp."','".$sale."','".$stock."','".$fname."','".$status."','".$return."')";
    mysqli_query($con,$sql);
    move_uploaded_file($fpath,"../productImage/".$fname);
}
function selectProd(){
    $con = getCon();
    $vid = $_SESSION["vid"];
    $sql = "SELECT * FROM product WHERE vid = '".$vid."' ORDER BY id DESC";
    $rs = mysqli_query($con,$sql);
    return $rs;
}
function insertBanner($btitle,$status,$fname,$fpath,$bpage){
    $con = getCon();
    $sql = "INSERT INTO banner (title,status,img,page)VALUES('".$btitle."','".$status."','".$fname."','".$bpage."')";
    mysqli_query($con,$sql);
    move_uploaded_file($fpath,"../bannerImage/".$fname);
}
function selectBannerForAdmin(){
    $con = getCon();
    
    $sql = "SELECT * FROM banner ORDER BY id DESC";
    $rs = mysqli_query($con,$sql);
    return $rs;
}
function selectBannerByPage($pgno){
    $con = getCon();
    
    $sql = "SELECT * FROM banner WHERE page = '$pgno' OR page = -1 ORDER BY id DESC";
    $rs = mysqli_query($con,$sql);
    return $rs;
}
function getProdByVendor($vid){
    $con = getCon();
    $sql = "SELECT * FROM product WHERE vid = '".$vid."' AND status = 1 ORDER BY id DESC";
    $rs = mysqli_query($con,$sql);
    return $rs;
}
function get4Prod($mid){
    $con = getCon();
    $sql = "SELECT * FROM product WHERE maincatid = '".$mid."' and status = 1 ORDER BY id DESC LIMIT 8";
    $rs = mysqli_query($con,$sql);
    return $rs;
}
function getProdById($id){
    $con = getCon();
    $sql = "SELECT * FROM product WHERE id = '".$id."' ";
    $rs = mysqli_query($con,$sql);
    return mysqli_fetch_assoc($rs);
}
function updateProduct($pname,$sale,$mrp,$stock,$subcat,$status,$fname,$fpath,$munit,$return,$pid){
    $con = getCon();
    $sql = "UPDATE product SET subcatid = '".$subcat."',name = '".$pname."',mrp = '".$mrp."',saleprice = '".$sale."',stock = '".$stock."',pic1 = '".$fname."',status = '".$status."',unit = '".$munit."',returnduration = '".$return."' WHERE id = '".$pid."'";
    mysqli_query($con,$sql);
    if($fpath != "")
        move_uploaded_file($fpath,"../productImage/".$fname);
}
function getDes($id){
    $con = getCon();
    $sql = "SELECT * FROM productspec WHERE pid = '".$id."'";
    return mysqli_query($con,$sql);
}
function checkVendor($mobile,$email){
    $sql = "SELECT * FROM vendor WHERE email = '$email' OR mobile = '$mobile'";
    return mysqli_num_rows(mysqli_query(getCon(),$sql));
}
function insertVendor($shopname,$propname,$mobile,$address,$pincode,$city,$state,$email,$gstno,$pass,$maincat,$shoplogoname,$gstfilename,$shoplogopath,$gstfilepath,$dealin,$minord,$brandname){
    $con = getCon();
    $vid = rand(1,9999);
    $sql = "INSERT INTO vendor(shopname,name,mobile,address,pincode,city,state,email,gstno,password,maincatid,shoplogo,gstfile,vendorid,dealin,minorder,brandname)VALUES('".$shopname."','".$propname."','".$mobile."','".$address."','".$pincode."','".$city."','".$state."','".$email."','".$gstno."','".$pass."','".$maincat."','".$shoplogoname."','".$gstfilename."','".$vid."','".$dealin."','".$minord."','".$brandname."')";
    mysqli_query($con,$sql);
    $_SESSION["vendoridbank"] = $vid;
    move_uploaded_file($shoplogopath,"vendorImage/shop/".$shoplogoname);
    move_uploaded_file($gstfilepath,"vendorImage/gst/".$gstfilename);
    
}
function updateVendorBank($acno,$acname,$ifsc,$bankname){
    $con = getCon();
    $sql = "UPDATE vendor SET bankaccountno = '".$acno."',accountholdername = '".$acname."',ifsccode = '".$ifsc."',bankname = '".$bankname."' WHERE vendorid = '".$_SESSION["vendoridbank"]."'";
    mysqli_query($con,$sql);
    
}

function persubcat($id){
    $con = getCon();
    $sql = "SELECT * FROM subcat WHERE id = '".$id."'";
    $rs = mysqli_query($con,$sql);
    $data = mysqli_fetch_assoc($rs);
    return $data;
}
function unpublishProduct($id){
    $con = getCon();
    $sql = "UPDATE product SET status = 0 WHERE id = '".$id."'";
    mysqli_query($con,$sql);
    
        
}
function publishProduct($id){
    $con = getCon();
    $sql = "UPDATE product SET status = 1 WHERE id = '".$id."'";
    mysqli_query($con,$sql);
    
}
function deleteProduct($id){
    $con = getCon();
    $sql = "DELETE FROM product WHERE id = '".$id."'";
    mysqli_query($con,$sql);
    
}

function userReg($name,$email,$pass,$cpass,$mobile){
    if($pass == $cpass){
        $con = getCon();
        $sql = "INSERT INTO user VALUES('','$name','$email','$mobile','$pass',1)";
        mysqli_query($con,$sql);
        return 1;
    }
    else
        return 0;
}
function userLogin($mobile,$pass){
    $con = getCon();
    $sql = "SELECT * FROM user WHERE mobile = '".$mobile."' and password = '".$pass."' ";
    $rs = mysqli_query($con,$sql);
    if(mysqli_num_rows($rs) >= 1){
        $data = mysqli_fetch_assoc($rs);
        $_SESSION["umobile"] = $data["mobile"];
        $_SESSION["uid"] = $data["id"];
        return 1;
    }
    else
        return 0;
}
function addToCart($uid,$pid,$qty,$vid){
    $con = getCon();
    $sql = "INSERT INTO shoppingcart VALUES('','".$uid."','".$pid."','".$vid."','".$qty."')";
    return mysqli_query($con,$sql);
}
function checkInCart($uid,$pid){
    $con = getCon();
    $sql = "SELECT * FROM shoppingcart WHERE userid = '".$uid."' AND proid = '".$pid."'";
    $rs = mysqli_query($con,$sql);
    if(mysqli_num_rows($rs) >= 1)
        return 1;
    else
        return 0;
}
function countCart($uid){
    $con = getCon();
    $sql = "SELECT * FROM shoppingcart WHERE userid = '".$uid."'";
    $rs = mysqli_query($con,$sql);
    return mysqli_num_rows($rs);
}
function cartData($uid){
    $con = getCon();
    $sql = "SELECT * FROM shoppingcart WHERE userid = '".$uid."' GROUP BY vid";
    $rs = mysqli_query($con,$sql);
    return $rs;
}
function cartByVen($vid,$uid){
    $con = getCon();
    $sql = "SELECT * FROM shoppingcart WHERE vid = '".$vid."' AND userid = '".$uid."'";
    $rs = mysqli_query($con,$sql);
    return $rs;
}
function getVendor($vid){
    $con = getCon();
    $sql = "SELECT * FROM vendor WHERE id = '".$vid."'";
    $rs = mysqli_query($con,$sql);
    return mysqli_fetch_assoc($rs);
}
function deleteFromCart($id){
    $con = getCon();
    $sql = "DELETE FROM shoppingcart WHERE id = '".$id."'";
    mysqli_query($con,$sql);
}
function getCartById($id){
    $con = getCon();
    $sql = "SELECT * FROM shoppingcart WHERE id = '".$id."'";
    return mysqli_fetch_assoc(mysqli_query($con,$sql));
}
function addUserAddress($name,$mobile,$email,$address,$pincode,$city,$state,$uid){
    $con = getCon();
    $sql = "INSERT INTO useraddress VALUES('','".$uid."','".$name."','".$email."','".$address."','".$city."','".$state."','".$pincode."','".$mobile."')";
    mysqli_query($con,$sql);
}
function getAllUserAddress($uid){
    $con = getCon();
    $sql = "SELECT * FROM useraddress WHERE userid = '".$uid."' ORDER BY id DESC";
    return mysqli_query($con,$sql);
}
function cartDetails($uid){
    $con = getCon();
    $sql = "SELECT * FROM shoppingcart WHERE userid = '".$uid."' ";
    $rs = mysqli_query($con,$sql);
    return $rs;
}
function insertOrder($uid,$ord,$addid,$date,$pm){
    $con = getCon();
    $sql = "INSERT INTO orders VALUES('','".$uid."','".$addid."','".$ord."','".$date."','".$pm."')";
    mysqli_query($con,$sql);
}
function insertOrderList($uid,$ord,$pid,$vid,$sale,$dchrg,$qty,$total,$orddate,$status,$date,$gst,$grandTotal){
    $con = getCon();
    $sql = "INSERT INTO orderlist VALUES('','".$uid."','".$ord."','".$pid."','".$vid."','".$sale."','".$dchrg."','".$qty."','".$total."','".$gst."','".$grandTotal."','".$orddate."','".$status."','".$date."')";
    mysqli_query($con,$sql);
}
function generateInvoiceData($ord,$vid){
    $con = getCon();
    $sql = "SELECT *, SUM(subtotal) as tot, SUM(saleprice) as sale, SUM(gst) as gst,SUM(grandtotal) as gtot FROM orderlist WHERE orderno = '".$ord."' AND vid = '".$vid."'";
    return mysqli_query($con,$sql);
}
function insertInvoice($inv,$ord,$vid,$totalsale,$grandtotal,$status,$gst,$gtot,$uid,$date){
    $con = getCon();
    $sql = "INSERT INTO invoice VALUES('','".$inv."','".$ord."','".$vid."','".$totalsale."','".$grandtotal."','".$gst."','".$gtot."','".$status."','".$uid."','".$date."')";
    mysqli_query($con,$sql);
}
function deleteCart($uid,$vid){
    $con = getCon();
    $sql = "DELETE FROM shoppingcart WHERE userid = '".$uid."' AND vid = '".$vid."'";
    mysqli_query($con,$sql);
}
function getAllInvoiceByVendor($vid){
    $con = getCon();
    $sql = "SELECT * FROM invoice WHERE vid = '".$vid."' ORDER BY id DESC";
    return mysqli_query($con,$sql);
    
}
function getOrderList($ordno,$vid){
    $con = getCon();
    $sql = "SELECT * FROM orderlist WHERE orderno = '".$ordno."' AND vid = '".$vid."'";
    return mysqli_query($con,$sql);
}
function getOrderListByOrderNo($ordno){
    $con = getCon();
    $sql = "SELECT * FROM orderlist WHERE orderno = '".$ordno."'";
    return mysqli_query($con,$sql);
}
function getOrder($ord){
    $con = getCon();
    $sql = "SELECT * FROM orders WHERE orderno = '".$ord."' ";
    return mysqli_fetch_assoc(mysqli_query($con,$sql));
}
function getUserById($uid){
    $con = getCon();
    $sql = "SELECT * FROM user WHERE id = '".$uid."'";
    return mysqli_fetch_assoc(mysqli_query($con,$sql));
}
function updateProductDes($pid,$des){
    $con = getCon();
    $sql = "UPDATE product SET description = '".$des."' WHERE id = '".$pid."'";
    mysqli_query($con,$sql);
}
function fetchProductDes($pid){
    $con = getCon();
    $sql = "SELECT description FROM product WHERE id = '".$pid."'";
    return mysqli_fetch_assoc(mysqli_query($con,$sql));
    
}
function getAllProdOfVendor($vid,$pid){
    $con = getCon();
    $sql = "SELECT * FROM product WHERE vid = '".$vid."' AND id != '".$pid."'";
    return mysqli_query($con,$sql);
}
function searchProd($searchText){
    $con = getCon();
    $sql = "SELECT * FROM product WHERE name LIKE '%$searchText%' AND status = 1";
    return mysqli_query($con,$sql);
}
function getOrderByUser($uid){
    $con = getCon();
    $sql = "SELECT * FROM orderlist WHERE userid = '".$uid."' ORDER BY id DESC";
    return mysqli_query($con,$sql);
}
function getUserAddress($uid){
    $con = getCon();
    $sql = "SELECT * FROM useraddress WHERE userid = '".$uid."'";
    return mysqli_query($con,$sql);
}
function getMeasureUnit($id){
    $con = getCon();
    $sql = "SELECT * FROM measureunit WHERE id = '".$id."'";
    return mysqli_fetch_assoc(mysqli_query($con,$sql));
}

// 25-01-2021
function checkUser($email,$mobile){
    $con = getCon();
    $sql = "SELECT * FROM user WHERE email = '".$email."' OR mobile = '".$mobile."'";
    $rs = mysqli_query($con,$sql);
    if(mysqli_num_rows($rs) >= 1)
        return 1;
    else
        return 0;
}
function getUserData($uid){
    $con = getCon();
    $sql = "SELECT * FROM user WHERE id = '".$uid."'";
    return mysqli_fetch_assoc(mysqli_query($con,$sql));
}
function changePassword($uid,$pass){
    $con = getCon();
    $sql = "UPDATE user SET password = '".$pass."' WHERE id = '".$uid."'";
    mysqli_query($con,$sql);
}
function updateProfile($uid,$name,$email,$mobile){
    $con = getCon();
    $sql = "UPDATE user SET name = '".$name."',email = '".$email."' ,mobile = '".$mobile."' WHERE id = '".$uid."'";
    mysqli_query($con,$sql);
    $_SESSION["uname"] = $name;
    $_SESSION["uemail"] = $email;
    $_SESSION["umobile"] = $mobile;
}
function getAddressById($aid){
    $con = getCon();
    $sql = "SELECT * FROM useraddress WHERE id = '".$aid."'";
    return mysqli_fetch_assoc(mysqli_query($con,$sql));
}
function updateAddress($name,$email,$mobile,$address,$city,$state,$pincode,$aid){
    $con = getCon();
    $sql = "UPDATE useraddress SET name = '".$name."', mobile = '".$mobile."', email = '".$email."', addressline = '".$address."', city = '".$city."', state = '".$state."', pincode = '".$pincode."' WHERE id = '".$aid."'";
    mysqli_query($con,$sql);
}
function updateVendorProfile($name,$shopname,$email,$mobile,$dealin,$minorder,$bname,$bacno,$bifsc,$shoplogo,$logopath,$vid,$acholder,$brandname){
    $con = getCon();
    $sql = "UPDATE vendor SET name = '".$name."', email = '".$email."', mobile = '".$mobile."', dealin = '".$dealin."', minorder = '".$minorder."', bankname = '".$bname."', bankaccountno = '".$bacno."', ifsccode = '".$bifsc."', shoplogo = '".$shoplogo."', accountholdername = '".$acholder."', shopname = '".$shopname."', brandname = '".$brandname."' WHERE id = '".$vid."'";
    mysqli_query($con,$sql);
    if($logopath != "")
        move_uploaded_file($logopath,"../vendorImage/shop/".$shoplogo);
    $_SESSION["vname"] = $name;
    $_SESSION["vmobile"] = $mobile;
}
function changeVenPassword($vid,$pass){
    $con = getCon();
    $sql = "UPDATE vendor SET password = '".$pass."' WHERE id = '".$vid."'";
    mysqli_query($con,$sql);
}
function deleteUserAddress($id){
    $con = getCon();
    $sql = "DELETE FROM useraddress WHERE id = '".$id."'";
    mysqli_query($con,$sql);
}
// 25-01-2021
function adminlogin($mobile_no,$password){
    $con = getCon();
    $sql = "SELECT * FROM admin WHERE mobile_no = '".$mobile_no."' and password = '".$password."'";
    $rs = mysqli_query($con,$sql);
    if(mysqli_num_rows($rs)>=1){
        $data = mysqli_fetch_assoc($rs);
        $_SESSION["aid"] = $data["id"];
        $_SESSION["aname"] = $data["name"];
        $_SESSION["aemail"] = $data["email"];
        $_SESSION["amobile"] = $mobile_no;
       
        header("location: index.php");
    }
    else
    echo '<script>alert("Credential not matched");</script>';
}
function getadminpass($aid){
    $con = getCon();
    $sql = "SELECT * FROM admin WHERE id = '".$aid."'";
    $rs = mysqli_query($con,$sql);
    return mysqli_fetch_assoc($rs);
}
function changeadminpassword($aid,$password){
    $con = getCon();
    $sql = "UPDATE admin SET  password ='".$password."' WHERE id = '".$aid."'";
    mysqli_query($con,$sql);
}

function updateAdmin($name,$email,$mobile,$aid){
    $con = getCon();
    $sql = "UPDATE admin SET name = '$name',email = '$email',mobile_no = '$mobile' WHERE id = '$aid'";
    mysqli_query($con,$sql);
    $_SESSION["aname"] = $name;
    $_SESSION["aemail"] = $email;
    $_SESSION["amobile"] = $mobile;
    
}

function loginWithOtp($mobile){
    $sql = "SELECT * FROM user WHERE mobile = '$mobile'";
    $rs = mysqli_query(getCon(),$sql);
    if(!mysqli_num_rows($rs) >= 1){
        $sqlinsert = "INSERT INTO user(mobile)VALUES('$mobile')";
        mysqli_query(getCon(),$sqlinsert);
    }
    $_SESSION["umobile"] = $mobile;
    $sqlselect = "SELECT * FROM user WHERE mobile = '$mobile'";
    $rsselect = mysqli_query(getCon(),$sql);
    $dataselect = mysqli_fetch_assoc($rsselect);
    $_SESSION["uid"] = $dataselect["id"];
        
    
    
}
function loginWithMobileOtp($mobile){
    $sql = "SELECT * FROM user WHERE mobile = '$mobile'";
    $rs = mysqli_query(getCon(),$sql);
    if(!mysqli_num_rows($rs) >= 1){
        $sqlinsert = "INSERT INTO user(mobile)VALUES('$mobile')";
        mysqli_query(getCon(),$sqlinsert);
    }
   
    $sqlselect = "SELECT * FROM user WHERE mobile = '$mobile'";
    $rsselect = mysqli_query(getCon(),$sql);
    $dataselect = mysqli_fetch_assoc($rsselect);
     $_SESSION["umobile"] = $mobile;
    $_SESSION["uid"] = $dataselect["id"];
    $_SESSION["message"] = "success";
    return json_encode($_SESSION);
        
    
    
}

function getUserByMobile($mob){
    $sql = "SELECT * FROM user WHERE mobile = '$mob'";
    return mysqli_fetch_assoc(mysqli_query(getCon(),$sql));
}
function getAllInvoice(){
    $sql = "SELECT * FROM invoice GROUP BY vid";
    return mysqli_query(getCon(),$sql);
}
function getInvoiceById($id){
    $sql = "SELECT * FROM invoice WHERE id = '$id'";
    return mysqli_fetch_assoc(mysqli_query(getCon(),$sql));
}
function getInvoiceByUser($uid){
    $sql = "SELECT * FROM invoice WHERE userid = '$uid'";
    return mysqli_query(getCon(),$sql);
}
function updateProductStock($pid,$qty){
    $sql = "SELECT * FROM product WHERE id = '$pid'";
    $data = mysqli_fetch_assoc(mysqli_query(getCon(),$sql));
    $oldstock = $data["stock"];
    $newstock = $oldstock - $qty;
    $sqlnew = "UPDATE product SET stock = '$newstock' WHERE id = '$pid'";
    mysqli_query(getCon(),$sqlnew);
}
function getLatest1ProdByVendor($vid){
    $sql = "SELECT * FROM product WHERE vid = $vid ORDER BY id DESC LIMIT 1";
    return mysqli_fetch_assoc(mysqli_query(getCon(),$sql));
}

function insertParcel($inv,$attachName,$attachPath,$courierName,$courierPath,$vid){
    $sql = "INSERT INTO parcel VALUES('','$inv','$attachName','$courierName','$vid')";
    mysqli_query(getCon(),$sql);
    move_uploaded_file($attachPath,"../parcel/attachment/".$attachName);
    move_uploaded_file($courierPath,"../parcel/courier/".$courierName);
}
function getParcel(){
    $sql = "SELECT * FROM parcel ORDER BY id DESC";
    return mysqli_query(getCon(),$sql);
}
function getParcelByVendor($vid){
    $sql = "SELECT * FROM parcel WHERE vid = '$vid' ORDER BY id DESC";
    return mysqli_query(getCon(),$sql);
}

?>