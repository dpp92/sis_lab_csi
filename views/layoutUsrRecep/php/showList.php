<?php
	include_once '../../../php/servidor/conn.php';


	
	//$dato1 = sanitize($_POST["dato"]);
	$paginaActual = strip_tags($_POST["partida"]);
	//conectamos a la bd
	$Conexion = new Conect();
	$Conexion->con();
	//Obtenemos el numero de registros
	$sqlNroDatos = "SELECT * FROM LISTA ";
	$resNroDatos = $Conexion->query($sqlNroDatos);

	$count = 0;
	while ($row[$count] = ibase_fetch_assoc($resNroDatos)){
    $count++;
	}
	//Una vez obtenido el numero de registros, calculamos el numero de paginas
	$nroLotes = 6;
	$nroPaginas = ceil($count/$nroLotes);
	$lista = '';
	$tabla = '';
	//Con el numero de paginas podemos mandar a visualizar los menus

	if($paginaActual > 1){
        $lista = $lista.'<li><a onclick="ajaxCall('.($paginaActual-1).');">Anterior</a></li>';
    }
    for($i=1; $i<=$nroPaginas; $i++){
        if($i == $paginaActual){
            $lista = $lista.'<li ><a name='.$i.' class="active" onclick="ajaxCall('.$i.');">'.$i.'</a></li>';
        }else{
            $lista = $lista.'<li><a onclick="ajaxCall('.$i.');">'.$i.'</a></li>';
        }
    }
    if($paginaActual < $nroPaginas){
        $lista = $lista.'<li><a onclick="ajaxCall('.($paginaActual+1).');">Siguiente</a></li>';
    }
  	
  	$limit = $nroLotes;
  	if($paginaActual <= 1){
  		$salto = 0;
  	}else{
  		$salto =($limit*$paginaActual)-$limit;
  		
  	}


  	$sqlJump = "SELECT FIRST $limit SKIP $salto * FROM LISTA";

  	$ejecutar = $Conexion->query($sqlJump);
					while($resp = ibase_fetch_object($ejecutar)){
						$mostrar=1;
						//$_SESSION['BITID']     = $resp->BITID;
						$arrayRespuesta[] = array( "nombres" => $resp->NOMBRE,
						  						   "usuario"=> $resp->USER,
						  						   "grupo" => $resp->GRUPO,
						  						   "telefono" => $resp->TELEFONO,
						  						   "correo" => $resp->CORREO,
						  						   );
					}//fin while
					if ($mostrar==1) {
						# code...
						$array [] = array("tabla"=>$arrayRespuesta,
										  "lista"=>$lista,);

						echo json_encode($array);
					}else{
						echo "nodatos";
					}
					
 ?>