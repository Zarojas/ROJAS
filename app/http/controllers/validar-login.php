<?php 
$pass_log = $_POST['pass_log'];
$email_log = $_POST['email_log'];

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$pass = $_POST['pass'];

if ($email:log == $email && $pass_log == $pass) {
	session_start();
	$_SESSION ['nombre'] = $_POST['nombre'];
	header('Location: http://localhost/ROJAS/views/front/admin/index.php');
	
}else{
	header('Location: http://localhost/ROJAS/views/front/pages/login.php')
}


?>