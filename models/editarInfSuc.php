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
$CIU_SUC = $_POST['inputCiudad'];

$update = "UPDATE sucursal SET NOM_SUC='$NOM_SUC', DIR_SUC = '$DIR_SUC', TEL_SUC='$TEL_SUC', CIU_SUC = '$CIU_SUC' WHERE COD_SUC = '$COD_SUC'";

if ($mysqli -> query($update)===TRUE){
    
}else{
    echo json_encode ("error ".$update.$mysqli->error);
}
$mysqli->close();






?>