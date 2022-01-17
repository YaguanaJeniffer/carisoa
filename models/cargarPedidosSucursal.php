<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");

include_once 'conexion.php';



$sqlSelect = "SELECT c.FEC_SUC, c.COD_CAB, d.COD_ART_PER, d.CANTIDAD,a.NOM_ART,a.COL_ART,a.PES_ART,a.CAP_ART FROM cabezera c , detalle d, articulo a
WHERE C.COD_CAB=D.COD_CAB_PER AND c.COD_SUC_PER='$codigo' AND D.COD_ART_PER=A.COD_ART ";

$respuesta = $mysqli -> query ($sqlSelect);
$plantas = array ();


if ( $respuesta -> num_rows > 0 ){
    while ( $filaEstudiante = $respuesta-> fetch_assoc()){
        array_push($plantas, $filaEstudiante);
    }
}else {
    $plantas = "No hay pedidos";
}

$plantasResult = json_encode($plantas);
#echo json_encode($plantas);


?>