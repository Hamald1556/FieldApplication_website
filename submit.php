<?php
error_reporting(1);
session_start();
 require_once('faos_session_checker.php');
//  include('upload.php');
if(isset($_POST['sajili'])){
    require_once('database.php');
    // include('upload.php');
    $filename=$_FILES["picha"]["name"];
    $tempname=$_FILES["picha"]["tmp_name"];
    $folder="image/".$filename;
    $picha=$filename=$_FILES["picha"]["name"];
    move_uploaded_file($tempname,$folder);
    $fn=mysqli_escape_string($db,$_POST['fname']);
    if(empty($_POST['fname'])){
        $era="Sorry! Fill up first name.";
    }
    else{
    $ln=mysqli_escape_string($db,$_POST['lname']);
    if(empty($_POST['lname'])){
        $last="Sorry! Fill up last name.";
    }
    else{
    $email=mysqli_escape_string($db,$_POST['email']);
    if(empty($_POST['email'])){
        $nyau="Sorry! Fill up email.";
    }
    else{
    $kozi=mysqli_escape_string($db,$_POST['course']);
    if(empty($_POST['course'])){
        $cozi="Sorry! Fill up course name";
    }
    else{
    $field=mysqli_escape_string($db,$_POST['field']);
    if(empty($_POST['field'])){
        $fid="Sorry! Fill up field area.";
    }
    else{
        $dipa=mysqli_escape_string($db,$_POST['dip']);
        if(empty($_POST['dip'])){
            $mama="Sorry! Fill up department name";
        }
        else{
    $chacha=mysqli_escape_string($db,$_POST['chuo']);
    if(empty($_POST['chuo'])){
        $kaka="Sorry! Fill up University or College name.";
    }
    else{
        $select="SELECT email FROM submit WHERE email='$email'";
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
    $ql="INSERT INTO submit(first_name,last_name,email,course,field,dept,uni_college,picha)VALUES('$fn','$ln','$email','$kozi','$field','$dipa','$chacha','$picha')";
    $geja=mysqli_query($db,$ql);
    if($geja){
        header("location:faos_end.php");
        die();
    }
    else{
        echo "failed to connect";
    }
}
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
    <title>faos_sumission_form</title>
    <style>
   @media screen and (max-width: 900px){

    /* *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    } */
    #fn{
        padding-left:40px;
        padding-top: 1vmin;
        padding-bottom: 1vmin;
        border-radius:6px;
    }
    body{
             background-color: lightgrey;
         }
    #ln{
        padding-left:40px;
        padding-top: 1vmin;
        padding-bottom: 1vmin;
        border-radius:6px;
    }
    #picha{

padding-left:40px;
padding-top: 1vmin;
padding-bottom: 1vmin;
border-radius:6px;
}
    #email{
        padding-left:40px;
        padding-top: 1vmin;
        padding-bottom: 1vmin;
        border-radius:6px;
    }
    #cozi{
        padding-left:40px;
        padding-top: 1vmin;
        padding-bottom: 1vmin;
        border-radius:6px;
    }
    #field{
        padding-left:40px;
        padding-top: 1vmin;
        padding-bottom: 1vmin;
        border-radius:6px;
    }
    #dipa{
        padding-left:40px;
        padding-top: 1vmin;
        padding-bottom: 1vmin;
        border-radius:6px;
    }
    #chuo{
        padding-left:40px;
        padding-top: 1vmin;
        padding-bottom: 1vmin;
        border-radius:6px;
    }
    #sajili{
        padding-left: 13vmin;
        padding-right: 13vmin;
        padding-top: 1vmin;
        padding-bottom: 1vmin;
        border-radius:6px;
        background-color:blue;
        color:white;
    }
    .mama{
        text-align:center;
        border:1px solid aquamarine;
        height: auto;
        width: auto;
        /* padding-top: 5vmin; */
        padding-bottom:auto;
        border-radius:56px;
        background-color:aquamarine;
        /* margin-left: 10vmin; */
        /* margin-top: 4vmin; */
    }
    h1{
        color:blue;
        font-family:lucida console;
    }
    h3{
        color:blue;
        font-family:lucida console;
    }
    #era{
        color:red;
    }
    #eeror{
        color:red;
    }
    #dippa{
        color:red;
    }
    #last{
        color:red;
    }
    #kozi{
        color:red;
    }
    #lolo{
        color:red;
    }
    #kaka{
        color:red;
    }
   }





   @media screen and (min-width: 900px){

    /* *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    } */

    #fn{
        padding-left:40px;
        padding-top: 1vmin;
        padding-bottom: 1vmin;
        border-radius:6px;
    }
    body{
             background-color: lightgrey;
         }
    #ln{
        padding-left:40px;
        padding-top: 1vmin;
        padding-bottom: 1vmin;
        border-radius:6px;
    }
    #picha{

        padding-left:40px;
        padding-top: 1vmin;
        padding-bottom: 1vmin;
        border-radius:6px;
    }
    #email{
        padding-left:40px;
        padding-top: 1vmin;
        padding-bottom: 1vmin;
        border-radius:6px;
    }
    #cozi{
        padding-left:40px;
        padding-top: 1vmin;
        padding-bottom: 1vmin;
        border-radius:6px;
    }
    #field{
        padding-left:40px;
        padding-top: 1vmin;
        padding-bottom: 1vmin;
        border-radius:6px;
    }
    #dipa{
        padding-left:40px;
        padding-top: 1vmin;
        padding-bottom: 1vmin;
        border-radius:6px;
    }
    #chuo{
        padding-left:40px;
        padding-top: 1vmin;
        padding-bottom: 1vmin;
        border-radius:6px;
    }
    #sajili{
        padding-left: 13vmin;
        padding-right: 13vmin;
        padding-top: 1vmin;
        padding-bottom: 1vmin;
        border-radius:6px;
        background-color:blue;
        color:white;
    }
    .mama{
        text-align:center;
        border:1px solid aquamarine;
        height: auto;
        width: auto;
        /* padding-top: 5vmin; */
        padding-bottom:auto;
        border-radius:56px;
        background-color:aquamarine;
        /* margin-left: 10vmin; */
        /* margin-top: 4vmin; */
    }
    h1{
        color:blue;
        font-family:lucida console;
    }
    h3{
        color:blue;
        font-family:lucida console;
    }
    #era{
        color:red;
    }
    #eeror{
        color:red;
    }
    #dippa{
        color:red;
    }
    #last{
        color:red;
    }
    #kozi{
        color:red;
    }
    #lolo{
        color:red;
    }
    #kaka{
        color:red;
    }
   }
    </style>
</head>
<body>
<div class="mama">
    <form method="POST" enctype="multipart/form-data">
    <h1>Submission</h1>
    <div>
    <h3>Details</h3>
    <b> First Name </b>
    <br>
         <input type="text" name="fname" id="fn">
         </div>
         <div id="era">
            <?php echo $era;?>
            </div>
              <br>
              <b> Last name </b>
              <br>
                    <input type="text" name="lname" id="ln">
                    <div id="last">
            <?php echo $last;?>
            </div><br>
                            <b> E-mail </b>
                            <br>
                            <input type="email" name="email" id="email">
                            <div id="lolo">
            <?php echo $nyau;?>
            </div><br>
                                    <b> Course </b>
                                    <br>
<input type="text" name="course" id="cozi">
<div id="kozi">
            <?php echo $cozi;?>
            </div><br>
            <b> Field Area </b>
            <br>
<input type="text" name="field" id="field">
<div id="eeror">
            <?php echo $fid;?>
            </div><br>
           <b> Department </b>
            <br>
<input type="text" name="dip" id="dipa">
<div id="dippa">
            <?php echo $mama;?>
            </div><br>
<b> University/College</b>
<br>
            <input type="text" name="chuo" id="chuo">
            <div id="kaka">
            <?php echo $kaka;?>
            </div><br>
            <b> Upload picture </b>
            <br>
            <input type="file" name="picha" id="picha" placeholder="upload picture">
            <div id="pic">
            <?php echo $pic;?>
            </div><br>
                    <input type="submit" name="sajili" id="sajili" value="Submit">
    </div>
    </form>
    </div>
</body>
</html>