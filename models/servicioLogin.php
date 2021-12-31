<?php
include 'conexion.php';
$conn=new Conexion();
if ($_SERVER['REQUEST_METHOD']=='POST'){
    if (isset($_POST['user']) && isset($_POST['psw']) && isset($_POST['tipo']) ){
        $sql="";
        $user=$_POST['user'];
        $psw=$_POST['psw'];
        $tipo=$_POST['tipo'];
        if ($tipo == 1){
            $sql="SELECT * FROM sucursal WHERE NOM_SUC= $user AND COD_SUC = $psw";
        }else{
            $sql="SELECT * FROM planta WHERE NOM_PLA= $user  AND COD_PLA = $psw";
        }
        $sqlcons=$conn->prepare($sql);
        $sqlcons->execute();
        $sqlcons->setFetchMode(PDO::FETCH_ASSOC);
        //header('HTTP/1.1 200');
        echo json_encode($sqlcons->fetchAll());
        exit;
    }

}