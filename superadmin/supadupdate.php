<?php
 include("../includes/link.php");

 if(isset($_POST["submit"])){
    $title = $_POST["btitle"];
    
    $status = $_POST["status"];
    $sid = $_POST['id'];
     $sql = "SELECT * FROM banner WHERE id = '$sid'";
     $data = mysqli_fetch_assoc(mysqli_query(getCon(),$sql));
     $img = $data["img"];
     if(isset($_FILES["pic"]["name"]) && $_FILES["pic"]["name"] != ""){
         $img = $_FILES["pic"]["name"];
         $fpath = $_FILES["pic"]["tmp_name"];
         move_uploaded_file($fpath,"../bannerImage/".$img);
     }
    $qry = "UPDATE `banner` SET `title` = '$title', `status` = '$status', `img` = '$img' WHERE `id` = '$sid'";
    $run = mysqli_query(getCon(),$qry);
    if($run >= 1){
        ?>
        <script>
          window.open('supvibanner.php?sid=<?php echo $sid; ?>','_self');
           </script>
        <?php
    }
 }
?>