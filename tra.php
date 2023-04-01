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
    <title>faos_tra_departments</title>
    <style>
    .mama{
        border:1px solid aquamarine;
        height:40%;
        width:35%;
        padding-top:60px;
        padding-bottom:60px;
        border-radius:56px;
        padding-left:30px;
        padding-right:30px;
        margin-left:300px;
        margin-top:30px;
        background-color:aquamarine;
    }
    ol{
        list-style:none;
    }
    h1{
        font-family:lucida console;
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
<h1>TANZANIA AUTHORITY DERPATMENTS</h1>
    <ol>
     <li>Tax Assistant&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
         &nbsp&nbsp&nbsp&nbsp<input type="checkbox"value="overdue.php?i=0" onclick="if(this.checked){window.location='submit.php';}"></li>
            <li>Tax Debt Management&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="checkbox" value="overdue.php?i=0" onclick="if(this.checked){window.location='submit.php';}"></li>
                     <li>Tax Inceptive And Exemptions&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="checkbox" value="overdue.php?i=0" onclick="if(this.checked){window.location='submit.php';}"></li>
                            <li>Tax Investigations Services&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                         &nbsp<input type="checkbox" value="overdue.php?i=0" onclick="if(this.checked){window.location='submit.php';}"></li>
                                            <li>Information Technology Specialist&nbsp<input type="checkbox" value="overdue.php?i=0" onclick="if(this.checked){window.location='submit.php';}"></li>
                      <li>Provision Of Statistical Data&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="checkbox" value="overdue.php?i=0" onclick="if(this.checked){window.location='submit.php';}"></li>
                  </ol>
</div>
</body>
</html>