<?php
	session_start();
	use Controller\LoginController;

	include_once "Config/autoloadadmin.php";
	$user=trim($_POST['usuario']);
	$pass=trim($_POST['password']);
	$rol=$_GET['rol'];
	$cliente=new LoginController();	
	echo $cliente->logincontrol($user,$pass,$rol);
















