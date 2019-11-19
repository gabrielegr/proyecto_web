	
<?php

require_once('../crud/crud_laboratorio.php');
require_once('laboratorio.php');
require_once('../crud/conexion.php');
$crud=new CrudLaboratorio();
$laboratorio= new Laboratorio();	
$listaLaboratorios=$crud->mostrarOcupado();
?>


<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Labos DEI</title>
	<link rel="stylesheet" href="css/style.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->


	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
</head>
<body>
	<header class="full-width NavBarP">
		<div class="full-width NavBarP-Logo">Dei UCA</div>
		<nav class="full-width NavBarP-Nav">
			<ul class="full-width list-unstyled">
				<li><a href="index.html">Inicio</a></li>
				<li><a href="#!">Contactenos</a></li>
				
				<li><a href="#!">Acerca de</a></li>
				<li>
					<a href="#!" class="btn-login"><i class="fa fa-user" aria-hidden="true"></i> Log In</a>
					<div class="full-width Login">
						<p class="text-center">
							<form action="">
								<div class="form-group">
									<label for="email"><i class="fa fa-envelope" aria-hidden="true"></i> E-mail</label>
									<input type="text" class="form-control" name="email" id="email">
								</div>
								<div class="form-group">
									<label for="password"><i class="fa fa-lock" aria-hidden="true"></i> Contraseña</label>
									<input type="text" class="form-control" name="password" id="password">
								</div>
								<a href="#!">No recuerdo mi contraseña</a>
								<br>
								<p class="text-center">
									<a href="#!" class="btn btn-danger btn-login" style="display:inline-block !important;">CANCELAR</a>
									<button type="submit" class="btn btn-primary">INICIAR SESIÓN</button>
								</p>
							</form>
							<hr>
							<p class="text-center">¿Aún no tienes cuenta?</p>
							<a href="#!">CRÉATE UNA GRATIS</a>
						</p>
					</div>
				</li>
			</ul>
		</nav>
		<i class="fa fa-bars visible-xs btn-menuMobile ShowMenuMobile" aria-hidden="true"></i>
	</header>
