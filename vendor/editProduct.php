<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("link.php"); ?>
    <script src="../ckeditor/ckeditor.js"></script>
</head>

<?php
    $pid = $_GET["pid"];
    $prodData = getProdById($pid);
    if(isset($_POST["submit"])){
        $pname = $_POST["pname"];
        $sale = $_POST["sale"];
        $mrp = $_POST["mrp"];
        $stock = $_POST["stock"];
        $subcat = $_POST["subcat"];
        $status = $_POST["status"];
        $munit = $_POST["munit"];
        $return = $_POST["return"];
        $dpro = getProdById($pid);
        $fname = $dpro["pic1"];
        $fpath = "";
        if(isset($_FILES["pic"]["name"]) && $_FILES["pic"]["name"] != "")
        {
            $fname = $_FILES["pic"]["name"];
            $fpath = $_FILES["pic"]["tmp_name"];
        }
        updateProduct($pname,$sale,$mrp,$stock,$subcat,$status,$fname,$fpath,$munit,$return,$pid);
    }
?>

<body>
    <?php include("header.php"); ?>
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Edit Product</h3>
                    </div>
                    <div class="card-body">

                        <form method="post" enctype="multipart/form-data" action="<?php $_PHP_SELF; ?>">
                            <div class="form-group">
                                <label for="">Product Name</label>
                                <input type="text" value="<?php echo $prodData["name"]; ?>" name="pname" placeholder="Product Name" required class="form-control">
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">MRP</label>
                                        <input type="text" value="<?php echo $prodData["mrp"]; ?>" name="mrp" placeholder="Product MRP" required class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Sale Price</label>
                                        <input type="text" value="<?php echo $prodData["saleprice"]; ?>" name="sale" placeholder="Product Sale Price" required class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Product Stock</label>
                                        <input type="text" value="<?php echo $prodData["stock"]; ?>" name="stock" placeholder="Product Stock" required class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Product Image</label>
                                        <input type="file" name="pic" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Packet Set</label>
                                        <input type="number" value="<?php echo $prodData["returnduration"] ?>" name="return" placeholder="Packet Set" required class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Choose SubCategory</label>
                                        <select name="subcat" required id="" class="form-control">
                                            <?php 
                                    $rs = subcat();
                                    while($data = mysqli_fetch_assoc($rs)):
                                        
                                            if($data["id"] == $prodData["subcatid"]){
                                    ?>
                                            <option selected value="<?php echo $data["id"] ?>"><?php echo $data["name"]; ?></option>
                                            <?php } else{ ?>
                                            <option value="<?php echo $data["id"] ?>"><?php echo $data["name"]; ?></option>
                                            <?php } endwhile; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Measuring Unit</label>
                                        <select name="munit" required id="" class="form-control">
                                            <option value="" selected disabled>Choose One</option>
                                            <?php 
                                    $rs2 = getMeasure();
                                    while($data2 = mysqli_fetch_assoc($rs2)):
                                            if($data2["id"] == $prodData["unit"]){
                                    ?>
                                            <option selected value="<?php echo $data2["id"] ?>"><?php echo $data2["name"]; ?></option>
                                            <?php } else{ ?>
                                            <option value="<?php echo $data2["id"] ?>"><?php echo $data2["name"]; ?></option>
                                            <?php } endwhile; ?>
                                        </select>
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
                                <a href="#demo" class="nav-link p-0 mb-2" data-toggle="collapse"><strong><i class="fa fa-arrow-down" aria-hidden="true"></i> Specification</strong></a>

                                <div id="demo" class="collapse">
                                    <div class="row">
                                        <div class="col-6">
                                            <input id="label" type="text" class="form-control" placeholder="Label">
                                        </div>
                                        <div class="col-6">
                                            <input id="value" type="text" class="form-control" placeholder="Value">
                                        </div>
                                        <div class="col-12 mt-3 text-center">
                                            <button type="button" onclick="addDes();" class="btn btn-info">Add Specification</button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12"><strong>Specification</strong></div>
                                        <table class="table table-bordered table-hover table-stripped">
                                            <thead>
                                                <tr>
                                                <th>S.No</th>
                                                <th>Label</th>
                                                <th>Value</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody id="setDes">
                                                
                                            </tbody>
                                            
                                        </table>
                                    </div>
                                    <script>
                                        fetchDes();
                                        function fetchDes(){
                                            var pid = "<?php echo $pid; ?>";
                                            $.ajax({
                                                type: "POST",
                                                url: "fetchDes.php",
                                                data: {pid: pid},
                                                success: function(data){
                                                    $("#setDes").html(data);
                                                }
                                            });
                                        }
                                        function addDes(){
                                            var label = $("#label").val();
                                            var value = $("#value").val();
                                            var pid = "<?php echo $pid; ?>";
                                            
                                            $.ajax({
                                                type: "POST",
                                                url: "addDes.php",
                                                data: {label: label,value: value,pid: pid},
                                                success: function(data){
                                                    fetchDes();
                                                    $("#label").val("");
                                                    $("#value").val("");
                                                }
                                            });
                                        }
                                        function deleteDes(id){
                                            $.ajax({
                                                type: "POST",
                                                url: "delDes.php",
                                                data: {id: id},
                                                success: function(data){
                                                    fetchDes();
                                                }
                                            });
                                        }
                                    </script>
                                </div>
                            </div>
                            <div class="form-group">
                                <a href="#demo1" class="nav-link p-0 mb-2" data-toggle="collapse"><strong><i class="fa fa-arrow-down" aria-hidden="true"></i> Description</strong></a>

                                <div id="demo1" class="collapse">
                                    <div class="row">
                                        <div class="col-12">
                                            <textarea name="des" id="des" cols="30" rows="10"></textarea>
                                            <script>
                                                CKEDITOR.replace('des');
                                            </script>
                                        </div>
                                        
                                        <div class="col-12 mt-3 text-center">
                                            <button type="button" onclick="addDes1();" class="btn btn-info">Add Description</button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12"><strong>Added Description</strong></div>
                                        <div class="col-12">
                                            <div class="card">
                                            <div class="card-body">
                                                <div id="addDes">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <script>
                                    loadDesc();
                                    function loadDesc(){
                                        var pid = "<?php echo $pid; ?>";
                                        $.ajax({
                                            type: "POST",
                                            url: "addDescription.php",
                                            data: {
                                                pid: pid,
                                                status: 0
                                                
                                            },
                                            success: function(data){
                                                $("#addDes").html(data);
                                                
                                            }
                                        });
                                    }
                                    function addDes1(){
                                        var desc = CKEDITOR.instances['des'].getData();
                                        var pid = "<?php echo $pid; ?>";
                                        $.ajax({
                                            type: "POST",
                                            url: "addDescription.php",
                                            data: {
                                                pid: pid,
                                                des: desc,
                                                status: 1
                                            },
                                            success: function(data){
                                                CKEDITOR.instances.des.setData( '' );
                                                $("textarea#des").val("");
                                                loadDesc();
                                                
                                            }
                                        });
                                    }
                                </script>
                            </div>
                            <div class="form-group text-right">
                                <input type="submit" class="btn btn-primary" name="submit" value="Update Product">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>