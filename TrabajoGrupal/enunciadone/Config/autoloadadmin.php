<?php
namespace Config;

spl_autoload_register(function ($nombres_clase)
{    
    include_once "../".$nombres_clase.".php";
}
);

?>