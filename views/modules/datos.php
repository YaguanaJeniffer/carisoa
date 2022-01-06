<?php
$val = json_decode(json_encode($_SESSION['usuario']),true);

    
if (isset($_POST['guardar'])){
  include "models/editarInfSuc.php";
echo "holi";
  include "models/servicioLogin.php";
  $bjt = json_decode($resultJSON);
  $_SESSION['usuario'] = $bjt;
  $_SESSION['tipo'] = $tipo;
  echo "aqui toy";
}
?>
<div class="estiloHome" style="padding-left: 5%; padding-right: 5%; padding-top: 25px;">
<form class="row g-3" id="formulario" method="POST" action="redireccion.php">
  <div class="col-md-6">
    <label for="inputCodigo" class="form-label">Codigo Sucursal</label>
    <input type="text" class="form-control" id="inputCodigo" name="contraseña" value="<?php echo $_POST['contraseña']; ?>" readonly >
  </div>
  <div class="col-md-6">
    <label for="inputNombre" class="form-label">Nombre Sucursal</label>
    <input type="text" class="form-control" id="inputNombre" name="usuario" requiered value="<?php echo $_POST['usuario']; ?>" readonly>
  </div>
  <div class="col-12">
    <label for="inputDireccion" class="form-label">Direccion Sucursal</label>
    <input type="text" class="form-control" id="inputDireccion" name="inputDireccion"  requiered value="<?php echo $_POST['inputDireccion']; ?>" disabled>
  </div>
  <div class="col-md-6">
    <label for="inputTelefono" class="form-label">Telefono Sucursal</label>
    <input type="text" class="form-control" id="inputTelefono" name="inputTelefono" requiered  value="<?php echo $_POST['inputTelefono']; ?>" disabled>
  </div>
  <div class="col-md-6">
    <label for="inputCiudad" class="form-label">Ciudad Sucursal</label>
    <input type="text" class="form-control" id="inputCiudad" name="inputCiudad" requiered value="<?php echo $_POST['inputCiudad']; ?>" disabled>
    <input type="hidden" name="btnradio" value="sucursal" >
  </div>
  
  <div class="col-md-2">
  <button type="submit" id="guardar" name="guardar" class="btn btn-primary" >Home</button>
  </div>
</form>
</div>
