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
<body style="height:1500px">

  <ul class="topnav">
      <a><img src="visit.jpg" title="Tours Panama-Chiriqui" 
      align="left" width="50px" height="50px"></a>
      <li><a href="home.php">Tours Panama-Chiriqui</a></li>
      <center><li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">About Us</a>
    <div class="dropdown-content">
      <a href="about.php">Why experience Panama with us?</a>
      <a href="history.php">History</a>
      <a href="staff.php">Staff</a>
      <a class="active" href="location.php">Location</a>
    </div>
  </li></center>
      <li><a href="pack.php">Packets</a></li>
      <li><a href="activities.php">Activities</a></li>
      <li><a href="photos.php">Photos</a></li>
      <li><a href="contact.php">Contact Us</a></li>
      <li><a class="active" href="home.php"><img src="ing.png" title="Ingles" 
      align="left" width="16px" height="16px">English</a></li>
      <li><a href="\prueba\esp\home.php"><img src="esp.jpg" title="Español" 
      align="left" width="16px" height="16px">Spanish</a></li>
      <li ><a href="signup.php">Sign up</a></li>
      <li ><a href="login.php">Login</a></li>
      <li style="float: right;"><a href="#" class="fa fa-instagram"></a></li>
      <li style="float: right;"><a href="#" class="fa fa-youtube"></a></li>
    </ul>
  
<br style="line-height:6; ">
<p>
<h1 align="center">Whe are located at:</h1>
</p>
<br style="line-height:3; ">
<p>
  <h3 align="center">Located near Chiriqui´s mountain level ....................</h3>
</p>
<br style="line-height:3; ">
<center><div id="map" style="width:320px;height:320px;background:green"></div><center>

<script>
function initMap() {
var location = {
    lat: 8.512948, lng: -82.572382};
var map = new google.maps.Map(document.getElementById("map"),{
  zoom: 6,
  center: location
});
var marker = new google.maps.Marker({
  position: location,
  map: map
})
}
</script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARx28kOGpqZzmx82PJhLviHdX8yuUcDJA&callback=initMap"></script>
</body>
</html>