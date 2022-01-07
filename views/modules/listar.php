<?php
    include "models/cargarClientes.php";
    if ( $result != null ){
        $objt = json_decode($resultJSON);
        $val = json_decode(json_encode($objt),true);
        #echo $val[0]['CED_CLI'];
    }

?>

<div style="padding-left: 30px; padding-right: 30px; padding-top: 15px;">
<table class="table table-striped">
<thead>
<tr>
    <th scope="col">Cedula</th>
    <th scope="col">Nombre</th>
    <th scope="col">Apellido</th>
    <th scope="col">Saldo</th>
    <th scope="col">Descuento</th>
</tr>
</thead>
  <tbody>
      <?php
      for ($i=0; $i <sizeof($val) ; $i++) { 
      ?>
    <tr>
        
        <td><?php echo $val[$i]['CED_CLI']; ?></td>
        <td><?php echo $val[$i]['NOM_CLI']; ?></td>
        <td><?php echo $val[$i]['APE_CLI']; ?></td>
        <td><?php echo $val[$i]['SAL_CLI']; ?></td>
        <td><?php echo $val[$i]['DES_CLI']; ?></td>

    </tr>
    <?php   
    }
    ?>
</tbody>
</table>
</div>