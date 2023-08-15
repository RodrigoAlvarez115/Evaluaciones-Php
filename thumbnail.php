<?php
$imagen = imagecreatefromjpeg("imagenes/unidad4.jpg");
$alto = imagesy($imagen)/5;
$ancho = imagesx($imagen)/5;
$imagen_tc = imagecreatetruecolor($ancho,$alto);
$imagen_tumb = imagecreate($ancho,$alto);

imagecopyresized($imagen_tc,$imagen,0,0,0,0,$ancho,$alto,imagesx($imagen),imagesy($imagen));
imagejpeg($imagen_tc,"imagenes/imagen_tumb.jpg");
imagedestroy($imagen_tc);
?>