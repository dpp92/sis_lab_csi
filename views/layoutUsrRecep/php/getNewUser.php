<?php
/**
 * Created by IntelliJ IDEA.
 * User: DAVID PUC POOT
 * Date: 27/05/2016
 * Time: 10:01 AM
 * Se crea el controlador para recibir el formulario de agregar usuario, aqui procesamos los datos y los guardamos en la
 * BD si los datos son correctos
 */
include 'models/seguridad.php';
$insSeguridad = new Seguridad();
$insSeguridad->checkValidSession();
include_once '../../../php/servidor/conn.php';
$Conexion = new Conect();
$Conexion->con();
$queryInit = "INSERT INTO USUARIO(";

foreach($_POST as $nombre_campo => $valor){
    $findme = 'input';
    $pos = strpos($nombre_campo,$findme );
    //dentro del foreach evaluaremos cada entrada de post que tenemos
    //esto con la finalidad de insertar los datos en el campo correcto de la base de datos
    if ($nombre_campo == "nombre"){

       echo $queryInit = $queryInit."$nombre_campo) VALUES($valor) WHERE id=" . $id;
    }elseif ($nombre_campo == 'apellidos'){
        echo $queryInit = $queryInit."$nombre_campo) VALUES($valor) returning id ";
    }elseif ($nombre_campo == 'fechaIng'){
        echo $queryInit = $queryInit."$nombre_campo) VALUES($valor) returning id ";
    }elseif ($nombre_campo == 'cedula'){
        echo $queryInit = $queryInit."$nombre_campo) VALUES($valor) returning id ";
    }elseif ($nombre_campo == 'sueldo'){
        echo $queryInit = $queryInit."$nombre_campo) VALUES($valor) returning id ";
    }elseif ($nombre_campo == 'direccion'){
        echo $queryInit = $queryInit."$nombre_campo) VALUES($valor) returning id ";
    }elseif ($nombre_campo == 'telefono'){
        echo $queryInit = $queryInit."$nombre_campo) VALUES($valor) returning id ";
    }elseif ($nombre_campo == 'fecNac'){
        echo $queryInit = $queryInit."$nombre_campo) VALUES($valor) returning id ";
    }elseif ($nombre_campo == 'desc'){
        echo $queryInit = $queryInit."$nombre_campo) VALUES($valor) returning id ";
    }elseif ($nombre_campo == 'contrasena'){
        echo $queryInit = $queryInit."$nombre_campo) VALUES($valor) returning id ";
    }elseif($pos!==false){
        echo $queryInit = $queryInit."$nombre_campo) VALUES($valor) returning id ";
   } else{
        echo "no datos";
    }

}

?>