<?php

//Create variable connection
$server = "localhost:3306";
$admin = "root";
$access = "Jason2010";
$db = "uto";
//Create conection
$conn=mysqli_connect("$server","$admin","$access","$db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
    //Translate variables from html5
    $name = $_POST['nombre'];
    $lastname = $_POST['apellido'];
    $in = $_POST['institucion'];
    $phone = $_POST['telefono'];
    $email = $_POST['correo'];
    $email = filter_var($email, FILTER_SANITIZE_EMAIL); //filter unvalid caracters
    $contra = $_POST['password'];
    
    //Encrypt password entry
    $hashed_password = password_hash( "$contra", PASSWORD_DEFAULT );
    //Insert Into Query
    
    if(!empty($_POST['cambiarcontra'])){
    $sql = "UPDATE investigacion SET contra='$hashed_password' WHERE correo=$email";
    $result = mysqli_query($conn,$sql);
     exit;
    }

    if(!empty($_POST['cambiarnombre'])){
    $sql = "UPDATE investigacion SET nombre='$name' WHERE correo=$email";
    $result = mysqli_query($conn,$sql);
    exit;
    }

    if(!empty($_POST['cambiarapellido'])){
    $sql = "UPDATE investigacion SET apellido='$lastname' WHERE correo=$email";
    $result = mysqli_query($conn,$sql);
    exit;
    }
    
    if(!empty($_POST['cambiartelefono'])){
    $sql = "UPDATE investigacion SET telefono='$phone' WHERE correo='$email'";
    $result = mysqli_query($conn,$sql);
    exit;
    }

    if(!empty($_POST['cambiargrupo'])){
    $sql = "UPDATE investigacion SET institucion='$in' WHERE correo=$email";
    $result = mysqli_query($conn,$sql);
    exit;
    }

       
       
    if (!$result){ 
           echo "<script>alert('Sus datos no fueron actualizados'); window.location.href=\"cambiar.php\"</script>";
             //die("Database query failed.");
         exit;}
            else{
                
                echo "<script>alert('Sus datos fueron actualizados'); window.location.href=\"cambiar.php\"</script>";
             
        }
        
        
    mysqli_close($conn);
?>
