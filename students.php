<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>AM - Miembros</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
    <img src="media/logo.png" width="5%"/>
      <a class="navbar-brand" href="index.php">Academia Nacional de Música</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Ver
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
              <a class="dropdown-item" href="inventory.php">Inventario</a>
              <a class="dropdown-item" href="students.php">Miembros</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Agregar
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
              <a class="dropdown-item" href="n_instrument.php">Instrumento</a>
              <a class="dropdown-item" href="n_accessory.php">Accesorio</a>
              <a class="dropdown-item" href="n_book.php">Libro</a>
              <hr>
              <a class="dropdown-item" href="n_student.php">Miembro</a>
              <a class="dropdown-item" href="n_local.php">Acad. Local</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Options
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
              <a class="dropdown-item" href="myaccount.php">Editar</a>
              <a class="dropdown-item" href="n_user.php">Añadir Usuario</a>
              <a class="dropdown-item" href="logout">Cerrar Sesión</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    

    <!-- Marketing Icons Section -->

    <!-- /.row -->
    <div id="agrupar-buscar">
      <h1 class="my-4" id="col1">Miembros</h1>
      <input type="text" id="buscar" class="form-control" onkeyup="buscar()" placeholder="Buscar en Tabla" title="Empieza a escribir para buscar">
    </div>

<table class="table-fill" id="tabla">
<thead>
<tr>
<th class="text-left">Ctg</th>
<th class="text-left">Nombre Completo</th>
<th class="text-left">Academia Local</th>
<th class="text-left">Teléfono</th>
<th class="text-left">&nbsp;</th>
</tr>
</thead>
<tbody class="table-hover">
<tr>
<td class="text-left">Estudiante</td>
<td class="text-left">David Sardiñas Lima</td>
<td class="text-left">Amarillas</td>
<td class="text-left">+53 59419974</td>
<td class="text-left"><input type="button" class="btn btn-info" value="Ver Ficha"></td>
</tr>
<tr>
<td class="text-left">Autodidacta</td>
<td class="text-left">Tony Pereira Rosales</td>
<td class="text-left">Amarillas</td>
<td class="text-left">+53 00000000</td>
<td class="text-left"><input type="button" class="btn btn-info" value="Ver Ficha"></td>
</tr>
</tbody>
</table>

    

  </div>
  <!-- /.container -->

 

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="js/buscador.js"></script>

</body>

</html>
