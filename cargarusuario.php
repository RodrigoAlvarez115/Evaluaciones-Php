<?php
include("recursos.php");

if($registro->verificar_usuario($_POST['email']) == 0) {

$registro->registrar_usuario($_POST['email'], $_POST['clave']);

header("Location:unidad8.php?okey");

} else {
    header("Location:unidad8.php?usuario_registrado");
 }
?>