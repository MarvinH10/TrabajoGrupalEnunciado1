<?php 
	session_start(); 
	$ActionType = $_GET['ActionType'];
    
	if($ActionType == "Edit")
    {
		$ID = $_GET['id'];
		$Loc = $_GET['Loc'];
	}
?>


    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
						<hr>
						<h2 class="intro-text text-center"><?php if($ActionType == "Register"){echo "Registro";}else echo "Edita la Información de tu Cuenta"; ?></h2>
						<hr>
					<div class="col-md-6">	
						<form role="form" action="registrodestino.php?ActionType=<?php echo $ActionType; if($ActionType == "Edit"){ echo "&Loc=" . $Loc . "&id=" .$ID;} ?>" method="POST">
							
                            <!-- <div class="form-group">
                                <label for="id">ID cliente:</label>
                                <input type="text" name="id" class="form-control" id="id" placeholder="Ingresa id cliente" autofocus required>
                            </div> -->
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
                                <label for="dni">Dni:</label>
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
                                
                            <button type="submit" class="btn btn-primary">Enviar</button><br><br>
					    </form>
					</div>
                </div>
            </div>
        </div>

    </div>
    
    <script src="../public/js/jquery.js"></script>
    <script src="../public/js/bootstrap.min.js"></script>
    <script>
    function ManagementOnclick(){
			if(confirm("Solo los administradores tienen permitido acceder a esta página.") == true)
			{
				window.open("login.php?rol=admin","_self",null,true);
			}
		}
    </script> 
</body>

</html>