<?php
session_start();
?>
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
       <h1 align="center">Registro de Paquete exitoso</h1>
       <h2 align="justify">Gracias por registrar su paquete turistico! Le notificaremos cuando su paquete selecionado tenga la cantidad minima de personas inscritas. En unos segundos sera redirigido a la tabla de inscritos en su paquete registrado</h2>
   </div>
<?php
$idpaquete= $_SESSION["paquete"];
$idpaquete .=  ".php";
?>
       <script type="text/javascript">
(function(){
   setTimeout(function(){
     window.location="<?php echo "$idpaquete" ?>";
   },12000); /* 1000 = 1 second*/
})();
</script>



</body>
</html>