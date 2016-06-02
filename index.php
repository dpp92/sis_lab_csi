<?php
include "php/controllers/ctrl-Visita.php";

if (isset($_GET['m'])) {
	$pagina = $_GET['m'];
	
} else{
$pagina= "index";
}
//david puc poot
 echo $TEMPLATE->mostrar_template($pagina);
 ?>