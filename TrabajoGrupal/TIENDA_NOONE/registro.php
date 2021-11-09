<?php
session_start();

if(!empty($_GET['ActionType']))
{
    $ID=$_GET['id'];
    $Loc=$_GET['Loc'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
        TIENDA NOONE
    </title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bussines-casual.css" rel="stylesheet">
</head>

<body>
<?php include_once 'php/header.php'; ?>

<div class="container">

    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">
                    Registro
                </h2>
                <hr>
                <div class="col-md-6">

                    <form action="registro.php">
                        <div class="form-group">
                            <label for="usuario">Usuario:</label>
                            <input type="text" name="usuario" class="form-control" id="usuario" placeholder="Ingresa tu usuario"  autofocus required>
                        </div>

                        <div class="form-group">
                            <label for="password">Contraseña:</label>
                            <input type="Password" name="password" class="form-control" id="password" placeholder="Ingresa tu contraseña" required>
                        </div>

                        <div class="form-group">
                            <label for="nombres">Nombres:</label>
                            <input type="text" name="nombres" class="form-control" id="nombres" placeholder="Ingresa tus nombres" required>
                        </div>

                        <div class="form-group">
                            <label for="apellidos">Apellidos:</label>
                            <input type="text" name="apellidos" class="form-control" id="apellidos" placeholder="Ingresa tus apellidos" required>
                        </div>

                        <div class="form-group">
                            <label for="dni">DNI:</label>
                            <input type="text" name="dni" class="form-control" id="dni" placeholder="Ingresa tu numero de DNI" required>
                        </div>

                        <div class="form-group">
                            <label for="direccion">Dirección:</label>
                            <input type="text" name="direccion" class="form-control" id="direccion" placeholder="Ingresa tu dirección" required>
                        </div>

                        <div class="form-group">
                            <label for="celular">Celular:</label>
                            <input type="text" name="celular" class="form-control" id="celular" placeholder="Ingresa tu numero celular" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Guardar</button><br><br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once 'php/footer.php'; ?>
</body>
</html>
