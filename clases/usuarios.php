<?php
class Usuarios {
    private $nombre;
    private $apellido;
    private $fecha_nacimiento;

    function __construct($nombre,$apellido,$fecha)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->fecha_nacimiento = $fecha;
    }
    private function calcular_edad() {
        list($anio,$mes,$dia) = explode("-",$this->fecha_nacimiento);
       $anio_dif = date("Y") - $anio;
       $mes_dif = date("m") -$mes;
       $dia_dif = date("d") - $dia;
       if ($dia_dif < 0 || $mes_dif < 0)
        $anio_dif--;
        return $anio_dif;
    }
    public function imprime_caracteristicas() {
        echo "<h2>El usuario es ".$this->nombre." ".$this->apellido."</h2><p>Tiene ".$this->calcular_edad()." años.</p>";
    }
}


?>