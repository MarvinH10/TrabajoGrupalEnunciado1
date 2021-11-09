<form method="post" action="registro.php">
    <input type="number" name="numero" placeholder="Ingrese un numero">
    <input type="submit" value="Guardar">
</form>
<?php
if(!empty($_POST)){
    $numero=$_POST["numero"];
    try{
        require_once "Coneccion.php";
        $conn=new Coneccion();
        $sql="INSERT INTO cromos(numero) VALUES($numero)";
        $resultados=$conn->conectar->exec($sql);
        $conn->desconectar();
        header("location: index.php");
    }
    catch(\PDOException $e){
        return $e->getMessage();
    }
}