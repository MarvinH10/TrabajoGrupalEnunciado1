<?php
namespace modelo;
use config\ConexionDB;
include_once "config/autoload.php";

class Productos
{
    private $id_producto;
    private $id_tipo_productos;
    private $descripcion;
    private $precio_producto;
    private $img;

    public function getIdProducto()
    {
        return $this->id_producto;
    }

    public function setIdProducto($id_producto): void
    {
        $this->id_producto = $id_producto;
    }

    public function getIdTipoProductos()
    {
        return $this->id_tipo_productos;
    }

    public function setIdTipoProductos($id_tipo_productos): void
    {
        $this->id_tipo_productos = $id_tipo_productos;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion): void
    {
        $this->descripcion = $descripcion;
    }

    public function getPrecioProducto()
    {
        return $this->precio_producto;
    }

    public function setPrecioProducto($precio_producto): void
    {
        $this->precio_producto = $precio_producto;
    }

    public function getImg()
    {
        return $this->img;
    }

    public function setImg($img): void
    {
        $this->img = $img;
    }

    public function mostrarMasVendido()
    {
        try
        {
            $objConexion=new ConexionDB();
            $conexion=$objConexion->abrir();
            $query="	SELECT id_producto,tipo,descripcion,precio_producto,img,descuento,estado,
            precio_producto-(precio_producto*(descuento/100)) from productos as pro
            join tipoproducto as tp on pro.id_tipo_productos=tp.id_Tproducto;";
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

    public function mostrar()
    {
        try
        {
            $objConexion=new ConexionDB();
            $conexion=$objConexion->abrir();
            $query="SELECT id_producto , tipo, descripcion, precio_producto,img FROM tipoproducto AS tp JOIN productos as p
            ON tp.id_Tproducto=p.id_tipo_productos LIMIT 12";
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

    public function mostrarTodo()
    {
        try
        {
            $objConexion=new ConexionDB();
            $conexion=$objConexion->abrir();
            $query="	SELECT id_producto,tipo,descripcion,precio_producto,img,descuento,estado,
            precio_producto-(precio_producto*(descuento/100)) from productos as pro
            join tipoproducto as tp on pro.id_tipo_productos=tp.id_Tproducto;
        ";
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

    public function agregar()
    {
        try
        {
            $objConexion=new ConexionDB();
            $conexion=$objConexion->abrir();
            $query="INSERT INTO  productos(id_tipo_productos,descripcion,precio_producto) VALUES($this->idtp,'$this->descripcion',$this->precio) ";
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
            $sqldelete="DELETE FROM productos WHERE id_producto=$this->id";
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
            $sqldelete="UPDATE productos SET id_tipo_productos = $this->idtp,descripcion = '$this->descripcion',precio = $this->precio
            WHERE id_producto = $id";
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