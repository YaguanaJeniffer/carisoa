<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");

include_once "conexion.php";

$codigo = $_POST['COD_ART_PER'];
$nombre = $_POST['NOM_ART'];
$color = $_POST['COL_ART'];
$peso = $_POST['PES_ART'];
$capacidad = $_POST['CAP_ART'];
$cantidad = $_POST['CANTIDAD'];

if( $cantidad <= 4){
    $nivelR = "Alto";
}elseif (7 >= $cantidad and $cantidad  >= 5){
    $nivelR = "Medio";
}else{
    $nivelR = "Bajo";
}

$update = "UPDATE articulo SET NOM_ART='$nombre',COL_ART='$color',PES_ART='$peso',CAP_ART='$capacidad' WHERE COD_ART='$codigo'";

if ($mysqli -> query($update)===TRUE){

    $update = "UPDATE articuloplanta SET CANTIDAD ='$cantidad',NIV_RIE='$nivelR' WHERE COD_ART_PER ='$codigo'";

    if ($mysqli -> query($update)===TRUE){
          
    }else{
        echo json_encode ("error ".$update.$mysqli->error);
    }

}else{
    echo json_encode ("error ".$update.$mysqli->error);
}
$mysqli->close();
