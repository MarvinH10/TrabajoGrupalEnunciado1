<?php
session_start();
if(!isset($_SESSION["contador"])){
    $_SESSION["contador"]=1;
    echo "Primera vez";
}
else{
    $_SESSION["contador"]++;
    echo "Nos visita ".$_SESSION["contador"]." veces";
}
?>
<a href="cerrar_sesion.php">Siguiente</a>