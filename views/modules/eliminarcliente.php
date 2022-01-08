<?php
    if (isset($_POST['forEditar'])){
?>

<?php
        include_once "models/servicioEliminarCliente.php";
?>
        <script>
            alert("Se ha eliminado correctamente");
        </script>

<?php
    }
    include "models/cargarClientes.php";
    if ( $result != null ){
        $objt = json_decode($resultJSON);
        $val = json_decode(json_encode($objt),true);
        #echo $val[0]['CED_CLI'];
    }   
?>
   

<div style="padding-left: 35%; padding-right: 35%; padding-top: 10px;">
<form class="row g-3" id="formu" method="POST" action="redireccion.php?action=eliminarcliente">
  <div class="col-12">
    <label for="CED_CLI" class="form-label">Buscar por nombde del Cliente: </label>
    <input style="width: 450px;" class="form-control" id="CED_CLI" name="CED_CLI" list="opcionesNombre">
        <datalist id="opcionesNombre">
        <?php for ($i=0; $i <sizeof($val) ; $i++) { 
           
         ?> <option value="<?php echo $val[$i]['CED_CLI']; ?>"><?php echo $val[$i]['NOM_CLI'].' '.$val[$i]['APE_CLI']; ?></option>
           <?php } ?>

        </datalist>
    </div>
  
  <div class="col-md-6" >
  <button type="submit" id="btnEdit" name="btnEdit" class="btn btn-primary">Buscar Prro</button>
  </div>
</form>
</div>


<div class="estiloHome" style="padding-left: 35%; padding-right: 35%; padding-top: 10px;">
<form class="row g-3" id="formulario" method="POST" action="redireccion.php?action=eliminarcliente">
  <div class="col-12">
    <label for="CED_CLI_PER" class="form-label">Cedula: </label>
    <input style="width: 450px;" type="text" class="form-control" id="CED_CLI_PER" name="CED_CLI_PER" >
  </div>
  <div class="col-12">
    <label for="NOM_CLI" class="form-label">Nombre: </label>
    <input style="width: 450px;" type="text" class="form-control" id="NOM_CLI" name="NOM_CLI" requiered >
  </div>
  <div class="col-12">
    <label for="APE_CLI" class="form-label">Apellido: </label>
    <input style="width: 450px;" type="text" class="form-control" id="APE_CLI" name="APE_CLI"  requiered >
  </div>
  <div class="col-md-4">
    <label for="SAL_CLI" class="form-label">Saldo Cliente: </label>
    <input style="width: 140px;" pattern="^[0-9]{0,12}([,][0-9]{2,2})?$" type="text" class="form-control" id="SAL_CLI" name="SAL_CLI" requiered >
  </div>
  <div class="col-md-4">
    <label for="DES_CLI" class="form-label">Descuentos:  </label>
    <input style="width: 140px;" type="number" class="form-control" id="DES_CLI" name="DES_CLI" requiered >
  </div>
  <div class="col-md-4">
    <label for="LIM_CRE_CLI" class="form-label">Limite Credito: </label>
    <input style="width: 135px;" type="number" class="form-control" id="LIM_CRE_CLI" name="LIM_CRE_CLI" requiered>
  </div>  
  <div class="col-md-6">
  <button type="submit" id="forEditar" name="forEditar" class="btn btn-primary" >Eliminar Cliente</button>
  </div>
</form>
</div>

<?php

if (isset($_POST['btnEdit'])){
        include_once "models/cargarClienteUnico.php";
        $cliente = json_decode($resultUnicoJSON);
        $cli = json_decode(json_encode($cliente),true);
    ?>
    <script>
    var btnEditar = document.getElementById('formu');
    var cedula = document.getElementById('CED_CLI_PER');
    var nombre = document.getElementById('NOM_CLI');
    var apellido = document.getElementById('APE_CLI');
    var saldo = document.getElementById('SAL_CLI');
    var limiteCredito = document.getElementById('LIM_CRE_CLI');
    var descuento = document.getElementById('DES_CLI');
    var codSuc = document.getElementById('COD_SUC_PER');
    
    cedula.value="<?php echo $cli[0]['CED_CLI']; ?>";
    nombre.value="<?php echo $cli[0]['NOM_CLI']; ?>";
    apellido.value="<?php echo $cli[0]['APE_CLI']; ?>";
    saldo.value= "<?php echo $cli[0]['SAL_CLI']; ?>";
    limiteCredito.value="<?php echo $cli[0]['LIM_CRE_CLI']; ?>";
    descuento.value="<?php echo $cli[0]['DES_CLI']; ?>";

    </script>
    <?php } ?>
