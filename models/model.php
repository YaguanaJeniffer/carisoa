<?php
class EnlacesPaginas {
    public static function enlacesPaginasModel ($enlacesModel){
        if ($enlacesModel == "listar" || 
            $enlacesModel == "añadirP" ||
            $enlacesModel == "añadircliente" ||
            $enlacesModel == "editarcliente" ||
            $enlacesModel == "eliminarcliente" ||
            $enlacesModel == "mostrarPedidoSuc" ||
            $enlacesModel == "datos" ||
            $enlacesModel == "pedidoPlantaEspe" ||
            $enlacesModel == "enviarPedido" ||
            $enlacesModel == "eliminarpedido")
            {
                $module = "views/modules/".$enlacesModel.".php";
            }
        else if ($enlacesModel == "home")
        {
            $module = "views/modules/home.php";
        }
        else if ($enlacesModel == "mostrarPedidoSuc&suc=1"||
                $enlacesModel == "mostrarPedidoSuc&suc=2"||
                $enlacesModel == "mostrarPedidoSuc&suc=3")
        {
            $module = "views/modules/mostrarPedidoSuc.php";
        }
        else
            $module = "views/modules/home.php";

        return $module;
    }

    public static function enlacesPaginasModelPlanta ($enlacesModel){
        if ($enlacesModel == "sucursalLatacunga" || 
            $enlacesModel == "sucursalAmbato" ||
            $enlacesModel == "sucursalSalcedo" ||
            $enlacesModel == "listarPedidos" ||
            $enlacesModel == "añadirArticulo" ||
            $enlacesModel == "editarArticulo"||
            $enlacesModel == "datos"||
            $enlacesModel == "listarArticulos"||
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