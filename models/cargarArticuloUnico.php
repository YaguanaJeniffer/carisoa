<?php
include_once 'conexion.php';

$COD_ART = $_POST['COD_ART'];

$sqlSelect = "SELECT a.*, p.CANTIDAD , p.NIV_RIE FROM articulo a, articuloplanta p WHERE COD_ART = '$COD_ART' AND a.COD_ART = p.COD_ART_PER";
$respuesta = $conn -> query ($sqlSelect);
$resUnicoCliente = array ();


if ( $respuesta -> num_rows > 0 ){
    while ( $filaEstudiante = $respuesta-> fetch_assoc()){
        array_push($resUnicoCliente, $filaEstudiante);
    }
}else {
    $resUnicoCliente = "No hay clientes P";
}

$resultUnicoJSON = json_encode($resUnicoCliente);
#echo json_encode($resUnicoCliente);


?>