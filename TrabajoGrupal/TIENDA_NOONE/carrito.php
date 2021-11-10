<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>CARRITO NOONE</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bussines-casual.css" rel="stylesheet">
    <style>
        #pdetails span{
            float: right;
        }
    </style>
</head>

<body>
<?php include_once 'php/header.php'; ?>

<?php
$USER=$_SESSION['usuario'];
$PASS=$_SESSION['password'];
$ProductID=$_GET['ProductID'];
// $cant=$_GET["Cant"];
$precio=$_GET["Precio"];

if(empty($USER))
{
    echo '<script>window.open("login.php","_self",null,true);</script>';
}
use app\controlador\ControllerClientes;

include_once "config/autoloadadmin.php";
$cliente=new ControllerClientes();
$ClienteID=$cliente->mostrarIdUser($USER,$PASS);
?>

<div class="container">
    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">Pedido</h2>
                <hr><br>
            </div>

            <div class="col-md-6">
                <form role="form" action="carritoDestino.php" method="POST">
                    <div class="form-group">
                        <label for="ClienteID">Cliente ID:</label>
                        <input type="text" name="ClienteID" class="form-control" id="ClienteID" value="" disabled>
                    </div>

                    <div class="form-group">
                        <label for="ProductID">Product ID:</label>
                        <input type="text" name="ProductID" class="form-control" id="ProductID" value="" disabled>
                    </div>

                    <div class="form-group">
                        <label for="cantidad">Cantidad:</label>
                        <input type="text" name="cantidad" class="form-control" id="cantidad">
                    </div>

                    <div class="form-group">
                        <label for="precioT">Precio Total:</label>
                        <input type="text" name="precioT" class="form-control" id="precioT" value="">
                    </div>
                    <button type="submit" style="float: right;" class="btn btn-success">Realizar compra</button>
                </form>
            </div
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<?php include_once 'php/footer.php'; ?>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>