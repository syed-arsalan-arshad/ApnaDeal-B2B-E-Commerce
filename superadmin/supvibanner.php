<!DOCTYPE html>
<html lang="en">
<head>
<?php include("../includes/link.php"); ?>
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
                <div class="col-12 ">
                    <table class="table table-stripped">
                        <tr>
                            <td>ID</td>
                            <td>Title</td>
                            <td>Image</td>
                            <td>Page</td>
                            <td>Status</td>
                            <td>Action</td>
                        </tr>
                        <?php 
                            $rs = selectBannerForAdmin();
                            while($data = mysqli_fetch_assoc($rs)):
                            if($data["page"] == -1)
                                $page = "<button class='btn btn-danger w-50'>All</button>";
                            else if($data["page"] == -2)
                                $page = "<button class='btn btn-danger w-50'>Mobile Bottom</button>";
                            else if($data["page"] == 0)
                                $page = "<button class='btn btn-danger w-50'>Home</button>";
                            else{
                                $d = maincat($data["page"]);
                                $page = "<button class='btn btn-danger w-50'>".$d["name"]."</button>";
                            }
                            if($data["status"] == 1)
                                $status = "<button class='btn btn-success w-50'>Publish</button>";
                            else
                                $status = "<button class='btn btn-secondary w-50'>UnPublish</button>";
                        ?>
                        <tr>
                            <td><?php echo $data["id"]; ?></td>
                           
                            <td><?php echo $data["title"]; ?></td>
                            <td><img class="img-fluid" style="height:80px" src="../bannerImage/<?php echo $data["img"]; ?>" alt="img"></td>
                            <td>
                                <?php echo $page; ?>
                            </td>
                            <td><?php echo $status; ?></td>

                            <td>
                            <div class="dropdown">
  <a href="#" class="dropdown-toggle" id="drop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black;">
  <i class="fa fa-bars" aria-hidden="true"></i>
  </a>
  <div class="dropdown-menu" aria-labelledby="drop">
    <a class="dropdown-item" href="supadeditbanner.php?sid=<?php echo $data['id']; ?>"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;Edit</a>
    <a class="dropdown-item" href="supaddeletebanner.php?sid=<?php echo $data['id']; ?>"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp;Delete</a>
    <?php if($data["status"] == 0){ ?>
    <a class="dropdown-item" href="publishBanner.php?id=<?php echo $data['id']; ?>">Publish</a>
    <?php } else { ?>
    <a class="dropdown-item" href="unpublishBanner.php?id=<?php echo $data['id']; ?>">UnPublish</a>
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