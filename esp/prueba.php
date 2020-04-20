<?php

$hashCheck = password_verify('ja', '$2y$10$VQ0AmlDHXo1D/AsnYHNgm.OuhwIAJgMpg13JNMTn8DHMndMK8iFtG');

echo $hashCheck;




// Variable to check
$email = "jasonmclean2011@gmail.";

// Remove all illegal characters from email
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

// Validate e-mail
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

             echo "<script>alert('$email is not a valid email address'); window.location.href=\"signup.php\"</script>";}
       
       


?>

