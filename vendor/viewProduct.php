<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("link.php"); ?>
</head>
<body>
    <?php include("header.php"); ?>
    <div class="container mt-5 mb-5">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-12 ">
                    <h4>View Product</h4>
                </div>



                <div class="col-12 ">
                    <table class="table table-stripped table-responsive">
                        <tr>
                            <td>ID</td>
                            <td>Product Name</td>
                            <td>Product Image</td>
                            <td>MRP</td>
                            <td>Sale Price</td>
                            <td>Stock</td>
                            <td>Set Of</td>
                            <td>MainCategory</td>
                            <td>SubCategory</td>
                            <td>Measuring Unit</td>
                            <td>Status</td>
                            <td>Action</td>
                        </tr>
                        <?php 
                            $rs = selectProd();
                            while($data = mysqli_fetch_assoc($rs)):
                            $d = persubcat($data["subcatid"]);
                            $dm = maincat($data["maincatid"]);
                            $dataunit = getMeasureUnit($data["unit"]);
                            if($data["status"] == 1)
                                $btn = "<button class='btn btn-success'>Publish</button>";
                            else
                                $btn = "<button class='btn btn-secondary'>Un-Publish</button>";
                        ?>
                        <tr>
                            <td><?php echo $data["id"]; ?></td>
                           
                            <td><?php echo $data["name"]; ?></td>
                            <td><img class="img-fluid" style="height:80px" src="../productImage/<?php echo $data["pic1"]; ?>" alt=""></td>
                            <td><?php echo $data["mrp"]; ?></td>
                            <td><?php echo $data["saleprice"]; ?></td>
                            <td><?php echo $data["stock"]; ?></td>
                            <td><?php echo $data["returnduration"]; ?></td>
                            <td><button class="btn btn-info"><?php echo $dm["name"]; ?></button></td>
                            <td><button class="btn btn-success"><?php echo $d["name"]; ?></button></td>
                            <td><button class="btn btn-secondary"><?php echo $dataunit["name"]; ?></button></td>
                            <td><?php echo $btn; ?></td>
                            <td><div class="dropdown">
                                        <button class="btn dropdown-toggle" type="button" data-toggle="dropdown"><i class="fa fa-bars" aria-hidden="true"></i>
                                            </button>
                                        <ul class="dropdown-menu">
                                            
                                            <li>
                                            <?php if($data["status"] == 1){ ?>
                                            <a href="unpublish.php?id=<?php echo $data["id"] ?>" onclick=""><i class="fa fa-pencil" aria-hidden="true"></i> Un-Publish</a>
                                            <?php } else {?>
                                            <a href="publish.php?id=<?php echo $data["id"] ?>" onclick=""><i class="fa fa-trash-o" aria-hidden="true"></i> Publish</a>
                                            <?php } ?>
                                            </li>
                                            <li><a href="editProduct.php?pid=<?php echo $data["id"]; ?>"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a></li>
                                            <li><a href="delete.php?id=<?php echo $data["id"] ?>"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</a></li>

                                        </ul>
                                    </div></td>
                        </tr>
                        <?php endwhile; ?>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>