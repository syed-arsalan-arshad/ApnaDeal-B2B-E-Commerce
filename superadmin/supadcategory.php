<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("../includes/link.php"); ?>
    <?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $cimage = $_FILES['cimage']['name'];
        $fpath = $_FILES['cimage']['tmp_name'];
        $cat_desc = $_POST['cat_desc'];
        $status = $_POST['status'];

        move_uploaded_file($fpath,"categoryImage/".$cimage);
        $qry = "INSERT INTO `maincat` (name,cimage,cat_desc,status) VALUES ('".$name."','".$cimage."','".$cat_desc."','".$status."')";
        $run = mysqli_query(getCon(),$qry);
        if($run >=1){
         ?>
    <script>
        alert('Category Added Successfully');
    </script>
    <?php
        }
    }
?>
    <title>Add Category</title>
</head>

<body>
    <?php include("header.php"); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-md-6 col-12">
                <div class="card" style="margin-top: 100px">
                    <div class="card-header">
                        <h3 class="card-title">Add Category</h3>
                    </div>
                    <div class="card-body">
                        <form method="post" action="<?php $_PHP_SELF; ?>" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="nm">Category Name</label>
                                <input type="text" name="name" id="nm" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="file">Image</label>
                                <input type="file" name="cimage" id="file" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="tag">Tag Line</label>
                                <input type="text" name="cat_desc" id="tag" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="st">Status</label>
                                <select name="status" id="st" class="form-control">
                                    <option value="1">Active</option>
                                    <option value="0">Deactive</option>
                                </select>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">ADD Category</button>

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>