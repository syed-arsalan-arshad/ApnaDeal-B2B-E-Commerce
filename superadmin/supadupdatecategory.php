<?php
 include("../includes/link.php");

 if(isset($_POST["submit"])){
    $name = $_POST["name"];
    
    $cat_desc = $_POST['cat_desc'];
    $status = $_POST["status"];
    $sid = $_POST['id'];
     
     $sql = "SELECT * FROM maincat WHERE id = '$sid'";
     $data = mysqli_fetch_assoc(mysqli_query(getCon(),$sql));
     $cimage = $data["cimage"];
     if(isset($_FILES['cimage']['name']) && $_FILES['cimage']['name'] != ""){
         $cimage = $_FILES['cimage']['name'];
         $fpath = $_FILES['cimage']['tmp_name'];
         move_uploaded_file($fpath,"categoryImage/".$cimage);
     }
    $qry = "UPDATE `maincat` SET `name` = '$name', `cimage` = '$cimage', `cat_desc` = '$cat_desc', `status` = '$status' WHERE `id` = '$sid'";
    $run = mysqli_query(getCon(),$qry);
    if($run >= 1){
        ?>
        <script>
          alert('Category Updated Successfully.');
          window.open('supadvicategory.php?sid=<?php echo $sid; ?>','_self');
           </script>
        <?php
    }
 }
?>