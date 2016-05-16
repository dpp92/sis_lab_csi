<?php 

require '../../php/controllers/ctrl-Usr.php';


if (isset($_GET['m'])) {
	$pagina = $_GET['m'];
	
} else{
$pagina= "home";
}

 echo $TEMPLATE->mostrar_template($pagina);



 ?>