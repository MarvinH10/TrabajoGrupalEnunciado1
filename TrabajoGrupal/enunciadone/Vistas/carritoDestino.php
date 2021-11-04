<?php
	session_start();
    use Clases\Pedido;
    use Controller\PedidoController;
    include_once "../Config/autoloadadmin.php";


    $ProductID=$_GET['ProductID'];
	$ClienteID=$_GET['ClienteID'];
    $cant=$_POST["cantidad"];
    $preciototal=$_POST["precioT"];
	$fecha=date("Y/m/d");
	
	if($_SESSION['usuario']==null || $_SESSION['password']==null)
	{
		echo "<script>window.open('login.php?rol=usuario','_self',null,true); 
		window.alert('Por favor inicie sesión para procesar tu pedido');</script>";
    }

	$pedido=new PedidoController();
    $res=$pedido->guardarPedido();
	if($res!=0)
    {
		echo "<script>window.alert('Su pedido se registro correctamente');
        window.open('perfil.php?ID=$ClienteID','_self',null,true);</script>";
	}
    else
    {
        echo "<script>window.alert('Su pedido no se pudo registrar')</script>";
    }