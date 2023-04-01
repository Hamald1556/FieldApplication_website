<?php
error_reporting(0);
if(isset($_GET['email'])){
    $em=$_GET['email'];
    $em2=base64_decode($em);
    session_start();
    $_SESSION['name']=$em2;
}


if(isset($_POST['newpass'])){
    $pass=$_POST['pass'];
    $cpass=$_POST['cpass'];
    if($pass==$cpass){
    $hash=password_hash($pass,PASSWORD_DEFAULT);
    session_start();
    $code=$_POST['code'];
    $code_generated=$_SESSION['code_number'];
    if($code==$code_generated){
        require_once('database.php');
        $email=$_SESSION['name'];
        $sql="UPDATE registration SET password='$hash' WHERE email= '".$_SESSION['email']."'";
        $ql=mysqli_query($db,$sql);
        if($ql){
            require_once('mailer.php');
            header("location:index.php");
        }
        else{
            $error="code doesn't match";
        }
    }
    else{
        $era=" Sorry! Enter Correctly.";
    }
}
else{
    $no="Sorry! Password doesn't match.";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>faos_password_confirmation</title>
    <style>
    #email{
        padding-left:10px;
        padding-right:10px;
        border-radius:6px;
        padding-top:5px;
        padding-bottom:5px;
    }
    h2{
        color:blue;
    }
    #pass{
        padding-left:10px;
        padding-right:10px;
        border-radius:6px;
        padding-top:5px;
        padding-bottom:5px;
    }
    #button{
        padding-left:70px;
        padding-right:70px;
        border-radius:6px;
        padding-top:5px;
        padding-bottom:5px;
        color:red;
    }
    #era{
        color:red;
    }
    .mama{
        text-align:center;
        border:1px solid;
        height:90%;
        width:30%;
        padding-top:30px;
        padding-bottom:30px;
        margin-left:400px;
        border-radius:56px;
        background-color:aquamarine;
    }
    h4{
        color:blue;
    }
    </style>
</head>
<body>
<div class="mama">
<form method="POST">
    <h2>Reset Password</h2>
    <h4>Kindly!</h4>
    You are required to fill up <br>procedures to reset password.
    <br><br>
    <div>
               <b>Enter New Password</b><br>
                    <input type="password" name="pass" id="pass">
                        </div><br><br>
    <div>
         <b>Confirm New Password</b><br>
               <input type="password" name="cpass" id="pass">
               <div id="era">
        <?php echo $no;?>
    </div>
    </div><br><br>
    <input type="submit" name="newpass" value="Confirm" id="button">
    </form>
    </div>
</body>
</html>