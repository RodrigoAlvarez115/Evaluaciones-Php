<?php
$imagen = "imagenes/unidad4.jpg";
$marca= "imagenes/marca.png";

$marca_agua = imagecreatefrompng($marca);
$imagen_formato = imagecreatefromjpeg($imagen);

imagecopy($imagen_formato,$marca_agua,(imagesx($imagen_formato)/3.3),(imagesy($imagen_formato)/3),0,0,(imagesx($marca_agua)),(imagesy($marca_agua)));
header("Content-type: image/jpeg");
imagejpeg($imagen_formato);
imagedestroy($marca_agua);
imagedestroy($imagen_formato);
?>