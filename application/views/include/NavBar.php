<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="<?php echo base_url(); ?>assets/bootstrap5.3/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>assets/bootstrap5.3/js/bootstrap.min.js" rel="stylesheet">
		<script src="<?php echo base_url(); ?>assets/bootstrap5.3/js/bootstrap.bundle.min.js"></script>
		<link href="<?php echo base_url(); ?>assets/datatable/DataTables/css/dataTables.dataTables.min.css" rel="stylesheet">
		
		<!-- <link href="../assets/bootstrap5.3/css/bootstrap.min.css" rel="stylesheet">
		<link href="../assets/bootstrap5.3/js/bootstrap.min.js" rel="stylesheet">
		<script src="../assets/bootstrap5.3/js/bootstrap.bundle.min.js"></script> -->
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?php echo site_url('InventarioControllers/viewinventario')?>">Inicio</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo site_url('CategoriasControllers/index')?>">Categorias</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo site_url('PrestamosControllers/index')?>">Prestamos</a>
          </li>
					<li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo site_url('ServiciosControllers/index')?>">Servicios</a>
          </li>
					<li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo site_url('UsersControllers/index')?>">Usuarios</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown link
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li> -->
        </ul>
      </div>
    </div>
  </nav>
	
</body>

</html>
