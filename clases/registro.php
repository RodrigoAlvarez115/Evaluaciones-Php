<?php
class Registro {
    private $bd;

    function __construct($base)
    {
        $this->bd = $base;
    }

    private function encriptado($pass) {
        $clave = password_hash($pass, PASSWORD_DEFAULT,array('cost'=>4));
        return $clave;
    }
    
    public function registrar_usuario($correo, $pass) {
        $clave = $this->encriptado($pass);
        $respuesta = $this->bd->ejecutar_consultas("INSERT INTO registro VALUES('$correo','$clave')");
        return $respuesta;
    }

    public function verificar_usuario($email) {
        $consulta = $this->bd->ejecutar_consultas("SELECT email FROM registro WHERE email = '$email'");
        $consulta->num_rows;
        return $consulta;
    }

    public function ingreso($email) {
        $respuesta = $this->bd->ejecutar_consultas("SELECT * FROM registro WHERE email = '$email'");
        return $respuesta;
    }
}
?>