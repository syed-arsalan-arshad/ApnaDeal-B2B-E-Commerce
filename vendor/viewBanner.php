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
                    <h4>View Banner</h4>
                </div>
                <div class="col-12 pt-4 pb-4">
                    <input type="text" placeholder="Type To Search By Name"><input type="submit" value="search">
                </div>



                <div class="col-12 ">
                    <table class="table table-stripped">
                        <tr>
                            <td>ID</td>
                            <td>Banner Title</td>
                            <td>Banner Image</td>
                            <td>Status</td>
                            <td>Action</td>
                            <td>Action</td>
                        </tr>
                        <?php 
                            $rs = selectBanner();
                            while($data = mysqli_fetch_assoc($rs)):
                        ?>
                        <tr>
                            <td><?php echo $data["id"]; ?></td>
                           
                            <td><?php echo $data["title"]; ?></td>
                            <td><img class="img-fluid" style="height:80px" src="../bannerImage/<?php echo $data["img"]; ?>" alt=""></td>
                            <td><?php echo $data["status"]; ?></td>
                            <td><a href="" class="btn btn-danger">Edit</a></td>
                            <td><a href="" class="btn btn-danger">Delete</a></td>
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