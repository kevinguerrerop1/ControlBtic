<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php $this->load->view("include/NavBar");?>
</head>
<body>
<br>
    <form  id="form_prest" name="form_prest" accept-charset="" method="post" action="<?php echo site_url('servicioscontrollers/store')?>">
    <?php  ?>
		<div class="container">
			<h2>Ingrese nuevo activo</h2>
			<label for="">Nombre Servicio</label>
			<input type="text" id="NOMSERV" name="NOMSERV" class="form-control" placeholder="Servicio" aria-describedby="basic-addon1">
			<br>
			<button type="submit" class="btn btn-primary">Guardar</button>
		</div>
    </form>
</body>
</html>
