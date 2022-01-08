<?php
    include "models/cargarArticulos.php";
    include "models/cargarPlantas.php";
    if ( $result != null ){
        $objt = json_decode($resultJSON);
        $val = json_decode(json_encode($objt),true);
        
        $objt2 = json_decode($plantasResult);
        $val2 = json_decode(json_encode($objt2),true);

        #echo $val[0]['CED_CLI'];
    }

?>

<div style="padding-left: 35%; padding-right: 35%; padding-top: 10px;">
<form class="row g-3" id="plantaForm" method="POST" action="redireccion.php?action=pedidoPlantaEspe">
  <div class="col-12">
    <label for="COD_PLA" class="form-label">Elegir la planta a hacer pedido: </label>
    <input style="width: 450px;" class="form-control" id="COD_PLA" name="COD_PLA" list="opcionesNombre">
        <datalist id="opcionesNombre">
        <?php for ($i=0; $i <sizeof($val2) ; $i++) { 
           
         ?> <option value="<?php echo $val2[$i]['COD_PLA']; ?>"><?php echo $val2[$i]['NOM_PLA']?></option>
           <?php } ?>

        </datalist>
    </div>
  
  <div class="col-md-6" >
  <button type="submit" id="btnPedido" name="btnPedido" class="btn btn-primary">Pedido Planta Prro</button>
  </div>
</form>
</div>


<div style="padding-left: 30px; padding-right: 30px; padding-top: 15px;">
<table class="table table-striped">
<thead>
<tr>
    <th scope="col">Codigo</th>
    <th scope="col">Nombre</th>
    <th scope="col">Color</th>
    <th scope="col">Peso</th>
    <th scope="col">Capacidad</th>
    <th scope="col">Codigo Planta</th>
    <th scope="col">Nombre Planta</th>
</thead>
  <tbody>
      <?php
      for ($i=0; $i <sizeof($val) ; $i++) { 
      ?>
    <tr>
        
        <td><?php echo $val[$i]['COD_ART']; ?></td>
        <td><?php echo $val[$i]['NOM_ART']; ?></td>
        <td><?php echo $val[$i]['COL_ART']; ?></td>
        <td><?php echo $val[$i]['PES_ART']; ?></td>
        <td><?php echo $val[$i]['CAP_ART']; ?></td>
        <td><?php echo $val[$i]['COD_PLA_PER']; ?></td>
        <td><?php echo $val[$i]['NOM_PLA']; ?></td>

    </tr>
    <?php   
    }
    ?>
</tbody>
</table>
</div>