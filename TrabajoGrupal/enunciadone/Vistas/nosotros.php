<?php session_start();?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>NOSOTROS NOONE</title>
    <link href="../public/css/bootstrap.min.css" rel="stylesheet">
    <link href="../public/css/bussines-casual.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

	<?php
		$Username = null;
		if(!empty($_SESSION["Username"]))
		{
			$Username = $_SESSION["Username"];
		}
	?>
</head>

<body>

    <div class="brand">NOSOTROS NOONE</div>
    <div class="address-bar"><strong>Productos a primera marca</strong> justo en tus manos</div>
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="../index.php">Inicio</a></li>
					<li><a href="tienda.php">Tienda</a></li>
                    <li><a href="nosotros.php">Nosotros</a></li>
					<li><a href="#" onclick="ManagementOnclick();">Administrador</a></li>
					<?php
                    if($Username==null)
                    {
                        echo '<li><a href="registro.php?ActionType=Register">Registrarse</a></li>';
                    }
                    ?>
					<?php
                    if($Username==null)
                    {
                        echo '<li><a href="login/login.php?rol=usuario">Ingresar</a></li>';
                    }
                    else
                    {
                        echo '<li><a href="Logout.php">Salir</a></li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Nosotros
                        <strong>Tienda NOONE</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-6">
                    <img class="img-responsive img-border-left" src="../img/portemp.jpeg" alt="">
                </div>
                <div class="col-md-6">
                    <br>
                    <br>
                    <br>
                    Tu tienda virtual, para realizar tu compra semanal de verduras, frutas y mas.
                    <br>
                    <br>
                    Vendemos productos limpios de emprendimientos de peruanos de excelente calidad...
                    <br>
                    <br>
                    Somos una empresa que te garantizara lo mejor para ti y para nosotros, tan solo
                    cuestiona nuestros productos ya que es muy bueno saber tus criticas, somos una
                    tienda mejor dicha que tratamos de mejorar y cumplir las expectativas de nuestros
                    clientes.
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                   <p>
					<?php echo '<strong>'.$Username.'</strong>'; ?>
					<br>
					<strong>
					<?php
                    if($Username==null)
                    {
                        echo '<a href="login/login.php?rol=usuario">Ingresar</a>';
                    }
                    else
                    {
                        echo '<a href="Logout.php">Salir</a>';
                    }
                    ?>
					<a href="#">Volver arriba</a>
					</strong><br>
					Copyright &copy; Tienda NOONE
					</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="../public/js/jquery.js"></script>

    <script src="../public/js/bootstrap.min.js"></script>
	<script>
		
		function ManagementOnclick(){
			if(confirm("Solo los administradores tienen permitido acceder a esta página")===true)
			{
				window.open("login.php?rol=admin","_self",null,true);
			}
		}
    </script>
</body>
</html>