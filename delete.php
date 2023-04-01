<?php
if(isset($_GET['m'])){
   // require_once('faos_session_checker.php');
    require_once('database.php');
    $delt=$_GET['m'];
    $k="DELETE FROM registration WHERE id='$delt'";
    $store=mysqli_query($db,$k);
    if($store){
        header("location:faos_submit_applicants.php");
        die();
    }
    else{
        echo "unable to connect";
    }
}
?>