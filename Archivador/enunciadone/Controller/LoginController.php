<?php
namespace Controller;
use Clases\Cliente;
use Config\ConexionDB;
include_once "../Config/autoload.php";

class LoginController
{
    public function logincontrol(string $user,string $pass,string $rol)
    {
        $cliente=new Cliente();
        $datos=$cliente->login($user,$pass,$rol);
        $row=$datos->fetchAll();

		foreach($row as $rows)
        {
            $id=$rows[0];
            $rolbd=$rows[3];
        }

        if($row!= null)
        {
            $passbd = null;
            foreach($row as $userbd)
            {
                $passbd=$userbd["password"];
                $rolbd=$userbd["rol"];
            }

            if ($rolbd=="usuario" )
            {
                if($pass==$passbd)
                {
                    $_SESSION["usuario"] = $user;
                    $_SESSION["password"] = $pass;
                    return "<script>alert('Tienda NOONE te da la bienvenida $user ¡¡')</script>;
                    <script>window.open('../index.php?ID=$id','_self',null,true)</script>";
                }
            }
            else
            {
                if ($rolbd == "admin" ) 
                {
                    $_SESSION['admin'] = $user;
                    return "<script>alert('Bienvenido admin¡¡')</script>;
                    <script>window.open('../Vistas/adminview.php','_self',null,true)</script>";
                }
            }
        }
        else
        {
            return "<script>alert('Usuario/contraseña incorrecto');
            window.open('login.php?rol=usuario','_self',null,true);</script>";
        }
    }
}