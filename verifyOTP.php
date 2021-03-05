<?php
include("includes/dbconnect.php");
$rs = getMainCat();
$out = '';
$out .= '<div class="col-12">';
$out .= '<div class="form-group mt-2">';
$out .= '<label>Address</label>';
$out .= '<input required name="address" class="border" type="text" placeholder="Addres Line" class="">';
$out .= '</div>';
$out .= '</div>';
$out .= '<div class="col-6">';
$out .= '<div class="form-group mt-2">';
$out .= '<label>Pincode</label>';
$out .= '<input required name="pincode" class="border" type="number" placeholder="Pincode" class="">';
$out .= '</div>';
$out .= '</div>';
$out .= '<div class="col-6">';
$out .= '<div class="form-group mt-2">';
$out .= '<label>City</label>';
$out .= '<input required name="city" class="border" type="text" placeholder="City" class="">';
$out .= '</div>';
$out .= '</div>';
$out .= '<div class="col-6">';
$out .= '<div class="form-group mt-2">';
$out .= '<label>State</label>';
$out .= '<input required name="state" class="border" type="text" placeholder="State" class="">';
$out .= '</div>';
$out .= '</div>';
$out .= '<div class="col-6">';
$out .= '<div class="form-group mt-2">';
$out .= '<label>Email</label>';
$out .= '<input required name="email" class="border" type="text" placeholder="Email" class="">';
$out .= '</div>';
$out .= '</div>';
$out .= '<div class="col-6">';
$out .= '<div class="form-group mt-2">';
$out .= '<label>Deal In</label>';
$out .= '<input required name="dealin" class="border" type="text" placeholder="Deal In" class="">';
$out .= '</div>';
$out .= '</div>';
$out .= '<div class="col-6">';
$out .= '<div class="form-group mt-2">';
$out .= '<label>Brand Name</label>';
$out .= '<input required name="brandname" class="border" type="text" placeholder="Brand Name" class="">';
$out .= '</div>';
$out .= '</div>';
$out .= '<div class="col-6">';
$out .= '<div class="form-group mt-2">';
$out .= '<label>Minimum Order</label>';
$out .= '<input required name="minord" class="border" type="text" placeholder="Minimum Order" class="">';
$out .= '</div>';
$out .= '</div>';
$out .= '<div class="col-6">';
$out .= '<div class="form-group mt-2">';
$out .= '<label>GST No</label>';
$out .= '<input required name="gstno" class="border" type="text" placeholder="GST No" class="">';
$out .= '</div>';
$out .= '</div>';
$out .= '<div class="col-6">';
$out .= '<div class="form-group mt-2">';
$out .= '<label>Upload PAN Card/Adhaar Card</label>';
$out .= '<input required name="gstfile" class="border" type="file" class="">';
$out .= '</div>';
$out .= '</div>';
$out .= '<div class="col-6">';
$out .= '<div class="form-group mt-2">';
$out .= '<label>Shop Logo/Image</label>';
$out .= '<input required name="shoplogo" class="border" type="file" class="">';
$out .= '</div>';
$out .= '</div>';
$out .= '<div class="col-6">';
$out .= '<div class="form-group mt-2">';
$out .= '<label>Choose Category</label>';
$out .= '<select required name="maincat">';
$out .= '<option value="" selected disabled> Choose Category';
    $out .= '</option>';
while($data = mysqli_fetch_assoc($rs)){
    $out .= '<option value="'.$data["id"].'">';
    $out .= $data["name"];
    $out .= '</option>';
}

$out .= '</select>';
$out .= '</div>';
$out .= '</div>';

$out .= '<div class="col-6">';
$out .= '<div class="form-group mt-2">';
$out .= '<label>Password</label>';
$out .= '<input required name="pass" class="border" type="password" class="">';
$out .= '</div>';
$out .= '</div>';
$out .= '<div class="col-6">';
$out .= '<div class="form-group mt-2">';
$out .= '<label>Confirm Password</label>';
$out .= '<input required name="cpass" class="border" type="password" class="">';
$out .= '</div>';
$out .= '</div>';
$out .= '<div class="col-12">';
$out .= '<div class="form-group mt-2">';
$out .= '<input required type="submit" name="addVendor" class="btn btn-success" value="Submit">';
$out .= '</div>';
$out .= '</div>';
echo $out;


?>

                                    
                                        
                                        
                                