<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");

include_once "conexion.php";

$cedula = $_POST['CED_CLI_PER'];
$nombre = $_POST['NOM_CLI'];
$apellido = $_POST['APE_CLI'];
$saldo = $_POST['SAL_CLI'];
$lim_cre = $_POST['LIM_CRE_CLI'];
$descuento = $_POST['DES_CLI'];


$update = "UPDATE cliente SET NOM_CLI='$nombre',APE_CLI='$apellido',SAL_CLI='$saldo',LIM_CRE_CLI='$lim_cre',DES_CLI='$descuento' WHERE CED_CLI='$cedula'";

if ($mysqli -> query($update)===TRUE){

    
}else{
    echo json_encode ("error ".$update.$mysqli->error);
}
$mysqli->close();





?>