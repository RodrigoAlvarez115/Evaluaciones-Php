<?php
$unidad = $_POST['unidad'];
$fecha = $_POST['fecha'];

include("conexion_bd.php");

mysqli_query($database,"INSERT INTO clases VALUES (DEFAULT,'$unidad','$fecha')");

header("Location:unidad1.php?ok");

?>