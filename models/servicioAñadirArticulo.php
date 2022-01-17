<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");

include 'conexion.php';


$nombre = $_POST['NOM_ART'];
$color = $_POST['COL_ART'];
$peso = $_POST['PES_ART'];
$capacidad = $_POST['CAP_ART'];
$cantidad = $_POST['CANTIDAD'];
$planta = $_POST['COD_PLA_PER'];

if( $cantidad <= 4){
    $nivelR = "Alto";
}elseif (7 >= $cantidad and $cantidad  >= 5){
    $nivelR = "Medio";
}else{
    $nivelR = "Bajo";
}

$sqlinsertarArt = "INSERT INTO articulo (NOM_ART,COL_ART,PES_ART,CAP_ART)VALUES('$nombre','$color','$peso','$capacidad')";

if ($mysqli -> query($sqlinsertarArt)===TRUE){
    #echo json_encode ("ok se guardo correctamene");

    #$sqlArticuloIngresado = "SELECT MAX(COD_ART) FROM ARTICULO";

    $sqlinsertar = "INSERT INTO articuloplanta (CANTIDAD,NIV_RIE,COD_ART_PER,COD_PLA_PER)VALUES('$cantidad','$nivelR',(SELECT MAX(COD_ART) FROM ARTICULO),'$planta')";
    if ($mysqli -> query($sqlinsertar)===TRUE){

       # echo json_encode ("ok se guardo correctamene");
    }else{
        echo json_encode ("error ".$sqlinsertar.$mysqli->error);
    }
}else{
    echo json_encode ("error ".$sqlinsertar.$mysqli->error);
}
$mysqli->close();

?>