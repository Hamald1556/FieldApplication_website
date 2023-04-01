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
           /* border-collapse:collapse; */
           background-color:aquamarine;
           /* text-align:center; */
           margin-left:100px;
           padding:6px;
           border:4px;
       }
       table{
           margin-top:0px;
           /* border-radius:20px; */
           margin-left:200px;
       }
        #excel{
           margin-left:200px;
           margin-top:10px;
           margin:1px solid blue;
           background-color:;
           height:20px;
           width:130px;
           border-radius:6px;
           padding-left:20px;
           padding-right:20px;
           padding-top:5px;
           padding-bottom:5px;
       } 
       body{
           background-color:;
       }
       #logout{
           margin-left:230px;
           margin-top:10px;
           margin:1px solid blue;
           background-color:;
           height:20px;
           width:130px;
           border-radius:6px;
           padding-left:20px;
           padding-right:20px;
           padding-top:5px;
           padding-bottom:5px;
           color:red;
           border:1px solid;
       } 
       #delt{
           /* margin-left:230px; */
           margin-top:10px;
           margin:1px solid blue;
           background-color:;
           height:20px;
           width:130px;
           border-radius:6px;
           padding-left:20px;
           padding-right:20px;
           padding-top:5px;
           padding-bottom:5px;
           /* color:red; */
           border:1px solid;
       } 
       h2{
           margin-left:30px;
           color:;
           text-align:center;
       }
       #ex{
           border:1px solid;
           padding-left:0px;
           padding-right:0px;
           padding-top:5px;
           padding-bottom:5px;
           background-color:aquamarine;
           border-radius:6px;
           color:blue;
       }
       #pdf{
           border:1px solid;
           padding-left:0px;
           padding-right:0px;
           padding-top:5px;
           padding-bottom:5px;
           background-color:aquamarine;
           border-radius:6px;
           color:blue;
       }
    </style>
</head>
<body>
<!-- <a href="faos_logout.php" id="logout">Logout</a> -->
<h2> LIST OF STUDENTS WHO SUCCESFULLY SUBMIT THEIR APPLICATION .</h2>
    <table border="3">
    <tr>
    <td>sno</td>
    <td>first name</td>
    <td>last name</td>
    <td>Email</td>
    <td>Course</td>
    <td>Field</td>
    <td>Department</td>
    <td>University_college</td>
    <td>Applicants_photos</td>
    <td colspan="2"><a href="register.php">Add User</a> </td>
    </tr>
    <?php
    require_once('database.php');
    // include('upload.php');
    $sql="SELECT * FROM submit";
    $geja=mysqli_query($db,$sql);
    $id=1;
    while($store=mysqli_fetch_array($geja)){
        $k=$store['id'];
        $l=$store['first_name'];
        $m=$store['last_name'];
        $n=$store['email'];
        $o=$store['course'];
        $d=$store['dept'];
        $f=$store['field'];
        $p=$store['uni_college'];
        $q=$store['picha'];
        echo "<tr>";
        echo "<td>$id</td>";
        echo "<td>$l</td>";
        echo "<td>$m</td>";
        echo "<td>$n</td>";
        echo "<td>$o</td>";
        echo "<td>$d</td>";
        echo "<td>$f</td>";
        echo "<td>$p</td>";
        echo "<td><img src='image/$q' width='100px' height='100px'></td>";   
        echo "<td><a href='delete_submit.php?m=$k' id='delt'>Delete</a></td>";
        echo "<td><a href='update_submit.php?m=$k' id='delt'>Update</a></td>";
        echo "</tr>";
        $id++;
    }
    ?>
    </table><br>
    <table>
        <tr>
            <td>
            <a href="excel_submit.php" id="ex">download excel file</a>
            </td><br>
            <td><a href="faos_pdf.php" id="pdf">download PDF file</a>
            </td>
        </tr>
    </table><br><br>
    <h2> LIST OF SUCCESFULLY REGISTERED APPLICANTS.</h2>
    <table border="3">
    <tr>
    <td>sno</td>
    <td>first name</td>
    <td>second name</td>
    <td>last name</td>
    <td>phone no</td>
    <td>email</td>
    <td colspan="2"><a href="register.php">Add User</a> </td>
    </tr>
    <?php
    require_once('database.php');
    $sql="SELECT * FROM registration";
    $geja=mysqli_query($db,$sql);
    $id=1;
    while($store=mysqli_fetch_array($geja)){
        $k=$store['id'];
        $l=$store['fname'];
        $m=$store['sname'];
        $n=$store['tname'];
        $o=$store['phone'];
        $p=$store['email'];
        echo "<tr>";
        echo "<td>$id</td>";
        echo "<td>$l</td>";
        echo "<td>$m</td>";
        echo "<td>$n</td>";
        echo "<td>$o</td>";
        echo "<td>$p</td>";
        echo "<td><a href='delete.php?m=$k' id='delt'>Delete</a></td>";
        echo "<td><a href='update.php?m=$k' id='delt'>Update</a></td>";
        echo "</tr>";
        $id++;
    }
    ?>
    </table><br><br>
    <table>
        <tr>
            <td>
            <a href="excel_sample.php" id="ex">download excel file</a>
            </td>
            <!-- <td><a href="faos_pdf.php" id="pdf">download PDF file</a>
            </td>
        </tr> -->
    </table><br><br>
    <a href="faos_logout.php" id="logout">Logout</a>
</body>
</html> 
