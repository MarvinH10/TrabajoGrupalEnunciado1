<?php
session_start();
use config\ConexionDB;
use controlador\ControllerClientes;
include_once "config/autoloadadmin.php";

$user=trim($_POST['usuario']);
$password=trim($_POST['password']);
$rol=$_GET['rol'];
$cliente=new ControllerClientes();
echo $cliente->logincontrol($user,$password,$rol);
