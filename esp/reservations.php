<?php
session_start();
?>
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
  
  <body>
<?php
$packet1= $_SESSION["paquete1"];
$packet2= $_SESSION["paquete2"];
$packet3= $_SESSION["paquete3"];

echo "$packet1";

echo "$packet2";

echo "$packet3";

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



$name = $_POST['search'];
$price = $_POST['precio'];

$sql = "SELECT * FROM paquetes WHERE  id_Paquete='$packet1' or id_Paquete='$packet2' or id_Paquete='$packet3'";
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