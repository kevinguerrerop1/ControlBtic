<!DOCTYPE html>
<html lang="en">
<head>
		<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
		<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <?php $this->load->view("include/NavBar");?>
</head>
<br>


<body>
  <div class="container">
    <form name="form" action="<?php echo site_url('inventariocontrollers/create')?>" method="post">
      <button type="submit" class="btn btn-primary">Crear Nuevo Producto</button>
    </form>
    <table class="table" id="myTable">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Marca</th>
          <th scope="col">Modelo</th>
          <th scope="col">Nro. Serie</th>
          <th scope="col">Categoria</th>
          <th scope="col">Tipo</th>
					<th>Acciones</th>
        </tr>
      </thead>
      <tbody class="table-group-divider">
      <?php if($articulos){ ?>
        <?php foreach($articulos as $articulo){ ?>
        <tr>
          <td><?php echo $articulo->ID_ART ?></td>
          <td><?php echo $articulo->MARCA ?></td>
          <td><?php echo $articulo->MODELO ?></td>
          <td><?php echo $articulo->NROSERIE ?></td>
          <td><?php echo $articulo->NOMCAT ?></td>
          <td><?php echo $articulo->NOMTART ?></td>
					<td><button type="button" class="btn btn-danger" disabled>Dar de Baja</button></td>
				</tr>

        <?php if($usuario){ ?>
               <?php foreach($usuario as $usuario){ ?>
				<td ><input type="text" name="nom_usu" id="nom_usu" value="<?php echo $usuario->APEUSU?>" /> </td>
			    <?php } ?>  
			<?php }else{ ?>            
	    <?php } ?>
        <?php }?>
        <?php }else{ ?>            
        <?php } ?>
      </tbody>
    </table>
  </div>

	<?php $this->load->view("include/Footer");?>
	

</body>
</html>
