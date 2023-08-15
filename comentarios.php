<?php
date_default_timezone_set('America/Argentina/Salta');
$usuario = $_POST['usuario'];
$correo = $_POST['email'];
$comentario = $_POST['comentario'];

$fecha = date("d-m-Y");
$hora = date("H:i");
$archivo = fopen('comentario.txt', 'a+');
$texto = "<h3>Usted es ".$usuario."</h3><ul><li>su dirección de correo es ".$correo."</li><li>Su consulta es la siguiente: <br/>".$comentario."</li><li>Enviado el dia: ".$fecha." a las ".$hora.".</li></ul>";
fwrite($archivo,$texto);
fclose($archivo);

header("location:unidad3.php?ok");
?>