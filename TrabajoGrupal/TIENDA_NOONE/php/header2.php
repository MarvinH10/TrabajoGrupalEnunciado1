<div class="brand">ADMINISTRACION CLIENTES NOONE</div>
<div class="address-bar"><strong>Productos a primera marca</strong> en la palma de  tus manos</div>
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
                <li><a href="adminview.php">Órdenes</a></li>
                <li><a href="registroproducto.php">Agregar Productos</a></li>
                <li><a href="adminproductos.php">Lista de Productos</a></li>
                <li><a href="admincliente.php">Clientes</a></li>
                <?php if($_SESSION['admin']!=null){echo '<li><a href="Logout.php">Salir</a>';}?>
            </ul>
        </div>
    </div>
</nav>
