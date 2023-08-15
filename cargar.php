<?php
session_start();

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$consulta = $_POST['consulta'];
$captcha =$_POST['captcha'];

if($captcha == $_SESSION['captcha']) {
    include("conexion_bd.php");
    mysqli_query($database,"INSERT INTO consultas VALUES('$nombre','$apellido','$email','$consulta')");
    header("Location:unidad5.php?ok");
} else {
    header("Location:unidad5.php?error_carga_datos");
}
?>