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

            .btn-group .button1 {
            background-color: red; /* Green */
            border: 1px solid black;
            color: white;
            padding: 10px 21px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 13px;
            cursor: pointer;
            float: left;
            }
          .btn-group .button1:not(:last-child) {
            border-right: none; /* Prevent double borders */
            }
          .btn-group .button1:hover {
            background-color: darkred;
            }

             .btn-group .button2 {
            background-color: #4CAF50; /* Green */
            border: 1px solid black;
            color: white;
            padding: 10px 21px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 13px;
            cursor: pointer;
            float: left;
            }
          .btn-group .button2:not(:last-child) {
            border-right: none; /* Prevent double borders */
            }
          .btn-group .button2:hover {
            background-color: #3e8e41;
            }

           table {
         font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
         border-collapse: collapse;
         width: 100%;
         background-color: lightblue;
         border: 1px solid blue;
}

 td,  th {
    border: 1px solid blue;
    padding: 8px;
}

 tr:nth-child(even){background-color: #f2f2f2;}

 tr:hover {background-color: lightblue;}

 th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: blue;
    color: blue;
}
</style>
</head>

<body>
  
<?php

$correo= $_SESSION["email"];

echo "$correo";

   $server = "localhost:3306";
   $admin = "root";
   $access = "Jason2010";
   $db = "paquetes";

   $conn=mysqli_connect("$server","$admin","$access","$db");
   // Check connection
   if (mysqli_connect_errno())
     {
       echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
    $sql1 = "SELECT correo FROM paquete1 Where correo='$correo'";
    $result1 = mysqli_query($conn,$sql1);
    $reg1 = mysqli_fetch_row($result1);
    $usuario1 = $reg1[0];

    $sql2 = "SELECT correo FROM paquete2 Where correo='$correo'";
    $result2 = mysqli_query($conn,$sql2);
    $reg2 = mysqli_fetch_row($result2);
    $usuario2 = $reg2[0];



$sql3 = "SELECT correo FROM paquete3 Where correo='$correo'";
    $result3 = mysqli_query($conn,$sql3);
    $reg3 = mysqli_fetch_row($result3);
    $usuario3 = $reg3[0];

    



    if ( ($usuario1 == '') && ($usuario2 == '') && ($usuario3 == '') ) {
        echo "<script>alert('No tiene reservas'); window.location.href=\"page2.php\"</script>";
      }
     else {

      if ($usuario1 !== '') {

      $pack1 = '1' ;
      $_SESSION["paquete1"] = $pack1 ;
    }

    if ($usuario2 !== '') {
      $pack2 = '2' ;
      $_SESSION["paquete2"] = $pack2 ;
    }

    if ($usuario3 !== '') {
      $pack3 = '3' ;
      $_SESSION["paquete3"] = $pack3 ;
    }

  }
      echo "<script>alert('Si tiene reservas'); window.location.href=\"reservations.php\"</script>"
     
?>

</body>

</html>