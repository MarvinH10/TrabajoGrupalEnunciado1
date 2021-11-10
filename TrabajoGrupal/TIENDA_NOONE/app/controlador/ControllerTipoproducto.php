<?php
namespace controlador;
use app\modelo\Tiporoducto;
include_once "config/autoload.php";

class ControllerTipoproducto
{
    public function agregar(string $tipo)
    {
        $cproducto=new Tipoproducto();
        $cproducto->setDescripcion($tipo);
        $cproducto->agregar();
    }

    public function actualizar(int $id, string $tipo)
    {
        $cproducto=new Tipoproducto;
        $cproducto->setDescripcion($tipo);
        $cproducto->actualizar($id);
    }

    public function eliminar(int $id)
    {
        $producto=new Tipoproducto;
        $producto->setId($id);
        $producto->eliminar();
    }
}