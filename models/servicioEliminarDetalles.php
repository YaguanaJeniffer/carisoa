<?php
header('Acces-Control-Allow-Origin:*');
header('Acces-Control-Allow-Headers: Origin, X-Requested-with, Content-Type, Accept, Authorization');
header('Content-Type: application/json');
header('Acces-Control-Allow-Methods: POST, GET, OPTIONS ');

include 'conexion.php';

if ($_SERVER['REQUEST_METHOD']==='POST'){
    if (isset($_POST['cod_cab_per'])) {
        $cod_cab_per = $_POST['cod_cab_per'];


        $sqlDelete = "DELETE FROM `detalle` 
            WHERE COD_CAB_PER = '$cod_cab_per';";

        if ($mysqli->query($sqlDelete) === TRUE) {

            echo json_encode("Se elimino correctamente");
        } else {
            echo json_encode("Error" . $sqlDelete . $mysqli->error);
        }
        $mysqli->close();
    }
}