<?php
    if (isset($_POST['forEditar'])){
        include_once "models/servicioEditarArticulo.php";
?>
    <script>
        alert("Se ha editado correctamente");
    </script>
    
<?php
}
$plant = json_decode(json_encode($_SESSION['usuario']),true);
#print_r( $_SESSION['usuario']) ;
#echo "<br>";
#echo $plant[0]['COD_PLA'];
    include "models/cargarArticulos.php";
    if ( $result != null ){
        $objt = json_decode($resultJSON);
        $val = json_decode(json_encode($objt),true);
        #echo $val[0]['CED_CLI'];
    }
    
?>
   

<div style="padding-left: 35%; padding-right: 35%; padding-top: 10px;">
<form class="row g-3" id="formu" method="POST" action="redireccion.php?action=editarArticulo">
  <div class="col-12">
    <label for="COD_ART" class="form-label">Buscar por nombre de Articulo: </label>
    <input style="width: 450px;" class="form-control" id="COD_ART" name="COD_ART" list="opcionesNombre">
        <datalist id="opcionesNombre">
        <?php for ($i=0; $i <sizeof($val) ; $i++) { 
           if ($plant[0]['COD_PLA']== $val[$i]['COD_PLA_PER']){
         ?> <option value="<?php echo $val[$i]['COD_ART']; ?>"><?php echo $val[$i]['NOM_ART'].' - '.$val[$i]['COL_ART']; ?></option>
           <?php }} ?>

        </datalist>
    </div>
  
  <div class="col-md-6" >
  <button type="submit" id="btnEdit" name="btnEdit" class="btn btn-primary">Buscar Articulo</button>
  </div>
</form>
</div>


<div class="estiloHome" style="padding-left: 35%; padding-right: 35%; padding-top: 10px;">
<form class="row g-3" id="formulario" method="POST" action="redireccion.php?action=editarArticulo">
<div class="col-12">
    <input style="width: 450px;" hidden type="text" class="form-control" id="COD_ART_PER" name="COD_ART_PER" >
  </div>
  <div class="col-12">
    <label for="inputNombre" class="form-label">Nombre: </label>
    <input style="width: 450px;" type="text" class="form-control" id="NOM_ART" name="NOM_ART" requiered >
  </div>
  <div class="col-12">
    <label for="inputColor" class="form-label">Color: </label>
    <input style="width: 450px;" type="text" class="form-control" id="COL_ART" name="COL_ART"  requiered >
  </div>
  <div class="col-12">
    <label for="inputNivRies" class="form-label">Nivel de Riesgo:  </label>
    <input style="width: 450px;" readonly type="text" class="form-control" id="NIV_RIE" name="NIV_RIE" requiered >
    </div>
  <div class="col-md-4">
    <label for="inputPeso" class="form-label">Peso: </label>
    <input style="width: 140px;" type="text" class="form-control" id="PES_ART" name="PES_ART" requiered >
  </div>
  <div class="col-md-4">
    <label for="inputCapacidad" class="form-label">Capacidad:  </label>
    <input style="width: 140px;" type="number" min="1" class="form-control" id="CAP_ART" name="CAP_ART" requiered >
  </div>
  <div class="col-md-4">
    <label for="inputCantidad" class="form-label">Cantidad: </label>
    <input style="width: 135px;" type="number" min="1" class="form-control" id="CANTIDAD" name="CANTIDAD" requiered>
     </div>
     <div class="col-md-6">
  <button type="submit" id="forEditar" name="forEditar" class="btn btn-primary">Actualizar Articulo</button>
  </div>
</form>
</div>

<?php

if (isset($_POST['btnEdit'])){
        include_once "models/cargarArticuloUnico.php";
        $articulo = json_decode($resultUnicoJSON);
        $art = json_decode(json_encode($articulo),true);
    ?>
    <script>
    var btnEditar = document.getElementById('formu');
    var codigo = document.getElementById('COD_ART_PER');
    var nombre = document.getElementById('NOM_ART');
    var color = document.getElementById('COL_ART');
    var nivelR = document.getElementById('NIV_RIE');
    var peso = document.getElementById('PES_ART');
    var capacidad = document.getElementById('CAP_ART');
    var cantidad = document.getElementById('CANTIDAD');
   
    codigo.value="<?php echo $art[0]['COD_ART']; ?>";
    nombre.value="<?php echo $art[0]['NOM_ART']; ?>";
    color.value="<?php echo $art[0]['COL_ART']; ?>";
    nivelR.value= "<?php echo $art[0]['NIV_RIE']; ?>";
    peso.value="<?php echo $art[0]['PES_ART']; ?>";
    capacidad.value="<?php echo $art[0]['CAP_ART']; ?>";
    cantidad.value="<?php echo $art[0]['CANTIDAD']; ?>";

    </script>
    <?php } ?>