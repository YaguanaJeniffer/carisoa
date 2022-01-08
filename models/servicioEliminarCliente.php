<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");

include_once 'conexion.php';

$cedula= $_POST['CED_CLI_PER'];

$delete = "DELETE FROM cliente WHERE CED_CLI = '$cedula'";

if ($mysqli -> query($delete)===TRUE){

    
}else{
    echo json_encode ("error ".$delete.$mysqli->error);
}
$mysqli->close();
