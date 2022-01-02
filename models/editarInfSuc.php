<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
include_once 'conexion.php';

$cedula = $_POST['inputCod'];
$nombre = $_POST['EST_NOMBRE'];
$apellido = $_POST['EST_APELLIDO'];
$direccion = $_POST['EST_DIRECCION'];
$telefono = $_POST['EST_TELEFONO'];

$update = "UPDATE estudiantes SET EST_CEDULA = '$cedula', EST_NOMBRE='$nombre', EST_APELLIDO = '$apellido', EST_DIRECCION='$direccion', EST_TELEFONO = '$telefono' WHERE EST_CEDULA = '$cedula'";

if ($mysqli -> query($update)===TRUE){

    echo json_encode ("ok se guardo correctamene");
}else{
    echo json_encode ("error ".$update.$mysqli->error);
}
$mysqli->close();






?>