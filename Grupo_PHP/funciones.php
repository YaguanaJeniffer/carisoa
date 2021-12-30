<?php
include_once("comunicacionbd.php");
if(!isset($_SESSION)){
	session_start();
}
if(isset($_POST['action'])&&$_POST['action']=='Login'){
	$usuario = $_POST['usuario'];
	$clave = $_POST['clave'];
	$tipo = $_POST['tipo'];
	if ($tipo == "1"){
		$response = validar_usuario_planta($usuario,$clave);
	}else{
		$response = validar_usuario_sucursal($usuario,$clave);
	}
	/*if($response=="1"){
		$_SESSION['usuario']=$usuario;
	}*/
	echo $response;
}