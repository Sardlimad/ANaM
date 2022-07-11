<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>AM - Nuevo Accesorio</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">

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

<h1 class="my-4" align="center">Nuevo Accesorio</b></h1>

<!-- Marketing Icons Section -->



<div class="" >
    <div class="card h-100">
      <h4 class="card-header">Datos Necesarios</h4>
      <div class="card-body">
        <form action="new_accessory2_done.php" method="post" name="newreg" enctype="multipart/form-data">
        <div class="row">
          <!--Columna 1 -->
        <div class="col-lg-4 mb-4">
            <input type="hidden" value="Accesorio" name="catg" >
            
            <label>Tipo:</label>
            <input class="form-control"   type="text" name="tipo">

            <label>Marca:</label>
            <input class="form-control"   type="text" name="marca">

            <label>Modelo:</label>
            <input class="form-control" id="modelo"   type="text" name="modelo">
                        
          </div>
          
          <!-- Columna 2 -->
          <div class="col-lg-4 mb-4">
            <label>No.Serie:</label>
            <input class="form-control"   type="text" name="serie">
            <label>Descripción:</label>
            <textarea rows="4" class="form-control" id="descripcion" maxlength="999" style="resize:none" name="descrip"></textarea>
          </div>

          <!--Columna 3 -->
          <div class="col-lg-4 mb-4">
            <label>Estado:</label>
          
          <p id="radios">
          <label><input class="option" type="radio" name="estado" value="new" checked>Nuevo </label><br>
          <label><input class="option" type="radio" name="estado" value="little_used">Algo Usado  </label><br>
          <label><input class="option" type="radio" name="estado" value="very_used">Muy Usado </label><br>
          <label><input class="option" type="radio" name="estado" value="old">Viejo</label>
          </p>
          <br>
         </div>    
        </div>

      </div>

      <!-- Botones -->
      <div class="card-footer" align="center">
        <input type="reset" class="btn btn-primary" value="Cancelar"/>
        <input type="submit" class="btn btn-primary" value="Registrar"/>
      </div>

    </form>
    
    </div>
  </div>
</div>



</div>
  <!-- /.container -->

 

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
