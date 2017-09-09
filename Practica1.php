<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Practica 1 | Sistemas Operativos II</title>
<meta name="description" content="Escalabilidad de los SOD|
Problemática:Cuellos de botella y sobrecarga en servidores|
Práctica:Liberar al sistema de trabajos que no sean
necesarios">
<meta name="author" content="Sidney Ricardo Garcia Rodriguez">
<link rel="stylesheet" type="text/css" href="Boostrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="Bootstrap/dist/css/main.css">
<script type="text/javascript" src="Boostrap/dist/js/boostrap.min.js"></script>
<script type="text/javascript" src="Boostrap/dist/js/jquery-3.2.1.js"></script>
</head>

<body>

<h1 align="Center">Sistemas Operativos II</h1>
<p align="Center">Sidney Ricardo Garcia Rdz. </p>
<p align="Center">Practica: Liberar al sistema de trabajo innecesario. </p>

<div class="container">
<hr>
<div class="row justify-content-between">
	<div class="col-lg-offset-2 col-lg-4">
		<div class="alert alert-primary" role="alert">
          Validación de lado del cliente
        </div>

<form action="/action_page.php">
	Nombre:<br>
<input type="text" pattern="[A-Za-z]+" minlength="5" maxlength="40" name="nombre" placeholder="Nombre" class="form-control">
<br>
	Email:<br>
<input type="email" name="Correo" placeholder="Correo" class="form-control">
<br>
	Telefono:<br>
<input type="text" pattern="[0-9]+" name="telefono" placeholder="Telefono">
<br><br>
<input type="submit" value="Enviar" class="btn btn-primary">
</form>
</div>



<div class="col-lg-4">
<div class="alert alert-primary" role="alert">
          Validación de lado del cliente
         </div>
<form action="exito.php" method="POST">
	Nombre:<br>
<input type="text" name="Nombre" placeholder="Nombre" class="form-control">
<br>
	Email:<br>
<input type="text" name="Correo" placeholder="Correo" class="form-control">
<br>
	Telefono:<br>
<input type="text" name="Telefono" placeholder="Telefono" class="form-control">
<br><br>
<input type="submit" value="Enviar" name="enviar" class="btn btn-success">

</form>
</div>
</div><hr>
</div>

<div class="row justify-content-center">
	<?php if (isset($_GET['mensaje'])) {
		switch ($_GET['mensaje']){
			case '1': echo "
				<div class='callout callout-danger'>
				<h4><i class = 'fa fa-fw fa-ban'></i> Error de Ingreso</h4>
				<p>Tu nombre de usuario o contraseña son incorrectos</p>
				</div>";

				break;
			case '2': echo "
				<div class='callout callout-danger'>
				<h4><i class ='fa fa-fw fa-ban'></i>Validacion Correcta!</h4>
				<p>El formato del email es correcto</p>
				</div>";

				break;
			case '3': echo "
				<div class='callout callout-danger'>
				<h4><i class ='fa fa-fw fa-ban'></i>Error de Validacion!</h4>
				<p>El correo no tiene el formato establecido</p>
				</div>";

				break;
			case '4': echo "
				<div class='callout callout-danger'>
				<h4><i class ='fa fa-fw fa-ban'></i>Error de Validacion!</h4>
				<p>El numero de telefono no es valido</p>
				</div>";				
					break;
		}}
	?>
</div>
</body>
</html>