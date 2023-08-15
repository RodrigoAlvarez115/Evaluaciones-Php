<?php
include("recursos.php");

$usuario = $registro->ingreso($_POST['email']);

if($usuario[0]['email'] == $_POST['email']) {
    $clave = password_verify($_POST['clave'], $usuario[0]['clave']);
    if($clave) {
        header("Location:unidad8.php?ingreso_correcto");
    } else {
        header("Location:unidad8.php?contraseña_incorrecta");
    }
} else {

    header("Location:unidad8.php?usuario_no_registrado");
}
?>