<?php

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
    $name = $_POST['nombre'];
    $lastname = $_POST['apellido'];
    $in = $_POST['institucion'];
    $phone = $_POST['telefono'];
    $email = $_POST['correo'];
    $email = filter_var($email, FILTER_SANITIZE_EMAIL); //filter unvalid caracters
    $friend = $_POST['amigo'];
    $contra = $_POST['password'];

    

    if (strlen($phone) <= '7') { 
           
            echo "<script>alert('Su numero de telefono debe contener como minimo 8 caracteres!'); window.location.href=\"signup.php\"</script>";
            exit;
            
        }
        if(!preg_match("#[0-9]+#",$phone)) {
            
            echo "<script>alert('Su numero de telefono debe contener digitos!'); window.location.href=\"signup.php\"</script>";
            exit;

        }

        if(preg_match("#[a-z]+#",$phone)) {
            
             echo "<script>alert('Su numero de telefono no debe contener letras!'); window.location.href=\"signup.php\"</script>";
             exit;
        }

    if (strlen($contra) <= '8') { 
           
            echo "<script>alert('Su contraseña debe contener como minimo 8 caracteres!'); window.location.href=\"signup.php\"</script>";
            exit;
        }
        if(!preg_match("#[0-9]+#",$contra)) {
            
            echo "<script>alert('Su contaseña debe contener digitos!'); window.location.href=\"signup.php\"</script>";
            exit;

        }
        if(!preg_match("#[A-Z]+#",$contra)) {
            
             echo "<script>alert('Su contraseña debe contener por lo menos un caracter mayuscula!'); window.location.href=\"signup.php\"</script>";
             exit;
        }

    //Encrypt password entry
    $hashed_password = password_hash( "$contra", PASSWORD_DEFAULT );
    //Insert Into Query
    
    $hashed_amigo = password_hash( "$friend", PASSWORD_DEFAULT );
        
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

             echo "<script>alert('$email is no es un correo electronico valido'); window.location.href=\"signup.php\"</script>";
             exit;}
        else{
    $sql = "INSERT INTO clientes (nombre,apellido,institucion,telefono,correo,contra,amigo) VALUES('$name','$lastname', '$in', '$phone', '$email', '$hashed_password', '$hashed_amigo')";
    $result = mysqli_query($conn,$sql);
       
       
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                       // Specify main and backup server
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'jasonmclean2011@gmail.com';                   // SMTP username
$mail->Password = 'Jason2011';               // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
$mail->Port = 587;                                    //Set the SMTP port number - 587 for authenticated TLS
$mail->setFrom('jasonmclean2011@gmail.com', 'Jason Navarro');     //Set who the message is to be sent from
$mail->addReplyTo('jasonmclean2011@gmail.com', 'Jason Navarro');  //Set an alternative reply-to address
$mail->addAddress($email,$name);  // Add a recipient
//$mail->addAddress('jasonmclean2011@example.com');               // Name is optional
//$mail->addCC('jasonmclean2011@example.com');
//$mail->addBCC('jasonmclean2011@example.com');
$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
//$mail->addAttachment('/usr/labnol/file.doc');         // Add attachments
//$mail->addAttachment('/images/image.jpg', 'new.jpg'); // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Verificacion de Tour Panama-Chiriqui';
$mail->Body    = 'Este es su nueva contraseña ';
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));

if(!$mail->send()) {
   echo 'Email could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}

echo 'Email was sent';
}
        
        //Test if there was a query error
        if (!$result){ 
           echo "<script>alert('Email already has an account'); window.location.href=\"signup.php\"</script>";
             //die("Database query failed.");
         exit;}
            else{
                
                header('Location: gracias.php');
        }
        
    mysqli_close($conn);
?>
