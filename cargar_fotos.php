<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">
          <div class="sidebar-heading">FOTOGRAFIA </div>
          <div class="list-group list-group-flush">
            <a href="#" class="list-group-item list-group-item-action bg-light">Mensajes</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Lista de Fotos</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Alta de fotos</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Eventos</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">me quede sin imaginacion</a>
          </div>
        </div>
        <!-- /#sidebar-wrapper -->
    
        <!-- Page Content -->
        <div id="page-content-wrapper">
    
          <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <button class="btn btn-primary" id="menu-toggle">Boton canchero</button>
    
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                
              </ul>
            </div>
          </nav>
    
        <form action="confirmar_foto.php" class="md-form container" method="post" enctype="multipart/form-data">
            <div class="file-field">
                <div class="btn btn-primary btn-sm float-left">
                <span>Selecciona archivo</span>
                <input type="file" name="miarchivo">
                </div>
            </div>
                <button class="btn btn-outline-success type="submit">CARGAR</button>
        </form>
        <!-- /#page-content-wrapper -->
    
</div>
      <!-- /#wrapper -->
    
      <!-- Bootstrap core JavaScript -->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>