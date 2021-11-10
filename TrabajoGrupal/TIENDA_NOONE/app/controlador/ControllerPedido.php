<?php
namespace controlador;
use app\modelo\Pedido;
use config\ConexionDB;
include_once "config/autoload.php";

class ControllerPedido
{
    public function mostrar(){
        $pedido=new Pedido();
        return $pedido->mostrar();
    }

    public function mostrarPedido(int $id)
    {
        $pedido=new Pedido();
        $resultado=$pedido->mostrarPedidoU($id);
        return $resultado;
    }

    public function eliminarPedidoCliente(int $id)
    {
        $pedido=new Pedido();
        $resultado=$pedido->eliminarPedidoCliente($id);
        return $resultado;
    }

    public function eliminar(int $id)
    {
        $pedido=new Pedido();
        $pedido->setId($id);
        return $pedido->eliminar();
    }

    public function guardarPedido(int $idcli, int $idproduct,string $fecha,int $cantidad, float $precioT)
    {
        $pedido=new Pedido();
        $res=$pedido->guardar($idcli,$idproduct,$fecha,$cantidad,$precioT);
        return $res;
    }
}