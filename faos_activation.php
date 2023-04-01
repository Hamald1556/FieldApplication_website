<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>faos_activation_account</title>
    <style>
    .main{
        text-align:center;
        border:1px solid aquamarine;
        height:40%;
        width:30%;
        padding-top:40px;
        padding-bottom:40px;
        margin-left:400px;
        border-radius:56px;
        background-color:aquamarine;
    }
    h2,h4{
        color:blue;
    }
    #email{
        border-radius:6px;
        padding-left:30px;
        padding-right:30px;
        padding-top:3px;
        padding-bottom:3px;
    }
    #verify{
        border-radius:6px;
        padding-left:60px;
        padding-right:60px;
        padding-top:5px;
        padding-bottom:5px;
        background-color:blue;
        color:white;
    }
    </style>
</head>
<body>
<div class="main">
    <form method="POST">
    <h4> Procedure to Create Login account</h4>
    <div>
    <b>Firstly,</b><br>
       You are required to fill up active email,<br>
       Email used during application process ?
       </div><br>
       <div>
       <b>Secondly,</b><br>
       Account Activation.<br>
       You will be required to activate account<br>
       Activation link would sent to you are email ?
       </div>
       <h2>Account Activation</h2>
       <img src="user.png" height="50px" width="50px"><br>
       Enter Email Account<br>
       <input type="email" name="email" placeholder="Fill up active email" id="email">
       <br><br>
       <input type="submit" name="activate" value="Verify Email" id="verify">
    </form>
    </div>
</body>
</html>