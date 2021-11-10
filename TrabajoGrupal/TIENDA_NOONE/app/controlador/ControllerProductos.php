<?php
namespace controlador;
use app\modelo\Productos;
include_once "config/autoload.php";

class ControllerProductos
{
    public function mostrarMasVendido()
    {
        $producto=new Productos();
        return $producto->mostrarMasVendido();
    }

    public function mostrar()
    {
        $producto=new Productos();
        return $producto->mostrar();
    }

    public function mostrarTodo()
    {
        $producto=new Productos();
        return $producto->mostrarTodo();
    }

    public function agregar(int $idtp,string $descripcion,int $precio)
    {
        $cproducto=new Productos();
        $cproducto->setIdTP($idtp);
        $cproducto->setDescripcion($descripcion);
        $cproducto->setPrecio($precio);
        $cproducto->agregar();
    }

    public function actualizar(int $id, int $idtp,string $descripcion,int $precio)
    {
        $cproducto=new Productos;
        $cproducto->setIdTP($idtp);
        $cproducto->setDescripcion($descripcion);
        $cproducto->setPrecio($precio);
        $cproducto->actualizar($id);
    }

    public function eliminar(int $id)
    {
        $producto=new Productos;
        $producto->setId($id);
        $producto->eliminar();
    }
}