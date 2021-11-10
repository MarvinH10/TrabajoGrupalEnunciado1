<?php
session_start();
use config\ConexionDB;
?>
<!DOCTYPE html>
<html lang="en">
<br>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>LOGIN NOONE</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bussines-casual.css" rel="stylesheet">

<body>
<?php include_once 'php/header.php'; ?>

<div class="container">
    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">Login</h2>
                <hr>
            </div>

            <div class="col-md-6">

                <form role="form" action="logindestino.php" method="POST">

                    <div class="form-group">
                        <br>
                        <label for="usuario">Usuario:</label>
                        <input type="text" name="usuario" class="form-control" id="usuario" placeholder="Ingrese su usuario" autofocus required>
                    </div>

                    <div class="form-group">
                        <label for="password">Contraseña:</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Ingrese su contraseña" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Ingresar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include_once 'php/footer.php'; ?>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
