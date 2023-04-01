<?php
error_reporting(0);
if(isset($_POST['login'])){
    require_once('database.php');
    $user=mysqli_escape_string($db,$_POST['email']);
    $pwd=mysqli_escape_string($db,$_POST['pass']);
    $sql="SELECT * FROM registration WHERE email='$user' AND activation_status='Activated'";
    $geja=mysqli_query($db,$sql);
    if(mysqli_num_rows($geja)==1){
    if(mysqli_num_rows($geja)==1){
        $mama=mysqli_fetch_array($geja);
        $pass=$mama['password'];
        $role=$mama['role'];
        if(password_verify($pwd,$pass)){
            session_start();
            $_SESSION['login']=$user;
            $_SESSION['role']=$role;
            if($_SESSION['role']=='admin'){
            header("location:faos_submit_applicants.php");
            die();}
            else {
                header("location:field.php");
            die();
            }
        }
     $era="Wrong Username or Password";
    }
}
    else{
        $era="Account not activated !";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>faos login page</title>
    <style>
         @media screen and (max-width: 900px){

            *{
                padding: 0;
                margin: 0;
                box-sizing: border-box;
            }

            .mama{
               text-align:center;
               border:1px solid aquamarine;
               height: auto;
               width: auto;
               margin-left:0px;
               margin-top: 10vmin;
               border-radius:56px;
               padding-left: 3vmin;
               padding-right: 3vmin;
               padding-top:5vmin;
               padding-bottom:80px;
               background-color:aquamarine;
           }
           h1{
               letter-spacing:20px;
               font-size:40px;
               color:blue;
           }
           #user{
                 border-radius:6px;
                 padding-top: 5px;
                 padding-bottom: 5px;
           }
           #pass{
                border-radius:6px;

                padding-top: 5px;
                padding-bottom: 5px;
           }
           #heda{
               color:blue;
           }
           #batan{
                 color:red;
                 background-color:aqua;
                 border-radius:6px;
                 padding-left:70px;
                 padding-right:70px;
                 padding-top:8px;
                 text-align:center;
           }
           #para{
                  color:blue;
           }
           body{
             background-color: lightgrey;
         }
         #era{
             color:red;
             text-style:italic;
         }
         }

         @media screen and (min-width: 900px){

*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

.mama{
   text-align:center;
   border:1px solid aquamarine;
   height: auto;
   width: auto;
   margin-left: 0px;
   margin-top: 10vmin;
   border-radius:56px;
   padding-left: 3vmin;
   padding-right: 3vmin;
   padding-top: 5vmin;
   padding-bottom:80px;
   background-color:aquamarine;
}
h1{
   letter-spacing:20px;
   font-size:40px;
   color:blue;
}
#user{
     border-radius:6px;
     padding-top: 5px;
    padding-bottom: 5px;
}
#pass{
    border-radius:6px;
    padding-top: 5px;
    padding-bottom: 5px;

}
#heda{
   color:blue;
}
#batan{
     color:red;
     background-color:aqua;
     border-radius:6px;
     padding-left:70px;
     padding-right:70px;
     padding-top:8px;
     text-align:center;
}
#para{
      color:blue;
}
body{
 background-color: lightgrey;
}
#era{
 color:red;
 text-style:italic;
}
}
    </style>
</head>
<body>
<div class="mama">
<form method="POST">
    <h1> FAOS </h1>
    <p id="para"> Field Application Online System</p>
    <div id="heda">
         <h3>Login To Your Account</h3>
    </div>
    <br>
          <div>
            <b> Username </b>
            <br>
            <input type="email" name="email" id="user">
              </div><br>
              <div>
                   <b> Password </b>
                   <br>
                   <input type="password" name="pass" id="pass">
                   </div><br>
                   <div id="era">
                   <?php echo $era;?>
                   </div>
                   <p>Forgot password?<a href="reset_password.php">Reset password</a></p>
                       <p>
                           Do you have account?<br><a href="register.php">click here to create Account</a>
                           </p><br>
                       <input type="submit" name="login" id="batan" value="Login">
</form>  
</div>                      
</body>
</html>