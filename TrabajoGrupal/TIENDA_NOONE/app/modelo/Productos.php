<?php

class Productos
{
    private $id_producto;
    private $id_tipo_productos;
    private $descripcion;
    private $precio_producto;
    private $img;

    /**
     * @return mixed
     */
    public function getIdProducto()
    {
        return $this->id_producto;
    }

    /**
     * @param mixed $id_producto
     */
    public function setIdProducto($id_producto): void
    {
        $this->id_producto = $id_producto;
    }

    /**
     * @return mixed
     */
    public function getIdTipoProductos()
    {
        return $this->id_tipo_productos;
    }

    /**
     * @param mixed $id_tipo_productos
     */
    public function setIdTipoProductos($id_tipo_productos): void
    {
        $this->id_tipo_productos = $id_tipo_productos;
    }

    /**
     * @return mixed
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * @param mixed $descripcion
     */
    public function setDescripcion($descripcion): void
    {
        $this->descripcion = $descripcion;
    }

    /**
     * @return mixed
     */
    public function getPrecioProducto()
    {
        return $this->precio_producto;
    }

    /**
     * @param mixed $precio_producto
     */
    public function setPrecioProducto($precio_producto): void
    {
        $this->precio_producto = $precio_producto;
    }

    /**
     * @return mixed
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * @param mixed $img
     */
    public function setImg($img): void
    {
        $this->img = $img;
    }


}