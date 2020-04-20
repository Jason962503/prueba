<?php session_start(); 
?>

<!doctype html>
<html>
    <head>
        <title>Tours Panama-Chiriqui</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <link rel="shortcut icon" href="icon.jpg">
        <title>Sign up</title>
        
        <style type="text/css">
          
          body {
    background: lightgreen;
    font-family: "helvetica neue", helvetica, arial, sans-serif;
    font-weight: 100;
}
.signup
{
     box-sizing: border-box;
}
.signup input
{
    border: none;
    border-radius: 15px;
    padding: 20px;
    font-size: 25px;
    width: 75%;
    background: white;
    color: darkgreen;
}

.signup h1,h4,h3,h2
{
    color: darkgreen;
}
.signup button
{
    border: none;
    text-align: center;
    background: darkgreen;
    color: #fff;
    padding: 10px;
    border-radius: 20px;
    width: 300px;
    border: none;
    font-size: 20px; 
    height: 75px;  
}

 .registrar:hover {
    opacity: 1;
}
    ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
    color: black;
    opacity: 1; /* Firefox */
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
    color: black;
}

::-ms-input-placeholder { /* Microsoft Edge */
    color: black;
}
.registrar {
    cursor: pointer;
    opacity: 0.9;
    border: 3px solid black;
}
.registrar:hover {
    opacity: 1;
    border: 4px solid black;
}

        </style>
    </head>
    <body>
        
       <form action="send-pass.php" method="post">
  <div class="signup">
    <center><h1>Change Password</h1></center>
    <br style="line-height:3; ">
    <center><label for="email"><h3>Email</h3></label></center>
    <br style="line-height:3; ">
    <center><input type="text" placeholder="Ingrese su correo Correo-Electronico (Email)" name="user" required></center>
    <br style="line-height:6; ">
    <br><br>
    <center><label for="email"><h3>New Password</h3></label></center>
    <br style="line-height:3; ">
    <center><input type="password" placeholder="Ingrese su nueva contraseña" name="new" required></center>
    <br style="line-height:3; ">
    <center><label for="email"><h3>Who was your childhood bestfriend?</h3></label></center>
    <br style="line-height:3; ">
    <center><input type="text" placeholder="Cual fue su mejor amigo de infancia" name="contrasena" required></center>
    <br style="line-height:6; ">
    <center><button type="submit" class="registrar">Change</button></center>
     <br style="line-height:3; ">
    
    
  </div>
</form>
    </body>
</html>