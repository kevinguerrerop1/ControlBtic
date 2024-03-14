<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php $this->load->view("include/NavBar");?>
</head>
<body>
<br>
	<?php echo form_open('CategoriasControllers/store'); ?>
		<div class="container">
			<h2>Ingrese nuevo activo</h2>
			<label for="">Nombre Categoria</label>
			<input type="text" id="nomcat" name="nomcat" class="form-control" placeholder="Categoria" aria-describedby="basic-addon1">
			<br>
			<button type="submit" class="btn btn-primary">Guardar</button>
		</div>
	<?php echo form_close(); ?>
</body>
</html>
