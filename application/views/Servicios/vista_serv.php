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
    <form name="form" action="<?php echo site_url('servicioscontrollers/create')?>" method="post">
      <button type="submit" class="btn btn-primary">Crear Nuevo Servicio</button>
    </form>
    <table class="table" id="myTable">
      <thead>
        <tr>
			<th scope="col">#</th>
			<th scope="col">Servicio</th>
			<th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody class="table-group-divider">
        <?php if($servicios){ ?>
          <?php foreach($servicios as $servicio){ ?>
          <tr>
            <td><?php echo $servicio->ID_SERV ?></td>
            <td><?php echo $servicio->NOMSERV ?></td>
            <td><button type="button" class="btn btn-info">Info</button></td>
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
