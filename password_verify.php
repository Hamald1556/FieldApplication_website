<?php 

require('database.php');
$mail = $_GET['email'];
$code = $_GET['code'];

if (isset($mail) && isset($code)) {
    $query="select * from registration where email ='$mail' ";
    if($result=mysqli_query($db,$query)){
                if(mysqli_num_rows($result)==1){
     
             while($rows=mysqli_fetch_array($result)){
              $codes=$rows['password'];
        

              if($code===$codes){
                session_start();
                $_SESSION['email']=$mail;
        
             

   
     header('location:password.php');

          
        }     
}
}
else{echo"email or code not found";}
}
else{echo"failed to connect";}
}

?>