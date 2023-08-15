<?php
class Producto {
    private $basedatos;

    function __construct($base)
    {
        $this->basedatos = $base;
    }

    public function listar_productos() {
        $respuesta = $this->basedatos->ejecutar_consultas("SELECT * FROM productos");
        return $respuesta;
    }
}



?>