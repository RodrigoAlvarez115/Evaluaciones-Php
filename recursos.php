<?php
include("clases/bd.php");
include("clases/producto.php");
include("clases/carrito.php");
include("clases/registro.php");

$bd = new Basedatos("localhost","root","","phpavanzado");
$productos = new Producto($bd);
$compra = new Carrito($bd);
$registro = new Registro($bd);
?>