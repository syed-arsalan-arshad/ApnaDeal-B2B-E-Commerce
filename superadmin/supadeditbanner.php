<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("../includes/link.php"); ?>
</head>

<body>
    <?php include("header.php"); 
$sid = $_GET['sid'];
$sql = "SELECT * FROM `banner` WHERE `id` = '$sid'";
 $run = mysqli_query(getCon(),$sql);
 $data = mysqli_fetch_assoc($run);
?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="card" style="margin-top: 100px">
                    <div class="card-header">
                        <h3 class="card-title">Add Banner</h3>
                    </div>
                    <div class="card-body">
                        <form method="post" enctype="multipart/form-data" action="supadupdate.php">
                            <div class="form-group">
                                <label for="btitle">Banner Title</label>
                                <input type="text" required name="btitle" id="btitle" value="<?php echo $data['title']; ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="file">Banner Image</label>
                                <input type="file" name="pic" id="file" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="st">Status</label>
                                <select name="status" id="st" class="form-control">
                                    <option value="1">Active</option>
                                    <option value="0">Deactive</option>
                                </select>
                            </div>
                            <input type="hidden" required name="id" value="<?php echo $data['id']; ?>">
                            <button type="submit" name="submit" class="btn btn-primary">UPDATE BANNER</button>

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>

    </div>
</body>

</html>