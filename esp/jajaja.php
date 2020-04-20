<?php

$usuario1 = '1' ;
$usuario2 = '2' ;
$usuario3 = '' ;



if ( ($usuario1 == '') && ($usuario2 == '') && ($usuario3 == '') ) {
        echo "<script>alert('No tiene reservas'); window.location.href=\"jajaja.php\"</script>";
      }
     else {

      if ($usuario1 !== '') {

      $pack1 = '1' ;
      echo "$pack1"; 
    }

    if ($usuario2 !== '') {
      $pack2 = '2' ;
      echo "$pack2";
    }

    if ($usuario3 !== '') {
      $pack3 = '3' ;
      echo "$pack3";
    }

  }

  ?>