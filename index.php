<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>AM - Principal</title>

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

    <h1 class="my-4">Resumen</h1>

    <!-- Marketing Icons Section -->
    <div class="row">
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header">Instrumentos</h4>
          <div class="card-body">
          <h1>
          <?php
              include("conexion.php");
              $con = mysqli_connect($host,$user,$pw) or die ("Problemas al conectar con el servidor...");
              mysqli_select_db($con, $db) or die ("Prolemas al conectar con la base de datos...");
              $registro = mysqli_query($con, "SELECT * FROM ITEMS WHERE CATEGORY='Instrumento'") or die ("Problmeas en consultar:".mysqli_error());
              for ($i=0;$i<mysqli_fetch_array($registro);$i++) { 
                
              } 
              echo $i;
          ?>
          </h1>
            <strong>Prestados: </strong>
            <?php
              include("conexion.php");
              $con = mysqli_connect($host,$user,$pw) or die ("Problemas al conectar con el servidor...");
              mysqli_select_db($con, $db) or die ("Prolemas al conectar con la base de datos...");
              $registro = mysqli_query($con, "SELECT * FROM ITEMS WHERE CATEGORY='Instrumento' AND AVAILABLE='False' ") or die ("Problmeas en consultar:".mysqli_error());
              for ($i=0;$i<mysqli_fetch_array($registro);$i++) { 
                
              } 
              echo $i;
          ?>
            &nbsp;
            <strong>Almacén: </strong> 
            <?php
              include("conexion.php");
              $con = mysqli_connect($host,$user,$pw) or die ("Problemas al conectar con el servidor...");
              mysqli_select_db($con, $db) or die ("Prolemas al conectar con la base de datos...");
              $registro = mysqli_query($con, "SELECT * FROM ITEMS WHERE CATEGORY='Instrumento' AND AVAILABLE='True' ") or die ("Problmeas en consultar:".mysqli_error());
              for ($i=0;$i<mysqli_fetch_array($registro);$i++) { 
                
              } 
              echo $i;
          ?>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Ver Más</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header">Accesorios</h4>
          <div class="card-body">
            <h1>
            <?php
              include("conexion.php");
              $con = mysqli_connect($host,$user,$pw) or die ("Problemas al conectar con el servidor...");
              mysqli_select_db($con, $db) or die ("Prolemas al conectar con la base de datos...");
              $registro = mysqli_query($con, "SELECT * FROM ITEMS WHERE CATEGORY='Accesorio'") or die ("Problmeas en consultar:".mysqli_error());
              for ($i=0;$i<mysqli_fetch_array($registro);$i++) { 
                
              } 
              echo $i;
          ?>
            </h1>
            <strong>Prestados: </strong>
            <?php
              include("conexion.php");
              $con = mysqli_connect($host,$user,$pw) or die ("Problemas al conectar con el servidor...");
              mysqli_select_db($con, $db) or die ("Prolemas al conectar con la base de datos...");
              $registro = mysqli_query($con, "SELECT * FROM ITEMS WHERE CATEGORY='Accesorio' AND AVAILABLE='False' ") or die ("Problmeas en consultar:".mysqli_error());
              for ($i=0;$i<mysqli_fetch_array($registro);$i++) { 
                
              } 
              echo $i;
          ?>
            &nbsp;
            <strong>Almacén: </strong> 
            <?php
              include("conexion.php");
              $con = mysqli_connect($host,$user,$pw) or die ("Problemas al conectar con el servidor...");
              mysqli_select_db($con, $db) or die ("Prolemas al conectar con la base de datos...");
              $registro = mysqli_query($con, "SELECT * FROM ITEMS WHERE CATEGORY='Accesorio' AND AVAILABLE='True' ") or die ("Problmeas en consultar:".mysqli_error());
              for ($i=0;$i<mysqli_fetch_array($registro);$i++) { 
                
              } 
              echo $i;
          ?>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Ver Más</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header">Libros</h4>
          <div class="card-body">
            <h1>
            <?php
              include("conexion.php");
              $con = mysqli_connect($host,$user,$pw) or die ("Problemas al conectar con el servidor...");
              mysqli_select_db($con, $db) or die ("Prolemas al conectar con la base de datos...");
              $registro = mysqli_query($con, "SELECT * FROM ITEMS WHERE CATEGORY='Libro' ") or die ("Problmeas en consultar:".mysqli_error());
              for ($i=0;$i<mysqli_fetch_array($registro);$i++) { 
                
              } 
              echo $i;
          ?>
            </h1>
            <strong>Prestados: </strong>
            <?php
              include("conexion.php");
              $con = mysqli_connect($host,$user,$pw) or die ("Problemas al conectar con el servidor...");
              mysqli_select_db($con, $db) or die ("Prolemas al conectar con la base de datos...");
              $registro = mysqli_query($con, "SELECT * FROM ITEMS WHERE CATEGORY='Libro' AND AVAILABLE='False' ") or die ("Problmeas en consultar:".mysqli_error());
              for ($i=0;$i<mysqli_fetch_array($registro);$i++) { 
                
              } 
              echo $i;
          ?>
            &nbsp;
            <strong>Almacén: </strong>
            <?php
              include("conexion.php");
              $con = mysqli_connect($host,$user,$pw) or die ("Problemas al conectar con el servidor...");
              mysqli_select_db($con, $db) or die ("Prolemas al conectar con la base de datos...");
              $registro = mysqli_query($con, "SELECT * FROM ITEMS WHERE CATEGORY='Libro' AND AVAILABLE='True' ") or die ("Problmeas en consultar:".mysqli_error());
              for ($i=0;$i<mysqli_fetch_array($registro);$i++) { 
                
              } 
              echo $i;
          ?>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Ver Más</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header">Miembros</h4>
          <div class="card-body">
            <h1>
            <?php
              include("conexion.php");
              $con = mysqli_connect($host,$user,$pw) or die ("Problemas al conectar con el servidor...");
              mysqli_select_db($con, $db) or die ("Prolemas al conectar con la base de datos...");
              $registro = mysqli_query($con, "SELECT * FROM STUDENTS ") or die ("Problmeas en consultar:".mysqli_error());
              for ($i=0;$i<mysqli_fetch_array($registro);$i++) { 
                
              } 
              echo $i;
          ?>
            </h1>
            <strong>Estudiantes: </strong>
            <?php
              include("conexion.php");
              $con = mysqli_connect($host,$user,$pw) or die ("Problemas al conectar con el servidor...");
              mysqli_select_db($con, $db) or die ("Prolemas al conectar con la base de datos...");
              $registro = mysqli_query($con, "SELECT * FROM STUDENTS WHERE CATEGORY='Estudiante' ") or die ("Problmeas en consultar:".mysqli_error());
              for ($i=0;$i<mysqli_fetch_array($registro);$i++) { 
                
              } 
              echo $i;
          ?>
            &nbsp;
            <strong>Autodidactas: </strong> 
            <?php
              include("conexion.php");
              $con = mysqli_connect($host,$user,$pw) or die ("Problemas al conectar con el servidor...");
              mysqli_select_db($con, $db) or die ("Prolemas al conectar con la base de datos...");
              $registro = mysqli_query($con, "SELECT * FROM STUDENTS WHERE CATEGORY='Autodidacta' ") or die ("Problmeas en consultar:".mysqli_error());
              for ($i=0;$i<mysqli_fetch_array($registro);$i++) { 
                
              } 
              echo $i;
          ?>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Ver Más</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header">Academias Locales</h4>
          <div class="card-body">
            <h1>
            <?php
              include("conexion.php");
              $con = mysqli_connect($host,$user,$pw) or die ("Problemas al conectar con el servidor...");
              mysqli_select_db($con, $db) or die ("Prolemas al conectar con la base de datos...");
              $registro = mysqli_query($con, "SELECT * FROM CHURCHES ") or die ("Problmeas en consultar:".mysqli_error());
              for ($i=0;$i<mysqli_fetch_array($registro);$i++) { 
                
              } 
              echo $i;
          ?>
            </h1>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Ver Más</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header">Transacciones</h4>
          <div class="card-body">
            <h1>
            <?php
              include("conexion.php");
              $con = mysqli_connect($host,$user,$pw) or die ("Problemas al conectar con el servidor...");
              mysqli_select_db($con, $db) or die ("Prolemas al conectar con la base de datos...");
              $registro = mysqli_query($con, "SELECT * FROM TRANSACTIONS ") or die ("Problmeas en consultar:".mysqli_error());
              for ($i=0;$i<mysqli_fetch_array($registro);$i++) { 
                
              } 
              echo $i;
          ?>
            </h1>
            <strong>Entregas: </strong>
            <?php
              include("conexion.php");
              $con = mysqli_connect($host,$user,$pw) or die ("Problemas al conectar con el servidor...");
              mysqli_select_db($con, $db) or die ("Prolemas al conectar con la base de datos...");
              $registro = mysqli_query($con, "SELECT * FROM TRANSACTIONS WHERE CATEGORY='ENT' ") or die ("Problmeas en consultar:".mysqli_error());
              for ($i=0;$i<mysqli_fetch_array($registro);$i++) { 
                
              } 
              echo $i;
          ?>
            &nbsp;
            <strong>Préstamos: </strong> 
            <?php
              include("conexion.php");
              $con = mysqli_connect($host,$user,$pw) or die ("Problemas al conectar con el servidor...");
              mysqli_select_db($con, $db) or die ("Prolemas al conectar con la base de datos...");
              $registro = mysqli_query($con, "SELECT * FROM TRANSACTIONS WHERE CATEGORY='PRT' ") or die ("Problmeas en consultar:".mysqli_error());
              for ($i=0;$i<mysqli_fetch_array($registro);$i++) { 
                
              } 
              echo $i;
          ?>
           &nbsp;
            <strong>Otros: </strong>
            <?php
              include("conexion.php");
              $con = mysqli_connect($host,$user,$pw) or die ("Problemas al conectar con el servidor...");
              mysqli_select_db($con, $db) or die ("Prolemas al conectar con la base de datos...");
              $registro = mysqli_query($con, "SELECT * FROM TRANSACTIONS WHERE CATEGORY!='ENT' AND CATEGORY!='PRT' ") or die ("Problmeas en consultar:".mysqli_error());
              for ($i=0;$i<mysqli_fetch_array($registro);$i++) { 
                
              } 
              echo $i;
          ?> &nbsp;
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Ver Más</a>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->

    

    
  </div>
  <!-- /.container -->



  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
