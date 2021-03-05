<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("link.php"); ?>
    <script src="../ckeditor/ckeditor.js"></script>
</head>

<?php
    if(isset($_POST["submit"])){
        $pname = $_POST["pname"];
        $sale = $_POST["sale"];
        $mrp = $_POST["mrp"];
        $stock = $_POST["stock"];
        $status = $_POST["status"];
        $return = $_POST["return"];
        $fname = $_FILES["pic"]["name"];
        $fpath = $_FILES["pic"]["tmp_name"];
        insertProduct($pname,$sale,$mrp,$stock,$status,$fname,$fpath,$return);
        echo "<script>alert('Product Added Successfully');
        window.location.href = 'addSpecification.php'</script>";
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
                                <label for="">Product Name</label>
                                <input type="text" name="pname" placeholder="Product Name" required class="form-control">
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">MRP</label>
                                        <input type="text" name="mrp" placeholder="Product MRP" required class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Sale Price</label>
                                        <input type="text" name="sale" placeholder="Product Sale Price" required class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Product Stock</label>
                                        <input type="text" name="stock" placeholder="Product Stock" required class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Product Image</label>
                                        <input type="file" name="pic" required class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Packet Set</label>
                                        <input type="number" name="return" placeholder="Packet Set" required class="form-control">
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
                                <input type="submit" class="btn btn-primary" name="submit" value="Add Product">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>
</body>

</html>