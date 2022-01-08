<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");

include_once 'conexion.php';

#$val = json_decode(json_encode($_SESSION['usuario']),true);
#$codigo = $val[0]['COD_SUC'];
$sqlSelect = "SELECT a.*,p.COD_PLA_PER, l.NOM_PLA FROM articulo a, articuloplanta p, planta l WHERE a.COD_ART = p.COD_ART_PER AND p.COD_PLA_PER=l.COD_PLA";
$respuesta = $conn -> query ($sqlSelect);
$result = array ();


if ( $respuesta -> num_rows > 0 ){
    while ( $filaEstudiante = $respuesta-> fetch_assoc()){
        array_push($result, $filaEstudiante);
    }
}else {
    $result = "No hay productos";
}

$resultJSON = json_encode($result);

?>