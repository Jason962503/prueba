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
    $in = $_POST['institucion'];
    $email = $_POST['correo'];
    $email = filter_var($email, FILTER_SANITIZE_EMAIL); //filter unvalid caracters
    
    
    $sql = "UPDATE investigacion SET institucion='$in' WHERE correo=$email";
    $result = mysqli_query($conn,$sql);
    
    
    
    
       
    if (!$result){ 
           echo "<script>alert('Sus datos no fueron actualizados'); window.location.href=\"cambiar.php\"</script>";
             //die("Database query failed.");
         exit;}
            else{
                
                echo "<script>alert('Sus datos fueron actualizados'); window.location.href=\"cambiar.php\"</script>";
             
        }
        
        
    mysqli_close($conn);
?>





