<?php
header('Acces-Control-Allow-Origin:*');
header('Acces-Control-Allow-Headers: Origin, X-Requested-with, Content-Type, Accept, Authorization');
header('Content-Type: application/json');
header('Acces-Control-Allow-Methods: POST, GET, OPTIONS ');

include 'conexion.php';

$cedula = $_POST['CED_CLI'];
$nombre = $_POST['NOM_CLI'];
$apellido = $_POST['APE_CLI'];
$saldo = $_POST['SAL_CLI'];
$lim_cre = $_POST['LIM_CRE_CLI '];
$descuento = $_POST['DES_CLI'];
$sucursal = $_POST['COD_SUC_PER '];

$sqlinsertar = "INSERT INTO clientes (CED_CLI,NOM_CLI,APE_CLI,SAL_CLI,LIM_CRE_CLI,DES_CLI,COD_SUC_PER)VALUES('$cedula','$nombre','$apellido','$saldo','$lim_cre','$descuento','$sucursal')";

if ($mysqli -> query($sqlinsertar)===TRUE){

    echo json_encode ("ok se guardo correctamene");
}else{
    echo json_encode ("error ".$sqlinsertar.$mysqli->error);
}
$mysqli->close();


?>