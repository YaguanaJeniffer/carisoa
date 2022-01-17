<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");

include_once 'conexion.php';

$codigo= $_POST['COD_ART_PER'];

$deletePlanta = "DELETE FROM articuloplanta WHERE COD_ART_PER = '$codigo'";

if ($mysqli -> query($deletePlanta)===TRUE){

    $delete = "DELETE FROM articulo WHERE COD_ART = '$codigo'";

    if ($mysqli -> query($delete)===TRUE){
        
    }else{
        echo json_encode ("error ".$delete.$mysqli->error);
    }
 
}else{
    echo json_encode ("error ".$deletePlanta.$mysqli->error);
}

$mysqli->close();




