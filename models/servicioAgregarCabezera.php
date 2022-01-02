<?php
header('Acces-Control-Allow-Origin:*');
header('Acces-Control-Allow-Headers: Origin, X-Requested-with, Content-Type, Accept, Authorization');
header('Content-Type: application/json');
header('Acces-Control-Allow-Methods: POST, GET, OPTIONS ');

include 'conexion.php';
if ($_SERVER['REQUEST_METHOD']==='POST'){
    if (isset($_POST['cod_suc_per']) ){
        $cod_cab = $_POST['cod_cab'];
        $cod_suc_per = $_POST['cod_suc_per'];
        $fec_suc = 'current_timestamp()';

        $sqlInsert = "INSERT INTO `cabezera`(`COD_CAB`, `COD_SUC_PER`, `FEC_SUC`) VALUES ('$cod_cab','$cod_suc_per',$fec_suc);";

        if ($mysqli->query($sqlInsert) === TRUE) {

            echo json_encode("Se ingreso Correctamente");
        } else {
            echo json_encode("Error" . $sqlInsert . $mysqli->error);
        }
        $mysqli->close();
    }
}