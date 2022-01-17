<?php
    include "models/mostrarSucursales.php";

    if ( $sucursalResult != null ){
        $objt = json_decode($sucursalResult);
        $val = json_decode(json_encode($objt),true);

        #echo $val[0]['CED_CLI'];
    }

?>

<div class="estiloHome" style="padding-left: 5%; padding-right: 5%; padding-top: 25px;">
<form class="row g-3" id="formulario" method="POST" action="redireccion.php?action=home">
  <div class="col-md-6">
    <label for="inputCodigo" class="form-label">Codigo Sucursal</label>
    <input type="text" class="form-control" id="inputCodigo" name="contraseña" value="<?php echo $val[2]['COD_SUC']; ?>" readonly >
  </div>
  <div class="col-md-6">
    <label for="inputNombre" class="form-label">Nombre Sucursal</label>
    <input type="text" class="form-control" id="inputNombre" name="usuario" requiered value="<?php echo $val[2]['NOM_SUC']; ?>" readonly>
  </div>
  <div class="col-12">
    <label for="inputDireccion" class="form-label">Direccion Sucursal</label>
    <input type="text" class="form-control" id="inputDireccion" name="inputDireccion"  requiered value="<?php echo $val[2]['DIR_SUC']; ?>" disabled>
  </div>
  <div class="col-md-6">
    <label for="inputTelefono" class="form-label">Telefono Sucursal</label>
    <input type="text" class="form-control" id="inputTelefono" name="inputTelefono" requiered  value="<?php echo $val[2]['TEL_SUC']; ?>" disabled>
  </div>
  <div class="col-md-6">
    <label for="inputCiudad" class="form-label">Ciudad Sucursal</label>
    <input type="text" class="form-control" id="inputCiudad" name="inputCiudad" requiered value="<?php echo $val[2]['CIU_SUC']; ?>" disabled>
    <input type="hidden" name="btnradio" value="sucursal" >
  </div>
  
  <div class="col-md-10">
  <button type="submit" id="btneditar" class="btn btn-primary" >Home</button>
  </div>

</form>
</div>
