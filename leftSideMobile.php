<div id="mobile-menu-offcanvas" class="offcanvas offcanvas-leftside offcanvas-mobile-menu-section p-0 bg-light">
        <!-- Start Offcanvas Header -->
         <!-- End Offcanvas Header -->
        <!-- Start Offcanvas Mobile Menu Wrapper -->
        <div class="offcanvas-mobile-menu-wrapper p-0">
           <div class="container-fluid">
               <div class="row p-0">
                   <div class="col-12 p-0 bg-white text-center" style="">
                       <img src="assets/img/left.png" class="img-fluid" style="" alt="">
                   </div>
                   <div class="col-12 ">
                       <div class="row mt-4">
                           <div class="col-12 mb-2 py-2">
                               <a href="my-account.php">
                                   <div class="row">
                                   <div class="col-3"><h3><i class="fa fa-user-circle-o" aria-hidden="true"></i></h3></div>
                                   <div class="col-9"><h3>My Account</h3></div>
                               </div>
                               </a>
                           </div>
                           <div class="col-12 mb-2 py-2">
                               <a href="index.php">
                                   <div class="row">
                                   <div class="col-3"><h3><i class="fa fa-bars" aria-hidden="true"></i></h3></div>
                                   <div class="col-9"><h3>Categories</h3></div>
                               </div>
                               </a>
                           </div>
                           <div class="col-12 mb-2 py-2">
                               <a href="cart.php">
                                   <div class="row">
                                   <div class="col-3"><h3><i class="fa fa-shopping-cart" aria-hidden="true"></i></h3></div>
                                   <div class="col-9"><h3>My Cart</h3></div>
                               </div>
                               </a>
                           </div>
                           <div class="col-12 mb-2 py-2">
                               <a href="my-account.php">
                                   <div class="row">
                                   <div class="col-3"><h3><i class="fa fa-shopping-bag" aria-hidden="true"></i></h3></div>
                                   <div class="col-9"><h3>Your Order</h3></div>
                               </div>
                               </a>
                           </div>
                           <div class="col-12 mb-2 py-2">
                               <a href="#">
                                   <div class="row">
                                   <div class="col-3"><h3><i class="fa fa-refresh" aria-hidden="true"></i></h3></div>
                                   <div class="col-9"><h3>KYC Setup</h3></div>
                               </div>
                               </a>
                           </div>
                           <div class="col-12 mb-2 py-2">
                               <a href="#">
                                   <div class="row">
                                   <div class="col-3"><h3><i class="fa fa-credit-card" aria-hidden="true"></i></h3></div>
                                   <div class="col-9"><h3>Credit</h3></div>
                               </div>
                               </a>
                           </div>
                           <div class="col-12 mb-2 py-2">
                               <a href="vendorReg.php">
                                   <div class="row">
                                   <div class="col-3"><h3><i class="fa fa-users" aria-hidden="true"></i></h3></div>
                                   <div class="col-9"><h3>Seller</h3></div>
                               </div>
                               </a>
                           </div>
                           <div class="col-12 mb-2 py-2">
                               <a href="contact-us.php">
                                   <div class="row">
                                   <div class="col-3"><h3><i class="fa fa-phone" aria-hidden="true"></i></h3></div>
                                   <div class="col-9"><h3>Support 24 x 7</h3></div>
                               </div>
                               </a>
                           </div>
                           <div class="col-12 mb-2 py-2">
                               <a href="about-us.php">
                                   <div class="row">
                                   <div class="col-3"><h3><i class="fa fa-handshake-o" aria-hidden="true"></i></h3></div>
                                   <div class="col-9"><h3>About Us</h3></div>
                               </div>
                               </a>
                           </div>
                           <div class="col-12 mb-2 py-2">
<?php 
                               if(isset($_SESSION["uid"])){
                               
                               ?>
                                                              <a href="logout.php">
                                   <div class="row">
                                   <div class="col-3"><h3><i class="fa fa-sign-out" aria-hidden="true"></i></h3></div>
                                   <div class="col-9"><h3>Logout</h3></div>
                               </div>
                               </a>
                               <?php } else { ?>
                                                              <a href="login.php">
                                   <div class="row">
                                   <div class="col-3"><h3><i class="fa fa-sign-out" aria-hidden="true"></i></h3></div>
                                   <div class="col-9"><h3>Login</h3></div>
                               </div>
                               </a>
                               <?php } ?>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
        </div> 
    </div>