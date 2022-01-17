<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");

include 'conexion.php';

$cedula = $_POST['CED_CLI'];
$nombre = $_POST['NOM_CLI'];
$apellido = $_POST['APE_CLI'];
$saldo = $_POST['SAL_CLI'];
$lim_cre = $_POST['LIM_CRE_CLI'];
$descuento = $_POST['DES_CLI'];
$sucursal = $_POST['COD_SUC_PER'];

$sqlinsertar = "INSERT INTO cliente (CED_CLI,NOM_CLI,APE_CLI,SAL_CLI,LIM_CRE_CLI,DES_CLI,COD_SUC_PER)VALUES('$cedula','$nombre','$apellido','$saldo','$lim_cre','$descuento','$sucursal')";

if ($mysqli -> query($sqlinsertar)===TRUE){

    #echo json_encode ("ok se guardo correctamene");
}else{
    echo json_encode ("error ".$sqlinsertar.$mysqli->error);
}
$mysqli->close();


?>