<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>Equipo Alfa Buena Maravilla Onda Dinamita Escuadron Lobo </title>
</head>
<body>
<div>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="redireccion.php?action=home"> <img class="avatar" src="img/jf.jpg" alt="jf"> </a>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="redireccion.php?action=home">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Sucursal
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="redireccion.php?action=sucursalQuito">Sucursal Quito</a></li>
            <li><a class="dropdown-item" href="redireccion.php?action=sucursalAmbato">Sucursal Ambato</a></li>
            <li><a class="dropdown-item" href="redireccion.php?action=sucursalLoja">Sucursal Loja </a></li>

          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Pedidos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="redireccion.php?action=enviarPedido">Enviar Pedido</a></li>
            <li><a class="dropdown-item" href="redireccion.php?action=cancelarPedido">Cancelar Pedido</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Articulos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="redireccion.php?action=añadirArticulo">Añadir Articulos</a></li>
            <li><a class="dropdown-item" href="redireccion.php?action=editarArticulo">Editar Articulos</a></li>
            <li><a class="dropdown-item" href="redireccion.php?action=eliminarArticulo">Eliminar Articulos</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <button type="button" class="btn btn-danger" id="btnLogout" >Logout</button>
  </div>
</nav>
</div>
<script>
  var boton = document.getElementById("btnLogout");
  boton.onclick = function (){
    window.location="index.php";
  }
</script>
<section>
  <?php
  $mvc = new MvcController();
  $mvc-> enlacesPaginasController();
  ?>
</section>
<footer class="bg-primary" style="text-align:center; position: fixed;bottom: 0px;width: 100%;height: 35px;">
  <p ><b>Copyright © 2022 | Carisoa </b> </p>
</footer>
</body>

</html>