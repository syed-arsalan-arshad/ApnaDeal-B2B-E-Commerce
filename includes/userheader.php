<style>
        /* ----- SIDE MENU STYLE ----- */

        .modal.left .modal-dialog {
            position: fixed;
            margin: auto;
            width: 320px;
            height: 100%;
            -webkit-transform: translate3d(0%, 0, 0);
            -ms-transform: translate3d(0%, 0, 0);
            -o-transform: translate3d(0%, 0, 0);
            transform: translate3d(0%, 0, 0);
        }
       
        @media only screen and (max-width: 600px) {
            .modal.left .modal-dialog {
            position: fixed;
            margin: auto;
            width: 250px;
            height: 100%;
            -webkit-transform: translate3d(0%, 0, 0);
            -ms-transform: translate3d(0%, 0, 0);
            -o-transform: translate3d(0%, 0, 0);
            transform: translate3d(0%, 0, 0);
        }
  
}

        .modal.left .modal-content {
            height: 100%;
            overflow-y: auto;
        }

        .modal.left .modal-body {
            /padding: 15px 15px 80px;/
            padding: 0px 0px 0px;
            background-color: #000;
        }

        .modal.left.fade .modal-dialog {
            left: -320px;
            -webkit-transition: opacity 0.3s linear, left 0.3s ease-out;
            -moz-transition: opacity 0.3s linear, left 0.3s ease-out;
            -o-transition: opacity 0.3s linear, left 0.3s ease-out;
            transition: opacity 0.3s linear, left 0.3s ease-out;
        }

        .modal.left.fade.show .modal-dialog {
            left: 0;
        }

        /* ----- MODAL STYLE ----- */
        .modal-content {
            border-radius: 0;
            border: none;
        }

        

        /* ----- SIDE MENU STYLE ----- */
        .dropdown:hover .dropdown-menu {
            display: block;
        }
        .txtclr a{
            color: white;
            text-decoration: none;
        }
        
    </style>




 <nav class="navbar navbar-expand-lg fixed-top" style="background-color:#aff8fe">
 
  <a href="" data-toggle="modal" data-target="#sideMenuModal"><i class="fa fa-bars fa-2x mr-3" aria-hidden="true"></i></a>
  <a class="navbar-brand" href="#">
  <img src="image/logo.png" alt="">
  </a>
  <a href="" class="ml-auto btn btn-primary">Login</a>
    
</nav>


<div class="modal left fade " id="sideMenuModal" tabindex="-1" role="dialog" aria-labelledby="sideMenuModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                

                <div class="modal-body txtclr">
                    <div class="container-fluid text-white">
                        <div class="row">
                            <a href="#" class="close text-left" data-dismiss="modal">
                        <span aria-hidden="false"><i class="text-white fa fa-times" aria-hidden="true"></i></span>
                    </a>
                        </div>
                        <div class="row mt-4 ml-2">
                        <div class="col-4"><img src="image/a.png" alt="proImg" height="180px" width="120px" style="border-radius:50px;"></div>
                        <div class="col-6"><h5>userName</h5></div>
                       </div>
                       <hr style="background-color:#222">
                       <a href="#"><div class="row pb-1">
                           <div class="col-1"><i class="fa fa-cubes" aria-hidden="true"></i></div>
                           <div class="col-8"><p>Profit</p></div>
                       </div></a>
                       <a href="#"><div class="row pb-1">
                           <div class="col-1"><i class="fa fa-cubes" aria-hidden="true"></i></div>
                           <div class="col-8"><p>Profit</p></div>
                       </div></a>
                       <div class="row">
                           <div class="col-1"><i class="fa fa-bars" aria-hidden="true"></i></div>
                           
                           <div class="col-8"><p>Category</p></div>
                       </div>
                       <hr class="p-0 m-0" style="background-color:#444">
                       <div class="row pt-2">
                           
                           <div class="col-1"><i class="fa fa-comment" aria-hidden="true"></i></div>
                           <div class="col-8"><p class=" m-0">Chat</p></div>
                       </div>
                       <hr class="p-0 m-0" style="background-color:#444">
                      <div class="row pb-1 pt-1">
                           <div class="col-1"><i class="fa fa-refresh" aria-hidden="true"></i></div>
                           <div class="col-8"><p>Your Order</p></div>
                       </div>
                       <div class="row pb-1">
                           <div class="col-1"><i class="fa fa-wrench" aria-hidden="true"></i></div>
                           <div class="col-8"><p>Your Service</p></div>
                       </div>
                       <div class="row">
                           <div class="col-1"><i class="fa fa-hand-o-left" aria-hidden="true"></i></div>
                                                      
                           <div class="col-8"><p>Your Return</p></div>
                       </div>
                       <hr class="p-0 m-0" style="background-color:#444">
                       <div class="row pt-2">
                           
                           <div class="col-1"><i class="fa fa-handshake-o" aria-hidden="true"></i></div>
                           
                           <div class="col-8"><p class="p-0 m-0">Support</p></div>
                       </div>
                       <hr class="p-0 m-0" style="background-color:#444">
                        <div class="row">
                          
                           <div class="col-12 pt-2"><p class="p-0 m-0">Terms & Condition</p></div>
                       </div>
                       <hr class="p-0 m-0" style="background-color:#444">
                        <div class="row">
                           
                          <div class="col-12 pt-2"><p class="p-0 m-0">About ShamsCity</p></div>
                       </div>
                       <hr class="p-0 m-0" style="background-color:#444">
                        <div class="row">
                           <div class="col-12 pt-2"><p class="p-0 m-0">Language</p></div>
                       </div>
                       <hr class="p-0 m-0" style="background-color:#444">
                       <div class="row pt-2">
                           <div class="col-1"><i class="fa fa-user" aria-hidden="true"></i></div>
                                                      
                           <div class="col-8"><p>Contact</p></div>
                       </div>
                       
                    </div>
                                 </div>
                
            </div>
        </div></div>
    
    <script>
        // Treeview Initialization
        $(document).ready(function() {
            $('.treeview').mdbTreeview();
        });
    </script>
