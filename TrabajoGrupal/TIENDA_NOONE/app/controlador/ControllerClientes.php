<?php
namespace controlador;
use config\ConexionDB;
use app\modelo\Cliente;
use modelo\Clientes;

include_once "config/autoload.php";

class ControllerClientes
{
    public function mostrar()
    {
        $cliente=new Cliente();
        return $cliente->mostrar();
    }

    public function mostrarIdUser(string $user, string $password)
    {
        $cliente=new Cliente();
        $resultado=$cliente->mostrarIdUser($user, $password);
        $row=$resultado->fetchAll();
        foreach($row as $rows)
        {
            $idCliente=$rows[0];
        }
        return $idCliente;
    }

    public function registrarControl(string $usuario, string $password, string $nombres, string $apellidos, int $dni, string $direccion, int $celular)
    {
        $clienteregis=new Cliente();
        $res=$clienteregis->registrar($usuario, $password, $nombres, $apellidos, $dni, $direccion, $celular);
        if($res!=0)
        {
            return $res="save";
        }
    }

    public function actualizar(int $id)
    {
        $clienteupdate=new Cliente();
        return $clienteupdate->actualizar($id);
    }

    public function eliminar(int $id)
    {
        $clientedelete=new Cliente();
        $clientedelete->setId($id);
        $clientedelete->eliminar();
        if($clientedelete->eliminar()>=1)
        {
            $resultado = "El cliente fue elmininado";
        }
        else
        {
            $resultado = "El cliente no fue eliminado";
        }
        return $resultado;
    }

    public function logincontrol(string $user, string $password, $rol)
    {
        $cliente=new Clientes();
        $datos=$cliente->login($user,$password,$rol);
        $row=$datos->fetchAll();

        foreach($row as $rows)
        {
            $id=$rows[0];
            $rolbd=$rows[3];
        }

        if($row!= null)
        {
            $passbd=null;
            foreach($row as $userbd)
            {
                $passbd=$userbd["password"];
                $rolbd=$userbd["rol"];
            }

            if ($rolbd=="usuario" )
            {
                if($password==$passbd)
                {
                    $_SESSION["usuario"]=$user;
                    $_SESSION["password"]=$password;
                    return "<script>alert('Tienda NOONE te da la bienvenida $user ¡¡')</script>;
                    <script>window.open('index.php=$id','_self',null,true)</script>";
                }
            }
            else
            {
                if ($rolbd=="admin" )
                {
                    $_SESSION['admin'] = $user;
                    return "<script>alert('Bienvenido admin¡¡')</script>;
                    <script>window.open('adminview.php','_self',null,true)</script>";
                }
            }
        }
        else
        {
            return "<script>alert('Usuario/contraseña incorrecto');
            window.open('login.php','_self',null,true);</script>";
        }
    }
}