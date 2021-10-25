<?php
    // use Controller\ClienteController;
    // include_once "Config/autoload.php";
    // include_once "Controller/ClienteController.php";
    session_start(); 
?>             

<center>
<form role="form" action="logindestino.php?rol=<?php echo $rol;?>" method="POST">				 
	<div class="form-group">
        <br>
		<label for="usuario">Usuario:</label>
        <br>
		<input type="text" name="usuario" class="form-control" id="usuario" placeholder="Ingrese su usuario" autofocus required>
	</div>
					
	<div class="form-group">
		<label for="password">Contraseña:</label>
        <br>
		<input type="password" name="password" class="form-control" id="password" placeholder="Ingrese su contraseña" required>
	</div>
					
    <br>
	<button type="submit" class="btn btn-primary">Ingresar</button>
					
</form>    
</center>

<script>
    function ManagementOnclick()
    {
        if(confirm("Solo los administradores tienen permitido acceder a esta página. Inicie sesion") == true)
        {
            window.open("login.php?rol=admin","_self",null,true);
        }
    }
</script>
</body>

</html>