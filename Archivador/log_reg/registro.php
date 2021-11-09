<form method="post" action="<?=$_SERVER["PHP_SELF"]?>">
    <input type="text" name="codigo" placeholder="Ingrese Codigo"
           value=<?=isset($_POST["codigo"])?$_POST["codigo"]:""?>><br>
    <input type="password" name="contraseña" placeholder="Ingrese contraseña"
           value=<?=isset($_POST["contraseña"])?$_POST["contraseña"]:""?>><br>
    <input type="password" name="repcontraseña" placeholder="Repita contraseña"
           value=<?=isset($_POST["repcontraseña"])?$_POST["repcontraseña"]:""?>><br>
    <input type="text" name="nombres" placeholder="Ingrese nombres"
           value=<?=isset($_POST["nombres"])?$_POST["nombres"]:""?>><br>
    <input type="text" name="apellidos" placeholder="Ingrese apellidos"
           value=<?=isset($_POST["apellidos"])?$_POST["apellidos"]:""?>><br>
    <select name="tipo">
        <option value="estudiante">Estudiante</option>
        <option value="profesor">Profesor</option>
    </select><br><br>
    <input type="submit" value="Guardar">
</form>
<?php
if(!empty($_POST))
{
    $patron_numerico="/^(\d)*$/";
    $patron_letras="/^[a-zA-Z ]*$/";

    $codigo=trim($_POST["codigo"]);
    if(preg_match($patron_numerico,$codigo)==0)
    {
        echo "Por favor, su codigo solo debe tener numeros<br>";
    }
    if($codigo=="")
    {
        echo "El campo <b>'Codigo'</b> está vacio<br>";
    }

    $contraseña=$_POST["contraseña"];
    if($contraseña=="")
    {
        echo "El campo <b>'Contraseña'</b> está vacio<br>";
    }
    if(strlen($contraseña)<6)
    {
        echo "La contrasela debe tener al menos 8 caracteres<br>";
    }

    $repcontraseña=$_POST["repcontraseña"];
    if($repcontraseña=="")
    {
        echo "El campo <b>'Repita Contraseña'</b> está vacio<br>";
    }
    if($contraseña!=$repcontraseña)
    {
        echo "Las contraseñas no coinciden<br>";
    }

    $nombres=$_POST["nombres"];
    if(preg_match($patron_letras, $nombres)==0)
    {
        echo "El nombre solo debe contener letras<br>";
    }
    if($nombres=="")
    {
        echo "El campo <b>'Nombres'</b> está vacio<br>";
    }

    $apellidos=$_POST["apellidos"];
    if($apellidos=="")
    {
        echo "El campo <b>'Apellidos'</b> está vacio<br>";
    }

    $tipo=$_POST["tipo"];

    require_once "UsuarioController.php";
    $usuarioController=new UsuarioController();
    echo $usuarioController->guardar($codigo, $contraseña, $nombres, $apellidos, $tipo);

}