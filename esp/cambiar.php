<? include ("seguridad.php"); ?>
<?php session_start(); 
?>

<!doctype html>
<html>
    <head>
        <title>Tours Panama-Chiriqui</title>
        <meta name="viewport" content ="width=device-width,initial-scale=1,user-scalable=yes" />
        <meta charset="utf-8">
        <link rel="shortcut icon" href="icon.jpg">
        <title>Sign up</title>
        
        <style type="text/css">
          
          body {
    background: #25ae9a;
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
    font-size: 18px;
    width: 75%;
    background: white;
    color: darkblue;
}

.signup h4,h3,h2
{
    color: white;
}

.signup h1
{
    color: #4d1019 ;
}

h3 {

    color: #4d1019;
}
.signup button
{
    border: none;
    text-align: center;
    background: #186f62;
    color: #fff;
    padding: 10px;
    border-radius: 20px;
    width: 300px;
    border: none;
    font-size: 20px; 
    height: 75px;  
}

.logout button
{
    border: none;
    text-align: center;
    background: #186f62;
    color: #fff;
    padding: 5px;
    border-radius: 10px;
    width: 150px;
    border: none;
    font-size: 20px; 
    height: 37.5px; 
    position: absolute; 
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
    opacity: 0.1;
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
        
        <?php

$server = "localhost:3306";
$admin = "root";
$access = "Jason2010";
$db = "tour";

$conn=mysqli_connect("$server","$admin","$access","$db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
    
    $usuario = $_SESSION["usuarioactual"] ;
    $sql1 = "SELECT * FROM clientes Where correo='$usuario'";
    $result = mysqli_query($conn,$sql1);
    $reg = mysqli_fetch_row($result);
    $nombre = $reg[1];
    $apellido = $reg[2];
    $institucion = $reg[3];
    $telefono = $reg[4];
    
?>


        <form action="logout.php" method="post">
            <div class="logout">
        <button type="submit" class="registrar" name="cambiarcontra">Salir</button>
            </div>
        </form>
       <form action="pass-update.php" method="post">
        <div class="signup">
    <br style="line-height:4; ">   
    <center><h1>Cambiar datos</h1></center>
    <br style="line-height:6; ">
    <center><label for="nombre"><h2>Nombre</h2></label></center>
    <center><input type="text" placeholder="<?php
          echo $nombre ; ?>" name="use" ></center>
     <br style="line-height:8; ">
    <center><label for="apellido"><h2>Apellido</h2></label></center>
    <center><input type="text" placeholder="<?php
          echo $apellido ; ?>" name="apellido" ></center>
     <br style="line-height:8; ">
    <center><label for="Institucion"><h2>Grupo</h2></label></center>
    <center><input type="text" placeholder="<?php
          echo $institucion ; ?>" name="institucion" ></center>
     <br style="line-height:8; ">
    <center><label for="telefono"><h2>Numero de telefono</h2></label></center>
    <center><input type="text" placeholder="<?php echo $telefono ?>" name="telefono" ></center>
     <br style="line-height:8; ">
     <center><label for="password"><h2>Contraseña</h2></label></center>
    <center><input type="password" placeholder="Nueva contraseña tiene que contener por lo menos: 1 letra mayuscula, un numero,y 8 caracteres" name="contra" ></center>
    <br style="line-height:3; ">
    <center><button type="submit" class="registrar">Cambiar</button></center>
     <br style="line-height:8; ">
    
    
  </div>
</form>
    </body>
</html>