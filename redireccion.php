<?php
session_start();
if ($_SESSION['nomUsu'] == "sucursal"){
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