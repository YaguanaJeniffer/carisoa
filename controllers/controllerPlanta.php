<?php
class MvcController{
    public function plantilla (){
        include "views/templatePlanta.php";
    }
    public function enlacesPaginasController (){
        if (isset($_GET["action"])){
            $enlacesController = $_GET["action"];
        }else {
            $enlacesController = "inicio.php";
        }
        $respuesta = EnlacesPaginas :: enlacesPaginasModelPlanta ($enlacesController);
        
        include $respuesta;
    }
}

?>