<?php
    $val = json_decode(json_encode($_SESSION['usuario']),true);
    if (isset($_POST['guardar'])){
        include_once "models/servicioAñadirArticulo.php";
        ?>
        
    <script>
        alert("Se ha editado correctamente");
    </script>

    <?php
        header('Location: '."redireccion.php?action=listar");
    }
?>

<div class="estiloHome" style="padding-left: 35%; padding-right: 35%; padding-top: 25px;">
<form class="row g-3" id="formulario" method="POST" action="redireccion.php?action=añadirArticulo">
  <div class="col-12">
    <label for="inputNombre" class="form-label">Nombre: </label>
    <input style="width: 450px;" type="text" class="form-control" id="inputNombre" name="NOM_ART" requiered >
  </div>
  <div class="col-12">
    <label for="inputColor" class="form-label">Color: </label>
    <input style="width: 450px;" type="text" class="form-control" id="inputColor" name="COL_ART"  requiered >
  </div>
  <div class="col-md-4">
    <label for="inputPeso" class="form-label">Peso: </label>
    <input style="width: 140px;" type="text" class="form-control" id="inputPeso" name="PES_ART" requiered >
    <input type="hidden" name="COD_PLA_PER" value="<?php echo $val[0]['COD_PLA'] ?>" >
  </div>
  <div class="col-md-4">
    <label for="inputCapacidad" class="form-label">Capacidad:  </label>
    <input style="width: 140px;" type="number" min="1" class="form-control" id="inputCapacidad" name="CAP_ART" requiered >
  </div>
  <div class="col-md-4">
    <label for="inputCantidad" class="form-label">Cantidad: </label>
    <input style="width: 135px;" type="number" min="1" class="form-control" id="inputCantidad" name="CANTIDAD" requiered>
     </div>
    <div class="col-md-6" style="padding-top: 20px;">
  <button type="submit" id="guardar" name="guardar" class="btn btn-primary" >Añadir Articulo</button>
  </div>
</form>
</div>