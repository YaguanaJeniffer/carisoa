<div class="estiloHome" style="padding-left: 5%; padding-right: 5%; padding-top: 25px;">
<form class="row g-3">
  <div class="col-md-6">
    <label for="inputCod" class="form-label">Codigo Sucursal</label>
    <input type="text" class="form-control" id="inputCod" placeholder="Top Secret" >

  </div>
  <div class="col-md-6">
    <label for="inputNombre" class="form-label">Nombre Sucursal</label>
    <input type="text" class="form-control" id="inputNombre" placeholder="yo pe, quien mas!">
  </div>
  <div class="col-12">
    <label for="inputDireccion" class="form-label">Direccion</label>
    <input type="text" class="form-control" id="inputDireccion" placeholder="En tu corazon baby">
  </div>
  <div class="col-md-6">
    <label for="inputTelefono" class="form-label">Telefono</label>
    <input type="text" class="form-control" id="inputTelefono" placeholder="254284">
  </div>
  <div class="col-md-6">
    <label for="inputCiudad" class="form-label">Ciudad</label>
    <input type="text" class="form-control" id="inputCiudad" placeholder="Aqui toy">
  </div>
  
  <div class="col-12">
    <button type="submit" id="btneditar" class="btn btn-primary">Edita Prro</button>
  </div>
</form>
</div>


<script>
    var editar = document.getElementById('inputCod');
    var btnEdit = document.getElementById('btneditar');
    btnEdit.onclick = function(){
        editar.disable = false;
        alert("sf");
    }

</script>