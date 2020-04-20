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
                <li style="border-top: 1px solid white;"><img src="cart.png" width="50px" align="left"><a href="">Orders</a></li>
                <li><img src="date.png" width="50px"><a href="fechas.php">Available dates</a></li>
                <li><img src="list.png" width="50px"><a href="select.php">List of packages</a></li>
                <li><img src="change.png" width="50px"><a href="cambiar.php">Change Info</a></li>
            
            <form action="logout.php" method="post">
            <center><br><br><button type="submit"  >Log out</button><br><br>
            <h4>@Mclean | Tours <br>Panama-Chiriquí</h4>
            </center></form>
        </ul>
        </div>
        <section class="wrapper">
        <div class="boxFecha">
            <center>
                <script>
                    var meses = new Array ("January","February","March","April","May","June","July","August","September","October","November","December");
                    var diasSemana = new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Sathurday");
                    var f=new Date();
                    document.write(diasSemana[f.getDay()] + ", " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
                    
                              
                </script>
                <br>Fecha
            </center>
        </div>
        <div class="boxExamenes">
            <center>Manage reservations</center>
        </div>
        <div class="boxPacientes" >
            <center>Receipts</center>
            <div class="boxlogout">

  
            </div>
        </div>
    </section>
        
    </body>
</html>
