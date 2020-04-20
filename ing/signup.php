<!doctype html>
<html>
    <head>
        <title>Tours Panama-Chiriqui</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
      <li ><a class="active" href="signup.php">Sign up</a></li>
      <li ><a href="login.php">Login</a></li>
      <li style="float: right;"><a href="#" class="fa fa-instagram"></a></li>
      <li style="float: right;"><a href="#" class="fa fa-youtube"></a></li>
    </ul>
      
      <br style="line-height:7; ">
       <form action="ingresar.php" method="post">
  <div class="signup">
    <center><h1>Registration</h1></center>
    <br style="line-height:3; ">
    <center><label for="nombre"><h3>Name</h3></label></center>
    <center><input type="text" placeholder="Enter your name" name="nombre" required></center>
     <br style="line-height:3; ">
    <center><label for="apellido"><h3>Last Name</h3></label></center>
    <center><input type="text" placeholder="Enter your last name" name="apellido" required></center>
     <br style="line-height:3; ">
    <center><label for="Institucion"><h3>Group name</h3></label></center>
    <center><input type="text" placeholder="Enter group name" name="institucion" required></center>
     <br style="line-height:3; ">
    <center><label for="telefono"><h3>Phone</h3></label></center>
    <center><input type="text" placeholder="Enter your phone number (no spaces in between numbers)" name="telefono" required></center>
     <br style="line-height:3; ">
     <center><label for="password"><h3>Password</h3></label></center>
    <center><input type="password" placeholder="Enter your password" name="password" id="password" required></center>
    <br style="line-height:3; ">
     <center><label for="password"><h3>Confirm Password</h3></label></center>
    <center><input type="password" type="" placeholder="Confirm your password" name="cpassword" id="cpassword" required></center>
     <br style="line-height:3; ">
     <center><label for="amigo"><h3>Who is your childhood bestfriend?</h3></label></center>

    <center><input type="text" placeholder="Who was your best childhood friend" name="amigo" required></center>
    <br style="line-height:3; ">
    <center><label for="email"><h3>Email</h3></label></center>
    <center><input type="text" placeholder="Enter your email" name="correo" required></center>
    <br><br>
    <center><button type="submit" class="registrar"  input>Send</button></center>
    
  </div>

</form>

<script>
var password = document.getElementById('password');
confirm_password = document.getElementById('cpassword');
    function validatePassword() {
        if ((confirm_password.value!='')&&(password.value != confirm_password.value)) {
            document.getElementById('errorMsg').innerHTML='Passwords Don\'t Match';
        } else {
            document.getElementById('errorMsg').innerHTML='';
        }
    }
    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
  </script>
    </body>
</html>