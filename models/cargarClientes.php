<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Origin, X-Requested-with, Content-type, Accept, Authorization');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');

include_once 'conexion.php';

$sqlSelect = "SELECT * FROM cliente";
$respuesta = $conn -> query ($sqlSelect);
$result = array ();


if ( $respuesta -> num_rows > 0 ){
    while ( $filaEstudiante = $respuesta-> fetch_assoc()){
        array_push($result, $filaEstudiante);
    }
}else {
    $result = "No hay clientes P";
}

#$resultJSON = json_encode($result);
#echo json_encode($result);


?>