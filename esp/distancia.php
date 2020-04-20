<?php


function distancia ($x1, $y1 , $x2 , $y2) {

$distancia = sqrt(pow($x2-$x1, 2));

return $distancia ;

}

$x1 = $_POST['x1'];
$y1 = $_POST['y1'];

$x2 = $_POST['x2'];
$y2 = $_POST['y2'];


$x3 = $_POST['x3'];
$y3 = $_POST['y3'];

$dp1p2 = distancia($x1, $y1, $x2, $y2) ;

$dp1p3 = distancia($x1, $y1, $x3, $y3) ;

$dp2p3 = distancia($x2, $y2, $x3, $y3) ;

$promediodistancia = ($dp1p2+$dp1p3+$dp2p3)/3 ;

echo "La distancia promedio entre los tres puntos es de: $promediodistancia";

?>