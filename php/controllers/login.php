<?php 
	//funcion para loguear al usuario
	require_once "../servidor/Usuario.php";

	$nameusr = strip_tags($_POST["usuario"]);
	$password = strip_tags($_POST["password"]);
	$nUsuario = new Login();

	$nUsuario->iniciar($nameusr,$password);

 ?>