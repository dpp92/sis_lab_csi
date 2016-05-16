<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Laboratorios Clinicos</title>
	<link rel="stylesheet" href="libs/css/main.css">
	<script type="text/javascript" src="libs/JS/script.js"></script>
	<script type="text/javascript" src="libs/JS/jquery-2.1.0.min.js"></script>
</head>
<body>
	<div id="head">
		<div id="img">
			<img src="digilab.png"id="logo" title="Logo de la empresa" alt="Logo Empresa">
		</div>
		<div id="empresa">
			<h2>Laboratorio Clinico</h2>
			<h3>Nombre de la empresa</h3>
		</div>
	</div>

	<div id="formulario">
	<h3>Login</h3>
	<form id="login" action="#" method="post" enctype="application/x-www-form-urlencoded">
	
		<label for="usrname">Usuario  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input id="usrname"type="text" name="usrname"/></label> 
	
	
		<label for="usrpass">Contraseña&nbsp;&nbsp;<input id="pwd"type="password" name="usrpass"/></label> 
	
	<div id="check">
		<label for="saveusr"><input type="checkbox" name="saveusr" onclick="getDatos();" id="check">Recordar Contraseña</label>
	</div>
		
		
		<button id="submit"type="button" >Iniciar</button>
		
	</form>
		
	</div>
	
</body>
</html>