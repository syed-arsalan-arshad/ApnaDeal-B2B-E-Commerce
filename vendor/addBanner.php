<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("link.php"); ?>
</head>

<?php
    if(isset($_POST["submit"])){
        $btitle = $_POST["btitle"];
        
        $status = $_POST["status"];
        
        $fname = $_FILES["pic"]["name"];
        $fpath = $_FILES["pic"]["tmp_name"];
        insertBanner($btitle,$status,$fname,$fpath);
    }
?>

<body>
    <?php include("header.php"); ?>
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Add Product</h3>
                    </div>
                    <div class="card-body">

                        <form method="post" enctype="multipart/form-data" action="<?php $_PHP_SELF; ?>">
                            <div class="form-group">
                                <label for="">Banner Title</label>
                                <input type="text" name="btitle" placeholder="Banner Title" required class="form-control">
                            </div>
                            <div class="row">
                                
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Banner Image</label>
                                        <input type="file" name="pic" required class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Status</label>
                                <select name="status" id="" class="form-control">
                                    <option value="1">Active</option>
                                    <option value="0">Deactive</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" name="submit" value="Add Banner">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>