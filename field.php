<?php
// session_start();
// require_once('faos_session_checker.php');
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>field area</title>
    <style>
   @media screen and (max-width: 600px){

     /* *{
          padding: 0;
          margin: 0;
          box-sizing: border-box;
          font-size: 'Roboto', sans serif;
          /* content-display: center; */

     /* }  */

      table{
        text-align:center;
        margin-left: 20vmin;
         padding-left:30px;
         padding-right:30px;
         padding-top:20px;
         padding-bottom:20px;
         border-radius:48px;
         background-color:aquamarine;
    }
    td{
        border-radius:26px;
        padding-left:5px;
        padding-right:5px;
        padding-bottom:15px;
        padding-top:25px;
    }
    #capt{
         font-size:30px;
         color:blue;
         font-family:lucida console;
    }
    body{
             background-color: lightgrey;
         }
   }
   @media screen and (min-width: 600px){

      /* *{
          padding: 0;
          margin: 0;
          box-sizing: border-box;
          font-size: 'Roboto', sans serif;
     } */


      table{
        text-align:center;
        margin-left: 69vmin;
         padding-left:30px;
         padding-right:30px;
         padding-top:50px;
         padding-bottom:50px;
         border-radius:48px;
         background-color:aquamarine;
    }
    td{
        border-radius:26px;
        padding-left:5px;
        padding-right:5px;
        padding-bottom:15px;
        padding-top:25px;
    }
    #capt{
         font-size:30px;
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
     <table border="0" width="30%" height="50%">
           <caption id="capt"><b> FIELD AREA</b> </caption>
<tr>
              <td id="hosp">HOSPITAL<br>
                  <img src="hospital.jpg" width="35px" height="35px"><br>
                       <a href="hospital.php">Apply</a>
</td>
<td id="shule">SCHOOL
<br>
<img src="shule.jpg" width="35px" height="35px"><br>
<a href="shule.php">Apply</a>
</td>
</tr>
<tr>
    <td id="wilaya">
              DISTRICT COUNCIL<br>
              <img src="council.jpg" height="35px" width="35px"><br>
              <a href="district.php">Apply</a>
         </td>
         <td id="tra">
              TRA<br>
              <img src="tra.jpg" height="35px" width="35px"><br>
              <a href="tra.php">Apply</a>
         </td>              
</tr>
<tr>
         <td id="wad">
              WARD GOVERNMENT<br>
              <img src="council.jpg" height="35px" width="35px"><br>
              <a href="ward.php">Apply</a>
         </td>
         <td id="town">
              TOWN COUNCIL<br>
              <img src="bunge.jpg" height="35px" width="35px"><br>
              <a href="town.php">Apply</a><br>
              </td>
              </tr>
              <!-- <tr>
              <td id="wad">
              VIEW PROFILE<br>
              <img src="council.jpg" height="35px" width="35px"><br>
              <a href="faos_profile.php">Apply</a>
         </td>
         <td id="town">
              CHANGE PASSWORD<br>
              <img src="bunge.jpg" height="35px" width="35px"><br>
              <a href="faos_change_password.php">Apply</a><br>
              </td>
              </tr> -->
              <tr>
              <td id="town">
              RESULTS<br>
              <img src="result.jpg" height="35px" width="35px"><br>
              <a href="result.php">Results</a><br>
              </td>
              <td>
              <img src="log_out.png" height="40px" width="40px"><br>
              <a href="faos_logout.php">Logout</a><br>
              <!-- </script>
                    <input type="button" name="create" value="Log out" id="create">
                    <script>
    document.getElementById("create").addEventListener("click",myFunction);
    function myFunction(){
        window.location.href="faos_logout.php";
    }
    </script> -->
         </td>         
</tr>
</table>
</div>
</body>
</html>