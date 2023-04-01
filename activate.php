<?php
error_reporting(0);
 if(isset($_POST['activate'])){
     session_start();
     $code=$_POST['code'];
     $code_generated=$_SESSION['code_number'];
     if($code==$code_generated){
         require_once('database.php');
         $id=$_SESSION['email_id'];
         $sql="UPDATE registration SET activation_status='Activated' WHERE email='$id'";
         $ql=mysqli_query($db,$sql);
         if($ql){
             session_unset();
             session_destroy();    
             header("location:index.php");
         }
         else{
             $error="code doesn't match";
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
    <title>faos_activation_account</title>
    <style>
    .main{
        text-align:center;
        border:1px solid aquamarine;
        height:50%;
        width:30%;
        padding-top:40px;
        padding-bottom:40px;
        margin-left:400px;
        border-radius:56px;
        background-color:aquamarine;
    }
    h2,h1{
        color:blue;
    }
    #email{
        border-radius:6px;
        padding-left:30px;
        padding-right:30px;
        padding-top:3px;
        padding-bottom:3px;
    }
    #verify{
        border-radius:6px;
        padding-left:60px;
        padding-right:60px;
        padding-top:5px;
        padding-bottom:5px;
        background-color:blue;
        color:white;
    }
    </style>
</head>
<body>
<div class="main">
    <!--<form action="index.php">-->
    <h1> CONGRATULATIONS !</h1>
       <div>
       You are successfull create account.<br>
       You will be required to activate account<br>
       Activation link would sent to you are email ?
       </div>
       <img src="user.png" height="90px" width="90px"><br>
       <!--<input type="submit" name="activate" value="LOGIN" id="verify">-->
    <!--</form>-->
    </div>
</body>
</html>