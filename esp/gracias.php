
<html>
<head>
<title>
	
</title>
<link rel="shortcut icon" href="coor.jpg">
<SCRIPT type="text/javascript">
    window.history.forward();
    function noBack() { window.history.forward(); }
</SCRIPT>
<style type="text/css">


 html, body {
     height: 100%;
     margin: 0;
     padding: 0;
     width: 100%;
                }

h1
{
    color: darkgreen;
    font-size: 66px;
}
 body {
    background: lightgreen;
    font-family: "helvetica neue", helvetica, arial, sans-serif;
    font-weight: 100
}

.centered {
  position: fixed; /* or absolute */
  top: 50%;
  left: 50%;
  /* bring your own prefixes */
  transform: translate(-50%, -50%);
}
                }
</style>
</head>

<body >
	<div class="centered">
       <h1 align="center">Signup successfull</h1>
       <h2 align="justify">Gracias por registrarse en Tours Panama-Chiriqui. Para terminar de crear su cuenta, debe validar su dirección de correo electrónico haciendo clic en el enlace que acabo de enviar a jasonmclean2011@gmail.com. Asegúrese de incluir en la lista blanca los correos electrónicos de jasonmclean2011@gmail.com y verifique su carpeta de spam.</h2>
   </div>

       <script type="text/javascript">
(function(){
   setTimeout(function(){
     window.location="login.php";
   },12000); /* 1000 = 1 second*/
})();
</script>
<?php
session_start();
unset($_SESSION);
session_destroy();
session_write_close();
exit;
?>
</body>
</html>