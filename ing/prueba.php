<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tours Panama-Chiriqui</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="icon.jpg">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="height:1500px">

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Tours Panama-Chiriqui</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.php">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="about.php">About us<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="experience.php">Why experience Panama with us?</a></li>
          <li><a href="history.php">History</a></li>
          <li><a href="Staff.php">Staff</a></li>
        </ul>
      <li><a href="pack.php">Packages/Reservations</a></li>
      <li><a href="location.php">Activities</a></li>
      <li><a href="location.php">Location</a></li>
      <li><a href="photos.php">Photos</a></li>
      <li><a href="contact.php">Contact Us</a></li>
    </ul>
  <form class="navbar-form navbar-left" action="/action_page.php">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  <h2>Active Item in a List Group</h2>
  <div class="list-group">
   <li><a href="#" class="list-group-item active">New <span class="badge">12</span></a></li>
   <li><a href="#" class="list-group-item">Deleted <span class="badge">5</span></a></li>
   <li><a href="#" class="list-group-item">Warnings <span class="badge">3</span></a></li>
  </div>
</div>
<div class="table">          
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>
</div>

<video width="320" height="240" autoplay controls>
  <source src="movie.mp4" type="video/mp4">
  <source src="movie.ogg" type="video/ogg">
Your browser does not support the video tag.
</video>

<iframe width="420" height="315"
src="https://www.youtube.com/embed/tgbNymZ7vqY">
</iframe>
<h1>My First Google Map</h1>

<div id="map" style="width:400px;height:400px;background:green"></div>

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