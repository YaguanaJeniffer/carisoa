<?php
class EnlacesPaginas {
    public static function enlacesPaginasModel ($enlacesModel){
        if ($enlacesModel == "sucursalQuito" || 
            $enlacesModel == "sucursalAmbato" ||
            $enlacesModel == "sucursalLoja" ||
            $enlacesModel == "sucursalGuayaquil" ||
            $enlacesModel == "enviarPedido" ||
            $enlacesModel == "cancelarPedido" ||
            $enlacesModel == "añadirArticulo" ||
            $enlacesModel == "editarArticulo"||
            $enlacesModel == "eliminarArticulo")
            {
                $module = "views/modulesPlanta/".$enlacesModel.".php";
            }
        else if ($enlacesModel == "index")
        {
            $module = "views/modulesPlanta/home.php";
        }
        else
            $module = "views/modulesPlanta/home.php";

        return $module;
    }
}

?>