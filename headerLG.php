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
                               <?php if(isset($_SESSION["umobile"])){ ?>
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
                                    <?php if(!isset($_SESSION["umobile"])){ ?>
                                    <a href="login.php">Login</a>
                                    <?php } else{ ?>
                                    <a href="logout.php">Logout</a>
                                    <?php } ?>
                                </li>
                                <li class="">
                                    <a href="vendor/index.php" target="_blank">Seller Login</a>
                                    
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
                            <a href="index.php"><img src="assets/images/logo/favicon.ico.png" alt=""></a>
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
                    <div class="col-3 text-right" >
                        <!-- Start Header Action Icon -->
                        <ul class="header-action-icon">
                            <li >
                               
                                <a href="cart.php" class="" id="cartNo">
                                    <i class="icon-shopping-cart"></i>
                                    <?php if(isset($_SESSION["uid"])){
                                    $n = countCart($_SESSION["uid"]);
                                    ?>
                                    <span class="header-action-icon-item-count" id="cartCount"><?php echo $n ?></span>
                                    <?php } else { ?>
                                    <span class="header-action-icon-item-count" id="cartCount">0</span>
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
                                        <a class="active main-menu-link" href="index.php">Home</a>
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
    </header>