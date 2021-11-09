<?php

class Pedido
{
    private $id_pedido;
    private $idcliente_clientes;
    private $idproducto_productos;
    private $fecha_pedido;
    private $cantidad_producto;
    private $precio_total;

    /**
     * @return mixed
     */
    public function getIdPedido()
    {
        return $this->id_pedido;
    }

    /**
     * @param mixed $id_pedido
     */
    public function setIdPedido($id_pedido): void
    {
        $this->id_pedido = $id_pedido;
    }

    /**
     * @return mixed
     */
    public function getIdclienteClientes()
    {
        return $this->idcliente_clientes;
    }

    /**
     * @param mixed $idcliente_clientes
     */
    public function setIdclienteClientes($idcliente_clientes): void
    {
        $this->idcliente_clientes = $idcliente_clientes;
    }

    /**
     * @return mixed
     */
    public function getIdproductoProductos()
    {
        return $this->idproducto_productos;
    }

    /**
     * @param mixed $idproducto_productos
     */
    public function setIdproductoProductos($idproducto_productos): void
    {
        $this->idproducto_productos = $idproducto_productos;
    }

    /**
     * @return mixed
     */
    public function getFechaPedido()
    {
        return $this->fecha_pedido;
    }

    /**
     * @param mixed $fecha_pedido
     */
    public function setFechaPedido($fecha_pedido): void
    {
        $this->fecha_pedido = $fecha_pedido;
    }

    /**
     * @return mixed
     */
    public function getCantidadProducto()
    {
        return $this->cantidad_producto;
    }

    /**
     * @param mixed $cantidad_producto
     */
    public function setCantidadProducto($cantidad_producto): void
    {
        $this->cantidad_producto = $cantidad_producto;
    }

    /**
     * @return mixed
     */
    public function getPrecioTotal()
    {
        return $this->precio_total;
    }

    /**
     * @param mixed $precio_total
     */
    public function setPrecioTotal($precio_total): void
    {
        $this->precio_total = $precio_total;
    }


}