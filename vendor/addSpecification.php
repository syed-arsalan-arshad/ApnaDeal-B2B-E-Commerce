<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("link.php"); ?>
</head>
<body>
    <?php include("header.php"); ?>
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-12">
                <div class="card">
                   <div class="card-header">
                        <h3>Add Specification</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <select name="pro" id="pro" class="form-control">
                                <?php $da = getLatest1ProdByVendor($_SESSION["vid"]); ?>
                                <option value="<?php echo $da["id"] ?>">
                                    <?php echo $da["name"]; ?>
                                </option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Label</label>
                                    <input type="text" placeholder="Label" id="label" class="form-control">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Value</label>
                                    <input type="text" placeholder="Value" id="value" class="form-control">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="from-group">
                                    <button class="btn btn-info" type="button" onclick="addSpec()">Add +</button>
                                </div>
                            </div>
                        </div>
                        <script>
                            function addSpec(){
                                var pid = $("#pro").val();
                                var label = $("#label").val();
                                var value = $("#value").val();
                                if(label.length == 0 || value.length == 0){
                                    alert("Box Should Be Fill..");
                                }
                                else{
                                $.ajax({
                                    type: "post",
                                    url: "ajaxSpec.php",
                                    data: {
                                        pid: pid,
                                        label: label,
                                        value: value
                                    },
                                    success: function(data){
                                        $("#label").val("");
                                        $("#value").val("");
                                    }
                                });
                                    
                                }
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>