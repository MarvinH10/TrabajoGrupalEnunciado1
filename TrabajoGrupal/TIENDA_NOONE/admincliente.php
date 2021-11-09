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
    <link href="../public/css/bootstrap.min.css" rel="stylesheet">
    <link href="../public/css/bussines-casual.css" rel="stylesheet">
</head>

<body>
<?php include_once 'php/header2.php'; ?>

<div class="container">
    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">Clientes</h2>
                <hr>
                <div class="table-responsive">
                    <table border="5px" class="table">
                        <tr style="text-align: center; color: Black; font-weight: bold;">
                            <td>ID de Cliente</td>
                            <td>Rol</td>
                            <td>Nombres</td>
                            <td>Apellidos</td>
                            <td>Dni</td>
                            <td>Dirección</td>
                            <td>Número de celular</td>
                            <td>Acción</td>
                        </tr>

                        <tr style="color: black">
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                            <td>5</td>
                            <td>6</td>
                            <td>7</td>
                            <td>8</td>
                            <td>
                                <a href="#" style="margin-bottom: 5px;" class="btn btn-primary">Editar</a>
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
