<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "soacariño"; 

#$servername = "localhost"; 
#$username = "id18188624_usuariocari"; 
#$password = "Luis135713571357#"; 
#$dbname = "id18188624_carisoa"; 

$conn = mysqli_connect($servername, $username, $password, $dbname);
$mysqli = new mysqli($servername, $username, $password, $dbname); 

if(!$mysqli)
{ 
    die("Error en la conexion consulte al administrador".mysqli_connect_error());
}

?>