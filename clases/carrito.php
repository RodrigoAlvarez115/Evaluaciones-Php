<?php
class Carrito {
    private $basedatos;

    function __construct($base)
    {
        $this->basedatos = $base;
    }

    public function introducir_compra($id) {
        $respuesta = $this->basedatos->ejecutar_consultas("INSERT INTO compras (codigo, producto, descripcion, precio) SELECT codigo, producto, descripcion, precio FROM productos WHERE codigo =$id");
        return $respuesta;
    }

    public function listar_compra() {
        $respuesta = $this->basedatos->ejecutar_consultas("SELECT * FROM compras");
        return $respuesta;
    }

    public function eliminar_compra($id) {
        $respuesta = $this->basedatos->ejecutar_consultas("DELETE FROM compras WHERE id_compra = $id");
        return $respuesta;
    }
}

?>