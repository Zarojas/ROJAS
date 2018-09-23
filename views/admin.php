<?php

session_start();
if (isset($_SESSION['nombre'])) {
	echo "Bienvenid@:" . $_SESSION['nombre'];
}

?>