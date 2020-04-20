<!doctype html>
<html>
    <head>
        <title>Tours Panama-Chiriqui</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <link rel="shortcut icon" href="icon.jpg">
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
    width: 310px;
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
    <a href="javascript:void(0)" class="dropbtn">About Us</a>
    <div class="dropdown-content">
      <a href="about.php">Why experience Panama with us?</a>
      <a href="history.php">History</a>
      <a href="staff.php">Staff</a>
      <a href="location.php">Location</a>
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
      <li ><a class="active" href="login.php">Login</a></li>
      <li style="float: right;"><a href="#" class="fa fa-instagram"></a></li>
      <li style="float: right;"><a href="#" class="fa fa-youtube"></a></li>
    </ul>
         <br style="line-height:7; ">
        <center><div class="login">
            <form action="usuario.php" align="center" method="post">
                
                <h1>Login</h1>
                <br style="line-height:5; ">
                <p><label><input type="text" name="user" placeholder="User (Email)" style="text-align: center" required></label></p>
                <p><label><input type="password" name="contrasena" placeholder="Password" style="text-align: center" required></label></p>
                <br style="line-height:5; ">
                <button type="submit" class="entrar" style="font-size: 24px;">Log In</button>
                 <button type="submit" class="entrar" style="font-size: 21px;" formaction="change-pass.php">Forgot password?</button>
                        </form>
            </div></center>
    </body>
</html>
