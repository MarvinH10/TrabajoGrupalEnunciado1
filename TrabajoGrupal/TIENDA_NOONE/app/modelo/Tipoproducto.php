<?php
namespace modelo;
use config\ConexionDB;
include_once "config/autoload.php";

class Tipoproducto
{
    private $id_Tproducto;
    private $tipo;

    public function getIdTproducto()
    {
        return $this->id_Tproducto;
    }

    public function setIdTproducto($id_Tproducto): void
    {
        $this->id_Tproducto = $id_Tproducto;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo): void
    {
        $this->tipo = $tipo;
    }

    public function agregar()
    {
        try
        {
            $objConexion=new ConexionDB();
            $conexion=$objConexion->abrir();
            $query="INSERT INTO  tipoproducto(tipo) VALUES($this->tipo)";
            $resultado=$conexion->query($query);
            $objConexion->cerrar();
        }
        catch(PDOException $e)
        {
            echo "Error: ".$e->getMessage();
            exit();
        }
        return $resultado;
    }

    public function eliminar()
    {
        try
        {
            $objConexion=new ConexionDB();
            $conexion=$objConexion->abrir();
            $sqldelete="DELETE FROM tipoproducto WHERE id_Tproducto=$this->id";
            $eliminado=$conexion->exec($sqldelete);
            $objConexion->cerrar();
        }
        catch(PDOException $e)
        {
            echo "Error: ".$e->getMessage();
            exit();
        }
        return $eliminado;
    }

    public function actualizar(int $id)
    {
        try
        {
            $objConexion=new ConexionDB();
            $conexion=$objConexion->abrir();
            $sqldelete="UPDATE tipoproducto SET tipo=$this->tipo
            WHERE id_Tproducto=$id";
            $eliminado=$conexion->exec($sqldelete);
            $objConexion->cerrar();
        }
        catch(PDOException $e)
        {
            echo "Error: ".$e->getMessage();
            exit();
        }
        return $eliminado;
    }
}