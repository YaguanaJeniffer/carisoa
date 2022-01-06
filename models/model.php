<?php
class EnlacesPaginas {
    public static function enlacesPaginasModel ($enlacesModel){
        if ($enlacesModel == "listar" || 
            $enlacesModel == "añadirP" ||
            $enlacesModel == "añadircliente" ||
            $enlacesModel == "editarcliente" ||
            $enlacesModel == "eliminarcliente" ||
            $enlacesModel == "editarpedido" ||
            $enlacesModel == "datos" ||
            $enlacesModel == "eliminarpedido")
            {
                $module = "views/modules/".$enlacesModel.".php";
            }
        else if ($enlacesModel == "home")
        {
            $module = "views/modules/home.php";
        }
        else
            $module = "views/modules/home.php";

        return $module;
    }

    public static function enlacesPaginasModelPlanta ($enlacesModel){
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
        else if ($enlacesModel == "home")
        {
            $module = "views/modulesPlanta/home.php";
        }
        else
            $module = "views/modulesPlanta/home.php";

        return $module;
    }
}

?>