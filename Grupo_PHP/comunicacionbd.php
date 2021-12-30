<?php
include "conexion.php"; 
function validar_usuario_planta($usuario,$clave){
	$conexion=conectar_BD();
	$sqlUsuario = "SELECT * FROM planta where NOM_PLA='$usuario' AND COD_PLA='$clave';";	
	$respuesta = $conexion->query($sqlUsuario);
	$filas = $respuesta->num_rows;
	return $filas;
	
}
function validar_usuario_sucursal($usuario,$clave){	
	$sqlUsuario = "SELECT * FROM sucursal where NOM_SUC = '$usuario' AND COD_SUC = '$clave';";
	$respuesta = $conn->query($sqlUsuario);
	$filas = $respuesta->num_rows;
	return $filas;
}
?>