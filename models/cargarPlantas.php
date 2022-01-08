<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");

include_once 'conexion.php';

$sqlSelect = "SELECT * FROM planta ";
$respuesta = $conn -> query ($sqlSelect);
$plantas = array ();


if ( $respuesta -> num_rows > 0 ){
    while ( $filaEstudiante = $respuesta-> fetch_assoc()){
        array_push($plantas, $filaEstudiante);
    }
}else {
    $plantas = "No hay clientes P";
}

$plantasResult = json_encode($plantas);
#echo json_encode($plantas);


?>