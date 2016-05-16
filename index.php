<?php
include "php/controllers/ctrl-Visita.php";

if (isset($_GET['m'])) {
	$pagina = $_GET['m'];
	
} else{
$pagina= "index";
}

 echo $TEMPLATE->mostrar_template($pagina);
 ?>