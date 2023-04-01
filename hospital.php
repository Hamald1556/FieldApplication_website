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
    <title>faos_hospital_departments</title>
    <style>
  @media screen and (max-width: 900px){

    /* *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    } */
    .mama{
    border:1px solid aquamarine;
    text-align:auto;
    border-radius:30px;
    height: auto;
    width: auto;
    padding-left: 10vmin;
    padding-right: 10vmin;
    padding-top: 10vmin;
    padding-bottom: 10vmin;
    margin-left:0px;
    /* margin-top: 20vmin; */
    background-color:aquamarine;
}
    ol{
        list-style-type:none;
    }
    h1{
        color:blue;
        font-family:lucida console;
    }
    h3{
        color:blue;
        font-family:lucida console;
    }
    body{
             background-color: lightgrey;
         }
  }




  @media screen and (min-width: 900px){

/* *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
} */
.mama{
    border:1px solid aquamarine;
    text-align:auto;
    border-radius:30px;
    height: auto;
    width: auto;
    padding-left: 10vmin;
    padding-right: 10vmin;
    padding-top: 10vmin;
    padding-bottom: 10vmin;
    margin-left:0px;
    /* margin-top: 20vmin; */
    background-color:aquamarine;
}
ol{
    list-style-type:none;
}
h1{
    color:blue;
    font-family:lucida console;
}
h3{
    color:blue;
    font-family:lucida console;
}
body{
         background-color: lightgrey;
     }
}
    </style>
</head>
<body>
<div class="mama">
       <h1> HOSPITAL DEPARTMENTS CHECK LIST </h1>
            <div>
                  <h3> CLINICAL DEPARTMENTS</h3>
                  <ol>
                    <hr>
                      <li>Medical Technologist&nbsp&nbsp&nbsp&nbsp&nbsp<input type="checkbox" value="overdue.php?i=0" onclick="if(this.checked){window.location='submit.php';}"></li>
                      <hr>
                             <li>Radiologic Technician&nbsp&nbsp&nbsp&nbsp<input type="checkbox" value="overdue.php?i=0" onclick="if(this.checked){window.location='submit.php';}"></li>
                             <hr>
                                  <li>Dietician&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                       &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="checkbox" value="overdue.php?i=0" onclick="if(this.checked){window.location='submit.php';}"></li>
                                       <hr>
                                         <li>Respiratory Theoropist&nbsp&nbsp&nbsp<input type="checkbox" value="overdue.php?i=0" onclick="if(this.checked){window.location='submit.php';}"></li>
                                         <hr>
                                                   <li>Registered Nurse&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                                         <input type="checkbox" value="overdue.php?i=0" onclick="if(this.checked){window.location='submit.php';}"></li>
                                                         <hr>
                                                                     <li>Occupational Theoropist<input type="checkbox"value="overdue.php?i=0" onclick="if(this.checked){window.location='submit.php';}"></li>
                                                                     <hr>
                      <li>Pharmacist&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                            &nbsp&nbsp&nbsp&nbsp&nbsp<input type="checkbox" value="overdue.php?i=0" onclick="if(this.checked){window.location='submit.php';}"></li>
                            <hr>
                                <li>Physician Assistant&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="checkbox" value="overdue.php?i=0" onclick="if(this.checked){window.location='submit.php';}"></li>
                                <hr>
                                    <li>Surgeon&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="checkbox" value="overdue.php?i=0" onclick="if(this.checked){window.location='submit.php';}"></li>
                                            <hr>
                                               <li>Clinical Officer&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                                      <input type="checkbox" value="overdue.php?i=0" onclick="if(this.checked){window.location='submit.php';}"></li>
                                                      <hr>
                  </ol>
            </div>
            <br>
            <div>
                  <h3> NON-CLINICAL DEPARTMENTS</h3>
                  <ol>
                    <hr>
                      <li>Medical Admission Cleck&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                            &nbsp&nbsp&nbsp&nbsp<input type="checkbox"value="overdue.php?i=0" onclick="if(this.checked){window.location='submit.php';}"></li>
                            <hr>
                               <li>Medical Records Cleck&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="checkbox" value="overdue.php?i=0" onclick="if(this.checked){window.location='submit.php';}"></li>
                                    <hr>
                                       <li>Coding Specialist&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="checkbox" value="overdue.php?i=0" onclick="if(this.checked){window.location='submit.php';}"></li>
                                            <hr>
                                                 <li>Medical Social Worker&nbsp
                                                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                                           &nbsp&nbsp&nbsp&nbsp&nbsp<input type="checkbox" value="overdue.php?i=0" onclick="if(this.checked){window.location='submit.php';}"></li>
                                                           <hr>
                                                                <li>Information Technology Specialist<input type="checkbox" value="overdue.php?i=0" onclick="if(this.checked){window.location='submit.php';}"></li>
                                                                <hr>
                      <li>Human Resources Manager&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="checkbox" value="overdue.php?i=0" onclick="if(this.checked){window.location='submit.php';}"></li>
                      <hr>
                  </ol>
            </div>
            </div>
</body>
</html>