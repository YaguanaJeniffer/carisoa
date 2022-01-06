<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
include_once 'conexion.php';

$COD_SUC = $_POST['contraseña'];
$NOM_SUC = $_POST['usuario'];
$DIR_SUC = $_POST['inputDireccion'];
$TEL_SUC = $_POST['inputTelefono'];


$update = "UPDATE planta SET NOM_PLA='$NOM_SUC', DIR_PLA = '$DIR_SUC', TEL_PLA='$TEL_SUC' WHERE COD_PLA = '$COD_SUC'";

if ($mysqli -> query($update)===TRUE){
    
}else{
    echo json_encode ("error ".$update.$mysqli->error);
}
$mysqli->close();






?>