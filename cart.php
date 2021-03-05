<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("toplink.php") ?>
</head>

<body>

    <!-- ...:::: Start Header Section:::... -->
    <?php include("headerLG.php"); ?>
    <!-- ...:::: End Header Section:::... -->

    <!-- ...:::: Start Mobile Header Section:::... -->
    <?php include("headerMobile.php"); ?>
    <!-- ...:::: Start Mobile Header Section:::... -->

    <!-- ...:::: Start Offcanvas Mobile Menu Section:::... -->
    <?php include("leftSideMobile.php"); ?>
    <!-- ...:::: End Offcanvas Mobile Menu Section:::... -->

    <!-- ...:::: Start Offcanvas Addcart Section :::... -->

    <!-- ...:::: End  Offcanvas Addcart Section :::... -->

    <!-- ...:::: Start Offcanvas Mobile Menu Section:::... -->
    <div id="offcanvas-wishlish" class="offcanvas offcanvas-rightside offcanvas-add-cart-section">
        <!-- Start Offcanvas Header -->
        <div class="offcanvas-header text-right">
            <button class="offcanvas-close"><i class="fa fa-times"></i></button>
        </div> <!-- ENd Offcanvas Header -->

        <!-- Start Offcanvas Mobile Menu Wrapper -->
        <div class="offcanvas-wishlist-wrapper">
            <h4 class="offcanvas-title">Wishlist</h4>
            <ul class="offcanvas-wishlist">
                <li class="offcanvas-wishlist-item-single">
                    <div class="offcanvas-wishlist-item-block">
                        <a href="" class="offcanvas-wishlist-item-image-link">
                            <img src="assets/images/products_images/aments_products_image_6.jpg" alt="" class="offcanvas-wishlist-image">
                        </a>
                        <div class="offcanvas-wishlist-item-content">
                            <a href="" class="offcanvas-wishlist-item-link">Car Wheel</a>
                            <div class="offcanvas-wishlist-item-details">
                                <span class="offcanvas-wishlist-item-details-quantity">1 x </span>
                                <span class="offcanvas-wishlist-item-details-price">$49.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="offcanvas-wishlist-item-delete text-right">
                        <a href="#" class="offcanvas-wishlist-item-delete"><i class="fa fa-trash-o"></i></a>
                    </div>
                </li>
                <li class="offcanvas-wishlist-item-single">
                    <div class="offcanvas-wishlist-item-block">
                        <a href="" class="offcanvas-wishlist-item-image-link">
                            <img src="assets/images/categories_images/aments_categories_08.jpg" alt="" class="offcanvas-wishlist-image">
                        </a>
                        <div class="offcanvas-wishlist-item-content">
                            <a href="" class="offcanvas-wishlist-item-link">Car Vails</a>
                            <div class="offcanvas-wishlist-item-details">
                                <span class="offcanvas-wishlist-item-details-quantity">3 x </span>
                                <span class="offcanvas-wishlist-item-details-price">$500.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="offcanvas-wishlist-item-delete text-right">
                        <a href="#" class="offcanvas-wishlist-item-delete"><i class="fa fa-trash-o"></i></a>
                    </div>
                </li>
                <li class="offcanvas-wishlist-item-single">
                    <div class="offcanvas-wishlist-item-block">
                        <a href="" class="offcanvas-wishlist-item-image-link">
                            <img src="assets/images/products_images/aments_products_image_2.jpg" alt="" class="offcanvas-wishlist-image">
                        </a>
                        <div class="offcanvas-wishlist-item-content">
                            <a href="" class="offcanvas-wishlist-item-link">Shock Absorber</a>
                            <div class="offcanvas-wishlist-item-details">
                                <span class="offcanvas-wishlist-item-details-quantity">1 x </span>
                                <span class="offcanvas-wishlist-item-details-price">$350.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="offcanvas-wishlist-item-delete text-right">
                        <a href="#" class="offcanvas-wishlist-item-delete"><i class="fa fa-trash-o"></i></a>
                    </div>
                </li>
            </ul>
            <ul class="offcanvas-wishlist-action-button">
                <li class="offcanvas-wishlist-action-button-list"><a href="" class="offcanvas-wishlist-action-button-link">View wishlist</a></li>
            </ul>
        </div> <!-- End Offcanvas Mobile Menu Wrapper -->

    </div> <!-- ...:::: End Offcanvas Mobile Menu Section:::... -->

    <div class="offcanvas-overlay"></div>

    <!-- ...:::: Start Breadcrumb Section:::... -->
    <div class="breadcrumb-section d-none d-lg-block">
        <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-between justify-content-md-between  align-items-center flex-md-row flex-column">
                        <h3 class="breadcrumb-title">Cart</h3>
                        <div class="breadcrumb-nav">
                            <nav aria-label="breadcrumb">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="#">Shop</a></li>
                                    <li class="active" aria-current="page">Cart</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Breadcrumb Section:::... -->

    <!-- ...:::: Start Cart Section:::... -->
    <div class="cart-section">
        <!-- Start Cart Table -->
        <div class="cart-table-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 d-none d-lg-block">
                        <div class="table_desc">
                            <div class="table_page table-responsive">
                                <table id="cartData">
                                    <!-- Start Cart Table Head -->
                                    <thead>
                                        <tr>

                                            <th class="product_thumb">Image</th>
                                            <th class="product_name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product_quantity">Quantity</th>
                                            <th class="product_total">Total</th>
                                            <th class="product_remove">Delete</th>
                                        </tr>
                                    </thead> <!-- End Cart Table Head -->
                                    <?php if(isset($_SESSION["umobile"])){ ?>
                                    <tbody>
                                        <?php
                                        
                                        $udata = getUserByMobile($_SESSION["umobile"]);
                                        
                                        $rs = cartData($udata["id"]);
                                        $grandTotal = 0;
                                        while($data = mysqli_fetch_assoc($rs)):
                                        $rsven = cartByVen($data["vid"],$udata["id"]); 
                                        $dataVendor = getVendor($data["vid"]);
                                        ?>
                                        <tr>

                                            <th>
                                                Seller Name: <a href="#" class="btn btn-danger"><?php echo $dataVendor["name"]; ?></a>
                                            </th>
                                        </tr>
                                        <?php 
                                        $ventotal = 0;
                                        while($dataven = mysqli_fetch_assoc($rsven)):
                                        $datapro = getProdById($dataven["proid"]);
                                        $set = $datapro["returnduration"];
                                        $q = $dataven["quantity"] / $set;
                                        $total = $datapro["saleprice"] * $dataven["quantity"];
                                        $grandTotal += $total;
                                        $ventotal += $total;
                                        ?>
                                        <!-- Start Cart Single Item-->
                                        <tr>

                                            <td class="product_thumb"><a href="product-details-default.html"><img src="productImage/<?php echo $datapro["pic1"] ?>" alt=""></a></td>
                                            <td class="product_name"><a href="product-details-default.html"><?php echo $datapro["name"] ?></a></td>
                                            <td class="product-price">&#8377; <?php echo $datapro["saleprice"] ?></td>
                                            <td class="product_quantity">
                                                <button id="minus" class="btn" onclick="minusPro(<?php echo $dataven["id"] ?>)"><i class="fa fa-minus" aria-hidden="true"></i></button>
                                                <input type="text" style="width:60px" readonly value="<?php echo $dataven["quantity"] ?>" id="quantity">
                                                <button id="plus" class="btn" onclick="plusPro(<?php echo $dataven["id"] ?>)"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                            </td>
                                            <td class="product_total">&#8377; <?php echo $total; ?></td>
                                            <td class="product_remove"><a href="#" onclick="deleteFromCart(<?php echo $dataven["id"] ?>)"><i class="fa fa-trash-o"></i></a></td>
                                        </tr> <!-- End Cart Single Item-->
                                        <?php 
                                        endwhile; ?>
                                        <tr class="mb-2">
                                            <th>
                                                <a class="btn btn-info" href="productlist.php?id=<?php echo $dataVendor["maincatid"] ?>&vid=<?php echo $dataVendor["id"] ?>">Click Here To Buy From This Seller..</a>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th colspan="6">
                                                <div class="coupon_area">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6">

                                                            </div>
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="coupon_code right">
                                                                    <h3>Vendor Total</h3>
                                                                    <div class="coupon_inner" id="total">

                                                                        <div class="cart_subtotal">
                                                                            <p>Sub Total</p>
                                                                            <p class="cart_amount">&#8377; <?php echo $ventotal; ?></p>
                                                                        </div>
                                                                        <div class="cart_subtotal">
                                                                            <p>GST @ 5%</p>
                                                                            <?php $gst = (5/100)*$ventotal; ?>
                                                                            <p class="cart_amount">&#8377; <?php echo $gst; ?></p>
                                                                        </div>
                                                                        <div class="cart_subtotal">
                                                                            <p>Grand Total</p>
                                                                            <p class="cart_amount">&#8377; <?php echo $ventotal+$gst; ?></p>
                                                                        </div>
                                                                        <div class="checkout_btn">
                                                                            <?php if($ventotal >= $dataVendor["minorder"]){ ?>
                                                                            <a href="checkout.php?vid=<?php echo $dataVendor["id"] ?>">Proceed to Checkout</a>
                                                                            <?php } else { ?>
                                                                            <a href="#">Shop For At-Least &#8377; <?php echo $dataVendor["minorder"] ?></a>
                                                                            <?php } ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </th>
                                        </tr>
                                        <?php endwhile; ?>
                                        <script>
                                            function plusPro(id) {
                                                $.ajax({
                                                    type: "POST",
                                                    url: "cartQuant.php",
                                                    data: {
                                                        id: id,
                                                        q: 1
                                                    },
                                                    success: function(data) {
                                                        $('#cartData').load(document.URL + ' #cartData');
                                                        $('#total').load(document.URL + ' #total');
                                                    }
                                                });
                                            }

                                            function minusPro(id) {
                                                $.ajax({
                                                    type: "POST",
                                                    url: "cartQuant.php",
                                                    data: {
                                                        id: id,
                                                        q: 0
                                                    },
                                                    success: function(data) {
                                                        $('#cartData').load(document.URL + ' #cartData');
                                                        $('#total').load(document.URL + ' #total');
                                                    }
                                                });
                                            }

                                            function deleteFromCart(id) {

                                                $.ajax({
                                                    type: "POST",
                                                    url: "deleteFromCart.php",
                                                    data: {
                                                        id: id
                                                    },
                                                    success: function(data) {
                                                        $('#cartData').load(document.URL + ' #cartData');
                                                        $('#total').load(document.URL + ' #total');
                                                        $('#cartNo').load(document.URL + ' #cartNo');
                                                    }

                                                });

                                            }
                                        </script>
                                    </tbody>
                                    <?php }else { ?>
                                    <tbody>
                                        <tr>
                                            <td colspan="6">
                                                <h3>To See Your Cart You Must Have To Login</h3>
                                                <a href="login.php" class="nav-link">Click Here To Login</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <?php } ?>
                                </table>
                            </div>
                            <div class="cart_submit">

                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-block d-lg-none p-0">
                        <div class="">
                            <div class="">
                               <style>
                                   .ft-size{
                                       font-size: 10px;
                                       
                                   }
                                   .ft-size .p{
                                       width: 50px;
                                   }
                                   .ft-size .d{
                                       width: 40px;
                                   }
                                </style>
                                <table id="cartDatasm" class="table table-bordered ft-size">
                                    <!-- Start Cart Table Head -->
                                    <thead>
                                        <tr>

                                            <th class="product_name p">Product</th>
                                            <th class="product_name p">Image</th>
                                            <th class="product-price p">Price</th>
                                            <th class="product_quantity p">Quantity</th>
                                            <th class="product_total p">Total</th>
                                            <th class="product_remove d">Delete</th>
                                        </tr>
                                    </thead> <!-- End Cart Table Head -->
                                    <?php if(isset($_SESSION["umobile"])){ ?>
                                    <tbody>
                                        <?php
                                        
                                        $udata = getUserByMobile($_SESSION["umobile"]);
                                        
                                        $rs = cartData($udata["id"]);
                                        $grandTotal = 0;
                                        while($data = mysqli_fetch_assoc($rs)):
                                        $rsven = cartByVen($data["vid"],$udata["id"]); 
                                        $dataVendor = getVendor($data["vid"]);
                                        ?>
                                        <tr>

                                            <th colspan="5">
                                                Shop Name: <a href="#" class="p-1"><?php echo $dataVendor["shopname"]; ?></a>
                                            </th>
                                        </tr>
                                        <?php 
                                        $ventotal = 0;
                                        while($dataven = mysqli_fetch_assoc($rsven)):
                                        $datapro = getProdById($dataven["proid"]);
                                        $set = $datapro["returnduration"];
                                        $q = $dataven["quantity"] / $set;
                                        $total = $datapro["saleprice"] * $dataven["quantity"];
                                        $grandTotal += $total;
                                        $ventotal += $total;
                                        ?>
                                        <!-- Start Cart Single Item-->
                                        <tr>

                                            <td class="product_name"><a href="product-details-default.html"><?php echo $datapro["name"] ?></a></td>
                                            <td class="product_name"><img src="productImage/<?php echo $datapro["pic1"] ?>" alt="" style="height:50px"></td>
                                            <td class="product-price">&#8377; <?php echo $datapro["saleprice"] ?></td>
                                            <td class="product_quantity">
                                                <div style="" class="text-center">
                                                    <button id="minussm" class="btn p-0" onclick="minusProsm(<?php echo $dataven["id"] ?>)"><i class="fa fa-minus fa-xs" aria-hidden="true"></i></button>
                                                    <input type="text" class="p-0" style="width:50px;text-align:center" readonly value="<?php echo $dataven["quantity"] ?>" id="quantitysm">
                                                    <button id="plussm" class="btn p-0" onclick="plusProsm(<?php echo $dataven["id"] ?>)"><i class="fa fa-plus fa-xs" aria-hidden="true"></i></button>
                                                </div>
                                            </td>
                                            <td class="product_total">&#8377; <?php echo $total; ?></td>
                                            <td class="product_remove"><a href="#" onclick="deleteFromCartsm(<?php echo $dataven["id"] ?>)"><i class="fa fa-trash-o fa-2x"></i></a></td>
                                        </tr> <!-- End Cart Single Item-->
                                        <?php 
                                        endwhile; ?>
                                        <tr class="mb-2">
                                            <th colspan="6">
                                                <a class="p-1" href="productlist.php?id=<?php echo $dataVendor["maincatid"] ?>&vid=<?php echo $dataVendor["id"] ?>">Click Here To Buy From This Seller..</a>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th colspan="6">
                                               <style>
                                                   .coupon_area .ft-size{
                                                       font-size: 15px;
                                                       padding: 5px;
                                                       margin: 0px;
                                                   }
                                                   .coupon_inner .ft-size{
                                                       font-size: 10px;
                                                       padding: 2px;
                                                       margin: 0px;
                                                   }
                                                </style>
                                                <div class="coupon_area">
                                                                <div class="coupon_code right">
                                                                    <h3 class="ft-size">Vendor Total</h3>
                                                                    <div class="coupon_inner" id="totalsm">

                                                                        <div class="cart_subtotal ft-size">
                                                                            <p>Sub Total</p>
                                                                            <p class="cart_amount ft-size">&#8377; <?php echo $ventotal; ?></p>
                                                                        </div>
                                                                        <div class="cart_subtotal ft-size">
                                                                            <p>GST @ 5%</p>
                                                                            <?php $gst = (5/100)*$ventotal; ?>
                                                                            <p class="cart_amount ft-size">&#8377; <?php echo $gst; ?></p>
                                                                        </div>
                                                                        <div class="cart_subtotal ft-size">
                                                                            <p>Grand Total</p>
                                                                            <p class="cart_amount ft-size">&#8377; <?php echo $ventotal+$gst; ?></p>
                                                                        </div>
                                                                        <div class="checkout_btn">
                                                                            <?php if($ventotal >= $dataVendor["minorder"]){ ?>
                                                                            <a href="checkout.php?vid=<?php echo $dataVendor["id"] ?>">Proceed to Checkout</a>
                                                                            <?php } else { ?>
                                                                            <a href="#">Shop For At-Least &#8377; <?php echo $dataVendor["minorder"] ?></a>
                                                                            <?php } ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                            </th>
                                        </tr>
                                        <?php endwhile; ?>
                                        <script>
                                            function plusProsm(id) {
                                                $.ajax({
                                                    type: "POST",
                                                    url: "cartQuant.php",
                                                    data: {
                                                        id: id,
                                                        q: 1
                                                    },
                                                    success: function(data) {
                                                        $('#cartDatasm').load(document.URL + ' #cartDatasm');
                                                        $('#totalsm').load(document.URL + ' #totalsm');
                                                    }
                                                });
                                            }

                                            function minusProsm(id) {
                                                $.ajax({
                                                    type: "POST",
                                                    url: "cartQuant.php",
                                                    data: {
                                                        id: id,
                                                        q: 0
                                                    },
                                                    success: function(data) {
                                                        $('#cartDatasm').load(document.URL + ' #cartDatasm');
                                                        $('#totalsm').load(document.URL + ' #totalsm');
                                                    }
                                                });
                                            }

                                            function deleteFromCartsm(id) {

                                                $.ajax({
                                                    type: "POST",
                                                    url: "deleteFromCart.php",
                                                    data: {
                                                        id: id
                                                    },
                                                    success: function(data) {
                                                        $('#cartDatasm').load(document.URL + ' #cartDatasm');
                                                        $('#totalsm').load(document.URL + ' #totalsm');
                                                        $('#cartNo').load(document.URL + ' #cartNo');
                                                        $('#cartCounts').load(document.URL + ' #cartCounts');
                                                    }

                                                });

                                            }
                                        </script>
                                    </tbody>
                                    <?php }else { ?>
                                    <tbody>
                                        <tr>
                                            <td colspan="6">
                                                <h3>To See Your Cart You Must Have To Login</h3>
                                                <a href="login.php" class="nav-link">Click Here To Login</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <?php } ?>
                                </table>
                            </div>
                            <div class="cart_submit">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Cart Table -->

        <!-- Start Coupon Start 
        <div class="coupon_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="coupon_code left">
                            <h3>Coupon</h3>
                            <div class="coupon_inner">
                                <p>Enter your coupon code if you have one.</p>
                                <input placeholder="Coupon code" type="text">
                                <button type="submit">Apply coupon</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="coupon_code right">
                            <h3>Cart Totals</h3>
                            <div class="coupon_inner" id="total">
                                
                                <div class="cart_subtotal">
                                    <p>Total</p>
                                    <p class="cart_amount" >&#8377; <?php echo $grandTotal; ?></p>
                                </div>
                                <div class="checkout_btn">
                                    <?php if($grandTotal >= 9999){ ?>
                                    <a href="checkout.php">Proceed to Checkout</a>
                                    <?php } else { ?>
                                    <a href="#">Shop For At-Least &#8377; 9999</a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <!-- End Coupon Start -->

    </div> <!-- ...:::: End Cart Section:::... -->

    <!-- ...:::: Start Footer Section:::... -->
    <?php include("footer.php"); ?>
    <!-- ...:::: End Footer Section:::... -->

    <!-- material-scrolltop button -->
    <button class="material-scrolltop" type="button"></button>

    <!-- Start Modal Add cart -->
    <div class="modal fade" id="modalAddcart" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col text-right">
                                <button type="button" class="close modal-close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true"> <i class="fa fa-times"></i></span>
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="modal-add-cart-product-img">
                                            <img class="img-fluid" src="assets/images/products_images/aments_products_image_1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="modal-add-cart-info"><i class="fa fa-check-square"></i>Added to cart successfully!</div>
                                        <div class="modal-add-cart-product-cart-buttons">
                                            <a href="cart.html">View Cart</a>
                                            <a href="checkout.html">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 modal-border">
                                <ul class="modal-add-cart-product-shipping-info">
                                    <li> <strong><i class="icon-shopping-cart"></i> There Are 5 Items In Your Cart.</strong></li>
                                    <li> <strong>TOTAL PRICE: </strong> <span>$187.00</span></li>
                                    <li class="modal-continue-button"><a href="#" data-dismiss="modal">CONTINUE SHOPPING</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Modal Add cart -->

    <!-- Start Modal Quickview cart -->
    <div class="modal fade" id="modalQuickview" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col text-right">
                                <button type="button" class="close modal-close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true"> <i class="fa fa-times"></i></span>
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="product-details-gallery-area">
                                    <div class="product-large-image modal-product-image-large">
                                        <div class="product-image-large-single">
                                            <img class="img-fluid" src="assets/images/products_images/aments_products_image_1.jpg" alt="">
                                        </div>
                                        <div class="product-image-large-single">
                                            <img class="img-fluid" src="assets/images/products_images/aments_products_image_2.jpg" alt="">
                                        </div>
                                        <div class="product-image-large-single">
                                            <img class="img-fluid" src="assets/images/products_images/aments_products_image_3.jpg" alt="">
                                        </div>
                                        <div class="product-image-large-single">
                                            <img class="img-fluid" src="assets/images/products_images/aments_products_image_4.jpg" alt="">
                                        </div>
                                        <div class="product-image-large-single">
                                            <img class="img-fluid" src="assets/images/products_images/aments_products_image_5.jpg" alt="">
                                        </div>
                                        <div class="product-image-large-single">
                                            <img class="img-fluid" src="assets/images/products_images/aments_products_image_6.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="product-image-thumb modal-product-image-thumb">
                                        <div class="zoom-active product-image-thumb-single">
                                            <img class="img-fluid" src="assets/images/products_images/aments_products_image_1.jpg" alt="">
                                        </div>
                                        <div class="product-image-thumb-single">
                                            <img class="img-fluid" src="assets/images/products_images/aments_products_image_2.jpg" alt="">
                                        </div>
                                        <div class="product-image-thumb-single">
                                            <img class="img-fluid" src="assets/images/products_images/aments_products_image_3.jpg" alt="">
                                        </div>
                                        <div class="product-image-thumb-single">
                                            <img class="img-fluid" src="assets/images/products_images/aments_products_image_4.jpg" alt="">
                                        </div>
                                        <div class="product-image-thumb-single">
                                            <img class="img-fluid" src="assets/images/products_images/aments_products_image_5.jpg" alt="">
                                        </div>
                                        <div class="product-image-thumb-single">
                                            <img class="img-fluid" src="assets/images/products_images/aments_products_image_6.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product-details-content-area">
                                    <!-- Start  Product Details Text Area-->
                                    <div class="product-details-text">
                                        <h4 class="title">Nonstick Dishwasher PFOA</h4>
                                        <div class="price"><del>$70.00</del>$80.00</div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam, reiciendis maiores quidem aperiam, rerum vel recusandae</p>
                                    </div> <!-- End  Product Details Text Area-->
                                    <!-- Start Product Variable Area -->
                                    <div class="product-details-variable">
                                        <!-- Product Variable Single Item -->
                                        <div class="variable-single-item">
                                            <span>Color</span>
                                            <div class="product-variable-color">
                                                <label for="modal-product-color-red">
                                                    <input name="modal-product-color" id="modal-product-color-red" class="color-select" type="radio" checked>
                                                    <span class="product-color-red"></span>
                                                </label>
                                                <label for="modal-product-color-tomato">
                                                    <input name="modal-product-color" id="modal-product-color-tomato" class="color-select" type="radio">
                                                    <span class="product-color-tomato"></span>
                                                </label>
                                                <label for="modal-product-color-green">
                                                    <input name="modal-product-color" id="modal-product-color-green" class="color-select" type="radio">
                                                    <span class="product-color-green"></span>
                                                </label>
                                                <label for="modal-product-color-light-green">
                                                    <input name="modal-product-color" id="modal-product-color-light-green" class="color-select" type="radio">
                                                    <span class="product-color-light-green"></span>
                                                </label>
                                                <label for="modal-product-color-blue">
                                                    <input name="modal-product-color" id="modal-product-color-blue" class="color-select" type="radio">
                                                    <span class="product-color-blue"></span>
                                                </label>
                                                <label for="modal-product-color-light-blue">
                                                    <input name="modal-product-color" id="modal-product-color-light-blue" class="color-select" type="radio">
                                                    <span class="product-color-light-blue"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <!-- Product Variable Single Item -->
                                        <div class="variable-single-item ">
                                            <span>Quantity</span>
                                            <div class="product-variable-quantity">
                                                <input min="1" max="100" value="1" type="number">
                                            </div>
                                        </div>
                                    </div> <!-- End Product Variable Area -->
                                    <!-- Start  Product Details Meta Area-->
                                    <div class="product-details-meta mb-20">
                                        <ul>
                                            <li><a href=""><i class="icon-heart"></i>Add to wishlist</a></li>
                                            <li><a href=""><i class="icon-repeat"></i>Compare</a></li>
                                            <li><a href="#" data-toggle="modal" data-target="#modalQuickview"><i class="icon-shopping-cart"></i>Add To Cart</a></li>
                                        </ul>
                                    </div> <!-- End  Product Details Meta Area-->
                                    <!-- Start  Product Details Social Area-->
                                    <ul class="modal-product-details-social">
                                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                    </ul> <!-- End  Product Details Social Area-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Modal Quickview cart -->

    <!-- ::::::::::::::All JS Files here :::::::::::::: -->
    <!-- Global Vendor, plugins JS -->
    <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="assets/js/vendor/jquery-ui.min.js"></script>

    <!--Plugins JS-->
    <script src="assets/js/plugins/slick.min.js"></script>
    <script src="assets/js/plugins/material-scrolltop.js"></script>
    <script src="assets/js/plugins/jquery.nice-select.min.js"></script>
    <script src="assets/js/plugins/jquery.zoom.min.js"></script>
    <script src="assets/js/plugins/venobox.min.js"></script>

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <!-- <script src="assets/js/vendor.min.js"></script> 
    <script src="assets/js/plugins.min.js"></script> -->

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>



</body>

</html>