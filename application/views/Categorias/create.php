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
<form  id="form_prest" name="form_prest" accept-charset="" method="post" action="<?php echo site_url('categoriascontrollers/store')?>"  >

	<?php  ?>
		<div class="container">
			<h2>Ingrese nuevo activo</h2>
			<label for="">Nombre Categoria</label>
			<input type="text" id="NOMCAT" name="NOMCAT" class="form-control" placeholder="Categoria" aria-describedby="basic-addon1">
			<br>
			<button type="submit" class="btn btn-primary">Guardar</button>
		</div>
</form>
</body>
</html>
