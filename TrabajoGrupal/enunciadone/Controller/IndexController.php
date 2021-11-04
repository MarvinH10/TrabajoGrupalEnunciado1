<?php
namespace Controller;
use Clases\ProductoIndex;
include_once "../Config/autoload.php";


class IndexController
{
    public function mostrar()
    {
        $producto=new ProductoIndex();
        return $producto->mostrar();
    }
}