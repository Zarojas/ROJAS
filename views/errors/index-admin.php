<?php
//encabezado
include ('templates/head.php');
//validar errores
if (isset ($_GET['error'])){
	include ('errors/errors.php');
}
//seccion de menu
if(isset($_POST['btn-menu'])){
	$menu = $_POST['menu'];

if ($menu == 'register'){
	include ('views/register.php');
}
elseif ($menu == 'inicio'){
		header ('location; http://localhost/ROJAS/admin-index.php');
}
elseif ($menu =='loogin'){
	include ('views/loogin.php');
}
elseif ($menu == 'acerca'){
	include ('views/acerca.php')	
}
}

//login
if (isset($_POST['btn-register'])){

	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$password = $_POST['password'];
	$conf_pass = $_POST['conf_pass'];

	if ($correo == $password){
		include('views/login.php');
	}

else {
	header('location;http://localhost/ROJAS/admin-index.php ?error=1');
}	
}	

//registro
if(isset($_POST['btn-loogin'])){

	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$password = $_POST['password'];
	$correo_log = $_POST['correo_log'];
	$pass_log = $_POST['pass_log'];

	if ($correo_log == && $pass_log == $password){
		include('views/admin-index.php')
	}
}