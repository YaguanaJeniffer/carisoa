<?php

    include "models/cargarPedidoSucursal2.php";
    if ( $plantas != null ){
        $objt = json_decode($plantasResult);
        $val = json_decode(json_encode($objt),true);
        sort($val);
        #echo $val[0]['COD_CAB'];
    }

?>

<div style="padding-left: 30px; padding-right: 30px;margin-bottom: 155px;">
<table class="table table-striped">
<thead>
<tr>
    <th scope="col">Pedido N°</th>
    <th scope="col">Fecha</th>
    <th scope="col">Nombre</th>
    <th scope="col">Color</th>
    <th scope="col">Pesco</th>
    <th scope="col">Capacidad</th>
    <th scope="col">Cantidad</th>

</tr>
</thead>
  <tbody>
      <?php
      for ($i=0; $i <sizeof($val) ; $i++) { 
        
      ?>
    <tr>
        <td><?php echo $val[$i]['COD_CAB']; ?></td>
        <td><?php echo $val[$i]['FEC_SUC']; ?></td>
        <td><?php echo $val[$i]['NOM_ART']; ?></td>
        <td><?php echo $val[$i]['COL_ART']; ?></td>
        <td><?php echo $val[$i]['PES_ART']; ?></td>
        <td><?php echo $val[$i]['CAP_ART']; ?></td>
        <td><?php echo $val[$i]['CANTIDAD']; ?></td>
    </tr>
    <?php   
    }
    ?>
</tbody>
</table>
</div>
