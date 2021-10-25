<?php
namespace Controller;
use clases\ProductoIndex;

include_once "Config/autoload.php";


class indexController
{
    public function mostrar()
    {
        $producto =  new ProductoIndex();
        return $producto->mostrar();
    }
}