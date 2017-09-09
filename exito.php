<?php
ini_set("display_errors", 1);
if (isset($_POST['Nombre'])) {
	
	$nombre = $_POST['Nombre'];
	$email = $_POST['Correo'];
	$telefono = $_POST['Telefono'];

	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		header("Location:Practica1.php?mensaje=2");
		}else{
		header("Location:Practica1.php?mensaje=3");
		}

}
else{

	header("Location:Practica1.php?mensaje=1");

}
?>