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
    <title>faos_school_departments</title>
    <style>
          .mama{
              text-align:center;
              border:1px solid aquamarine;
              border-radius:56px;
              height:40%;
              width:35%;
              margin-left:400px;
              padding-top:30px;
              padding-bottom:30px;
              background-color:aquamarine;
          }
          h1{
              color:blue;
              font-family:lucida console;
          }
          body{
             background-color:;
         }
    </style>
</head>
<body>
<div class="mama">
    <h1>
        LIST OF WARD AVAILABLE
    </h1>
    <table>
         <tr>
             MKUTI&nbsp&nbsp&nbsp&nbsp&nbsp<input type="checkbox" value="overdue.php?i=0" onclick="if(this.checked){window.location='submit.php';}">
         </tr><br><br>
         <tr>
             GEJA&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="checkbox" value="overdue.php?i=0" onclick="if(this.checked){window.location='submit.php';}">
         </tr><br><br>
         <tr>
             MBINGA&nbsp&nbsp<input type="checkbox" value="overdue.php?i=0" onclick="if(this.checked){window.location='submit.php';}">
         </tr><br><br>
         <tr>
             MASASI&nbsp&nbsp&nbsp<input type="checkbox" value="overdue.php?i=0" onclick="if(this.checked){window.location='submit.php';}">
         </tr><br><br>
         <tr>
             PANDA&nbsp&nbsp&nbsp&nbsp&nbsp<input type="checkbox" value="overdue.php?i=0" onclick="if(this.checked){window.location='submit.php';}">
         </tr><br><br>
         <tr>
             MTWARA<input type="checkbox" value="overdue.php?i=0" onclick="if(this.checked){window.location='submit.php';}">
         </tr><br><br>
         <tr>
             KISIWANI<input type="checkbox" value="overdue.php?i=0" onclick="if(this.checked){window.location='submit.php';}">
         </tr><br><br>
    </table>
    </div>
</body>
</html>