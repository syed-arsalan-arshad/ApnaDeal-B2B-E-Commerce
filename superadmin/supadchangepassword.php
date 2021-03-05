<!DOCTYPE html>
<html lang="en">
<head>
<?php include("../includes/link.php"); 
if(!isset($_SESSION["aid"]))
header("location: index.php");
if(isset($_POST["submit"])){
$oldpass = $_POST["oldpass"];
$newpass = $_POST["newpass"];
$newcpass = $_POST["newcpass"];
$aid = $_SESSION["aid"];
$dataven = getadminpass($aid);
if($dataven["password"] == $oldpass){
    if($newcpass == $newpass){
        changeadminpassword($aid,$newpass);
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

?>
<title>Change Password</title>
</head>

<body style="background-color:wheat">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Apna Deal</a>
    </nav>
<div class="container text-center mt-5">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <div class="card" style="opacity:0.9">
                <div class="card-header">
                    <h4>Admin Update Password</h4>
                </div>
                <div class="card-body text-left">
                    <form method="post" action="<?php $_PHP_SELF; ?>">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>
                            </div>
                            <input type="password" class="form-control" required placeholder="Old Password" name="oldpass" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock" aria-hidden="true"></i></span>
                            </div>
                            <input type="password" class="form-control" required placeholder="New Password" name="newpass" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock" aria-hidden="true"></i></span>
                            </div>
                            <input type="password" class="form-control" required placeholder="Confirm Password" name="newcpass" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <input type="submit" name="submit" value="Update Password" class="btn btn-info btn-block">
                        <a href="index.php" class="nav-link">Move To Dashboard</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>