<?php
include_once 'conexion.php';

$CED_CLI = $_POST['CED_CLI'];

$sqlSelect = "SELECT * FROM cliente WHERE CED_CLI = '$CED_CLI'";
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