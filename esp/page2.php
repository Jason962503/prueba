<? include ("seguridad.php"); ?>
<?php session_start(); 
?>

<!doctype html>
<html>
    <head>
        
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="Allcss.css"/>
        <title></title>
    </head>
    <body>
        <script>
       window.location.hash="no-back-button";
       window.location.hash="Again-No-back-button";//again because google chrome don't insert first hash into history
       window.onhashchange=function(){window.location.hash="no-back-button";}
       </script> 
        <div class="bar">
            <p><img src="avatar.png" width="60px"><h2 ><?php echo $_SESSION["nombre"]; ?></h2><p/>
            <ul>
                <li style="border-top: 1px solid white;"><img src="cart.png" width="50px" align="left"><a href="query2.php">Reservar</a></li>
                <li><img src="date.png" width="50px"><a href="fechas.php">Fechas disponibles</a></li>
                <li><img src="list.png" width="50px"><a href="select.php">Lista de paquetes disponibles</a></li>
                <li><img src="change.png" width="50px"><a href="cambiar.php">Cambiar informacion</a></li>
            
            <form action="logout.php" method="post">
            <center><br><br><button type="submit"  >Cerrar session</button><br><br>
            <h4>@Mclean | Tours <br>Panama-Chiriquí</h4>
            </center>
        </form>
        </ul>
        </div>
        <section class="wrapper">
        <div class="boxFecha">
            <center>
                <script>
                    var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                    var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
                    var f=new Date();
                    document.write(diasSemana[f.getDay()] + ", " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
                    
                              
                </script>
                <br>Fecha
            </center>
        </div>
        <div class="boxExamenes"><a href="reservas.php">
            <center>Reservas</center></a>
        </div>
        <div class="boxPacientes" ><?php echo $_SESSION["email"]; ?>
            <center>Recibos</center>
            <div class="boxlogout">

  
            </div>
        </div>
    </section>
        
    </body>
</html>
