<?php
header('Acces-Control-Allow-Origin:*');
header('Acces-Control-Allow-Headers: Origin, X-Requested-with, Content-Type, Accept, Authorization');
header('Content-Type: application/json');
header('Acces-Control-Allow-Methods: POST, GET, OPTIONS ');

include 'conexion.php';

if ($_SERVER['REQUEST_METHOD']==='POST'){
    if (isset($_POST['cod_cab'])) {
        $cod_cab = $_POST['cod_cab'];


        $sqlDelete = "DELETE FROM `cabezera` 
            WHERE COD_CAB = '$cod_cab';";

        if ($mysqli->query($sqlDelete) === TRUE) {

            echo json_encode("Se elimino correctamente");
        } else {
            echo json_encode("Error" . $sqlDelete . $mysqli->error);
        }
        $mysqli->close();
    }
}