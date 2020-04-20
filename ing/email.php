<?php

    $nombre = $_POST['firstname'];
    $apellido = $_POST['lastname'];
    $pais = $_POST['country'];
    $body = $_POST['subject'];
    
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                       // Specify main and backup server
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'jasonmclean2011@gmail.com';                   // SMTP username
$mail->Password = 'Jason2011';               // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
$mail->Port = 587;                                    //Set the SMTP port number - 587 for authenticated TLS
$mail->setFrom('jasonmclean2011@gmail.com', $nombre);     //Set who the message is to be sent from
$mail->addReplyTo('jasonmclean2011@gmail.com', $apellido);  //Set an alternative reply-to address
$mail->addAddress('jasonmclean2011@gmail.com',$nombre);  // Add a recipient
//$mail->addAddress('jasonmclean2011@example.com');               // Name is optional
//$mail->addCC('jasonmclean2011@example.com');
//$mail->addBCC('jasonmclean2011@example.com');
$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
//$mail->addAttachment('/usr/labnol/file.doc');         // Add attachments
//$mail->addAttachment('/images/image.jpg', 'new.jpg'); // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Correo de consulta';
$mail->Body    = $body;
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));

if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}

echo 'Message has been sent';



echo "<script>alert('Email sent'); window.location.href=\"contact.php\"</script>";

  ?>