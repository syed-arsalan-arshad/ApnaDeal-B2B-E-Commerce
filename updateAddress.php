<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("toplink.php") ?>
</head>

<body>
    <?php
    $aid = $_GET["aid"];
    if(isset($_POST["btnReg"])){
           $name = $_POST["name"];
           $email = $_POST["email"];
           $mobile = $_POST["mobile"];
           $address = $_POST["address"];
           $city = $_POST["city"];
           $state = $_POST["state"];
           $pincode = $_POST["pincode"];
           updateAddress($name,$email,$mobile,$address,$city,$state,$pincode,$aid);
            echo '<script type="text/javascript">';
            echo 'setTimeout(function () { swal("Alert","Address Updated Successfully");';
            echo '}, 1000);</script>';
            
    }
    
    
    ?>
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
                        <h3 class="breadcrumb-title">Update Address</h3>
                        <div class="breadcrumb-nav">
                            <nav aria-label="breadcrumb">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="my-account.php">My Account</a></li>
                                    <li class="active" aria-current="page">Update Address</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Breadcrumb Section:::... -->

    <!-- ...:::: Start Customer Login Section :::... -->
    <div class="customer_login">
        <div class="container">
            <div class="row">
                <!--login area start-->

                <!--login area start-->

                <!--register area start-->
                <div class="col-lg-12 col-md-12">
                    <div class="account_form register">
                        <h3>Update Address</h3>
                        <?php
                        $dataAdd = getAddressById($aid);
                        ?>
                        <form action="<?php $_PHP_SELF; ?>" method="post">
                            <div class="row">
                                <div class="col-6">
                                    <div class="default-form-box mb-20">
                                        <label for="">Name</label>
                                        <input type="text" required name="name" value="<?php echo $dataAdd["name"]; ?>" placeholder="Name*">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="default-form-box mb-20">
                                        <label for="">Mobile</label>
                                        <input type="text" value="<?php echo $dataAdd["mobile"]; ?>" required name="mobile" placeholder="Mobile No*">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="default-form-box mb-20">
                                        <label for="">Email</label>
                                        <input type="email" required name="email" value="<?php echo $dataAdd["email"]; ?>" placeholder="Email address*">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="default-form-box mb-20">
                                        <label for="">Address Line</label>
                                        <input type="text" required name="address" value="<?php echo $dataAdd["addressline"]; ?>" placeholder="Address Line*">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="default-form-box mb-20">
                                        <label for="">City</label>
                                        <input type="text" required name="city" value="<?php echo $dataAdd["city"]; ?>" placeholder="City*">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="default-form-box mb-20">
                                        <label for="">State</label>
                                        <input type="text" required name="state" value="<?php echo $dataAdd["state"]; ?>" placeholder="State*">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="default-form-box mb-20">
                                        <label for="">Pincode</label>
                                        <input type="text" required name="pincode" value="<?php echo $dataAdd["pincode"]; ?>" placeholder="Pincode*">
                                    </div>
                                </div>
                                <div class="col-6"></div>
                                <div class="col-6">
                                    <div class="login_submit">
                                        <button type="submit" name="btnReg">Update Address</button>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="login_submit">
                                        <button type="button" onclick="window.location = 'my-account.php'">Back</button>
                                    </div>
                                </div>
                            </div>



                        </form>
                    </div>
                </div>
                <!--register area end-->
            </div>
        </div>
    </div> <!-- ...:::: End Customer Login Section :::... -->

    <!-- ...:::: Start Footer Section:::... -->
    <?php include("footer.php") ?>
    <!-- ...:::: End Footer Section:::... -->

    <!-- material-scrolltop button -->
    <button class="material-scrolltop" type="button"></button>


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