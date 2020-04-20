<!doctype html>
<html>
    <head>
        <title>Tours Panama-Chiriqui</title>
        <meta name="viewport" content ="width=device-width,initial-scale=1,user-scalable=yes" />
        <meta charset="utf-8">
        <link rel="shortcut icon" href="icon.jpg">
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="\prueba\css\tours.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="alertify.min.js"></script>
        <style type="text/css">


body {
    background: lightgreen;
    font-family: "helvetica neue", helvetica, arial, sans-serif;
    font-weight: 100;
}
.login
{
     box-sizing: border-box;
}
.login input
{
    border: none;
    border-radius: 15px;
    padding: 20px;
    font-size: 25px;
    width: 400px;
    background: white;
    color: black;
}

.login h1,h4,h3,h2
{
    color: darkgreen;
}
.login button
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

.entrar:hover {
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
.entrar {
    cursor: pointer;
    opacity: 0.9;
    border: 3px solid black;
}
.entrar:hover {
    opacity: 1;
    border: 4px solid black;
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
      <li ><a href="signup.php">Registro</a></li>
      <li ><a class="active" href="login.php">
Login</a></li>
      <li style="float: right;"><a href="https://www.instagram.com/instagram/?hl=es-la" class="fa fa-instagram"></a></li>
      <li style="float: right;"><a href="https://www.youtube.com" class="fa fa-youtube"></a></li>
    </ul>
         <br style="line-height:7; ">
        <center><div class="login">
            <form action="usuario.php" align="center" method="post">
                
                <h1>Login</h1>
                <br style="line-height:5; ">
                <p><label><input type="text" name="user" placeholder="Usuario (correo electronico)" ></label></p>
                <p><label><input type="password" name="contrasena" placeholder="Contraseña" align="center"></label></p>
                <br style="line-height:3; ">
                <button type="submit" class="entrar" style="font-size: 24px;">Entrar</button>
                <button type="submit" class="entrar" style="font-size: 21px;" formaction="change-pass.php">¿Olvido su contraseña?</button>
                        </form>
            </div></center>
    </body>
</html>
