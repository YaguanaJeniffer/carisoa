<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");

include_once 'conexion.php';

$username = $_POST['usuario'];
$password = $_POST['contraseña'];
$tipo = $_POST['btnradio'];

$sql= $tipo=="sucursal" ? "SELECT * FROM sucursal WHERE NOM_SUC= '$username' AND COD_SUC = '$password'" : "SELECT * FROM planta WHERE NOM_PLA= '$username' AND COD_PLA = '$password'";


$respuesta = $conn -> query ($sql);
    $result = array ();

    if ( $respuesta -> num_rows > 0 ){
            while ( $fila = $respuesta-> fetch_assoc()){
             array_push($result, $fila);
    }
        }else {
         $result = null;
}
$resultJSON = json_encode($result);


?>