<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("toplink.php") ?>
    <?php
     if(!isset($_SESSION["uid"]))
        header("location: login.php");
    $mob = $_SESSION["umobile"];
    $datanew = getUserByMobile($mob);
    $uid = $datanew["id"];
    if(isset($_POST["btnChange"])){
        $oldpass = $_POST["oldpass"];
        $newpass = $_POST["newpass"];
        $newcpass = $_POST["newcpass"];
        
        $datauser = getUserData($uid);
        if($oldpass == $datauser["password"]){
            if($newpass == $newcpass){
                changePassword($uid,$newpass);
                echo '<script type="text/javascript">';
                echo 'setTimeout(function () { swal("Alert","Password Changed Successfully");';
                echo '}, 1000);</script>';
            }else{
                echo '<script type="text/javascript">';
                echo 'setTimeout(function () { swal("Alert","Password And Confirm Password Not Matched");';
                echo '}, 1000);</script>';
            }
        }else{
            echo '<script type="text/javascript">';
            echo 'setTimeout(function () { swal("Alert","Old Password Is Wrong");';
            echo '}, 1000);</script>';
        }
    }
    if(isset($_POST["btnUpdate"])){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $mobile = $_POST["mobile"];
        updateProfile($uid,$name,$email,$mobile);
        
        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { swal("Alert","Profile Updated Successfully");';
        echo '}, 1000);';
        
        echo '</script>';
        header("location: my-account.php");
    }
    
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

    <!-- ...:::: Start Breadcrumb Section:::... -->
    <div class="breadcrumb-section d-none d-lg-block">
        <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-between justify-content-md-between  align-items-center flex-md-row flex-column">
                        <h3 class="breadcrumb-title">My Account</h3>
                        <div class="breadcrumb-nav">
                            <nav aria-label="breadcrumb">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="#">Shop</a></li>
                                    <li class="active" aria-current="page">My Account</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Breadcrumb Section:::... -->

    <!-- ...:::: Start Account Dashboard Section:::... -->
    <div class="account_dashboard">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <!-- Nav tabs -->
                    <div class="dashboard_tab_button">
                        <ul role="tablist" class="nav flex-column dashboard-list">
                            <li><a href="#dashboard" data-toggle="tab" class="nav-link active">Dashboard</a></li>
                            <li> <a href="#orders" data-toggle="tab" class="nav-link">Orders</a></li>
                            <li><a href="#address" data-toggle="tab" class="nav-link">Addresses</a></li>
                            <li><a href="logout.php" class="nav-link">logout</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md-9 col-lg-9">
                    <!-- Tab panes -->
                    <div class="tab-content dashboard_content">
                        <div class="tab-pane fade show active" id="dashboard">
                            <h4>User Profile </h4>
                            <p><?php 
                                if($datanew["name"] == "")
                                    echo "Name Not Updated";
                                else
                                    echo $datanew["name"]; ?></p>
                            <p><?php 
                                if($datanew["email"] == "")
                                    echo "Email Not Updated";
                                else
                                    echo $datanew["email"]; ?></p>
                            <p><?php echo $_SESSION["umobile"]; ?></p>
                            <p><a href="#" data-toggle="modal" data-target="#addressModal">Update Profile</a></p>
                            <p>
                                <a class="" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    Change Password
                                </a>
                            </p>
                            <div class="collapse" id="collapseExample">
                                <div class="card card-body">
                                    <form action="<?php $_PHP_SELF; ?>" method="post">
                                        <div class="form-group mb-2">
                                            <input type="password" name="oldpass" class="border" placeholder="Old Password">
                                        </div>
                                        <div class="form-group mb-2">
                                            <input type="password" required name="newpass" class="border" placeholder="New Password">
                                        </div>
                                        <div class="form-group mb-2">
                                            <input type="password" required name="newcpass" class="border" placeholder="Confirm New Password">
                                        </div>
                                        <div class="form-group mb-2">
                                            <input type="submit" name="btnChange" value="Update Password" class="btn btn-success">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

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
                                                            <form action="<?php $_PHP_SELF ?>" method="post">
                                                                <div class="row mt-2">
                                                                    <div class="col-6 mb-2">
                                                                        <label for="">Name</label>
                                                                        <input type="text" name="name" value="<?php echo $datanew["name"]; ?>" required placeholder="Full Name" class="form-control">
                                                                    </div>
                                                                    <div class="col-6 mb-2">
                                                                        <label for="">Mobile</label>
                                                                        <input type="text" name="mobile" value="<?php echo $datanew["mobile"]; ?>" required placeholder="Mobile No" class="form-control">
                                                                    </div>
                                                                    <div class="col-6 mb-2">
                                                                        <label for="">Email</label>
                                                                        <input type="email" value="<?php echo $datanew["email"]; ?>" name="email" required placeholder="Email Id" class="form-control">
                                                                    </div>
                                                                    <div class="col-12 mb-2">
                                                                        <input type="submit" name="btnUpdate" value="Update Profile" class="btn btn-success btn-block">
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
                        <div class="tab-pane fade" id="orders">
                            <h4>Orders</h4>
                            <?php 
                            $rsorder = getInvoiceByUser($uid);
                            
                            ?>
                            <div class="table_page table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Invoice No</th>
                                            <th>Date</th>
                                            <th>Sub Total</th>
                                            <th>GST</th>
                                            <th>Total</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while($dataord = mysqli_fetch_assoc($rsorder)):
                                            $data = getOrder($dataord["orderno"]);
                                        ?>
                                        <tr>
                                            <td><?php echo $dataord["invoiceno"] ?></td>
                                            <td><?php echo $data["date"] ?></td>
                                            <td><?php echo $dataord["subtotal"] ?></td>
                                            <td><?php echo $dataord["gst"] ?></td>
                                            <td><?php echo $dataord["grandtotal"] ?></td>
                                            <td><a href="genInvoice.php?id=<?php echo $dataord["id"] ?>">Download Invoice</a></td>

                                        </tr>
                                        <?php endwhile; ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="tab-pane" id="address">
                            <p>The following addresses will be used on the checkout page by default.</p>
                            <h5 class="billing-address">Billing address</h5>
                            <?php $rsAdd = getUserAddress($uid); 
                            while($dataAdd = mysqli_fetch_assoc($rsAdd)):
                            ?>
                            <div>

                                <a href="updateAddress.php?aid=<?php echo $dataAdd["id"]; ?>" class="view">Edit</a>
                                <a href="#" onclick="deleteAddress(<?php echo $dataAdd["id"]; ?>)" class="view">Delete</a>
                                <p><strong><?php echo $dataAdd["name"]; ?></strong></p>
                                <address>
                                    Mobile: <?php echo $dataAdd["mobile"]; ?><br>
                                    <?php echo $dataAdd["addressline"]; ?><br>
                                    <?php echo $dataAdd["city"]; ?><br>
                                    <?php echo $dataAdd["state"]; ?> <br>
                                    <?php echo $dataAdd["pincode"]; ?> <br>

                                </address>
                            </div>
                            <?php endwhile; ?>
                            <script>
                                function deleteAddress(id){
                                    $.ajax({
                                        type: "post",
                                        url: "deleteAddress.php",
                                        data: {
                                            id: id
                                        },
                                        success: function(data){
                                            location.reload();
                                        }
                                    });
                                }
                            </script>


                        </div>
                        <div class="tab-pane fade" id="account-details">
                            <h3>Account details </h3>
                            <div class="login">
                                <div class="login_form_container">
                                    <div class="account_login_form">
                                        <form action="#">
                                            <p>Already have an account? <a href="#">Log in instead!</a></p>
                                            <div class="input-radio">
                                                <span class="custom-radio"><input type="radio" value="1" name="id_gender"> Mr.</span>
                                                <span class="custom-radio"><input type="radio" value="1" name="id_gender"> Mrs.</span>
                                            </div> <br>
                                            <div class="default-form-box mb-20">
                                                <label>First Name</label>
                                                <input type="text" name="first-name">
                                            </div>
                                            <div class="default-form-box mb-20">
                                                <label>Last Name</label>
                                                <input type="text" name="last-name">
                                            </div>
                                            <div class="default-form-box mb-20">
                                                <label>Email</label>
                                                <input type="text" name="email-name">
                                            </div>
                                            <div class="default-form-box mb-20">
                                                <label>Password</label>
                                                <input type="password" name="user-password">
                                            </div>
                                            <div class="default-form-box mb-20">
                                                <label>Birthdate</label>
                                                <input type="date" name="birthday">
                                            </div>
                                            <span class="example">
                                                (E.g.: 05/31/1970)
                                            </span>
                                            <br>
                                            <label class="checkbox-default" for="offer">
                                                <input type="checkbox" id="offer">
                                                <span>Receive offers from our partners</span>
                                            </label>
                                            <br>
                                            <label class="checkbox-default checkbox-default-more-text" for="newsletter">
                                                <input type="checkbox" id="newsletter">
                                                <span>Sign up for our newsletter<br><em>You may unsubscribe at any moment. For that purpose, please find our contact info in the legal notice.</em></span>
                                            </label>
                                            <div class="save_button primary_btn default_button">
                                                <button type="submit">Save</button>
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
    </div> <!-- ...:::: End Account Dashboard Section:::... -->

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