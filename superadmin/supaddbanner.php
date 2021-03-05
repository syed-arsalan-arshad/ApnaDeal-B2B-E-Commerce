<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("../includes/link.php"); ?>

    <?php
 if(isset($_POST["submit"])){
    $btitle = $_POST["btitle"];
    $bpage = $_POST["page"];
    
    $status = $_POST["status"];
    
    $fname = $_FILES["pic"]["name"];
    $fpath = $_FILES["pic"]["tmp_name"];
    insertBanner($btitle,$status,$fname,$fpath,$bpage);
}
?>
</head>

<body>
    <?php include("header.php"); ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-3"></div>
            <div class="  col-md-6 col-12">
                <div class="card" style="margin-top: 100px">
                    <div class="card-header">
                        <h3 class="card-title">Add Banner</h3>
                    </div>
                    <div class="card-body">
                        <form method="post" enctype="multipart/form-data" action="<?php $_PHP_SELF; ?>">
                            <div class="form-group">
                                <label for="btitle">Banner Title</label>
                                <input type="text" placeholder="Banner Title" name="btitle" id="btitle" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="file">Banner Image</label>
                                <input type="file" name="pic" id="file" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="pg">Page</label>
                                <select name="page" required id="pg" class="form-control">
                                    <option value="" selected disabled>Choose Page</option>
                                    <option value="-1">All</option>
                                    <option value="0">Home</option>
                                    <option value="-2">Mobile Bottom Banner</option>
                                    <?php $rs = getMainCat();
                                    while($d = mysqli_fetch_assoc($rs)):?>
                                    <option value="<?php echo $d["id"] ?>"><?php echo $d["name"] ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="st">Status</label>
                                <select name="status" id="st" class="form-control">
                                    <option value="1">Active</option>
                                    <option value="0">Deactive</option>
                                </select>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">ADD BANNER</button>

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>

    </div>
</body>

</html>