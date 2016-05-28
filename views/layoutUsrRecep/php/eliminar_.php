<?php
/**
 * Created by IntelliJ IDEA.
 * User: DAVID PUC POOT
 * Date: 23/05/2016
 * Time: 02:29 PM
 */

if (isset($_POST["id"])){
    include_once '../../../php/servidor/conn.php';
    $Conexion = new Conect();
    $Conexion->con();

    $id = strip_tags($_POST['id']);
    $sql = "DELETE FROM LISTA WHERE NOMBRE = '$id'";

	$resNroDatos = $Conexion->query($sql);

    include_once 'showList.php';
}

?>