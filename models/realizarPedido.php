<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");

include 'conexion.php';


$val = json_decode(json_encode($_SESSION['usuario']),true);
$sucPer = $val[0]['COD_SUC'];

$sqlInsertCabecera = "INSERT INTO cabezera (COD_SUC_PER,FEC_SUC)VALUES('$sucPer',current_timestamp())";

if ($conn -> query($sqlInsertCabecera)===TRUE){
    #echo json_encode ("ok se guardo correctamene cabezera");

}else{
    echo json_encode ("error ".$sqlInsertCabecera.$conn->error);
}

function agregarArticulosCab($codArti, $canArti){
    #$sqlArticuloIngresado = "SELECT MAX(COD_ART) FROM ARTICULO";
    include "conexion.php";

    $sqlSelect = "SELECT CANTIDAD FROM articuloplanta WHERE COD_ART_PER = '$codArti'";
    $respuesta = $conn->query($sqlSelect);


    if ( $respuesta->num_rows > 0 ){
        
    while($res = $respuesta->fetch_assoc())
    $cantidad= $res['CANTIDAD'];
       
    }else{
        $cantidad = "No hay cantidad";
    }

    $sqlinsertar = "INSERT INTO detalle (COD_CAB_PER,COD_ART_PER,CANTIDAD)VALUES((SELECT MAX(COD_CAB) FROM cabezera),'$codArti','$canArti')";
    if ($mysqli -> query($sqlinsertar)===TRUE){
        
    $cantidad =$cantidad - $canArti;
    if( $cantidad <= 4){
        $nivRiesgo = "Alto";
    }elseif (7 >= $cantidad and $cantidad  >= 5){
        $nivRiesgo = "Medio";
    }else{
        $nivRiesgo = "Bajo";
    }
    #echo   $cantidad;
       
    $update = "UPDATE articuloplanta SET CANTIDAD='$cantidad', NIV_RIE = '$nivRiesgo' WHERE COD_ART_PER='$codArti'";
    if ($mysqli -> query($update)===TRUE){
        
    }else{
    echo json_encode ("error ".$update.$mysqli->error);
    }
        #echo json_encode ("ok se guardo correctamene producto");
    }else{
        echo json_encode ("error ".$sqlinsertar.$mysqli->error);
    }
}

?>