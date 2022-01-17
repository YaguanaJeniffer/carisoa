<?php
    include "models/cargarArticulosEspe.php";

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
    <th scope="col">Codigo</th>
    <th scope="col">Nombre</th>
    <th scope="col">Color</th>
    <th scope="col">Peso</th>
    <th scope="col">Capacidad</th>
    <th scope="col">Nombre Planta</th>
    <th scope="col"></th>
</thead>
  <tbody>
      <?php
      for ($i=0; $i <sizeof($val) ; $i++) { 
        if ($val[$i]['CANTIDAD'] > 0){
      ?>
    <tr>
        
        <td><?php echo $val[$i]['COD_ART']; ?></td>
        <td id="nom<?php echo $val[$i]['COD_ART'];?>";><?php echo $val[$i]['NOM_ART']; ?></td>
        <td><?php echo $val[$i]['COL_ART']; ?></td>
        <td><?php echo $val[$i]['PES_ART']; ?></td>
        <td><?php echo $val[$i]['CAP_ART']; ?></td>
        <td><?php echo $val[$i]['NOM_PLA']; ?></td>
        <td><input type="number" min="1" value="1" max="<?php echo $val[$i]['CANTIDAD'];?>" name="canArti" id="<?php echo $val[$i]['COD_ART']; ?>" style="width: 50px; margin-right: 20px;">
            <input type="button" class="btn btn-primary" value="Agregar" onclick="agregarCarrito(<?php echo $val[$i]['COD_ART']; ?>,'<?php echo $val[$i]['NOM_ART'];?>')"></td>

    </tr>
    <?php
        }   
    }
    ?>
</tbody>
</table>

</div>


<table class="table">
  <thead>
    <tr>
      <th scope="col">Codigo de Articulo</th>
      <th scope="col">Nombre del Articulo</th>
      <th scope="col">Cantidad de Articulo</th>
    </tr>
  </thead>
  <tbody id="tabla">
    
  </tbody>
</table>
<button type="button" onclick="enviarDatos()" value="EnviarPedido">Enviar Pedido</button>


<script>
    let pedidos=[];
    let incrementar = false;
    let sop;
    function agregarCarrito (codArti,i){
        pedidos.forEach(function(valor,index){
          if (valor[0]==codArti){
            incrementar = true;
          }
        })
      if (!incrementar){
        pedidos.push([codArti,document.getElementById(codArti).value]);
        //alert(pedidos[0]);
        let row_2 = document.createElement('tr');
        let row_2_data_1 = document.createElement('td');
        row_2_data_1.innerHTML = codArti;
        let row_2_data_2 = document.createElement('td');
        row_2_data_2.innerHTML = i;
        let row_2_data_3 = document.createElement('td');
        row_2_data_3.innerHTML = document.getElementById(codArti).value;
        row_2.appendChild(row_2_data_1);
        row_2.appendChild(row_2_data_2);
        row_2.appendChild(row_2_data_3);

        let btnDestruir = document.createElement('button');
        btnDestruir.innerHTML = "Eliminar";
        btnDestruir.onclick = function (){
          pedidos.forEach(function(valor,index){
          if (valor[0]==codArti){
            sop = index;
          }
          })
          pedidos.splice(sop,1);
          row_2.remove();
        }
        row_2.appendChild(btnDestruir);
        
        document.getElementById("tabla").appendChild(row_2);
      }else{
        incrementar = false;
      }
    }
    function enviarDatos(){
        let url ="redireccion.php?action=enviarPedido";
        var envios = {"pedidos": pedidos};
        $.post('redireccion.php?action=enviarPedido', {
              "dacom": pedidos,
              
            },function(data) {
                //console.log("aqui toy",data);
                document.write(data);
          });        
    }
</script>