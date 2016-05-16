<?php 
	require_once 'conn.php';

class Login 
{
	private $Conexion;
	private $usr;
	private $pwd;


	function iniciar ($nick, $pass){
		$this->usr = $nick;
		$this->pwd = $pass;
		//Instanciar conexion a bd
		$this->Conexion = new Conect();
		//Abrimos una sesion
		$this->Conexion->con();

		//Creamos la sentencia 
		$sentencia = "SELECT * FROM USUARIOS WHERE USR_NAME ='$this->usr'  ";

		//Se manda el sql
		$resultado = $this->Conexion->query($sentencia);
		//Se procesa los datos recibidos
		while ($row = ibase_fetch_object($resultado)) {

			if ($row->USR_NAME==$this->usr) {
				if ($row->USR_PWD==$this->pwd) {
					# code...
				
				#El usuario existe
				session_start();
				$_SESSION['autentica'] = "SIP";
				$_SESSION['usuario']     = $this->usr;
				echo "bien";
				}
				else{
					echo "Contraseña invalida";
				}
			}else{
				echo "error";
			}
		}
	}
	function close (){
		session_start();
		session_destroy();
		session_unset();
		echo "salir";				
	}
	
}

 ?>