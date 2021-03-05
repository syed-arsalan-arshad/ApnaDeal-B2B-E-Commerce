<?php 

?>
<div class="mobile-header-section fixed-top d-block d-lg-none" style="background-color:red">
        <!-- Start Mobile Header Wrapper -->
        <div class="mobile-header-wrapper p-2">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-between align-items-center">
                       <div class="mobile-header--right">
                            <a href="#mobile-menu-offcanvas" class="offcanvas-toggle" style="float:left">
                                <i class="fa fa-bars fa-2x text-white" aria-hidden="true"></i>
                            </a>
                             
                        </div>
                        <div class="">
                            <a href="" class="mobile-logo-link text-white" style="font-size:25px">
                               ApnaDeal
                            </a>
                        </div>
                        <div class="mobile-header--left">
                            <a href="cart.php" class="" id="cartCounts">
                                    <i class="fa fa-shopping-cart fa-2x text-white" aria-hidden="true"></i>
                                    <?php if(isset($_SESSION["uid"])){
                                    $n = countCart($_SESSION["uid"]);
                                    ?>
                                    <span  class="bg-dark text-white p-1 rounded-circle" id="cartCountspan"><?php echo $n ?></span>
                                    <?php } else { ?>
                                    <span class="bg-dark text-white p-1 rounded-circle" id="cartCountspan">0</span>
                                    <?php } ?>
                                </a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div> <!-- End Mobile Header Wrapper -->
    </div>
     <div class="container d-block d-lg-none" style="margin-top:80px">
                <div class="row">
                    <div class="section-content">
                        <form action="search.php" method="post">
                            <div class="input-group mb-3">
                                <input type="text" name="searchText" class="form-control" placeholder="Search Product Here" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon2"><button type="submit" name="searchBtn"><i class="fa fa-search" aria-hidden="true"></i></button></span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>