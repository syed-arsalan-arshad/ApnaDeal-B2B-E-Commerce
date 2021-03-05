<?php 
include("../includes/link.php");

if(isset($_POST["submit"])){
    $name = $_POST['nm'];
$email = $_POST['em'];
$mobile_no = $_POST['mob'];
$password = $_POST['pass'];
$confirmpassword = $_POST['cpass'];
if($password == $confirmpassword)
{
   $sql = "INSERT INTO admin (name,email,mobile_no,password) VALUES ('".$name."', '".$email."','".$mobile_no."', '".$password."')";
   $row = mysqli_query(getCon(), $sql);
   if($row >= 1){
       echo "data inserted";
   }
}
else{
    echo "password not match";
}
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>index</title>
  </head>
  <body>
  <div class="container-fluid">
       <div class="row">
           <div class="col-3"></div>
           <div class="col-6">
           <div class="card w-80" style="margin-top: 100px;">
  <div class="card-body text-center">
    <h3 class="card-title">Login</h3>
    <form action="login.php" method="post">
    <div class="form-group row">
    <label for="nm" class="col-sm-3 col-form-label">Name</label>
    <div class="col-sm-9">
    <input type="text" class="form-control" placeholder="Name" id="nm" name="nm" required>
      </div>
      </div>
      <div class="form-group row">
    <label for="em" class="col-sm-3 col-form-label">Email</label>
    <div class="col-sm-9">
    <input type="email" class="form-control" placeholder="Email" id="em" name="em" required>
      </div>
      </div>
      <div class="form-group row">
    <label for="mob" class="col-sm-3 col-form-label">Mobile No</label>
    <div class="col-sm-9">
    <input type="text" class="form-control" placeholder="Mobile No" id="mob" name="mob" required>
      </div>
      </div>
      <div class="form-group row">
    <label for="mob" class="col-sm-3 col-form-label">Password</label>
    <div class="col-sm-9">
    <input type="password" class="form-control" placeholder="Password" id="pass" name="pass" required>
      </div>
      </div>
      <div class="form-group row">
    <label for="mob" class="col-4 col-form-label">Confirm Password</label>
    <div class="col-sm-8">
    <input type="password" class="form-control" placeholder="Confirm Password" id="pass" name="cpass" required>
      </div>
      </div>
      <button type="submit" name="submit" class="btn btn-primary">Login</button>
     </form>
   
  </div>
</div>

             </div>
           <div class="col-3"></div>
          </div>
      </div>
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>