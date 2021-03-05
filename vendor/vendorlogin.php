
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('link.php'); ?>
</head>
<?php

if(isset($_SESSION["vid"]))
    header("location: index.php");
if(isset($_POST["submit"])){
    $mobile = $_POST["mobile"];
    $pass = $_POST["pass"];
    login($mobile,$pass);
    
}

?>
   
<body style="background-color:wheat">
<?php include('loginheader.php'); ?>    
<div class="container text-center mt-5">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <div class="card" style="opacity:0.9">
                <div class="card-header">
                    <h4>Admin Sign In</h4>
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
                        <input type="submit" name="submit" value="SignIn as Admin" class="btn btn-info btn-block">
                        <p>
                            <a class="nav-link m-0 px-0" href="forgotPassword.php">Forgot Password.. ?</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>