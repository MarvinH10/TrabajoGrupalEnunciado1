<?php
session_start();
$ProductAction=$_GET["ProductAction"];

use app\controlador\ControllerProductos;
use config\ConexionDB;
include_once "config/autoloadadmin.php";

if($ProductAction=="Add")
{
    $idtipo=$_POST["Tipo"];
    $descripcion=$_POST["Descripcion"];
    $precio=$_POST["Precio"];

    $controlproducto=new ControllerProductos();
    $res=$controlproducto->agregar($idtipo, $descripcion, $precio);

    if($res)
    {
        echo '<script>alert("Guardado correctamente")</script>';

        echo '<script>window.open("adminproductos.php","_self",null,true);</script>';
    }
    else
    {
        echo '<script>alert("Error al guardar")</script>';
    }
}
else
{
    if ($ProductAction=="Edit")
    {
        $idtipo=$_POST["Tipo"];
        $descripcion=$_POST["Descripcion"];
        $precio=$_POST["Precio"];
        $ProductID=$_GET["ProductID"];
        $controlproducto = new ControllerProductos();
        $res=$controlproducto->actualizar($ProductID, $idtipo, $descripcion, $precio);

        if($res)
        {
            echo '<script>window.alert("Actualizado correctamente"); 
                window.open("adminproductos.php","_self",null,true)</script>';
        }
        else
        {
            echo '<script>alert("Error al actualizar")</script>';
        }
    }
}
