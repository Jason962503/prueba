<!doctype html>
<html>
    <head>
        <title>Tours Panama-Chiriqui</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <link rel="shortcut icon" href="icon.jpg">
        <title>Sign up</title>
        <link rel="stylesheet" type="text/css" href="\prueba\css\tours.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="alertify.min.js"></script>
        <style type="text/css">
          
          -weight: 100;
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




input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=password], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
        </style>
    </head>
    <body>
        
        <ul class="topnav">
      <a><img src="visit.jpg" title="Tours Panama-Chiriqui" 
      align="left" width="50px" height="50px"></a>
      <li><a href="home.php">Tours Panama-Chiriqui</a></li>
      <center><li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Sobre nosotros</a>
    <div class="dropdown-content">
      <a href="about.php">Porque experimentar Panama con nosostros?</a>
      <a href="history.php">Historia</a>
      <a href="staff.php">Personal</a>
      <a href="location.php">Localizacion</a>
    </div>
  </li></center>
      <li><a href="pack.php">Paquetes</a></li>
      <li><a href="activities.php">Actividades</a></li>
      <li><a href="photos.php">Fotos</a></li>
      <li><a href="contact.php">Contactenos</a></li>
      <li><a href="\prueba\ing\home.php"><img src="ing.png" title="Ingles" 
      align="left" width="16px" height="16px">Ingles</a></li>
      <li><a class="active" href="home.php"><img src="esp.jpg" title="Español" 
      align="left" width="16px" height="16px">Español</a></li>
      <li ><a class="active" href="signup.php">Registro</a></li>
      <li ><a href="login.php">Login</a></li>
      <li style="float: right;"><a href="https://www.instagram.com/instagram/?hl=es-la" class="fa fa-instagram"></a></li>
      <li style="float: right;"><a href="https://www.youtube.com" class="fa fa-youtube"></a></li>
    </ul>
      
      <br style="line-height:7; ">
       <form action="ingresar.php" method="post">
  <div class="signup">
    <center><h1>Registracion</h1></center>
    <br style="line-height:3; ">
    <center><label for="nombre"><h3>Nombre</h3></label></center>
    <center><input type="text" placeholder="Ingrese su nombre" name="nombre" required></center>
     <br style="line-height:3; ">
    <center><label for="apellido"><h3>Apellido</h3></label></center>
    <center><input type="text" placeholder="Ingrese su apellido" name="apellido" required></center>
     <br style="line-height:3; ">
    <center><label for="Institucion"><h3>Nombre de Grupo</h3></label></center>
    <center><input type="text" placeholder="Ingrese su nombre de grupo" name="institucion" required></center>
     <br style="line-height:3; ">
    <center><label for="telefono"><h3>Telefono</h3></label></center>
    <center><input type="text" placeholder="Ingrese su numero de telefono (Sin espacios entre los numeros)" name="telefono" required></center>
     <br style="line-height:3; ">
     <center><label for="password"><h3>Contraseña</h3></label></center>
    <input type="password" placeholder="Tiene que contener por lo menos: 1 letra mayuscula, un numero,y 8 caracteres" name="password" required>
     <br style="line-height:3; ">
     <center><label for="amigo"><h3>Quien fue su mejor amigo de infancia?</h3></label></center>
    <center><input type="text" placeholder="Cual fue su mejor amigo de infancia" name="amigo" required></center>
    <br style="line-height:3; ">
    <center><label for="email"><h3>Correo-Electronico</h3></label></center>
    <center><input type="text" placeholder="Ingrese su correo Correo-Electronico (Email)" name="correo" required></center>
    <br><br>
    <center><button type="submit" class="registrar">Enviar</button></center>
    
  </div>
</form>
    </body>
</html>