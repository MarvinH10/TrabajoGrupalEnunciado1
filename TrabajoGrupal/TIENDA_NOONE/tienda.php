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

    <title>TIENDA NOONE</title>
    <link href="../public/css/bootstrap.min.css" rel="stylesheet">
    <link href="../public/css/bussines-casual.css" rel="stylesheet">
</head>

<body>
<?php include_once 'php/header.php'; ?>

<div class="container">

</div>

<?php include_once 'php/footer.php'; ?>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>

    $('#reg').click(function()
        {
            window.open('Vistas/registro.php',_self);
        }
    );

    function ManagementOnclick(){
        if(confirm("Solo los administradores tienen permitido acceder a esta página.")==true)
        {
            window.open("login.php","_self",null,true);
        }
    }

    function addToCartOnclick(ProductID)
    {
        if(confirm("Estas seguro que deseas agregar este producto al carrito")==true)
        {
            window.open("carrito.php?ProductID="+ProductID,"_self",null,true);
        }
    }
</script>
</body>
</html>
