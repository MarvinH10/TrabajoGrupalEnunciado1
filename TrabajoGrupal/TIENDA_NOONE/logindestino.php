<?php
session_start();
use controlador\ControllerClientes;

include_once "config/autoloadadmin.php";
$user=trim($_POST['usuario']);
$pass=trim($_POST['password']);
$rol=$_GET['rol'];
$cliente=new ControllerClientes();
echo $cliente->logincontrol($user,$pass,$rol);
