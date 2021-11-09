<?php
if(!isset($_COOKIE["contador"])){
    setcookie("contador", 1, time()+60);
    echo "Primera vez";
}
else{
    setcookie("contador", $_COOKIE["contador"]+1, time()+60);
    echo "Usted ha visitado esta pagina ".$_COOKIE["contador"]." veces";
}
?>
<br>
<a href="contador.php">siguiente</a>