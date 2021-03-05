<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("../includes/link.php"); 
   $query = "select * from maincat";
   $result = mysqli_query( getCon(),$query);
?>
</head>

<body>
    <?php include("header.php"); ?>
    <div class="container mt-5 mb-5">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 ">
                        <h4>View Category</h4>
                    </div>
                    <div class="col-12 ">
                        <table class="table table-stripped">
                            <tr>
                                <td>ID</td>
                                <td>Category Name</td>
                                <td>Image</td>
                                <td>Tag Line</td>
                                <td>Status</td>
                                <td>Action</td>
                            </tr>
                            <?php 
                            
                            while($rs = mysqli_fetch_assoc($result)):
                        if($rs["status"] == 1)
                                $status = "<button class='btn btn-success'>Publish</button>";
                            else
                                $status = "<button class='btn btn-secondary'>UnPublish</button>";
                        ?>
                            <tr>
                                <td><?php echo $rs["id"]; ?></td>

                                <td><?php echo $rs["name"]; ?></td>
                                <td><img class="img-fluid" style="height:80px" src="categoryImage/<?php echo $rs["cimage"]; ?>" alt="img"></td>
                                <td><?php echo $rs["cat_desc"]; ?></td>
                                <td><?php echo $status; ?></td>

                                <td>
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle" id="drop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black;">
                                            <i class="fa fa-bars" aria-hidden="true"></i>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="drop">
                                            <a class="dropdown-item" href="supadeditcategory.php?sid=<?php echo $rs['id']; ?>"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;Edit</a>
                                            <a class="dropdown-item" href="supaddeletecategory.php?sid=<?php echo $rs['id']; ?>"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp;Delete</a>
                                            <?php if($rs["status"] == 1){ ?>
                                            <a class="dropdown-item" href="unpublishCat.php?id=<?php echo $rs['id']; ?>">UnPublish</a>
                                            <?php } else { ?>
                                            <a class="dropdown-item" href="publishCat.php?id=<?php echo $rs['id']; ?>">Publish</a>
                                            <?php } ?>

                                        </div>
                                    </div>
                                </td>
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