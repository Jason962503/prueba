<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>
</head>
<body>

<div class="topnav" id="myTopnav">
  <ul>
      <a><img src="visit.jpg" title="Pagina de Universidad Tecnologica Oteima" 
      align="left" width="50px" height="50px"></a>
      <a href="home.php">Tours Panama-Chiriqui</a>
    <a href="javascript:void(0)" class="dropbtn">Sobre nosostros</a>
      <a class="active" href="about.php">Porque experimentar Panama con nosostros?</a>
      <a href="history.php">Historia</a>
      <a href="staff.php">Personal</a>
      <a href="location.php">Localizacion</a>
      <a href="pack.php">Paquetes</a></li>
      <a href="activities.php">Actividades</a>
      <a href="photos.php">Fotos</a>
      <a href="contact.php">Contactenos</a>
      <a href="\prueba\ing\home.php"><img src="ing.png" title="Ingles" 
      align="left" width="16px" height="16px">Ingles</a>
      <a class="active" href="home.php"><img src="esp.jpg" title="Español" 
      align="left" width="16px" height="16px">Español</a>
      <a href="signup.php">Registro</a>
      <a href="login.php">Login</a>
      <a href="https://www.instagram.com/instagram/?hl=es-la" class="fa fa-instagram"></a>
      <a href="https://www.www.youtube.com" class="fa fa-youtube"></a>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i></a>
    </ul>
</div>

<div style="padding-left:16px">
  <h2>Responsive Topnav Example</h2>
  <p>Resize the browser window to see how it works.</p>
</div>

<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>

</body>
</html>
