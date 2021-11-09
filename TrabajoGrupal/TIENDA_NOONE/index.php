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

    <title>INICIO NOONE</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bussines-casual.css" rel="stylesheet">
</head>

<body>
    <?php include_once 'php/header.php'; ?>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="img/slide-1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/slide-2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/slide-3.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/slide-4.jpg" alt="">
                            </div>
                        </div>
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="nav categoria">
            <h2>Productos Nuevos</h2>
            <ul class="nav navbar-nav">
                <li><a href="Vistas/categorias/arroz.php">Arroz</a></li>
                <li><a href="Vistas/categorias/aceite.php">aceite</a></li>
                <li><a href="Vistas/categorias/azucar.php">azucar y endulzante</a></li>
                <li><a href="Vistas/categorias/fideos.php">fideos y pastas</a></li>
                <li><a href="Vistas/categorias/conservas.php">conservas</a></li>
                <li><a href="Vistas/categorias/menestras.php">menestras</a></li>
                <li><a href="Vistas/categorias/galletas.php">galletas y golosinas</a></li>
                <li><a href="Vistas/categorias/chocolateria.php">chocolateria</a></li>
                <li><a href="Vistas/categorias/snacks.php">snacks y piqueos</a></li>
                <li><a href="Vistas/categorias/salsas.php">salsas y condimentos</a></li>
            </ul>
        </div>

    <?php include_once 'php/footer.php'; ?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
        <script>
            $('.carousel').carousel({
                interval: 5000 //changes the speed
            })

            function ManagementOnclick()
            {
                if (confirm("Solo los administradores tienen permitido acceder a esta página")==true)
                {
                    window.open("Vistas/login.php?rol=admin", "_self", null, true);
                }
            }

            function addToCartOnclick(ProductID, Precio)
            {
                if (confirm("Estas seguro que deseas agregar este producto al carrito")==true)
                {
                    window.open("Vistas/carrito.php?ProductID=" + ProductID + "&Precio=" + Precio, "_self", null, true);
                }
            }
        </script>
</body>
</html>