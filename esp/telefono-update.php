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

        if(preg_match("#[!$%&/()=[]{}¿?'\^`,;.:-_<>|°¬*´¨+~¡#]+#",$phone)) {
            
             echo "<script>alert('Su numero de telefono no debe contener caracteres espciales!'); window.location.href=\"cambiar.php\"</script>";
             exit;
        }

    $sql = "UPDATE investigacion SET telefono='$phone' WHERE correo='$email'";
    $result = mysqli_query($conn,$sql);
    
    
    
       
    if (!$result){ 
           echo "<script>alert('Su numero de telefono no fue actualizado'); window.location.href=\"logout.php\"</script>";
             //die("Database query failed.");
         exit;}
            else{
                
                echo "<script>alert('Su numero de telefono fue actualizado'); window.location.href=\"logout.php\"</script>";
             
        }
        
        
    mysqli_close($conn);
?>





