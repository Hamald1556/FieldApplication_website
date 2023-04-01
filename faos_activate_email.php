<?php
require_once('database.php');
$em=$_GET['email'];
if(isset($em)){
    $qr="SELECT * FROM registration WHERE code='$em'";
     $query=mysqli_query($db,$qr);
    if($query){
         $sql="UPDATE registration SET activation_status='Activated' WHERE code='$em '";
          $query=mysqli_query($db,$sql);
        header("location:index.php");
    }
}
?>