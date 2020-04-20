<html>
    <head>
        <title>Tabla de Tecnofest</title>
        <meta name="viewport" content ="width=device-width,initial-scale=1,user-scalable=yes" />
        <meta charset="utf-8">
        <link rel="shortcut icon" href="icon.jpg">
        <title>Sign up</title>
        
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
$server = "localhost:3306";
$admin = "root";
$access = "Jason2010";
$db = "chiriqui";
// Create connection
$conn = mysqli_connect($server, $admin, $access, $db);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM paquetes";
$result = mysqli_query($conn, $sql);

/*$result2 = mysql_query('SHOW TABLES',$connection) or die('cannot show tables');
while($tableName = mysql_fetch_row($result2)) {

	$table = $tableName[0];
	
	
	
}*/

echo '<h1 align="center">Tabla de paquetes</h1> <br style="line-height:4; ">';

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo "<center><table border='3'>";
    echo "<tr><td>ID de paquete</td><td>Nombre</td><td>Precio</td><td>Duracion</td><td>Disponible</td></tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr> <td> " . $row["id_Paquete"]." </td> <td> " . $row["Nombre"]. " </td> <td> " . $row["Precio"]. " </td> <td> " . $row["Duracion"]. " </td> <td> " . $row["Disponible"]. " </td> <tr>";
    }
    echo "</table></center>";
} else {
    echo "0 results";
}

mysqli_close($conn);
?>


</body>
</html>