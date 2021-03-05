
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('toplink.php'); ?>
</head>
<?php 
$searchText = $_POST["searchText"];

?>
<body>
    <!-- ...:::: Start Header Section:::... -->
    <?php include("headerLG.php") ?>
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
    <!-- ...:::: End Offcanvas Mobile Menu Section:::... -->
    
    <div class="offcanvas-overlay"></div>

    <!-- ...:::: Start Hero Area Section:::... -->
    <div class="hero-area d-none d-lg-block">
        <div class="hero-area-wrapper hero-slider-dots fix-slider-dots">
            <!-- Start Hero Slider Single -->
            <div class="hero-area-single">
                <div class="hero-area-bg">
                    <img class="hero-img" src="bannerImage/apna3.gif" alt="">
                </div>
                <div class="hero-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-10 col-md-8 col-xl-6">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Hero Slider Single -->
            <!-- Start Hero Slider Single -->
            <div class="hero-area-single">
                <div class="hero-area-bg">
                    <img class="hero-img" src="bannerImage/apna4.gif" alt="">
                </div>
                <div class="hero-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-10 col-md-8 col-xl-6">
                                <h5>World Best Quality</h5>
                                <h2>New Car Parts</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiu</p>
                                <a href="product-details-default.html" class="hero-button">Shopping Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Hero Slider Single -->
        </div>
    </div> <!-- ...:::: End Hero Area Section:::... -->

    <!-- ...:::: Start Product Catagory Section:::... -->
    <div class="product-catagory-section">
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
                        $rspro = searchProd($searchText);
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