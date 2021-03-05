<footer class="footer-section section-top-gap-100 d-none d-lg-block">
        <!-- Start Footer Top Area -->
        <div class="footer-top section-inner-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-5">
                        <div class="footer-widget footer-widget-contact">
                            <div class="footer-logo">
                                <a href="index.html"><img src="assets/images/logo/favicon.ico.png" alt="" class="img-fluid"></a>
                            </div>
                            <div class="footer-contact">
                                <p>Apna Deal B2B Private Limit
                                    Second Floor, D 35 Sector 2, Noida, UP, 201301, Nearest Delhi
                                </p>
                                <div class="customer-support">
                                    <div class="customer-support-icon">
                                        <img src="assets/images/icon/support-icon.png" alt="">
                                    </div>
                                    <div class="customer-support-text">
                                        <span>Customer Support</span>
                                        <a class="customer-support-text-phone" href="tel:+91 9060956810">+91 9060956810</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-7">
                        <div class="footer-widget footer-widget-subscribe">
                            <h3 class="footer-widget-title">Get latest Update</h3>
                            <form action="#" method="post">
                                <div class="footer-subscribe-box default-search-style d-flex">
                                    <input class="default-search-style-input-box border-around border-right-none subscribe-form" type="email" placeholder="Write Your Email Id Here" required>
                                    <button class="default-search-style-input-btn" type="submit">Get it</button>
                                </div>
                            </form>
                            <p class="footer-widget-subscribe-note">We’ll never share your email address <br> with a third-party.</p>
                            <ul class="footer-social">
                                <li><a href="" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="" class="youtube"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="" class="instagram"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="footer-widget footer-widget-menu">
                            <h3 class="footer-widget-title">Information</h3>
                            <div class="footer-menu">
                                <ul class="footer-menu-nav">
                                    <li><a href="#" data-toggle="modal" data-target="#modalAddcart">Delivery</a></li>
                                    <li><a href="about-us.php">About Us</a></li>
                                    
                                </ul>
                                <ul class="footer-menu-nav">
                                    <li><a href="#" data-toggle="modal" data-target="#modalAddLoc">Location</a></li>
                                    <li><a href="contact-us.php">Contact us</a></li>
                                    <?php if(isset($_SESSION["uid"])){ ?>
                                    <li><a href="my-account.php">My Account</a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Footer Top Area -->
        <!-- Start Footer Bottom Area -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="copyright-area">
                            <p class="copyright-area-text">Copyright © 2020 <a class="copyright-link" href="https://www.givni.in/">Givni Private Limited</a></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer-payment">
                            <a href=""><img class="img-fluid" src="assets/img/Apnadeal.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Footer Bottom Area -->
    </footer>
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
                            <div class="col-md-12">
                                <div class="row">
                                    
                                    <div class="col-md-12">
                                       
                                       <ul> 
                                           <li>Delivery time is 3 to 5 days.</li>
                                           <li>If delivered by courier, it will go to your address.</li>
                                           <li>If the parcel is large then it will be sent to your nearest transportation company.</li>
                                       </ul>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Modal Add cart -->


<!-- Start Modal Add cart -->
    <div class="modal fade" id="modalAddLoc" tabindex="-1" role="dialog" aria-hidden="true">
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
                                       <p>Apna Deal B2B Private Limited
                        Second Floor, D 35 Sector 2, Noida, UP, 201301, Nearest Delhi</p>
                        <p>
                                       <p>
                                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3503.5737989988197!2d77.3145650141867!3d28.58255828243751!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce5a2df3751cf%3A0x3e5a3f0e40612384!2sNoida%20sector%202!5e0!3m2!1sen!2sin!4v1612259550522!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                       </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Modal Add cart -->
