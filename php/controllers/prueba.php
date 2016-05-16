<!DOCTYPE html>
<html>
<head>
	<title>Prueba de conexión</title>
</head>
<body>
	<?php 
		require_once("conn.php");

		$conectando = new Conect();
		$conectando->con();

		$pedirUsuarios = "SELECT * FROM USUARIOS";

		echo "Aqui va a aparecer algo"; 
		$peticion = $conectando->query($pedirUsuarios);

		while($row = ibase_fetch_object($peticion)){
			echo "<br>",$row->USR_NAME,"\n",$row->USR_PWD;
		}

		$conectando->close();
	 ?>
</body>
</html>