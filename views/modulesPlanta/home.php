<?php
$val = json_decode(json_encode($_SESSION['usuario']),true);

?>
<div class="estiloHome" style="padding-left: 5%; padding-right: 5%; padding-top: 25px;">
<form class="row g-3" id="formulario" method="POST" action="redireccion.php?action=datos">
  <div class="col-md-6">
    <label for="inputCodigo" class="form-label">Codigo Planta</label>
    <input type="text" class="form-control" id="inputCodigo" name="contraseña" value="<?php echo $val[0]['COD_PLA']; ?>" readonly >
  </div>
  <div class="col-md-6">
    <label for="inputNombre" class="form-label">Nombre Planta</label>
    <input type="text" class="form-control" id="inputNombre" name="usuario" requiered value="<?php echo $val[0]['NOM_PLA']; ?>" readonly>
  </div>
  <div class="col-md-6">
    <label for="inputDireccion" class="form-label">Direccion Planta</label>
    <input type="text" class="form-control" id="inputDireccion" name="inputDireccion"  requiered value="<?php echo $val[0]['DIR_PLA']; ?>" disabled>
  </div>
  <div class="col-md-6">
    <label for="inputTelefono" class="form-label">Telefono Planta</label>
    <input type="text" class="form-control" id="inputTelefono" name="inputTelefono" requiered  value="<?php echo $val[0]['TEL_PLA']; ?>" disabled>
    <input type="hidden" name="btnradio" value="planta" >
  </div>
   
  <div class="col-md-10">
  <button type="button" id="btneditar" class="btn btn-primary" >Edita Prro</button>
  </div>
  <div class="col-md-2">
  <button type="submit" id="guardar" name="guardar" class="btn btn-primary" disabled>Guardar Cambios Prro</button>
  </div>
</form>
</div>


<script>
   var nombre = document.getElementById('inputNombre');
   var direccion = document.getElementById('inputDireccion');
   var telefono = document.getElementById('inputTelefono');
   var btnEdit = document.getElementById('btneditar');
   var btnguardar = document.getElementById('guardar');
   btnEdit.onclick = function(){
   direccion.disabled = false;
   telefono.disabled = false;
   btnEdit.disabled= false;
   btnguardar.disabled=false;
   
  }

</script>

