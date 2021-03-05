<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("../includes/link.php"); ?>
</head>
<?php
if(isset($_SESSION["aid"]))
    header("location: index.php");
if(isset($_POST["submit"])){
    $mobile_no = $_POST["mobile"];
    $password = $_POST["pass"];
    adminlogin($mobile_no,$password);
    echo "<script>alert('Profile Updated Successfully')</scirpt>";
}

?>
   
<body style="background-color:wheat">
<?php include('../vendor/loginheader.php'); ?>    
<div class="container text-center mt-5">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <div class="card" style="opacity:0.9">
                <div class="card-header">
                    <h4>SuperAdmin Sign In</h4>
                </div>
                <div class="card-body text-left">
                    <form method="post" action="<?php $_PHP_SELF; ?>">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>
                            </div>
                            <input type="text" class="form-control" required placeholder="Mobile" name="mobile" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock" aria-hidden="true"></i></span>
                            </div>
                            <input type="password" class="form-control" required placeholder="Password" name="pass" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <input type="submit" name="submit" value="SignIn as Superadmin" class="btn btn-info btn-block">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>