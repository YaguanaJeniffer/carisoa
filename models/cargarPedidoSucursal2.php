<?php


include_once 'conexion.php';

$codigo = $_GET['suc'];

$sqlSelect = "SELECT C.*, D.*, A.* FROM cabezera C, detalle D, articulo A
WHERE C.COD_CAB=D.COD_CAB_PER AND C.COD_SUC_PER='$codigo' AND D.COD_ART_PER=A.COD_ART";

$respuesta = $conn -> query ($sqlSelect);
$plantas = array ();


if ( $respuesta -> num_rows > 0 ){
    while ( $filaEstudiante = $respuesta-> fetch_assoc()){
        array_push($plantas, $filaEstudiante);
    }
}else {
    $plantas = "No hay pedidos";
}

$plantasResult = json_encode($plantas);
#echo $plantasResult;


?>