<?php
$val = json_decode(json_encode($_SESSION['usuario']),true);
?>
<div class="estiloHome" style="padding-left: 5%; padding-right: 5%; padding-top: 25px;">
<form class="row g-3">
  <div class="col-md-6">
    <label for="inputCod" class="form-label">Codigo Sucursal</label>
    <input type="text" class="form-control" id="inputCod" value="<?php echo $val[0]['COD_SUC'];
 ?>" disabled >
  </div>
  <div class="col-md-6">
    <label for="inputNombre" class="form-label">Nombre Sucursal</label>
    <input type="text" class="form-control" id="inputNombre"  requiered pattern="[A-Z]{3}[0-9]{4}"
 value="<?php echo $val[0]['NOM_SUC'];
 ?>" disabled>
  </div>
  <div class="col-12">
    <label for="inputDireccion" class="form-label">Direccion Sucursal</label>
    <input type="text" class="form-control" id="inputDireccion"  requiered value="<?php echo $val[0]['DIR_SUC'];
 ?>" disabled>
  </div>
  <div class="col-md-6">
    <label for="inputTelefono" class="form-label">Telefono Sucursal</label>
    <input type="text" class="form-control" id="inputTelefono" requiered  value="<?php echo $val[0]['TEL_SUC'];
 ?>" disabled>
  </div>
  <div class="col-md-6">
    <label for="inputCiudad" class="form-label">Ciudad Sucursal</label>
    <input type="text" class="form-control" id="inputCiudad" requiered value="<?php echo $val[0]['CIU_SUC'];
 ?>" disabled>
  </div>
  
  <div class="col-md-10">
  <button type="button" id="btneditar" class="btn btn-primary" >Edita Prro</button>
  </div>
  <div class="col-md-2">
  <button type="submit" id="guardar" class="btn btn-primary" disabled>Guardar Cambios Prro</button>
  </div>
</form>
</div>


<script>
   var nombre = document.getElementById('inputNombre');
   var direccion = document.getElementById('inputDireccion');
   var telefono = document.getElementById('inputTelefono');
   var ciudad = document.getElementById('inputCiudad');
   var btnEdit = document.getElementById('btneditar');
   var btnguardar = document.getElementById('guardar');
   btnEdit.onclick = function(){
   nombre.disabled = false;
   direccion.disabled = false;
   telefono.disabled = false;
   ciudad.disabled = false;
   btnEdit.disabled= false;
   btnguardar.disabled=false;
   }
</script>