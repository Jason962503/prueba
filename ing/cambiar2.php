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
        <script>
       window.location.hash="no-back-button";
       window.location.hash="Again-No-back-button";//again because google chrome don't insert first hash into history
       window.onhashchange=function(){window.location.hash="no-back-button";}
       </script> 
        
       <form action="pass-update.php" method="post">
  <div class="signup">
    <center><h1>Cambiar contraeña</h1></center>
    <br style="line-height:3; ">
    <center><label for="email"><h3>Correo-Electronico</h3></label></center>
    <br style="line-height:3; ">
    <center><input type="text" placeholder="Ingrese su correo Correo-Electronico (Email)" name="correo" required></center>
    <br style="line-height:6; ">
     <center><label for="password"><h3>Nueva contraseña</h3></label></center>
    <center><input type="password" placeholder="Nueva contraseña tiene que contener por lo menos: 1 letra mayuscula, un numero,y 8 caracteres" name="password" ></center>
    <br><br>
    <center><button type="submit" class="registrar">Cambiar</button></center>
     <br style="line-height:3; ">
    
    
  </div>
</form>
    </body>
</html>