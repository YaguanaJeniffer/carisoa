<?php
if (isset($_POST['envio'])){
    include "models/servicioLogin.php";
    if ( $result != null ){
        session_start();
        $bjt = json_decode($resultJSON);
        echo json_decode($obj,true);
        $_SESSION['usuario'] = $bjt;
        $_SESSION['tipo'] = $tipo;
        #$_SESSION['conUsu'] = $result[0];
        #$_SESSION['dirUsu'] = $result[2];
        #$_SESSION['telUsu'] = $result[3];
        header('Location: '."redireccion.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>Equipo Alfa Buena Maravilla Onda Dinamita Escuadron Lobo</title>
</head>
<body style="background-color: black;">
    
<div class="divFormulario">
<form class="formularioLogin" method="POST" action="index.php">
    <div class="divAvatarLogin">
        <img src="img/login.png" alt="jf" class="avatarLogin" >
    </div>
  <div class="mb-3">
    <label for="usuario" class="form-label" style="color: rgb(124, 248, 227);">Usuario</label>
    <input type="text" class="form-control" name="usuario" id="usuario">
  </div>
  <div class="mb-3">
    <label for="contraseña" class="form-label" style="color: rgb(124, 248, 227);">Contraseña</label>
    <input type="password" class="form-control" name="contraseña" id="contraseña">
  </div>

<div class="btn-group-vertical" role="group" aria-label="Basic radio toggle button group">

  <input type="radio" class="btn-check" name="btnradio"  value="sucursal" id="btnSucursal" autocomplete="off" checked>
  <label class="btn btn-outline-primary" for="btnSucursal">Sucursal</label>

  <input type="radio" class="btn-check" name="btnradio" value="planta" id="btnPlanta" autocomplete="off">
  <label class="btn btn-outline-primary" for="btnPlanta">Planta</label>

</div>

<div style="text-align: center;">
      <button type="submit" class="btn btn-primary" id="envio" name="envio" style="color: rgb(124, 248, 227);" >Ingresar</button>
</div>
</form>

</div>
</body>
</html>