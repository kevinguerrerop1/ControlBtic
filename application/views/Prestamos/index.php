<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <?php $this->load->view("include/NavBar");?>
</head>
<br>
<body>
  <div class="container">
    <form name="form" action="<?php echo site_url('prestamoscontrollers/create')?>" method="post">
      <button type="submit" class="btn btn-primary">Crear Nuevo Prestamo</button>
    </form>
    <table class="table" id="myTable">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Articulo</th>
          <th scope="col">Persona que recibe</th>
          <th scope="col">Persona que entrega</th>
          <th scope="col">Servicio</th>
          <th scope="col">Ubicacion</th>
          <th scope="col">Fecha de entrega</th>
        </tr>
      </thead>
      <tbody class="table-group-divider">
      <?php if($prestamos){ ?>
        <?php foreach($prestamos as $prestamo){ ?>
        <tr>
          <td><?php echo $prestamo->ID_PRES?></td>
          <td><?php echo $prestamo->MARCA?> <?php echo $prestamo->MODELO?> <?php echo $prestamo->NROSERIE?></td>
          <td><?php echo $prestamo->PS?></td>
          <td><?php echo $prestamo->NOMUSU?> <?php echo $prestamo->APEUSU?></td>
          <td><?php echo $prestamo->NOMSERV?></td>
					<td><?php echo $prestamo->UBICACION?></td>
					<td><?php echo $prestamo->FCHENTREGA?></td>
				</tr>
        <?php }?>
        <?php }else{ ?>            
        <?php } ?>
      </tbody>
    </table>
  </div>
	<?php $this->load->view("include/Footer");?>
</body>
</html>
