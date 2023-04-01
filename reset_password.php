<?php
error_reporting(0);
include("database.php");


if(isset($_POST['reset'])){

//recieve the values inserted in the reset page and remove special characters

    $email=strtolower(mysqli_real_escape_string($db,stripslashes(htmlentities(strip_tags(trim(($_POST['email'])))))));

    $code=rand(1000,9999);
    //check if last name exists in the database

$select="SELECT * FROM registration WHERE email='$email'";
if($sql=mysqli_query($db,$select)){
if(mysqli_num_rows($sql)==1){

    while($row=mysqli_fetch_array($sql)){
   $mail=$row['email'];

   require('mailer.php');
$query="UPDATE registration SET password='$code' WHERE email='$email'";
if(mysqli_query($db,$query)){
    //   $error="an email has been sent to your account";
    echo "Email has been sent";

}
 
else{
    // $error=" Failed to connect to the database";
    echo "failed";
}
    }

}

else{
    // $error=" email not found,kindly use the email you  were registered with";
    echo "not found";
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
    <title>faos_reset_password</title>
    <style>
    #email{
        border-radius:6px;
        /* background-color:blue; */
    }
    #pwd{
        border-radius:6px;
    }
    #reset{
        border-radius:6px;
        background-color:blue;
        color:white;
    }
    .mama{
        text-align:center;
        border:1px solid aquamarine;
        height:30%;
        width:30%;
        border-radius:26px;
        padding-top:30px;
        padding-bottom:30px;
        margin-left:400px;
        background-color:aquamarine;
    }
#era{
    color:red;
}
    h3,h4{
        color:blue;
    }
    /* body{
             background-color:darksalmon;
         } */
    </style>
</head>
<body>
<div class="mama">
    <form method="POST">
    <h3> You have forgotten you are password ? </h3>
    <h4> Fill up registered email and change password</h4>
    Enter email<br>
    <input type="email" name="email" id="email">
    <div id="era">
    <?php echo $era;?>
        </div>
    <br><br>
              <input type="submit" name="reset" value="reset password" id="reset">
              </div>
</body>
</html>