<?php
session_start();
$val = json_decode(json_encode($_SESSION['usuario']),true);
#print_r( $_SESSION['usuario']) ;
#echo "<br>";
#echo $val[0]['NOM_PLA'];

if ($_SESSION['tipo'] == "sucursal"){
    require_once "controllers/controller.php";
    require_once "models/model.php";
    $mvc = new MvcController();
    $mvc-> plantilla();
}else{   
    require_once "controllers/controllerPlanta.php";
    require_once "models/model.php";
    $mvc = new MvcController();
    $mvc-> plantilla();
}

?>