<?php
session_start();
  require_once('faos_session_checker.php');
 require_once('database.php');
if(isset($_GET['m'])){
 $k=$_GET['m'];
 $select="select * from registration where id=$k";
 $sql=mysqli_query($db,$select);
 while($row=mysqli_fetch_array($sql)){
  $A= $row['id'];
  $B= $row['fname'];
  $C= $row['sname'];
  $D=$row['tname'];
  $E= $row['phone'];
  $F= $row['email'];
 }
 if(isset($_POST['update'])){
    $fn=$_POST['fn'];
    $ln=$_POST['sn'];
    $emei=$_POST['ln'];
    $coz=$_POST['phone'];
    $chuo=$_POST['email'];
    $query="UPDATE registration SET fname='$fn',sname='$ln',tname='$emei',phone='$coz',email='$chuo' WHERE id='$k'";
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
     #update{
         margin-left:90px;
         border-radius:6px;
         padding-left:60px;
         padding-right:60px;
     }
     body{
         background-color:;
     }
     #one{
         margin-left:90px;
         border-radius:6px;
     }
     .mama{
         text-align:center;
         border:1px solid aquamarine;
         height:50%;
         width:30%;
         padding-top:30px;
         padding-bottom:30px;
         margin-left:500px;
         margin-top:30px;
         border-radius:56px;
         background-color:aquamarine;
     }
     #fn{
         border-radius:6px;
     }
     #sn{
         border-radius:6px;
     }
     #ln{
         border-radius:6px;
     }
     #phone{
         border-radius:6px;
     }
     #email{
         border-radius:6px;
     }
     </style>
 </head>
 <body>
     <form method="POST">
 <div class="mama">
     <input type="text" name="fn" value="<?php echo $k;?>" id="one"><br><br>
              first name&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="fn" value="<?php echo $B;?>" id="fn"><br><br>
                    second name<input type="text" name="sn" value="<?php echo $C;?>" id="sn"><br><br>
                          last name&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="ln" value="<?php echo $D;?>" id="ln"><br><br>
                                 Phone No.&nbsp&nbsp&nbsp&nbsp<input type="text" name="phone" value="<?php echo $E;?>" id="phone"><br><br>
                                        Email&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                        <input type="text" name="email" value="<?php echo $F;?>" id="email"><br><br>
                                                 <input type="submit" name="update" value="UPDATE" id="update">
 </div>  
    </form>                                              
 </body>
 </html>