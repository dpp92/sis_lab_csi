<?php
	//añadimos las constantes del archivo externo.
	require_once 'conf_bd.php';

	/*
	* Se guarda las constantes en variables 
	*para uso en la clase.
	*
	*/
	class Conect
	{
		 var $conexion;
		function con(){
				$con = ibase_connect(DB_HOST,DB_USR,DB_PASS);
				if (!$con) {
					# code...
					echo "Error" + ibase_errcode($con);

					exit;
				}
				return $this->conexion=$con;

		}

		function query($sentencia){
			$respuesta = ibase_query($this->conexion,$sentencia);
			return $respuesta;
		}

		function close()
		{	
			$inicio = $this->con();
			$cerrar = ibase_close($inicio);
			echo "Se cerró la conexión al servidor".$cerrar;
		}

		
	}
	
?>