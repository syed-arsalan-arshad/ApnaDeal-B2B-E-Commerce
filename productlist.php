<?php 
 $id = $_GET["id"];
 $vid = $_GET["vid"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('toplink.php'); ?>
</head>

<body>
    <!-- ...:::: Start Header Section:::... -->
    <header class="header-section d-lg-block d-none">
        <!-- Start Header Top Area -->
        <div class="header-top">
            <div class="container">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-6">
                        <div class="header-top--left">
                            <span>Welcome to our Apna Deal Store</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="header-top--right">
                            <!-- Start Header Top Menu -->
                            <ul class="header-user-menu">
                                <?php if(isset($_SESSION["uid"])){ ?>
                                <li class="has-user-dropdown">
                                    <a href="">Setting</a>
                                    <!-- Header Top Menu's Dropdown -->
                                    <ul class="user-sub-menu">
                                        <li><a href="">My Account</a></li>
                                        <li><a href="cart.php">Shopping Cart</a></li>
                                    </ul>
                                </li>
                                <?php } ?>
                                <li>
                                    <?php if(!isset($_SESSION["uid"])){ ?>
                                    <a href="login.php">Login</a>
                                    <?php } else{ ?>
                                    <a href="logout.php">Logout</a>
                                    <?php } ?>
                                </li>
                                <li class="">
                                    <a href="vendor/index.php">Seller Login</a>
                                    
                                </li>
                                <li class="">
                                    <a href="vendorReg.php">Seller Registration</a>
                                    
                                </li>
                            </ul> <!-- End Header Top Menu -->
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Header Top Area -->

        <!-- Start Header Center Area -->
        <div class="header-center">
            <div class="container">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-3">
                        <!-- Logo Header -->
                        <div class="header-logo">
                            <a href="index.html"><img src="assets/images/logo/favicon.ico.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-6">
                        <!-- Start Header Search -->
                        <div class="header-search">
                            <form action="search.php" method="post">
                                <div class="header-search-box default-search-style d-flex">
                                    <input class="default-search-style-input-box border-around border-right-none" name="searchText" type="search" placeholder="Search entire store here ..." required>
                                    <button name="searchBtn" class="default-search-style-input-btn" type="submit"><i class="icon-search"></i></button>
                                </div>
                            </form>
                        </div> <!-- End Header Search -->
                    </div>
                    <div class="col-3 text-right">
                        <!-- Start Header Action Icon -->
                        <ul class="header-action-icon">
                            <li id="cartNo">
                               
                                <a href="cart.php" class="">
                                    <i class="icon-shopping-cart"></i>
                                    <?php if(isset($_SESSION["uid"])){
                                    $n = countCart($_SESSION["uid"]);
                                    if($n == "")
                                        $n = 0;
                                    ?>
                                    <span class="header-action-icon-item-count" id="cartCount"><?php echo $n ?></span>
                                    <?php } else { ?>
                                    <span class="header-action-icon-item-count">0</span>
                                    <?php } ?>
                                </a>
                            </li>
                        </ul> <!-- End Header Action Icon -->
                    </div>
                </div>
            </div>
        </div> <!-- End Header Center Area -->

        <!-- Start Bottom Area -->
        <div class="header-bottom sticky-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Header Main Menu -->
                        <div class="main-menu">
                            <nav>
                                <ul>
                                    <li class="">
                                        <a class="" href="index.php">Home</a>
                                        <!-- Mega Menu -->


                                    </li>
                                    <?php 
                                    
                                        $rs = getMainCat();
                                    while($data = mysqli_fetch_assoc($rs)):
                                    if($data["id"] == $id){
                                    ?>
                                    <li class="has-dropdown">
                                        <a class="active main-menu-link" href="vendorlist.php?id=<?php echo $data["id"]; ?>"><?php echo $data["name"]; ?></a>
                                        <!-- Sub Menu -->

                                    </li>
                                    <?php } else { ?>
                                    <li class="has-dropdown">
                                        <a href="vendorlist.php?id=<?php echo $data["id"]; ?>"><?php echo $data["name"]; ?></a>
                                        <!-- Sub Menu -->

                                    </li>


                                    <?php } endwhile; ?>
                                    <li>
                                        <a href="about-us.php">About Us</a>
                                    </li>
                                    <li>
                                        <a href="contact-us.php">Contact Us</a>
                                    </li>
                                </ul>
                            </nav>
                        </div> <!-- Header Main Menu Start -->
                    </div>
                </div>
            </div>
        </div> <!-- End Bottom Area -->
    </header> <!-- ...:::: End Header Section:::... -->

    <!-- ...:::: Start Mobile Header Section:::... -->
    <?php include("headerMobile.php"); ?>
     <!-- ...:::: Start Mobile Header Section:::... -->

    <!-- ...:::: Start Offcanvas Mobile Menu Section:::... -->
    <?php include("leftSideMobile.php"); ?>
    <!-- ...:::: End Offcanvas Mobile Menu Section:::... -->

    <!-- ...:::: Start Offcanvas Addcart Section :::... -->
    <!-- ...:::: End  Offcanvas Addcart Section :::... -->

    <!-- ...:::: Start Offcanvas Mobile Menu Section:::... -->
    <!-- ...:::: End Offcanvas Mobile Menu Section:::... -->
    
    <div class="offcanvas-overlay"></div>

    <!-- ...:::: Start Hero Area Section:::... -->
    <div class="hero-area d-none d-lg-block">
        <div class="hero-area-wrapper hero-slider-dots fix-slider-dots">
            <!-- Start Hero Slider Single -->
                <?php 
                $rs = selectBannerByPage($id);
                while($ban = mysqli_fetch_assoc($rs)):
            ?>
            <div class="hero-area-single">
                <div class="hero-area-bg">
                    <img class="hero-img" src="bannerImage/<?php echo $ban["img"] ?>" alt="">
                </div>
                <div class="hero-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-10 col-md-8 col-xl-6">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <?php endwhile; ?>
             
               <!-- End Hero Slider Single -->
            <!-- Start Hero Slider Single -->
             <!-- End Hero Slider Single -->
        </div>
    </div> <!-- ...:::: End Hero Area Section:::... -->

    <!-- ...:::: Start Product Catagory Section:::... -->
    <div class="product-catagory-section mt-3">
        <!-- Start Section Content -->
        <div class="">
            <div class="container">
                <div class="row">
                    <div class="section-content">
                        <h3 class="section-title">Product List</h3>
                    </div>
                </div>
            </div>
        </div> <!-- End Section Content -->
        <!-- Start Catagory Wrapper -->
        <div class="product-catagory-wrapper">
            <div class="container">
                <div class="row">
                    <?php 
                        $rspro = getProdByVendor($vid);
                        while($datapro = mysqli_fetch_assoc($rspro)):
                    ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <!-- Start Product Defautlt Single -->
                        <div class="product-default-single border-around">
                            <div class="product-img-warp">
                                <a href="product-details-default.php?id=<?php echo $datapro["id"] ?>" class="product-default-img-link">
                                    <img src="productImage/<?php echo $datapro["pic1"] ?>" alt="" class=" img-fluid">
                                </a>
                                <div class="product-action-icon-link">
                                    <ul>
                                        <li><a href="product-details-default.php?id=<?php echo $datapro["id"] ?>"><i class="icon-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-default-content">
                                <h6 class="product-default-link"><a href="product-details-default.php?id=<?php echo $dataprod["id"] ?>"><?php echo $datapro["name"]; ?></a></h6>
                                <span class="product-default-price"><del class="product-default-price-off"> &#8377; <?php echo $datapro["mrp"] ?></del> &#8377; <?php echo $datapro["saleprice"] ?></span>
                            </div>
                        </div> <!-- End Product Defautlt Single -->

                    </div>
                    <?php endwhile; ?>
                </div>
            </div> <!-- End Catagory Wrapper -->
        </div> <!-- ...:::: End Product Catagory Section:::... -->
    </div>


    <!-- ...:::: Start Footer Section:::... -->
    <?php include("footer.php") ?>
    <!-- ...:::: End Footer Section:::... -->










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