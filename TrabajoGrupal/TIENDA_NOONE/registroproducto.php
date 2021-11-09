<?php session_start();
use Controller\ProductoController;
include_once "../Config/autoloadadmin.php";

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

    <style>
        .center
        {
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>
<?php include_once 'php/header2.php'; ?>

<div class="container">
    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">Agregar Producto</h2>
                <hr>
                <div style="text-align: center;">
                    <div class="center">
                        <div class="col-md-8">
                            <form role="form" action="productodestino.php" method="POST" class="form" enctype = "multipart/form-data">

                                <div class="form-group">
                                    <label for="tipo">ID Tipo de producto:</label>
                                    <input type="text" name="tipo" class="form-control" id="tipo" placeholder="Ingresa id tipo producto" required>
                                </div>

                                <div class="form-group">
                                    <label for="descripcion">Descripcion de Producto:</label>
                                    <input type="text" name="descripcion" class="form-control" id="descripcion" placeholder="Ingresa descripcion de producto" required>
                                </div>

                                <div class="form-group">
                                    <label for="precio">Precio del Producto:</label>
                                    <input type="text" name="precio" class="form-control" id="precio" placeholder="Ingrese el precio del producto" required>
                                </div>

                                <div class="form-group">
                                    <label for="img">Imagen de Producto:</label>
                                    <input type="file" class="btn btn-default"  name="img">
                                </div>

                                <div class="form-group">
                                    <button type="submit" style="float: right;" class="btn btn-primary">Agregar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once 'php/footer.php'; ?>

<script src="../public/js/jquery.js"></script>
<script src="../public/js/bootstrap.min.js"></script>
</body>
</html>
