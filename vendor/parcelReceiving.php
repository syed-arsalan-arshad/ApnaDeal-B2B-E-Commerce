<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("link.php"); ?>
</head>

<?php
    if(isset($_POST["submit"])){
        
        $inv = $_POST["inv"];
        $vid = $_SESSION["vid"];
        $attachName = $_FILES["photo"]["name"];
        $attachPath = $_FILES["photo"]["tmp_name"];
        $courierName = $_FILES["courier"]["name"];
        $courierPath = $_FILES["courier"]["tmp_name"];
        insertParcel($inv,$attachName,$attachPath,$courierName,$courierPath,$vid);
        
        
    }
?>

<body>
    <?php include("header.php"); ?>
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Parcel Receiving</h3>
                    </div>
                    <div class="card-body">

                        <form method="post" enctype="multipart/form-data" action="<?php $_PHP_SELF; ?>">
                            <div class="form-group">
                                <label for="">Invoice No:</label>
                                <input type="text" name="inv" placeholder="Invoice Number" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Photo/Attachment</label>
                                <input type="file" name="photo" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Courier/Transport Receipt</label>
                                <input type="file" name="courier" required class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" name="submit" value="Upload">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>
</body>

</html>