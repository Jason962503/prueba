<?php

//Create variable connection
$server = "localhost:3306";
$admin = "root";
$access = "Jason2010";
$db = "paquetes";
//Create conection
$conn=mysqli_connect("$server","$admin","$access","$db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
    //Translate variables from html5
    $name = $_POST['firstname'];
    $lastname = $_POST['lastname1'];
    $id = $_POST['paquete'];
    $phone = $_POST['telefono'];
    $email = $_POST['correo'];
    
    $sql = "INSERT INTO $id (nombre,apellido,telefono,correo) VALUES('$name','$lastname', '$phone', '$email')";
    $result = mysqli_query($conn,$sql);
       

        if (!$result){ 
           echo "<script>alert('Cupos llenos'); window.location.href=\"reservar.php\"</script>";
             //die("Database query failed.");
         exit;}
            else{
              session_start();
            $_SESSION["paquete"]= $id;
                header('Location: confirmacion.php');
        }
        
    mysqli_close($conn);
?>
