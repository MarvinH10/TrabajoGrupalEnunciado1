<?php
	session_start();
	$ProductAction=$_GET["ProductAction"];
	
	use Controller\ProductoController;
    use Config\ConexionDB;
    include_once "../Config/autoloadadmin.php";

	if($ProductAction=="Add")
	{
        $idtipo=$_POST["Tipo"];
		$descripcion=$_POST["Descripcion"];
		$precio=$_POST["Precio"];
        
        $controlproducto = new ProductoController();
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
            $controlproducto = new ProductoController();
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