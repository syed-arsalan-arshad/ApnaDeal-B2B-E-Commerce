<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("../includes/link.php"); ?>


    <title>Edit Category</title>
</head>

<body>
    <?php include("header.php");

$sid = $_GET['sid'];
$sql = "SELECT * FROM `maincat` WHERE `id` = '$sid'";
 $run = mysqli_query(getCon(),$sql);
 $data = mysqli_fetch_assoc($run);
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-md-6 col-12">
                <div class="card" style="margin-top: 100px">
                    <div class="card-header">
                        <h3 class="card-title">Edit Category</h3>
                    </div>
                    <div class="card-body">
                        <form method="post" action="supadupdatecategory.php" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="nm">Category Name</label>
                                <input type="text" name="name" id="nm" class="form-control" value="<?php echo $data['name']; ?>">
                                <div class="form-group">
                                    <label for="file">Image</label>
                                    <input type="file" name="cimage" id="file" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="tag">Tag Line</label>
                                    <input type="text" name="cat_desc" value="<?php echo $data['cat_desc']; ?>" id="tag" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="st">Status</label>
                                <select name="status" id="st" class="form-control">
                                    <option value="1">Active</option>
                                    <option value="0">Deactive</option>
                                </select>
                            </div>
                            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                            <button type="submit" name="submit" class="btn btn-primary">UPDATE CATEGORY</button>

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>