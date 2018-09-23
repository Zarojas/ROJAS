<?php 

$error =$_GET['error'];
if ($error == 1){
	echo "

	<br>
	<h3 style='rext-align:center;'>
	<span style='color:purple;'>
	ERROR 1
	</span>
	;las contraseñas no coinciden, registrate 
	nuevamente!
	</h3>
	</br>

	";
}

Elseif ($error == 2){
	echo"

	<br>
	<h3 style='rext-align:center;'>
	<span style='color:purple;'>
	ERROR 2
	</span>
	: Los datos de acceso no son correctos, intenta nuevamente !
	</h3>
	</br>

	";
}

?>