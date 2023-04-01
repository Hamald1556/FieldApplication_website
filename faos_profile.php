<?php
session_start();
require_once('faos_session_checker.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>faos_applicants</title>
    <style>
       #one{
           padding-left:100px;
       }
       #two{
           padding-left:100px;
       }
       table,tr{
           border-collapse:collapse;
           background-color:aquamarine;
           text-align:center;
           margin-left:300px;
           padding-top:0px;
       }
       table{
           margin-top:10px;
           border-radius:20px;
       }
        #excel{
           margin-left:500px;
           margin-top:0px;
           margin:1px solid aquamarine;
           border:1px solid aquamarine;
           height:20px;
           width:130px;
           background-color:aquamarine;
           color:white;
           border-radius:6px;
       } 
       body{
           background-color:darksalmon;
       }
    </style>
</head>
<body>
    <table border="1">
    <tr>
    <td>sno</td>
    <td>first name</td>
    <td>second name</td>
    <td>last name</td>
    <td>phone no</td>
    <td>email</td>
    </tr>
    <?php
    require_once('database.php');
    // require_once('index.php');
    $ssesion=$_SESSION['login'];
    $sql="SELECT * FROM registration WHERE id=(SELECT * FROM registration WHERE email='$user' AND activation_status='Activated')";
    $geja=mysqli_query($db,$sql);
    // $session=$_SESSION['login'];
    while($store=mysqli_fetch_array($geja)){
        // $k=$store['id'];
        $l=$store['fname'];
        $m=$store['sname'];
        $n=$store['tname'];
        $o=$store['phone'];
        $p=$store['email'];
        echo "<tr>";
        // echo "<td>$id</td>";
        echo "<td>$l</td>";
        echo "<td>$m</td>";
        echo "<td>$n</td>";
        echo "<td>$o</td>";
        echo "<td>$p</td>";
        echo "</tr>";
    }
    ?>
    </table>
</body>
</html>