<?php
 include("../includes/link.php");
 $id = $_REQUEST['sid'];

 $qry = "DELETE FROM `maincat` WHERE `id` = '$id'";
 $run = mysqli_query(getCon(),$qry);
 if($run == true){
     ?>
     <script>
     alert('Data deleted Successfully.');
     window.open('supadvicategory.php','_self');
     </script>
<?php
 }
   ?>