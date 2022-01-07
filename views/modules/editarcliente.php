<?php
    include "models/cargarClientes.php";
    if ( $result != null ){
        $objt = json_decode($resultJSON);
        $val = json_decode(json_encode($objt),true);
        #echo $val[0]['CED_CLI'];
    }

?>

<div class="estiloHome" style="padding-left: 35%; padding-right: 35%; padding-top: 25px;">
<form class="row g-3" id="formulario" method="POST" action="redireccion.php?action=editarcliente">
  <div class="col-12">
    <label for="CED_CLI" class="form-label">Buscar por nombde del Cliente: </label>
    <input style="width: 450px;" class="form-control" id="CED_CLI" name="CED_CLI" list="opcionesNombre">
        <datalist id="opcionesNombre">
        <?php for ($i=0; $i <sizeof($val) ; $i++) { 
           
         ?> <option value="<?php echo $val[$i]['CED_CLI']; ?>"><?php echo $val[$i]['NOM_CLI'].' '.$val[$i]['APE_CLI']; ?></option>
           <?php } ?>

        </datalist>
  </div>
  
  <div class="col-md-6" style="padding-top: 20px;">
  <button type="submit" id="btnEdit" name="btnEdit" class="btn btn-primary">Editar Prro</button>
  </div>
</form>
</div>


<div class="estiloHome" style="padding-left: 35%; padding-right: 35%; padding-top: 25px;">
<form class="row g-3" id="formulario" method="POST" action="redireccion.php?action=añadircliente">
  <div class="col-12">
    <label for="inputCodigo" class="form-label">Cedula: </label>
    <input style="width: 450px;" type="text" class="form-control" id="inputCodigo" name="CED_CLI" >
  </div>
  <div class="col-12">
    <label for="inputNombre" class="form-label">Nombre: </label>
    <input style="width: 450px;" type="text" class="form-control" id="inputNombre" name="NOM_CLI" requiered >
  </div>
  <div class="col-12">
    <label for="inputDireccion" class="form-label">Apellido: </label>
    <input style="width: 450px;" type="text" class="form-control" id="inputDireccion" name="APE_CLI"  requiered >
  </div>
  <div class="col-md-4">
    <label for="inputTelefono" class="form-label">Saldo Cliente: </label>
    <input style="width: 140px;" pattern="^[0-9]{0,12}([,][0-9]{2,2})?$" type="text" class="form-control" id="inputTelefono" name="SAL_CLI" requiered >
  </div>
  <div class="col-md-4">
    <label for="inputTelefono" class="form-label">Descuentos:  </label>
    <input style="width: 140px;" type="number" class="form-control" id="inputTelefono" name="DES_CLI" requiered >
  </div>
  <div class="col-md-4">
    <label for="inputCiudad" class="form-label">Limite Credito: </label>
    <input style="width: 135px;" type="number" class="form-control" id="inputCiudad" name="LIM_CRE_CLI" requiered>
    <input type="hidden" name="COD_SUC_PER" value="<?php echo $val[0]['COD_SUC'] ?>" >
  </div>
  
  <div class="col-md-6" style="padding-top: 20px;">
  <button type="submit" id="guardar" name="guardar" class="btn btn-primary" onsubmit="guardar()">Añadir Clientes Prro</button>
  </div>
</form>
</div>