<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");

include_once 'conexion.php';

$val = json_decode(json_encode($_SESSION['usuario']),true);
$codigo = $val[0]['COD_PLA'];

$sqlSelect = "SELECT c.FEC_SUC, c.COD_CAB, s.NOM_SUC , d.COD_ART_PER, d.CANTIDAD,a.NOM_ART,a.COL_ART,a.PES_ART,a.CAP_ART 
FROM cabezera c , detalle d, articulo a, articuloplanta ap, sucursal s
WHERE c.COD_CAB=d.COD_CAB_PER AND ap.COD_PLA_PER='$codigo' AND s.COD_SUC=c.COD_SUC_PER AND ap.COD_ART_PER=a.COD_ART AND d.COD_ART_PER=a.COD_ART";
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