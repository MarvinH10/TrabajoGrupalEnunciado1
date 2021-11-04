<?php
    use Controller\PedidoController;
    use Config\ConexionDB;
    include_once "../Config/autoloadadmin.php";

    $ID=$_GET["id"];
	$controlpedido=new PedidoController();
    $res=$controlpedido->eliminar($ID);

    if($res!=0)
    {
        echo '<script>alert("Pedido eliminado satisfactoriamente");
        window.open("adminview.php","_self",null,true);</script>';
	}
    else
    {
        echo '<script>alert("No fue posible eliminar el pedido");
        window.open("adminview.php,"_self",null,true)</script>';
    }