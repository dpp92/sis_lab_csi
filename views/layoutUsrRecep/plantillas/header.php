<?php 
	include '../../php/controllers/seguridad.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Laboratorios Clinicos</title>
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="../../libs/JS/jquery-2.1.0.min.js"></script>
</head>
<body>
	<div id="head">
		<div id="img">
			<img id="logo" src="img/LogoDigilab.jpg">
		</div>
		<div id="empresa">
			<h2>Laboratorio Clinico</h2>
			<h3>Nombre de la empresa</h3>
		</div>
		<div id="boxUser">
			<p><?php echo $_SESSION['usuario'] ?></p>
			<p><a id="closeSession"href="#">Cerrar Sesión</a></p>
		</div>

	</div>
