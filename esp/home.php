<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tours Panama-Chiriqui</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="icon.jpg">
  <link rel="stylesheet" type="text/css" href="\prueba\css\tours.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

   <ul class="topnav">
      <a><img src="visit.jpg" title="Tours Panama-Chiriqui" 
      align="left" width="50px" height="50px"></a>
      <li><a class="active" href="home.php">Tours Panama-Chiriqui</a></li>
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
      <li ><a href="login.php">Login</a></li>
      <li style="float: right;"><a href="https://www.instagram.com/instagram/?hl=es-la" class="fa fa-instagram"></a></li>
      <li style="float: right;"><a href="https://www.youtube.com" class="fa fa-youtube"></a></li>
    </ul>
  
<div class="w3-content w3-section" style="max-width:1500px">
  <img class="mySlides" src="bocas.jpg" style="width:100%">
  <img class="mySlides" src="canal.jpg" style="width:100%">
  <img class="mySlides" src="reserva.jpg" style="width:100%">
  <img class="mySlides" src="boqueron.jpg" style="width:100%">
  <img class="mySlides" src="yeguada.jpg" style="width:100%">
  <img class="mySlides" src="lago.jpg" style="width:100%">
  <img class="mySlides" src="chorro.jpg" style="width:100%">
  <img class="mySlides" src="terreno.jpg" style="width:100%">
  <img class="mySlides" src="carpas.jpg" style="width:100%">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 3000); // Change image every 2 seconds
}
</script>


</body>
</html>