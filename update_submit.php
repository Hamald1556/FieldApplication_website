<?php
  session_start();
  require_once('faos_session_checker.php');
 require_once('database.php');
if(isset($_GET['m'])){
 $k=$_GET['m'];
 $select="select * from submit where id=$k";
 $sql=mysqli_query($db,$select);
 while($row=mysqli_fetch_array($sql)){
  $A= $row['id'];
  $B= $row['first_name'];
  $C= $row['last_name'];
  $D=$row['email'];
  $E= $row['course'];
  $F= $row['uni_college'];
 }
 if(isset($_POST['update'])){
     $fn=$_POST['sn'];
     $ln=$_POST['ln'];
     $emei=$_POST['email'];
     $coz=$_POST['cozi'];
     $chuo=$_POST['chuo'];
     $query="UPDATE submit SET first_name='$fn',last_name='$ln',email='$emei',course='$coz',uni_college='$chuo' WHERE id='$k'";
     if(mysqli_query($db,$query)){
         header("location:faos_submit_applicants.php");
     }
     else{
         echo "Unable to connect";
     }
 }
}
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>faos_update</title>
     <style>
     .mama{
         text-align:center;
         border:1px solid aquamarine;
         height:50%;
         width:30%;
         padding-top:30px;
         padding-bottom:30px;
         margin-left:400px;
         border-radius:56px;
         background-color:aquamarine;
     }
     #one{
         margin-left:115px;
         border-radius:6px;
     }
     #fn{
         margin-left:58px;
         border-radius:6px;
     }
     #sn{
         margin-left:58px;
         border-radius:6px;
     }
     #ln{
         margin-left:83px;
         border-radius:6px;
     }
     #phone{
         margin-left:80px;
         border-radius:6px;
     }
     #update{
         margin-left:100px;
         border-radius:6px;
         background-color:blue;
         color:white;
     }
     #email{
         /* margin-left:100px; */
         border-radius:6px;
     }
     /* body{
         background-color:darksalmon;
     } */
     </style>
 </head>
 <body>
 <div class="mama">
     <form method="POST">
     <input type="text" name="fn" value="<?php echo $k;?>" id="one"><br><br>
              First name<input type="text" name="sn" value="<?php echo $B;?>" id="fn"><br><br>
                    Last name<input type="text" name="ln" value="<?php echo $C;?>" id="sn"><br><br>
                          Email<input type="text" name="email" value="<?php echo $D;?>" id="ln"><br><br>
                                 Course<input type="text" name="cozi" value="<?php echo $E;?>" id="phone"><br><br>
                                        University_College<input type="text" name="chuo" value="<?php echo $F;?>" id="email"><br><br>
                                                 <input type="submit" name="update" value="UPDATE" id="update">
 </div>     
    </form>                                           
 </body>
 </html>