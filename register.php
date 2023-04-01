<?php
 error_reporting(0);
 require_once('database.php');
if(isset($_POST['batani'])){
    $fn=mysqli_escape_string($db,stripcslashes(htmlentities(trim(strip_tags($_POST['fname'])))));
    if(empty($_POST['fname'])){
        echo "<script>
        alert('Sorry! fill up you are first name')
        </script>";
    }
    else{
    $sn=mysqli_escape_string($db,stripcslashes(htmlentities(trim(strip_tags($_POST['sname'])))));
    if(empty($_POST['sname'])){
        echo "<script>
        alert('Sorry! fill up you are second name')
        </script>";
    }
    else{  
        $mn=mysqli_escape_string($db,stripcslashes(htmlentities(trim(strip_tags($_POST['mname'])))));
    if(empty($_POST['mname'])){
        echo "<script>
        alert('Sorry! fill up you are third name')
        </script>";
    }
    else{
         $email=mysqli_escape_string($db,stripcslashes(htmlentities(trim(strip_tags($_POST['email'])))));
    if(empty($_POST['email'])){
        echo "<script>
        alert('Sorry! fill up you are active email')
        </script>";
    }
    else{
        $phone=mysqli_escape_string($db,stripcslashes(htmlentities(trim(strip_tags($_POST['phone'])))));
    if(empty($_POST['phone'])){
        echo "<script>
        alert('Sorry! fill up you are available phone number.')
        </script>";
    }
    else{
        $pass=mysqli_escape_string($db,stripcslashes(htmlentities(trim(strip_tags($_POST['pass'])))));
    if(empty($_POST['pass'])){
        echo "<script>
        alert('Sorry! fill up you are password.')
        </script>";
    }
    else{
    $cpass=mysqli_escape_string($db,$_POST['cpass']);
    if($pass==$cpass){
    $hash=password_hash($pass,PASSWORD_DEFAULT);
    $select="SELECT email FROM registration WHERE email='$email'";
    $res=mysqli_query($db,$select);
    if(mysqli_num_rows($res)>0){
        $row=mysqli_fetch_assoc($res);
        if($email==isset($row['email'])){
            echo "<script>
            alert('Sorry! email exist')
            </script>";
        }
    }
    else{
        $number=rand(1000,9999);
    $set="INSERT INTO registration(fname,sname,tname,phone,email,password,code)VALUES('$fn','$sn','$mn','$phone','$email','$hash','$number')";
    $take=mysqli_query($db,$set);
    
    if($take){
        session_start();
        // $number=rand(1000,9999);
        // $_SESSION['code_number']=$number;
        $_SESSION['email_id']=$email;
        $email2=base64_encode($email);
        require_once("send_activate_email.php");
       echo "email sent";
    }
    else{
        echo "Am sorry!data not sent.";
    }
}
}
else{
    $er="Sorry! dear applicants password doesn't match";
}
    }
}
    }
}
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
    <title>registration form</title>
    <style>
    .mama{
        text-align:center;
        border:1px solid aquamarine;
        width:30%;
        height:90%;
        border-radius:56px;
        padding-top:30px;
        padding-bottom:30px;
        margin-left:500px;
        background-color:aquamarine;
    }
    #fn{
        border-radius:6px;
        padding-left:40px;
    }
    #sname{
        border-radius:6px;
        padding-left:40px;
    }
    #mname{
        border-radius:6px;
        padding-left:40px;
    }
    #email{
        border-radius:6px;
        padding-left:40px;
    }
    #phone{
        border-radius:6px;
        padding-left:40px;
    }
    #pass{
        border-radius:6px;
        padding-left:40px;
    }
    #confo{
        border-radius:6px;
        padding-left:40px;
    }
    #batani{
        border-radius:6px;
        width:200px;
        text-align:center;
        padding-top:6px;
        padding-bottom:6px;
        background-color:aqua;
        color:red;
    }
    h2{
        color:blue;
        font-family:lucida console;
    }
    body{
             background-color:;
         }
         #erra{
             color:red;
         }
    </style>
</head>
<body>
<div class="mama">
<form action="" method="POST">
<h2> FIELD APPLICATION ONLINE REGISTRATION FORM</h2>
First Name<br>
      <input type="text" name="fname" id="fn">
      <br><br>
      Second Name<br>
                <input type="text" name="sname" id="sname">
                <br><br>
                Third Name<br>
                     <input type="text" name="mname" id="mname">
                     <br><br>
                     Email<br>
 <input type="email" name="email" id="email">
<br><br>
Phone No<br>
    <input type="number" name="phone" id="phone">
    <br><br>
    Password<br>
            <input type="password" name="pass" id="pass">
            <br><br>
            Confirm Password<br>
            <input type="password" name="cpass" id="confo">
            <br><br>
            <div id="erra">
            <?php echo $er; ?>
            </div>
             <input type="submit" name="batani" value="register" id="batani" onclick="form_validate()">
    </form>
    </div>
</body>
</html>