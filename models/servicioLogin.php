<?php
header('Acces-Control-Allow-Origin:*');
header('Acces-Control-Allow-Headers: Origin, X-Requested-with, Content-Type, Accept, Authorization');
header('Content-Type: application/json');
header('Acces-Control-Allow-Methods: POST, GET, OPTIONS ');

include 'conexion.php';

if ($_SERVER['REQUEST_METHOD']==='POST'){
    if (isset($_POST['user']) && isset($_POST['psw']) && isset($_POST['tipo']) ){
        $sql="";
        $user=$_POST['user'];
        $psw=$_POST['psw'];
        $tipo=$_POST['tipo'];
        if ($tipo == 1){
            $sqlSelect="SELECT * FROM sucursal WHERE NOM_SUC=$user AND COD_SUC =$psw";
        }else{
            $sqlSelect="SELECT * FROM planta WHERE NOM_PLA=$user  AND COD_PLA =$psw";
        }
        $respuesta= $conn->query($sqlSelect);
        $result = array();
        if($respuesta->num_rows > 0)
        {
            while($usuarios = $respuesta->fetch_assoc())
            {
                array_push($result, $usuarios);
            }
        }
        else
        {
            $result = "No hay Usuario";
        }
        echo json_encode($result);
    }


}
