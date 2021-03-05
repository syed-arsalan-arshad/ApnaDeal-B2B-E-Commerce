<!DOCTYPE html>
<html lang="en">

<head>

    <?php include('toplink.php'); 
    
    ?>

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

    <!-- ...:::: Start Hero Area Section:::... -->
    <div class="hero-area d-none d-lg-block">
        <div class="hero-area-wrapper hero-slider-dots fix-slider-dots">
            <!-- Start Hero Slider Single -->
            <?php 
                $rs = selectBannerByPage(0);
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
        </div>
    </div>
    <!-- ...:::: End Hero Area Section:::... -->

    <!-- ...:::: Start Product Catagory Section:::... -->
    <div class="product-catagory-section">
        <!-- Start Section Content -->
        <div class="section-content-gap d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="section-content">
                        <h3 class="section-title">Popular Categories</h3>
                    </div>
                </div>
            </div>
            
        </div> <!-- End Section Content -->
       
            <div class="container-fluid d-block d-lg-none">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-area d-block d-lg-none d-md-none">
        <div class="hero-area-wrapper hero-slider-dots fix-slider-dots">
            <!-- Start Hero Slider Single -->
            <?php 
                $rs = selectBannerByPage(0);
                while($ban = mysqli_fetch_assoc($rs)):
            ?>
            <div class="hero-area-single">
                <div class="hero-area-bg">
                    <img class="img-fluid" src="bannerImage/<?php echo $ban["img"] ?>" alt="">
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
        </div>
    </div>
                    </div>
                </div>
            </div>


        <!-- Start Catagory Wrapper -->
        <div class="product-catagory-wrapper">
            <div class="container">
                <div class="row">
                    <?php 
                                        $rs1 = getMainCat();
                                    while($data1 = mysqli_fetch_assoc($rs1)):
                                    ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 d-none d-lg-block">
                        <!-- Start Product Catagory Single -->
                        <a href="vendorlist.php?id=<?php echo $data1["id"]; ?>" class="product-catagory-single">
                            <div class="product-catagory-img">
                                <img src="superadmin/categoryImage/<?php echo $data1["cimage"] ?>" alt="">
                            </div>
                            <div class="product-catagory-content">
                                <h5 class="product-catagory-title"><?php echo $data1["name"] ?></h5>
                                <span class="product-catagory-items"><?php echo $data1["cat_desc"] ?></span>
                            </div>
                        </a> <!-- End Product Catagory Single -->
                    </div>
                    <?php endwhile ?>

                </div>
                <div class="row ">
                    <div class="col-12 d-block d-lg-none">
                        <h4 class="text-center mt-1"><strong>Shop By Category</strong></h4>
                    </div>
                     <?php 
                                        $rs1 = getMainCat();
                                    while($data1 = mysqli_fetch_assoc($rs1)):
                                    ?>
                    <div class="col-6 d-block d-lg-none mb-3">
                        <!-- Start Product Catagory Single -->
                        <a href="vendorlist.php?id=<?php echo $data1["id"] ?>" class="product-catagory-single">
                            <div class="product-catagory-img">
                                <img src="superadmin/categoryImage/<?php echo $data1["cimage"] ?>" alt="">
                            </div>
                            <div class="product-catagory-content">
                                <h5 class="product-catagory-title"><?php echo $data1["name"] ?></h5>
                                <span class="product-catagory-items"><?php echo $data1["cat_desc"] ?></span>
                            </div>
                        </a>
                    </div>
                    <?php endwhile; ?>
                    
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="hero-area d-block d-lg-none">
        <div class="hero-area-wrapper hero-slider-dots fix-slider-dots">
            <!-- Start Hero Slider Single -->
            <?php 
                $rsmob = selectBannerByPage(-2);
                while($banmob = mysqli_fetch_assoc($rsmob)):
            ?>
            <div class="hero-area-single">
                <div class="hero-area-bg">
                    <img class="img-fluid" src="bannerImage/<?php echo $banmob["img"] ?>" alt="">
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
        </div>
    </div>
                    </div>
                </div>
            </div>
            <!-- End Catagory Wrapper -->
        </div>
        <!-- ...:::: End Product Catagory Section:::... -->

        <!-- ...:::: Start Banner Section:::... -->
        <div class="banner-section section-top-gap-100 d-none d-lg-block">
            <!-- Start Banner Wrapper -->
            <div class="banner-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12">
                            <!-- Start Banner Single -->
                            <div class="banner-single">
                                <a href="vendorlist.php?id=1" class="banner-img-link">
                                    <img class="banner-img" src="bannerImage/1.png" alt="">
                                </a>
                                <div class="banner-content">
                                    <span class="banner-text-tiny">Mens</span>
                                    <h3 class="banner-text-large">Mens Wear</h3>
                                    <a href="vendorlist.php?id=1" class="banner-link">Shop Now</a>
                                </div>
                            </div> <!-- End Banner Single -->
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <!-- Start Banner Single -->
                            <div class="banner-single">
                                <a href="vendorlist.php?id=2" class="banner-img-link">
                                    <img class="banner-img" src="bannerImage/8.png" alt="">
                                </a>
                                <div class="banner-content">
                                    <span class="banner-text-tiny">Womens</span>
                                    <h3 class="banner-text-large">Womens Wear</h3>
                                    <a href="vendorlist.php?id=2" class="banner-link">Shop Now</a>
                                </div>
                            </div> <!-- End Banner Single -->
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <!-- Start Banner Single -->
                            <div class="banner-single">
                                <a href="vendorlist.php?id=3" class="banner-img-link">
                                    <img class="banner-img" src="bannerImage/2.png" alt="">
                                </a>
                                <div class="banner-content">
                                    <span class="banner-text-tiny">Kids</span>
                                    <h3 class="banner-text-large">Kids Wear</h3>
                                    <a href="vendorlist.php?id=3" class="banner-link">Shop Now</a>
                                </div>
                            </div> <!-- End Banner Single -->
                        </div>
                    </div>
                </div>
            </div> <!-- End Banner Wrapper -->
        </div> <!-- ...:::: End Banner Section:::... -->

        <!-- ...:::: Start Product Tab Section:::... -->
        <div class="product-tab-section section-top-gap-100 d-none d-lg-block">
            <!-- Start Section Content -->
            <div class="section-content-gap">
                <div class="container">
                    <div class="row">
                        <div class="section-content d-flex justify-content-between align-items-md-center align-items-start flex-md-row flex-column">
                            <h3 class="section-title">New Arrivals</h3>
                            <ul class="tablist nav product-tab-btn">
                                <li><a class="nav-link active" data-toggle="tab" href="#car_and_drive">Mens </a></li>
                                <li><a class="nav-link" data-toggle="tab" href="#motorcycle">Womens</a></li>
                                <li><a class="nav-link" data-toggle="tab" href="#truck_drive">Kids</a></li>
                                <li><a class="nav-link" data-toggle="tab" href="#saree">Saree</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> <!-- End Section Content -->

            <!-- Start Tab Wrapper -->
            <div class="product-tab-wrapper d-none d-lg-block">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="tab-content tab-animate-zoom">
                                <div class="tab-pane show active" id="car_and_drive">
                                    <div class="product-default-slider product-default-slider-4grids-1row">
                                        <?php $rs1 = get4Prod(1);
                                        while($dataprod = mysqli_fetch_assoc($rs1)):
                                    ?>
                                        <!-- Start Product Defautlt Single -->
                                        <div class="product-default-single border-around">
                                            <div class="product-img-warp">
                                                <a href="product-details-default.php?id=<?php echo $dataprod["id"] ?>" class="product-default-img-link">
                                                    <img src="productImage/<?php echo $dataprod["pic1"] ?>" alt="" class="product-default-img img-fluid">
                                                </a>
                                                <div class="product-action-icon-link">
                                                    <ul>
                                                        <li><a href="product-details-default.php?id=<?php echo $dataprod["id"]; ?>"><i class="icon-shopping-cart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-default-content">
                                                <h6 class="product-default-link"><a href="product-details-default.php?id=<?php echo $dataprod["id"] ?>"><?php echo $dataprod["name"]; ?></a></h6>
                                                <span class="product-default-price"><del class="product-default-price-off">&#x20B9; <?php echo $dataprod["mrp"]; ?></del> &#x20B9; <?php echo $dataprod["saleprice"]; ?></span>
                                            </div>
                                        </div> <!-- End Product Defautlt Single -->
                                        <?php endwhile; ?>

                                    </div>
                                </div>
                                <div class="tab-pane" id="motorcycle">
                                    <div class="product-default-slider product-default-slider-4grids-1row">
                                        <?php $rs2 = get4Prod(2);
                                        while($dataprod2 = mysqli_fetch_assoc($rs2)):
                                    ?>
                                        <!-- Start Product Defautlt Single -->
                                        <div class="product-default-single border-around">
                                            <div class="product-img-warp">
                                                <a href="product-details-default.php?id=<?php echo $dataprod2["id"] ?>" class="product-default-img-link">
                                                    <img src="productImage/<?php echo $dataprod2["pic1"] ?>" alt="" class="product-default-img img-fluid">
                                                </a>
                                                <div class="product-action-icon-link">
                                                    <ul>
                                                        <li><a href="product-details-default.php?id=<?php echo $dataprod2["id"]; ?>"><i class="icon-shopping-cart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-default-content">
                                                <h6 class="product-default-link"><a href="product-details-default.php?id=<?php echo $dataprod2["id"] ?>"><?php echo $dataprod2["name"]; ?></a></h6>
                                                <span class="product-default-price"><del class="product-default-price-off">&#x20B9; <?php echo $dataprod2["mrp"]; ?></del> &#x20B9; <?php echo $dataprod2["saleprice"]; ?></span>
                                            </div>
                                        </div> <!-- End Product Defautlt Single -->
                                        <?php endwhile; ?>
                                    </div>
                                </div>
                                <div class="tab-pane" id="truck_drive">
                                    <div class="product-default-slider product-default-slider-4grids-1row">
                                        <?php $rs3 = get4Prod(3);
                                        while($dataprod3 = mysqli_fetch_assoc($rs3)):
                                    ?>
                                        <!-- Start Product Defautlt Single -->
                                        <div class="product-default-single border-around">
                                            <div class="product-img-warp">
                                                <a href="product-details-default.php?id=<?php echo $dataprod3["id"] ?>" class="product-default-img-link">
                                                    <img src="productImage/<?php echo $dataprod3["pic1"] ?>" alt="" class="product-default-img img-fluid">
                                                </a>
                                                <div class="product-action-icon-link">
                                                    <ul>
                                                        <li><a href="product-details-default.php?id=<?php echo $dataprod3["id"]; ?>"><i class="icon-shopping-cart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-default-content">
                                                <h6 class="product-default-link"><a href="product-details-default.php?id=<?php echo $dataprod3["id"] ?>"><?php echo $dataprod3["name"]; ?></a></h6>
                                                <span class="product-default-price"><del class="product-default-price-off">&#x20B9; <?php echo $dataprod3["mrp"]; ?></del> &#x20B9; <?php echo $dataprod3["saleprice"]; ?></span>
                                            </div>
                                        </div> <!-- End Product Defautlt Single -->
                                        <?php endwhile; ?>
                                    </div>
                                </div>
                                <div class="tab-pane" id="saree">
                                    <div class="product-default-slider product-default-slider-4grids-1row">
                                        <?php $rs5 = get4Prod(4);
                                        while($dataprod5 = mysqli_fetch_assoc($rs5)):
                                    ?>
                                        <!-- Start Product Defautlt Single -->
                                        <div class="product-default-single border-around">
                                            <div class="product-img-warp">
                                                <a href="product-details-default.php?id=<?php echo $dataprod5["id"] ?>" class="product-default-img-link">
                                                    <img src="productImage/<?php echo $dataprod5["pic1"] ?>" alt="" class="product-default-img img-fluid">
                                                </a>
                                                <div class="product-action-icon-link">
                                                    <ul>
                                                        <li><a href="product-details-default.php?id=<?php echo $datapro5["id"]; ?>"><i class="icon-shopping-cart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-default-content">
                                                <h6 class="product-default-link"><a href="product-details-default.php?id=<?php echo $datapro5["id"] ?>"><?php echo $dataprod5["name"]; ?></a></h6>
                                                <span class="product-default-price"><del class="product-default-price-off">&#x20B9; <?php echo $dataprod5["mrp"]; ?></del> &#x20B9; <?php echo $dataprod5["saleprice"]; ?></span>
                                            </div>
                                        </div> <!-- End Product Defautlt Single -->
                                        <?php endwhile; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Catagory Wrapper -->

        </div> <!-- ...:::: Start Product Tab Section:::... -->

        <!-- ...:::: Start Product Catagory Section:::... -->
        <div class="banner-section section-top-gap-100 d-none d-lg-block">
            <!-- Start Banner Wrapper -->
            <div class="banner-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <!-- Start Banner Single -->
                            <div class="banner-single">
                                <a href="#" class="banner-img-link">
                                    <img class="banner-img banner-img-big" src="bannerImage/apnadealbanner3.gif" alt="">
                                </a>
                                <div class="banner-content">
                                    <span class="banner-text-small">2021 Latest Collection</span>
                                    <h2 class="banner-text-big"><span class="banner-text-big-highlight">Latest Collection</span> </h2>
                                </div>
                            </div> <!-- End Banner Single -->
                        </div>
                    </div>
                </div>
            </div> <!-- End Banner Wrapper -->
        </div> <!-- ...:::: End Product Catagory Section:::... -->

        <!-- ...:::: Start Product Tab Section:::... -->
        <div class="product-tab-section section-top-gap-100 d-none d-lg-block">
            <!-- Start Section Content -->
            <div class="section-content-gap">
                <div class="container">
                    <div class="row">
                        <div class="section-content d-flex justify-content-between align-items-md-center align-items-start flex-md-row flex-column">
                            <h3 class="section-title">Hot Deals</h3>
                            <ul class="tablist nav product-tab-btn">
                                <li><a class="nav-link active" data-toggle="tab" href="#drive_and_car">Mens </a></li>
                                <li><a class="nav-link" data-toggle="tab" href="#bike">Womens</a></li>
                                <li><a class="nav-link" data-toggle="tab" href="#drive_trucks">Kids</a></li>
                                <li><a class="nav-link" data-toggle="tab" href="#sarees">Saree</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> <!-- End Section Content -->

            <!-- Start Tab Wrapper -->
            <div class="product-tab-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="tab-content tab-animate-zoom">
                                <div class="tab-pane show active" id="drive_and_car">
                                    <div class="product-default-slider product-default-slider-4grids-1row">
                                        <?php $rs1 = get4Prod(1);
                                        while($dataprod = mysqli_fetch_assoc($rs1)):
                                    ?>
                                        <!-- Start Product Defautlt Single -->
                                        <div class="product-default-single border-around">
                                            <div class="product-img-warp">
                                                <a href="product-details-default.php?id=<?php echo $dataprod["id"] ?>" class="product-default-img-link">
                                                    <img src="productImage/<?php echo $dataprod["pic1"] ?>" alt="" class="product-default-img img-fluid">
                                                </a>
                                                <div class="product-action-icon-link">
                                                    <ul>
                                                        <li><a href="product-details-default.php?id=<?php echo $dataprod["id"]; ?>"><i class="icon-shopping-cart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-default-content">
                                                <h6 class="product-default-link"><a href="product-details-default.php?id=<?php echo $dataprod["id"] ?>"><?php echo $dataprod["name"]; ?></a></h6>
                                                <span class="product-default-price"><del class="product-default-price-off">&#x20B9; <?php echo $dataprod["mrp"]; ?></del> &#x20B9; <?php echo $dataprod["saleprice"]; ?></span>
                                            </div>
                                        </div> <!-- End Product Defautlt Single -->
                                        <?php endwhile; ?>

                                    </div>
                                </div>
                                <div class="tab-pane" id="bike">
                                    <div class="product-default-slider product-default-slider-4grids-1row">
                                        <?php $rs2 = get4Prod(2);
                                        while($dataprod2 = mysqli_fetch_assoc($rs2)):
                                    ?>
                                        <!-- Start Product Defautlt Single -->
                                        <div class="product-default-single border-around">
                                            <div class="product-img-warp">
                                                <a href="product-details-default.php?id=<?php echo $dataprod2["id"] ?>" class="product-default-img-link">
                                                    <img src="productImage/<?php echo $dataprod2["pic1"] ?>" alt="" class="product-default-img img-fluid">
                                                </a>
                                                <div class="product-action-icon-link">
                                                    <ul>
                                                        <li><a href="product-details-default.php?id=<?php echo $dataprod2["id"]; ?>"><i class="icon-shopping-cart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-default-content">
                                                <h6 class="product-default-link"><a href="product-details-default.php?id=<?php echo $dataprod2["id"] ?>"><?php echo $dataprod2["name"]; ?></a></h6>
                                                <span class="product-default-price"><del class="product-default-price-off">&#x20B9; <?php echo $dataprod2["mrp"]; ?></del> &#x20B9; <?php echo $dataprod2["saleprice"]; ?></span>
                                            </div>
                                        </div> <!-- End Product Defautlt Single -->
                                        <?php endwhile; ?>
                                    </div>
                                </div>
                                <div class="tab-pane" id="drive_trucks">
                                    <div class="product-default-slider product-default-slider-4grids-1row">
                                        <?php $rs3 = get4Prod(3);
                                        while($dataprod3 = mysqli_fetch_assoc($rs3)):
                                    ?>
                                        <!-- Start Product Defautlt Single -->
                                        <div class="product-default-single border-around">
                                            <div class="product-img-warp">
                                                <a href="product-details-default.php?id=<?php echo $dataprod3["id"] ?>" class="product-default-img-link">
                                                    <img src="productImage/<?php echo $dataprod3["pic1"] ?>" alt="" class="product-default-img img-fluid">
                                                </a>
                                                <div class="product-action-icon-link">
                                                    <ul>
                                                        <li><a href="product-details-default.php?id=<?php echo $dataprod3["id"]; ?>"><i class="icon-shopping-cart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-default-content">
                                                <h6 class="product-default-link"><a href="product-details-default.php?id=<?php echo $dataprod3["id"] ?>"><?php echo $dataprod3["name"]; ?></a></h6>
                                                <span class="product-default-price"><del class="product-default-price-off">&#x20B9; <?php echo $dataprod3["mrp"]; ?></del> &#x20B9; <?php echo $dataprod3["saleprice"]; ?></span>
                                            </div>
                                        </div> <!-- End Product Defautlt Single -->
                                        <?php endwhile; ?>
                                    </div>
                                </div>
                                <div class="tab-pane" id="sarees">
                                    <div class="product-default-slider product-default-slider-4grids-1row">
                                        <?php $rs5 = get4Prod(4);
                                        while($dataprod5 = mysqli_fetch_assoc($rs5)):
                                    ?>
                                        <!-- Start Product Defautlt Single -->
                                        <div class="product-default-single border-around">
                                            <div class="product-img-warp">
                                                <a href="product-details-default.php?id=<?php echo $dataprod5["id"] ?>" class="product-default-img-link">
                                                    <img src="productImage/<?php echo $dataprod5["pic1"] ?>" alt="" class="product-default-img img-fluid">
                                                </a>
                                                <div class="product-action-icon-link">
                                                    <ul>
                                                        <li><a href="product-details-default.php?id=<?php echo $datapro5["id"]; ?>"><i class="icon-shopping-cart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-default-content">
                                                <h6 class="product-default-link"><a href="product-details-default.php?id=<?php echo $datapro5["id"] ?>"><?php echo $dataprod5["name"]; ?></a></h6>
                                                <span class="product-default-price"><del class="product-default-price-off">&#x20B9; <?php echo $dataprod5["mrp"]; ?></del> &#x20B9; <?php echo $dataprod5["saleprice"]; ?></span>
                                            </div>
                                        </div> <!-- End Product Defautlt Single -->
                                        <?php endwhile; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Catagory Wrapper -->
        </div> <!-- ...:::: End Product Tab Section:::... -->

        <!-- ...:::: Start Company Logo Section:::... -->
        <div class="company-logo-section section-top-gap-100">
            <!-- Start Company Logo Wrapper -->
            <div class="company-logo-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-12">

                        </div>
                    </div>
                </div>
            </div> <!-- End Company Logo Wrapper -->
        </div> <!-- ...:::: End Company Logo Section:::... -->

        <!-- ...:::: Start Blog Feed Section:::... -->
        <div class="blog-feed-section section-top-gap-100">
            <!-- Start Section Content -->
            <div class="section-content-gap">
                <div class="container">
                </div>
            </div> <!-- End Section Content -->

            <!-- Start Blog Feed Wrapper -->
            <div class="blog-feed-wrapper">
                <div class="container">

                </div>
            </div>
        </div> <!-- End Blog Feed Wrapper -->


    </div> <!-- ...:::: End Blog Feed Section:::... -->

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