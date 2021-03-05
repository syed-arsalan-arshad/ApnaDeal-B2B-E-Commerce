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
                        <h3 class="breadcrumb-title">Checkout</h3>
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
        <!-- Start Coupon Start -->
        <div class="coupon_area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="coupon_code left" >
                            <h3>Address</h3>
                            <div class="coupon_inner" style="height:300px;overflow:scroll">
                                <form action="">
                                    <?php 
                                    $udata = getUserByMobile($_SESSION["umobile"]);
                                $rs = getAllUserAddress($udata["id"]);
                                    $x = 0;
                                while($data = mysqli_fetch_assoc($rs)):
                                    if($x == 0){
                                ?>

                                    <div class="card mb-2">
                                        <div class="card-body ">
                                            <label class="w-100 ">
                                                <div class="row ">
                                                    <div class="col-10">
                                                        <div class="row">
                                                            <div class="col-2 text-center"><input value="<?php echo $data["id"]; ?>" style="width:30px;" type="radio" checked class="" name="optradio"> </div>
                                                            <div class="col-9">
                                                                <h5> <b><?php echo $data["name"] ?></b></h5>
                                                                <h6><b><?php echo $data["mobile"]; ?></b>

                                                                </h6>
                                                                <h6><b><?php echo $data["email"]; ?></b></h6>
                                                                <h6><?php echo $data["addressline"]; ?></h6>
                                                                <h6><?php echo $data["city"]; ?></h6>
                                                                <h6><?php echo $data["state"]; ?></h6>
                                                                <h6><?php echo $data["pincode"]; ?></h6>
                                                            </div>
                                                            <div class="col-12">
                                                                <a href="editAddress.php?aid=<?php echo $data['id']; ?>&vid=<?php echo $_GET["vid"]; ?>">Edit</a>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <?php } else{ ?>
                                    <div class="card mb-2">
                                        <div class="card-body ">
                                            <label class="w-100 ">
                                                <div class="row ">
                                                    <div class="col-10">
                                                        <div class="row">
                                                            <div class="col-2 text-center"><input value="<?php echo $data["id"]; ?>" style="width:30px;" type="radio" class="" name="optradio"> </div>
                                                            <div class="col-9">
                                                                <h5> <b><?php echo $data["name"] ?></b></h5>
                                                                <h6><b><?php echo $data["mobile"]; ?></b>

                                                                </h6>
                                                                <h6><b><?php echo $data["email"]; ?></b></h6>
                                                                <h6><?php echo $data["addressline"]; ?></h6>
                                                                <h6><?php echo $data["city"]; ?></h6>
                                                                <h6><?php echo $data["state"]; ?></h6>
                                                                <h6><?php echo $data["pincode"]; ?></h6>
                                                            </div>
                                                            <div class="col-12">
                                                                <a href="editAddress.php?aid=<?php echo $data['id']; ?>&vid=<?php echo $_GET["vid"]; ?>">Edit</a>
                                                            </div>
                                                        </div>


                                                    </div>
                                                    
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <?php } 
                                    $x++;
                                    endwhile; ?>
                                </form>

                                <a href="#" data-toggle="modal" data-target="#addressModal">Add New Address</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="coupon_code right">
                            <h3>Cart Total</h3>
                            <div class="coupon_inner" id="total">
                                <?php 
                                $vid = $_GET["vid"];
                                $rscart = cartByVen($vid,$_SESSION["uid"]);
                                $grandTotal = 0;
                                    while($dataven = mysqli_fetch_assoc($rscart)):
                                        $datapro = getProdById($dataven["proid"]);
                                        $total = $datapro["saleprice"] * $dataven["quantity"];
                                        $grandTotal += $total;
                                endwhile;
                                ?>
                                <div class="cart_subtotal">
                                    <p>Sub Total</p>
                                    <p class="cart_amount">&#8377; <?php echo $grandTotal; ?></p>
                                </div>
                                <div class="cart_subtotal">
                                    <p>GST @ 5%</p>
                                    <?php $gst = (5/100)*$grandTotal; ?>
                                    <p class="cart_amount" >&#8377; <?php echo $gst; ?></p>
                                </div>
                                <div class="cart_subtotal">
                                    <p>Grand Total</p>
                                    <p class="cart_amount" >&#8377; <?php echo $grandTotal+$gst; ?></p>
                                </div>
                                <div class="checkout_btn">

                                    <a href="#" onclick="placeOrder()">Pay By Cash</a>
                                    <a href="#" onclick="#">Pay Online</a>
                                </div>
                                
                                <script>
                                    function placeOrder(){
                                        var addid = $('input[name="optradio"]:checked').val();
                                        var uid = "<?php echo $_SESSION["uid"] ?>";
                                        var vid = "<?php echo $vid ?>";
                                        var ord = "ORD"+uid+Date.now();
                                        $.ajax({
                                            type: "POST",
                                            url: "placeOrder.php",
                                            data: {
                                                vid: vid,
                                                addid: addid,
                                                uid: uid,
                                                ord: ord,
                                                pm: 0
                                            },
                                            success: function(data){
                                             swal("Order Placed Successfully");
                                             setTimeout(function(){ window.location.href = "cart.php"; }, 3000);
                                            
                                            }
                                        });
                                        
                                        
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Coupon Start -->

    </div> <!-- ...:::: End Cart Section:::... -->
    <!-- Start Modal Add cart -->
    <div class="modal fade" id="addressModal" tabindex="-1" role="dialog" aria-hidden="true">
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
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form action="addAddress.php" method="post">
                                            <div class="row mt-2">
                                                <div class="col-6 mb-2">
                                                    <input type="text" name="name" required placeholder="Full Name" class="form-control">
                                                </div>
                                                <div class="col-6 mb-2">
                                                    <input type="text" name="mobile" required placeholder="Mobile No" class="form-control">
                                                </div>
                                                <div class="col-6 mb-2">
                                                    <input type="email" name="email" required placeholder="Email Id" class="form-control">
                                                </div>
                                                <div class="col-12 mb-2">
                                                    <input type="text" name="address" required placeholder="Address Line" class="form-control">
                                                </div>
                                                <div class="col-6 mb-2">
                                                    <input type="text" name="city" required placeholder="City" class="form-control">
                                                </div>
                                                <div class="col-6 mb-2">
                                                    <input type="text" name="state" required placeholder="State" class="form-control">
                                                </div>
                                                <div class="col-6 mb-2">
                                                    <input type="number" name="pincode" required placeholder="Pincode" class="form-control">
                                                </div>
                                                <div class="col-6 mb-2">
                                                    <input type="hidden" name="uid" required value="<?php echo $_SESSION["uid"]; ?>" class="form-control">
                                                </div>
                                                <div class="col-6 mb-2">
                                                    <input type="hidden" name="vid" required value="<?php echo $_GET["vid"]; ?>" class="form-control">
                                                </div>
                                                <div class="col-12 mb-2">
                                                    <input type="submit" value="Add Address" class="btn btn-success btn-block">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <!-- End Modal Add cart -->

    <!-- ...:::: Start Footer Section:::... -->
    <?php include("footer.php") ?> 
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