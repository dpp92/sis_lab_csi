<?php 


class template{

 
 function tpl($p){ // $p = nombre de la plantilla a mostrar

 //@ob_start(); si estas en un HOST real, descomenta esta lina

 require('../../views/layoutUsrRecep/plantillas/'.$p.'.php');
	ob_start();
 return ob_get_clean();

    }

 function mostrar_template($pagina){

 $this->tpl($pagina);

 }

}
$TEMPLATE = new template; // instaciamos la clase




?>
