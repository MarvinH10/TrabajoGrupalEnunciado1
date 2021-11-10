<?php
namespace config;

class ConexionDB
{
    private $dsn="mysql:host=127.0.0.1:3306;dbname=enunciadouno";
    private $usuario="root";
    private $clave="";
    public $conexion;

    public function abrir()
    {
        $this->conexion=new \PDO($this->dsn, $this->usuario, $this->clave);
        return $this->conexion;
    }

    public function cerrar(){
        $this->conexion=null;
    }
}