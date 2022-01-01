<?php
header('Acces-Control-Allow-Origin:*');
header('Acces-Control-Allow-Headers: Origin, X-Requested-with, Content-Type, Accept, Authorization');
header('Content-Type: application/json');
header('Acces-Control-Allow-Methods: POST, GET, OPTIONS ');

include 'conexion.php';

if ($_SERVER['REQUEST_METHOD']==='POST'){
    if (isset($_POST['cod_cab_per'])) {
        $cod_cab = $_POST['cod_cab_per'];
        $cod_art = $_POST['cod_art_per'];
        $cantidad = $_POST['cantidad'];

        $sqlInsert = "UPDATE detalle 
            set COD_ART_PER='$cod_art', CANTIDAD='$cantidad'
            WHERE COD_CAB_PER = '$cod_cab';";

        if ($mysqli->query($sqlInsert) === TRUE) {

            echo json_encode("Ok se actualizo correctamente");
        } else {
            echo json_encode("Error" . $sqlInsert . $mysqli->error);
        }
        $mysqli->close();
    }
}


