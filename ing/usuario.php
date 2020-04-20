<?php

$server = "localhost:3306";
$admin = "root";
$access = "Jason2010";
$db = "tour";

$conn=mysqli_connect("$server","$admin","$access","$db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
    
    $usuario = $_POST['user'];
    $clave = $_POST['contrasena'];
    $sql1 = "SELECT correo,contra,nombre FROM clientes Where correo='$usuario'";
    $result = mysqli_query($conn,$sql1);
    $reg = mysqli_fetch_row($result);
    $password = $reg[1];
    $correo = $reg[0];
    $nombre = $reg[2];
    $hashCheck = password_verify($clave, $password);
    
    if (($usuario == '') || ($clave == ''))
        echo "<script>alert('There are empty fields'); window.location.href=\"login.php\"</script>";
    else
    {
        if (($correo == $usuario) && ($hashCheck== $password))
        {session_start();
            $_SESSION["autentica"] = "SIP"; 
            $_SESSION["usuarioactual"] = $usuario;
            $_SESSION["nombre"] = $nombre;
            header('Location: page2.php');}
        else
            echo "<script>alert('User or password incorrect'); window.location.href=\"login.php\"</script>";
    }
    mysqli_close($con);
?>
