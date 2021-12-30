<?php
class EnlacesPaginas {
    public static function enlacesPaginasModel ($enlacesModel){
        if ($enlacesModel == "listar" || 
            $enlacesModel == "servicios" ||
            $enlacesModel == "contactanos")
            {
                $module = "views/modules/".$enlacesModel.".php";
            }
        else if ($enlacesModel == "index")
        {
            $module = "views/modules/home.php";
        }
        else
            $module = "views/modules/home.php";

        return $module;
    }
}

?>