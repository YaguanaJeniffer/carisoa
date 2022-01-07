<?php
    include "models/cargarClientes.php";
    if ( $result != null ){
        $objt = json_decode($resultJSON);
        $val = json_decode(json_encode($objt),true);
        #echo $val[0]['CED_CLI'];

    }

?>


<div>
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
    <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>descuento</td>
    </tr>
<tr>
    <th scope="row">2</th>
    <td>Jacob</td>
    <td>Thornton</td>
    <td>@fat</td>
</tr>
<tr>
    <th scope="row">3</th>
    <td colspan="2">Larry the Bird</td>
    <td>@twitter</td>
</tr>
</tbody>
</table>
</div>