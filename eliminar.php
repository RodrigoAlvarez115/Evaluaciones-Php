<?php
include("recursos.php");

$compra->eliminar_compra($_GET['id']);

if($compra->listar_compra() == []) {
    header("Location:unidad7.php");
} else {
    header("Location:unidad7.php?compra_eliminada");
    
}

?>