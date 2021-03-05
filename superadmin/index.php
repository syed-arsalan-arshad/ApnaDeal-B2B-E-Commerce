<!doctype html>
<html lang="en">
  <head>
    <?php include("../includes/link.php");
      if(!isset($_SESSION["aid"]))
        header("location: supadlogin.php");
      if(isset($_POST["btnUpdate"])){
          $name = $_POST["name"];
          $email = $_POST["email"];
          $mobile = $_POST["mobile"];
          updateAdmin($name,$email,$mobile,$_SESSION["aid"]);
      }
      ?>
  </head>
  <body>
  <?php include("header.php") ?>
    <div class="container">
        <div class="row mt-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="p-3">
                            <strong>Dashboard Area</strong>
                        </div>
                        <div class="p-3">
                            <table class="table table-stripped table-border">
                                <tr>
                                    <th>Admin Name</th><td><?php echo $_SESSION["aname"]; ?></td>
                                    
                                </tr>
                                <tr>
                                    <th>Admin Mobile</th><td><?php echo $_SESSION["amobile"]; ?></td>
                                </tr>
                                
                               
                                <tr>
                                    <th>Admin Email</th>
                                    <td><?php echo $_SESSION["aemail"]; ?></td>
                                </tr>
                                
                                <tr>
                                    <th class="">
                                        <a href="supadlogout.php" class="btn btn-danger">Logout</a>
                                    </th>
                                    <th class="">
                                        <a href="#" data-toggle="modal" data-target="#addressModal" class="btn btn-danger">Edit Profile</a>
                                    </th>
                                </tr>
                            </table>
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
                                                            <form action="<?php $_PHP_SELF ?>" method="post" enctype="multipart/form-data">
                                                                <div class="row mt-2">
                                                                    <div class="col-6 mb-2">
                                                                        <label for="">Name</label>
                                                                        <input type="text" name="name" value="<?php echo $_SESSION["aname"]; ?>" required placeholder="Full Name" class="form-control">
                                                                    </div>
                                                                    <div class="col-6 mb-2">
                                                                        <label for="">Mobile</label>
                                                                        <input type="text" name="mobile" value="<?php echo $_SESSION["amobile"]; ?>" required placeholder="Mobile No" class="form-control">
                                                                    </div>
                                                                    <div class="col-6 mb-2">
                                                                        <label for="">Email</label>
                                                                        <input type="email" value="<?php echo $_SESSION["aemail"]; ?>" name="email" required placeholder="Email Id" class="form-control">
                                                                    </div>
                                                                
<!--
                                                                    <div class="col-6 mb-2">
                                                                        <label for="">Main Category</label>
                                                                        <select name="maincat" id="" class="form-control">
                                                                    <?php $rsmaincat = getMainCat();
                                                                        while($datamaincat = mysqli_fetch_assoc($rsmaincat)):
                                                                            if($datamaincat["id"] == $dataven["maincatid"]){
                                                                        ?>
                                                                        <option selected value="<?php echo $datamaincat["id"] ?>"><?php echo $datamaincat["name"] ?></option>
                                                                        <?php }else{ ?>
                                                                        <option value="<?php echo $datamaincat["id"] ?>"><?php echo $datamaincat["name"] ?></option>
                                                                        <?php } endwhile;?>
                                                                        
                                                                        </select>
                                                                       
                                                                    </div>
-->
                                                                
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>