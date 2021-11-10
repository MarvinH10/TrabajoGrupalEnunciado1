<?php
namespace modelo;
use config\ConexionDB;
include_once "config/autoload.php";
include_once "config/ConexionDB.php";

class Clientes
{
    private $id_cliente;
    private $usuario;
    private $password;
    private $rol;
    private $nombres;
    private $apellidos;
    private $dni;
    private $direccion;
    private $num_celular;

    public function getIdCliente()
    {
        return $this->id_cliente;
    }

    public function setIdCliente($id_cliente): void
    {
        $this->id_cliente=$id_cliente;
    }

    public function getUsuario()
    {
        return $this->usuario;
    }

    public function setUsuario($usuario): void
    {
        $this->usuario=$usuario;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password): void
    {
        $this->password=$password;
    }

    public function getRol()
    {
        return $this->rol;
    }

    public function setRol($rol): void
    {
        $this->rol=$rol;
    }

    public function getNombres()
    {
        return $this->nombres;
    }

    public function setNombres($nombres): void
    {
        $this->nombres=$nombres;
    }

    public function getApellidos()
    {
        return $this->apellidos;
    }

    public function setApellidos($apellidos): void
    {
        $this->apellidos=$apellidos;
    }

    public function getDni()
    {
        return $this->dni;
    }

    public function setDni($dni): void
    {
        $this->dni=$dni;
    }

    public function getDireccion()
    {
        return $this->direccion;
    }

    public function setDireccion($direccion): void
    {
        $this->direccion=$direccion;
    }

    public function getNumCelular()
    {
        return $this->num_celular;
    }

    public function setNumCelular($num_celular): void
    {
        $this->num_celular=$num_celular;
    }

    public function mostrar()
    {
        try
        {
            $objConexion=new ConexionDB();
            $conexion=$objConexion->abrir();
            $query="SELECT * FROM clientes";
            $resultado=$conexion->query($query);
            $objConexion->cerrar();
        }
        catch (PDOException $e)
        {
            echo "Error: ".$e->getMessage();
            exit();
        }
        return $resultado;
    }

    public function mostrarIdUser(string $user, string $password)
    {
        try
        {
            $objConexion = new ConexionDB();
            $conexion = $objConexion->abrir();
            $query = "SELECT * FROM `clientes` WHERE `usuario` = '".$user."' and `password` = '".$password."' and `rol` = 'usuario'";
            $resultado = $conexion->query($query);
            $objConexion->cerrar();
        }
        catch (PDOException $e)
        {
            echo "Error: ".$e->getMessage();
            exit();
        }
        return $resultado;
    }

    public function mostrarU()
    {
        try
        {
            $objConexion = new ConexionDB();
            $conexion = $objConexion->abrir();
            $query = "SELECT * FROM clientes where id_cliente=1";
            $resultado = $conexion->query($query);
            $objConexion->cerrar();
        }
        catch (PDOException $e)
        {
            echo "Error: ".$e->getMessage();
            exit();
        }
        return $resultado;
    }

    public function registrar(string $usuario,string $password,string $nombres,string $apellidos,int $dni,string $direccion,int $celular)
    {
        try
        {
            $objConexion = new ConexionDB();
            $conexion = $objConexion->abrir();
            $sqlinsert = "INSERT INTO clientes(usuario,password,rol,nombres, apellidos, dni, direccion, celular)
                             VALUES ('$usuario','$password','usuario','$nombres','$apellidos',$dni,'$direccion',$celular)";
            $insertado = $conexion->exec($sqlinsert);
            $objConexion->cerrar();
        }
        catch (\PDOException $e)
        {
            echo "Error: ".$e->getMessage();
            exit();
        }
        return $insertado;
    }

    public function actualizar(int $id)
    {
        try
        {
            $objConexion=new ConexionDB();
            $conexion=$objConexion->abrir();
            $sqlupdate="UPDATE clientes SET usuario='$this->usuario', password='$this->password', nombres='$this->nombres', apellidos='$this->apellidos',
            dni='$this->dni', direccion='$this->direccion', num_celular='$this->celular' WHERE id_cliente= $id";
            $actualizado=$conexion->query($sqlupdate);
            $objConexion->cerrar();
        }
        catch (PDOException $e)
        {
            echo "Error: ".$e->getMessage();
            exit();
        }
        return $actualizado;
    }

    public function eliminar()
    {
        try
        {
            $objConexion=new ConexionDB();
            $conexion=$objConexion->abrir();
            $sqldelete="DELETE FROM clientes WHERE id_cliente=$this->id";
            $eliminado=$conexion->exec($sqldelete);
            $objConexion->cerrar();
        }
        catch (PDOException $e)
        {
            echo "Error: ".$e->getMessage();
            exit();
        }
        return $eliminado;
    }

    public function login(string $user,string $password,string $rol)
    {
        try {
            $objConexion=new ConexionDB();
            $conexion=$objConexion->abrir();
            $sqlverifico="SELECT * FROM clientes WHERE usuario='$user' and  password='$password' and  rol='$rol'";
            $verifico=$conexion->query($sqlverifico);
            $objConexion->cerrar();
        }
        catch (PDOException $e)
        {
            echo "Error: ".$e->getMessage();
            exit();
        }
        return $verifico;
    }
}