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
    $pass = $_SESSION["new2"] ;
    
    //Encrypt password entry
    $hashed_password = password_hash( "$pass", PASSWORD_DEFAULT );
    //Insert Into Query
    
   
    $sql = "UPDATE clientes SET contra='$hashed_password' WHERE correo='$email'";
    $result = mysqli_query($conn,$sql);
    

       
       
    if (!$result){ 
           echo "<script>alert('Su contraseña no fue actualizada'); window.location.href=\"logout.php\"</script>";
             //die("Database query failed.");
         exit;}
            else{
                
                echo "<script>alert('Su contraseña fue actualizada'); window.location.href=\"logout.php\"</script>";
           
        }
        
        
    mysqli_close($conn);
?>
