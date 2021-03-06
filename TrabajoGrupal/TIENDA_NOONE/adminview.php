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

    <title>Administrador</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bussines-casual.css" rel="stylesheet">
</head>

<body>
<?php include_once 'php/header2.php'; ?>

<div class="container">
    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">Pedidos</h2>
                <hr>
                <div class="table-responsive">
                    <table border="5px" class="table">
                        <tr style="text-align: center; color: black; font-weight: bold;">
                            <td>ID de Pedido</td>
                            <td>ID de Cliente</td>
                            <td>Tipo producto</td>
                            <td>Nombre de Producto</td>
                            <td>Precio de Producto</td>
                            <td>Fecha de Pedido</td>
                            <td>Acción</td>
                        </tr>

                        <tr style="color: black">
                            <td>0</td>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                            <td>5</td>
                            <td>
                                <a href="#" style="margin-bottom: 5px;" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once 'php/footer.php'; ?>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
