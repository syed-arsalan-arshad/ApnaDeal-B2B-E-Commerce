<!DOCTYPE html>
<html lang="en">
<head>
<?php include("../includes/link.php"); 
   $query = "select * from vendor where status = 3";
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
                    <h2 class="text-center" style="margin-bottom: 50px;">Seller Detail</h2>
                </div>



                <div class="col-12 ">
                    <table class="table table-stripped">
                        <tr style="font-weight:bold;">
                            <td>ID</td>
                            <td>Name</td>
                            <td>Email</td>
                            <td>Mobile</td>
                            <td>Shop Name</td>
                            <td>Action</td>
                            <td>Action</td>
                            
                        </tr>
                        <?php 
                            
                            while($rs = mysqli_fetch_assoc($result)):
                        ?>
                        <tr>
                            <td><?php echo $rs["id"]; ?></td>
                           
                            <td><?php echo $rs["name"]; ?></td>
                            <td><?php echo $rs["email"]; ?></td>
                            <td><?php echo $rs["mobile"]; ?></td>
                            <td><?php echo $rs["shopname"]; ?></td>
                            <td>
                            <a href="supvisellerdetail.php?id=<?php echo $rs["id"]; ?>" class="btn btn-outline-success">View Detail</a></td>
                            <td>
                                <a href="acceptSellerAgain.php?id=<?php echo $rs["id"]; ?>" class="btn btn-outline-danger">Approve Again</a>
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