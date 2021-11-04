<?php
    use Controller\ClienteController;
    use Config\ConexionDB;
    include_once "../Config/autoloadadmin.php";

    $ID=$_GET["id"];
	$controlcliente=new ClienteController();
    $res=$controlcliente->eliminar($ID);

	if($res)
    {
        echo '<script>alert("No fue posible eliminar el cliente")</script>';
	}
    else
    {
        echo '<script>alert("Cliente eliminado satisfactoriamente")</script>';
		echo '<script>window.open("admincliente.php","_self",null,true);</script>';
    }