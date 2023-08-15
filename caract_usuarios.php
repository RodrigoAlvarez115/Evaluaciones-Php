<?php
include("clases/usuarios.php");
if($_POST) {
    $usuario1 = new Usuarios($_POST['nombre'],$_POST['apellido'],$_POST['fecha']);
    $usuario1->imprime_caracteristicas();
}
?>