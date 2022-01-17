<?php
require_once "models/realizarPedido.php";

foreach ($_POST['dacom'] as $arrayPedidosIndividual){
    agregarArticulosCab($arrayPedidosIndividual[0],$arrayPedidosIndividual[1]);
}
$direccion=json_decode(json_encode($_SESSION['usuario']),true)[0]['COD_SUC'];
header('Location: '."redireccion.php");
include "views/modules/home.php";
?>
