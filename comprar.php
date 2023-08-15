<?php
include("recursos.php");

$compra->introducir_compra($_GET['id']);

header("Location:unidad7.php?okey");

?>