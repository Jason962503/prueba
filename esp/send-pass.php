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
    $nuevo = $_POST['new'];
    $sql1 = "SELECT correo,amigo FROM clientes Where correo='$usuario'";
    $result = mysqli_query($conn,$sql1);
    $reg = mysqli_fetch_row($result);
    $password = $reg[1];
    $correo = $reg[0];
    $hashCheck = password_verify($clave, $password);

    if (strlen($nuevo) <= '8') { 
           
            echo "<script>alert('Su contraseña debe contener como minimo 8 caracteres!'); window.location.href=\"change-pass.php\"</script>";
            exit;
        }
        if(!preg_match("#[0-9]+#",$nuevo)) {
            
            echo "<script>alert('Su contaseña debe contener digitos!'); window.location.href=\"change-pass.php\"</script>";
            exit;

        }
        if(!preg_match("#[A-Z]+#",$nuevo)) {
            
             echo "<script>alert('Su contraseña debe contener por lo menos un caracter mayuscula!'); window.location.href=\"change-pass.php\"</script>";
             exit;
        }

    
    if (($usuario == '') || ($clave == ''))
        echo "<script>alert('Existen campos vacios.'); window.location.href=\"login.php\"</script>";
    else
    {
        if (($correo == $usuario) && ($hashCheck== $password))
        {session_start();
            $_SESSION["autentica"] = "SIP"; 
            $_SESSION["usuarioactual"] = $usuario;
            $_SESSION["new2"] = $nuevo;
            header('Location: pass.php');}
        else
            echo "<script>alert('Usuario o contrasena incorrecta.'); window.location.href=\"login.php\"</script>";
    }
    mysqli_close($con);
?>
