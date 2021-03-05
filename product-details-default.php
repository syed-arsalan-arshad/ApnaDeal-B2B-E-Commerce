<!DOCTYPE html>
<html lang="en">

<head>
   <?php include('toplink.php'); ?>
    <?php
    $pid = $_GET["id"];
    
    ?>



</head>

<body id="wholeBody">

    <!-- ...:::: Start Header Section:::... -->
    <header class="header-section d-none d-lg-block ">
        <!-- Start Header Top Area -->
        <div class="header-top">
            <div class="container">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-6">
                        <div class="header-top--left">
                            <span>Welcome to our store!</span>
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
                                        <li><a href="my-account.php">My Account</a></li>
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
                            <li>
                                <a href="cart.php" class="">
                                    <i class="icon-shopping-cart"></i>
                                    <?php if(isset($_SESSION["uid"])){
                                    
                                    ?>
                                    <span class="header-action-icon-item-count" id="cartCount"><?php echo countCart($_SESSION["uid"]); ?></span>
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
                                    ?>
                                    <li class="has-dropdown">
                                        <a  href="vendorlist.php?id=<?php echo $data["id"]; ?>"><?php echo $data["name"]; ?></a>
                                        <!-- Sub Menu -->
                                        
                                    </li>
                                    <?php endwhile; ?>
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

  
   
    <div class="offcanvas-overlay"></div>

    <!-- ...:::: Start Breadcrumb Section:::... -->
    <div class="breadcrumb-section d-none d-lg-block">
        <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-between justify-content-md-between  align-items-center flex-md-row flex-column">
                        <h3 class="breadcrumb-title">Product Details Default</h3>
                        <div class="breadcrumb-nav">
                            <nav aria-label="breadcrumb">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="#">Shop</a></li>
                                    <li class="active" aria-current="page">Product Details Default</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Breadcrumb Section:::... -->
<?php
    $data = getProdById($pid);
    ?>
    <!-- Start Product Details Section -->
    <div class="product-details-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="product-details-gallery-area">
                        <div class="product-large-image product-large-image-horaizontal">
                            <div class="product-image-large-single zoom-image-hover">
                                <img src="productImage/<?php echo $data["pic1"] ?>" alt="">
                            </div>
                            <div class="product-image-large-single zoom-image-hover">
                                <img src="productImage/<?php echo $data["pic1"] ?>" alt="">
                            </div>
                            <div class="product-image-large-single zoom-image-hover">
                                <img src="productImage/<?php echo $data["pic1"] ?>" alt="">
                            </div>
                            <div class="product-image-large-single zoom-image-hover">
                                <img src="productImage/<?php echo $data["pic1"] ?>" alt="">
                            </div>
                            <div class="product-image-large-single zoom-image-hover">
                                <img src="productImage/<?php echo $data["pic1"] ?>" alt="">
                            </div>
                            <div class="product-image-large-single zoom-image-hover">
                                <img src="productImage/<?php echo $data["pic1"] ?>" alt="">
                            </div>
                        </div>
                        <div class="product-image-thumb product-image-thumb-horizontal pos-relative">
                            <div class="zoom-active product-image-thumb-single">
                                <img class="img-fluid" src="productImage/<?php echo $data["pic1"] ?>" alt="">
                            </div>
                            <div class="product-image-thumb-single">
                                <img class="img-fluid" src="productImage/<?php echo $data["pic1"] ?>" alt="">
                            </div>
                            <div class="product-image-thumb-single">
                                <img class="img-fluid" src="productImage/<?php echo $data["pic1"] ?>" alt="">
                            </div>
                            <div class="product-image-thumb-single">
                                <img class="img-fluid" src="productImage/<?php echo $data["pic1"] ?>" alt="">
                            </div>
                            <div class="product-image-thumb-single">
                                <img class="img-fluid" src="productImage/<?php echo $data["pic1"] ?>" alt="">
                            </div>
                            <div class="product-image-thumb-single">
                                <img class="img-fluid" src="productImage/<?php echo $data["pic1"] ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="product-details-content-area">
                        <!-- Start  Product Details Text Area-->
                        <div class="product-details-text">
                            <h4 class="title"><?php echo $data["name"]; ?></h4>
                            
                            <div class="price"><del>&#8377; <?php echo $data["mrp"] ?></del>&#8377; <?php echo $data["saleprice"] ?></div>
                            <div class="border p-2">
                                <table class="table table-bordered mb-20">
                                           <thead>
                                               <tr><th colspan="2">Specification</th></tr>
                                           </thead>
                                            <tbody>
                                               <?php 
                                                    $rsDes = getDes($pid);
                                                    while($dataDes = mysqli_fetch_assoc($rsDes)):
                                                ?>
                                                <tr>
                                                    <th scope="row"><?php echo $dataDes["label"]; ?></th>
                                                    <td><?php echo $dataDes["value"]; ?></td>
                                                </tr>
                                                <?php endwhile; ?>
                                            </tbody>
                                        </table>
                            </div>
                        </div> <!-- End  Product Details Text Area-->
                        <!-- Start Product Variable Area -->
                        <div class="product-details-variable">
                            <h4 class="title">Available Options</h4>
                            <!-- Product Variable Single Item -->
<!--
                            <div class="variable-single-item">
                                <span>Color</span>
                                <div class="product-variable-color">
                                    <label for="product-color-red">
                                        <input name="product-color" id="product-color-red" class="color-select" type="radio" checked>
                                        <span class="product-color-red"></span>
                                    </label>
                                    <label for="product-color-tomato">
                                        <input name="product-color" id="product-color-tomato" class="color-select" type="radio">
                                        <span class="product-color-tomato"></span>
                                    </label>
                                    <label for="product-color-green">
                                        <input name="product-color" id="product-color-green" class="color-select" type="radio">
                                        <span class="product-color-green"></span>
                                    </label>
                                    <label for="product-color-light-green">
                                        <input name="product-color" id="product-color-light-green" class="color-select" type="radio">
                                        <span class="product-color-light-green"></span>
                                    </label>
                                    <label for="product-color-blue">
                                        <input name="product-color" id="product-color-blue" class="color-select" type="radio">
                                        <span class="product-color-blue"></span>
                                    </label>
                                    <label for="product-color-light-blue">
                                        <input name="product-color" id="product-color-light-blue" class="color-select" type="radio">
                                        <span class="product-color-light-blue"></span>
                                    </label>
                                </div>
                            </div>
-->
                            <!-- Product Variable Single Item -->
                            <div class="d-flex align-items-center">
                                <div class="variable-single-item ">
                                    <span>Quantity</span>
                                    <div class="product-variable-quantity">
                                       <button id="minus" class="btn" onclick="minusPro()"><i class="fa fa-minus" aria-hidden="true"></i></button>
                                        <input type="text" style="width:50px" readonly value="<?php echo $data["returnduration"] ?>" id="quantity">
                                        <button id="plus" class="btn" onclick="plusPro()"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                    </div>
                                    <script>
                                        function plusPro(){
                                            var qty = $("#quantity").val();
                                                var dif = "<?php echo $data["returnduration"] ?>";
                                                var sale = "<?php echo $data["saleprice"] ?>";
                                                var stock = "<?php echo $data["stock"] ?>";
                                                var dif = parseInt(dif);
                                                var qty = parseInt(qty);
                                                var realqty = qty+dif;
                                                $("#quantity").val(realqty);
                                            if(realqty > stock){
                                                $("#quantity").val(qty);
                                                var tsale = sale * qty;
                                                tsale = tsale.toFixed(2);
                                                $("#setTotal").html(tsale);
                                            }
                                            else{
                                                $("#quantity").val(realqty);
                                                var tsale = sale * realqty;
                                                tsale = tsale.toFixed(2);
                                                $("#setTotal").html(tsale);
                                            }
                                                
                                        }
                                        function minusPro(){
                                                var qty = $("#quantity").val();
                                                var sale = "<?php echo $data["saleprice"] ?>";
                                                var dif = "<?php echo $data["returnduration"] ?>";
                                                var dif = parseInt(dif);
                                                var qty = parseInt(qty);
                                                if(qty > dif){
                                                    var realqty = qty-dif;
                                                    $("#quantity").val(realqty);
                                                    var tsale = sale * realqty;
                                                    tsale = tsale.toFixed(2);
                                                $("#setTotal").html(tsale);
                                                }
                                            else{
                                                $("#quantity").val(qty);
                                                var tsale = sale * qty;
                                                tsale = tsale.toFixed(2);
                                                $("#setTotal").html(tsale);
                                            }
                                                
                                        }
                                       
                                        function addToCart(){
                                            var pid  = "<?php echo $data["id"] ?>";
                                            "<?php if(isset($_SESSION["uid"])){ ?>";
                                            var uid  = "<?php echo $_SESSION["uid"] ?>";
                                            "<?php } ?>";
                                            var vid  = "<?php echo $data["vid"] ?>";
                                            var qty = $("#quantity").val();
                                            $.ajax({
                                                type: "POST",
                                                url: "addToCart.php",
                                                data: {
                                                    pid: pid,
                                                    uid: uid,
                                                    qty: qty,
                                                    vid: vid
                                                },
                                                success:function(data){
                                                    $("#cartCount").html(data);
                                                    $("#cartCountspan").html(data);
                                                    $("#cartDiv2").load(location.href + " #cartDiv2");
                                                }
                                            });
                                        }
                                    </script>
                                </div>

                                <div class="product-add-to-cart-btn" id="cartDiv">
                                   <a href="#" >&#8377; <span id="setTotal"><?php echo number_format($data["saleprice"]*$data["returnduration"],2) ?></span></a>
                                </div>
                            </div>
                        </div> <!-- End Product Variable Area -->
                        <!-- Start  Product Details Meta Area-->
                        <div class="product-details-meta mb-20">
                            <div class="product-add-to-cart-btn" id="cartDiv2">
                                   <?php 
                                    
                                    if(isset($_SESSION["uid"])){ 
                                        if(checkInCart($_SESSION["uid"],$data["id"]) == 1){
                                    ?>
                                    <a href="cart.php" >Go To Cart</a>
                                    <?php } 
                                    if(checkInCart($_SESSION["uid"],$data["id"]) == 0){ ?>
                                    <a href="#" onclick="addToCart()" data-toggle="modal" data-target="#modalAddcarts" class="btn btn-block">Add To Cart</a>
                                    <?php } 
                                    } else { 
                                    $url = "";
                                    $url.= $_SERVER['REQUEST_URI'];
                                    $_SESSION["url"] = $url;    
                                ?>
                                    <a href="login.php" class="btn-block">Go To Login</a>
                                    <?php } ?>
                                </div>
                        </div> <!-- End  Product Details Meta Area-->
                        <!-- Start  Product Details Social Area-->
                        <!-- End  Product Details Social Area-->
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Product Details Section -->

    <!-- Start Product Content Tab Section -->
    <div class="product-details-content-tab-section section-inner-bg section-top-gap-100 d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product-details-content-tab-wrapper">

                        <!-- Start Product Details Tab Button -->
                        <ul class="nav tablist product-details-content-tab-btn d-flex justify-content-center">
                            <li><a class="nav-link active" data-toggle="tab" href="#description">
                                    <h5>Description</h5>
                                </a></li>
                            <li><a class="nav-link" data-toggle="tab" href="#specification">
                                    <h5>Specification</h5>
                                </a></li>
                        </ul> <!-- End Product Details Tab Button -->

                        <!-- Start Product Details Tab Content -->
                        <div class="product-details-content-tab">
                            <div class="tab-content">
                                <!-- Start Product Details Tab Content Singel -->
                                <div class="tab-pane active show" id="description">
                                    <div class="single-tab-content-item">
                                        <?php echo $data["description"] ?>
                                    </div>
                                </div> <!-- End Product Details Tab Content Singel -->
                                <!-- Start Product Details Tab Content Singel -->
                                <div class="tab-pane" id="specification">
                                    <div class="single-tab-content-item">
                                        <table class="table table-bordered mb-20">
                                            <tbody>
                                               <?php 
                                                    $rsDes = getDes($pid);
                                                    while($dataDes = mysqli_fetch_assoc($rsDes)):
                                                ?>
                                                <tr>
                                                    <th scope="row"><?php echo $dataDes["label"]; ?></th>
                                                    <td><?php echo $dataDes["value"]; ?></td>
                                                </tr>
                                                <?php endwhile; ?>
                                            </tbody>
                                        </table>
                                        <p>
                                            <?php echo $data["description"]; ?>
                                        </p>
                                    </div>
                                </div> <!-- End Product Details Tab Content Singel -->
                                </div>
                        </div> <!-- End Product Details Tab Content -->

                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Product Content Tab Section -->

    <!-- ...:::: Start Product  Section:::... -->
    <div class="product-section section-top-gap-100">
        <!-- Start Section Content -->
        <div class="section-content-gap">
            <div class="container">
                <div class="row">
                    <div class="section-content">
                        <h3 class="section-title">Related Products</h3>
                    </div>
                </div>
            </div>
        </div> <!-- End Section Content -->

        <!-- Start Product Wrapper -->
        <div class="product-wrapper">
            <div class="container">
                <div class="row d-none d-lg-block">
                    <div class="col-12">
                        <div class="product-default-slider product-default-slider-4grids-1row">
                           <?php
                            $rsven = getAllProdOfVendor($data["vid"],$pid);
                            while($dataven = mysqli_fetch_assoc($rsven)):
                            ?>
                            <!-- Start Product Defautlt Single -->
                            <div class="product-default-single border-around">
                                <div class="product-img-warp">
                                    <a href="product-details-default.php?id=<?php echo $dataven["id"] ?>" class="product-default-img-link">
                                        <img src="productImage/<?php echo $dataven["pic1"]; ?>" alt="" class="product-default-img img-fluid">
                                    </a>
                                    <div class="product-action-icon-link">
                                        <ul>
                                            <li><a href="product-details-default.php?id=<?php echo $dataven["id"] ?>"><i class="icon-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-default-content">
                                    <h6 class="product-default-link"><a href="product-details-default.php?id=<?php echo $dataven["id"] ?>"><?php echo $dataven["name"] ?></a></h6>
                                    <span class="product-default-price"><del class="product-default-price-off">&#8377; <?php echo $dataven["mrp"] ?></del> &#8377; <?php echo $dataven["saleprice"] ?></span>
                                </div>
                            </div> 
                            <!-- End Product Defautlt Single -->
                            <?php endwhile; ?>
                            </div>
                    </div>
                </div>
            </div>
               <div class="container-fluid d-block d-lg-none">
                <div class="row">
                    <?php
                            $rsven = getAllProdOfVendor($data["vid"],$pid);
                            while($dataven = mysqli_fetch_assoc($rsven)):
                            ?>
                            <div class="col-md-6 col-sm-12 mb-2 p-0">
                                <div class="product-default-single border-around">
                                <div class="product-img-warp">
                                    <a href="product-details-default.php?id=<?php echo $dataven["id"] ?>" class="product-default-img-link">
                                        <img src="productImage/<?php echo $dataven["pic1"]; ?>" alt="" class="product-default-img img-fluid">
                                    </a>
                                    <div class="product-action-icon-link">
                                        <ul>
                                            <li><a href="product-details-default.php?id=<?php echo $dataven["id"] ?>"><i class="icon-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-default-content">
                                    <h6 class="product-default-link"><a href="product-details-default.php?id=<?php echo $dataven["id"] ?>"><?php echo $dataven["name"] ?></a></h6>
                                    <span class="product-default-price"><del class="product-default-price-off">&#8377; <?php echo $dataven["mrp"] ?></del> &#8377; <?php echo $dataven["saleprice"] ?></span>
                                </div>
                            </div>
                            </div>
                            <?php endwhile; ?>
                </div>
    
            </div>
        </div> <!-- End Product Wrapper -->
    </div> <!-- ...:::: End Product Section:::... -->

    
    <!-- ...:::: Start Footer Section:::... -->
    <?php include("footer.php") ?> 
    <!-- ...:::: End Footer Section:::... -->

    <!-- material-scrolltop button -->
    <button class="material-scrolltop" type="button"></button>

    <!-- Start Modal Add cart -->
    <div class="modal fade" id="modalAddcarts" tabindex="-1" role="dialog" aria-hidden="true">
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
                                            <img class="img-fluid" src="assets/img/cart.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="modal-add-cart-info"><i class="fa fa-check-square"></i>Added to cart successfully!</div>
                                        <div class="modal-add-cart-product-cart-buttons">
                                            <a href="cart.php">View Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 modal-border">
                                <ul class="modal-add-cart-product-shipping-info">
                                    <li> <strong><i class="icon-shopping-cart"></i>Check Your Cart.</strong></li>
                                    
                                    <li class="modal-continue-button"><a href="index.php" data-dismiss="modal">CONTINUE SHOPPING</a></li>
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