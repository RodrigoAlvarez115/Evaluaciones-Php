<?php
session_start(); 

date_default_timezone_set('America/Argentina/Salta');

$dia = $_POST['day'];
$mes = $_POST['month'];
$year = $_POST['year'];

$fecha_usuario = date ("$dia-$mes-$year");

$fecha_actual = date("d-m-Y");

$fecha_usuario_calculo = strtotime($fecha_usuario);

$fecha_actual_calculo = strtotime($fecha_actual);

$fecha_calculo = $fecha_usuario_calculo - $fecha_actual_calculo;

$fecha_resultado = $fecha_calculo/86400;

$_SESSION['fechas'] = array("fecha_actual" => $fecha_actual,"fecha_usuario" =>$fecha_usuario, "fecha_usuario_calculo" => $fecha_usuario_calculo,"fecha_actual_calculo" => $fecha_actual_calculo, "fecha_resultado" => $fecha_resultado);

header('location:unidad2.php');


?>