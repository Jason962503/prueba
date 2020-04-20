<?php
session_start();
//Create variable connection
$server = "localhost:3306";
$admin = "root";
$access = "Jason2010";
$db = "tour";
//Create conection
$conn=mysqli_connect("$server","$admin","$access","$db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
    //Translate variables from html5
    $email = $_SESSION["usuarioactual"] ;
    $apodo = $_POST['use'];
    $last = $_POST['apellido'];
    $group = $_POST['institucion'];
    $phone = $_POST['telefono'];
    $password = $_POST['contra'];


       
       if (strlen($apodo) == '0' AND strlen($last) == '0' AND strlen($group) == '0' AND strlen($phone) == '0' AND strlen($password) == '0'){

       echo "<script>alert('Usted no ha ingresado datos'); window.location.href=\"cambiar.php\"</script>";
       }
    
    if (strlen($apodo) > '0') { 
           
           $sql1 = "UPDATE clientes SET nombre='$apodo' WHERE correo='$email'";
           $result1 = mysqli_query($conn,$sql1);
    
           if (!$result1){ 
           echo "<script>alert('Su nombre no fue actualizada'); window.location.href=\"cambiar.php\"</script>";
             //die("Database query failed.");
         exit;} 
        }

    if (strlen($last) > '0') { 
           
           $sql2 = "UPDATE clientes SET apellido='$last' WHERE correo='$email'";
           $result2 = mysqli_query($conn,$sql2);
           if (!$result2){ 
           echo "<script>alert('Su apellido no fue actualizada'); window.location.href=\"cambiar.php\"</script>";
             //die("Database query failed.");
         exit;}
            
        }

        if (strlen($group) > '0') { 
           
           $sql3 = "UPDATE clientes SET institucion='$group' WHERE correo='$email'";
           $result3 = mysqli_query($conn,$sql3);
           if (!$result3){ 
           echo "<script>alert('Su nombre de insitucion no fue actualizada'); window.location.href=\"cambiar.php\"</script>";
             //die("Database query failed.");
         exit;}
            
        }

        if (strlen($phone) > '0') { 

          if (strlen($phone) <= '7') { 
           
            echo "<script>alert('Su numero de telefono debe contener como minimo 8 caracteres!'); window.location.href=\"cambiar.php\"</script>";
            exit;
            
        }

        if(!preg_match("#[0-9]+#",$phone)) {
            
            echo "<script>alert('Su numero de telefono debe contener digitos!'); window.location.href=\"cambiar.php\"</script>";
            exit;

        }

        if(preg_match("#[a-z]+#",$phone)) {
            
             echo "<script>alert('Su numero de telefono no debe contener letras!'); window.location.href=\"cambiar.php\"</script>";
             exit;
        }

        if(preg_match("#[A-Z]+#",$phone)) {
            
             echo "<script>alert('Su numero de telefono no puede contener letras MAYUSCULAS'); window.location.href=\"cambiar.php\"</script>";
             exit;
        }
    
           
           $sql4 = "UPDATE clientes SET telefono='$phone' WHERE correo='$email'";
           $result4 = mysqli_query($conn,$sql4);
          if (!$result4){ 
           echo "<script>alert('Su telefono no fue actualizada'); window.location.href=\"cambiar.php\"</script>";
             //die("Database query failed.");
         exit;}
            
        }

        if (strlen($password) > '0') { 
         
        if (strlen($password) <= '8') { 
           
            echo "<script>alert('Su contraseña debe contener como minimo 8 caracteres!'); window.location.href=\"cambiar.php\"</script>";
            exit;
        }
        if(!preg_match("#[0-9]+#",$password)) {
            
            echo "<script>alert('Su contaseña debe contener digitos!'); window.location.href=\"cambiar.php\"</script>";
            exit;

        }
        if(!preg_match("#[A-Z]+#",$password)) {
            
             echo "<script>alert('Su contraseña debe contener por lo menos un caracter mayuscula!'); window.location.href=\"cambiar.php\"</script>";
             exit;
        }
    
  //Encrypt password entry
    $hashed_password = password_hash( "$password", PASSWORD_DEFAULT );
    
    //Update Query
    $sql5 = "UPDATE clientes SET contra='$hashed_password' WHERE correo='$email'";
    $result5 = mysqli_query($conn,$sql5);

    if (!$result5){ 
           echo "<script>alert('Su contraseña no fue actualizada'); window.location.href=\"cambiar.php\"</script>";
             //die("Database query failed.");
         exit;}
    
    }


    mysqli_close($conn);
    

    echo "<script>alert('Sus datos fueron actualizados'); window.location.href=\"cambiar.php\"</script>";
?>
