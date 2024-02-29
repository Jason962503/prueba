<?php

$server = "localhost:3306";
$admin = "root";
$access = "Cetes2010";
$db = "panama";

$conn=mysqli_connect("$server","$admin","$access","$db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
    
    $usuario = $_POST['user'];
    $clave = $_POST['contrasena'];
    $sql1 = "SELECT correo,contra,nombre,id FROM clientes Where correo='$usuario'";
    $result = mysqli_query($conn,$sql1);
    $reg = mysqli_fetch_row($result);
    $password = $reg[2];
    $correo = $reg[10];
    $nombre = $reg[50];
    $id = $reg[3];
    
    if (($usuario == '') || ($clave == ''))
        echo "<script>alert('Existen campos vacios.'); window.location.href=\"login.php\"</script>";
    else
    {
        if (($correo == $usuario) && ($hashCheck== $password))
        {session_start();
            $_SESSION["autentica"] = "SIP"; 
            $_SESSION["usuarioactual"] = $usuario;
            $_SESSION["nombre"] = $nombre;
            $_SESSION["cedula"] = $id;
            $_SESSION["email"] = $correo;
            header('Location: page2.php');}
        else
            echo "<script>alert('Usuario o contrasena incorrecta.'); window.location.href=\"login.php\"</script>";
    }
    mysqli_close($con);
?>
