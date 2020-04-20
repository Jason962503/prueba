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
    $phone = $_POST['telefono'];
    $email = $_SESSION["usuarioactual"] ;
    
    
    $sql = "UPDATE investigacion SET telefono='$phone' WHERE correo='$email'";
    $result = mysqli_query($conn,$sql);
    
    
    
    
       
    if (!$result){ 
           echo "<script>alert('Su numero de telefono no fue actualizado'); window.location.href=\"logout.php\"</script>";
             //die("Database query failed.");
         exit;}
            else{
                
                echo "<script>alert('Sus numero de telefono fue actualizado'); window.location.href=\"logout.php\"</script>";
             
        }
        
        
    mysqli_close($conn);
?>





