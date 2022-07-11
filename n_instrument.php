<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>AM - Nuevo Instrumento</title>

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

<h1 class="my-4" align="center">Nuevo Instrumento</b></h1>

<!-- Marketing Icons Section -->



<div class="" >
    <div class="card h-100">
      <h4 class="card-header">Datos Necesarios</h4>
      <div class="card-body">
        <form action="new_accessory2_done.php" method="post" name="newreg" enctype="multipart/form-data">
        <div class="row">
          <!--Columna 1 -->
        <div class="col-lg-4 mb-4">
            <input type="hidden" value="Instrumento" name="catg" >
            
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
          <label><input class="option" type="radio" name="estado" value="Nuevo" checked>Nuevo </label><br>
          <label><input class="option" type="radio" name="estado" value="Algo Usado">Algo Usado  </label><br>
          <label><input class="option" type="radio" name="estado" value="Muy Usado">Muy Usado </label><br>
          <label><input class="option" type="radio" name="estado" value="Viejo">Viejo</label>
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


<!-- Modal -->

<div class="row">
      <div class="col-lg-4 mb-4"></div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
        <?php
     include('conexion.php');

     if(isset($_POST['catg']) && !empty($_POST['catg']) &&
        isset($_POST['tipo']) && !empty($_POST['tipo']) &&
        isset($_POST['descrip']) &&
        isset($_POST['marca']) &&
        isset($_POST['modelo']) &&
        isset($_POST['serie']) &&
        isset($_FILES['foto'])) {

          if(empty($_FILES['foto']['tmp_name'])){
            $archnom="ctd.9.png";
          }else{
            $carpeta="media/instruments/";
            opendir($carpeta);
            $destino=$carpeta.$_FILES['foto']['name'];
            copy($_FILES['foto']['tmp_name'],$destino);
            $archnom=$_FILES['foto']['name'];
          }
     
      $con = mysql_connect($host,$user,$pw) or die ("Problemas al conectar con el servidor");
    mysql_select_db($db,$con) or die ("Problemas al conectar Base de Datos");
    
    mysql_query("INSERT INTO ARTICULOS (TIPO,CATEGORIA,DESCRIPCION,MARCA,MODELO,SERIE,FOTO) VALUES ('$_POST[tipo]','$_POST[catg]','$_POST[descrip]','$_POST[marca]','$_POST[modelo]','$_POST[serie]','$archnom')",$con);
     echo '<h4 class="card-header" align="center">Datos Insertados<img src="media/icons/hd.png"></h4><div class="card-body">';
     echo '<center><img class="img-fluid rounded mb-4" src="media/instruments/'.$archnom.'" width="80%" height="80%" ></center><br>';
     echo '<b>Tipo: </b>'.$_POST['tipo'].'<br>';
     echo '<b>Marca: </b>'.$_POST['marca'].'<br>';
     echo '<b>Modelo: </b>'.$_POST['modelo'].'<br>';
     echo '<b>No. Serie: </b>'.$_POST['serie'].'<br>';
     echo '<b>Descripción: </b>'.$_POST['descrip'].'<br>';
     echo '';
     
  }else {
  echo '<center><img src="media/icons/error.gif"><h1 class="mt-4 mb-3">Problemas al insertar datos</h1></center>'; }

    ?>
    

    </div>
    <div class="card-footer">
      <a href="" onclick="print();" class="btn btn-secondary">Imprimir <img src="media/icons/printing.png" width="20px"></a>
    </div>
    </div></div></div>
