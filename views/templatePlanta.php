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
    <a class="navbar-brand" href="#"> <img class="avatar" src="img/jf.jpg" alt="jf"> </a>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php?action=home">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Sucursal
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="index.php?action=sucursalQuito">Sucursal Quito</a></li>
            <li><a class="dropdown-item" href="index.php?action=sucursalAmbato">Sucursal Ambato</a></li>
            <li><a class="dropdown-item" href="index.php?action=sucursalLoja">Sucursal Loja </a></li>

          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Pedidos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="index.php?action=enviarPedido">Enviar Pedido</a></li>
            <li><a class="dropdown-item" href="index.php?action=cancelarPedido">Cancelar Pedido</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Articulos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="index.php?action=añadirArticulo">Añadir Articulos</a></li>
            <li><a class="dropdown-item" href="index.php?action=editarArticulo">Editar Articulos</a></li>
            <li><a class="dropdown-item" href="index.php?action=eliminarArticulo">Eliminar Articulos</a></li>
          </ul>
        </li>
      </ul>
        <button type="button" class="btn btn-danger" style="position: relative; right:-77%;">Logout</button>
    </div>
  </div>
</nav>
</div>
<section>
  <?php
  $mvc = new MvcController();
  $mvc-> enlacesPaginasController();
  ?>
</section>
</body>
<footer class="bg-primary" style=text-align:center>
<p ><b>Copyright © 2022 | Carisoa </b> </p>
</footer>
</html>