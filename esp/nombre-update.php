<?php
session_start(); 
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
    $email = $_SESSION["usuarioactual"] ;
    $sql = "UPDATE investigacion SET nombre='$name' WHERE correo='$email'";
    $result = mysqli_query($conn,$sql);
    
       
    if (!$result){ 
           echo "<script>alert('Su nombre no fue actualizado'); window.location.href=\"logout.php\"</script>";
             //die("Database query failed.");
         exit;}
            else{
                
                echo "<script>alert('Su nombre fue actualizado'); window.location.href=\"logout.php\"</script>";
             
        }
        
        
    mysqli_close($conn);
?>
