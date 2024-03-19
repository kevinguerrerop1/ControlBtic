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
	<?php echo form_open('inventariocontrollers/store'); ?>
		<div class="container">
			<h2>Ingrese nuevo activo</h2>
			<label for="">Marca</label>
			<input type="text" id="MARCA" name="MARCA" class="form-control" placeholder="Marca" aria-describedby="basic-addon1" required>
			<br>
			<label for="">Modelo</label>
			<input type="text" id="MODELO" name="MODELO" class="form-control" placeholder="Modelo" aria-describedby="basic-addon1" required>
			<br>
			<label for="">Nro. Serie</label>
			<input type="text" id="NROSERIE" name="NROSERIE" class="form-control" placeholder="Nro. Serie" aria-describedby="basic-addon1" required>
			<br>
			<label for="">Categoria</label>
			<select id="ID_CAT" name="ID_CAT" class="form-select" aria-label="Default select example" >
			<?php foreach($categorias as $categoria){ ?>
				<option value=<?php echo $categoria->ID_CAT ?>><?php echo $categoria->NOMCAT ?></option>
			<?php }?>
			</select>
			<br>
			<label for="">Tipo de Articulo</label>
			<select id="ID_TART" name="ID_TART" class="form-select" aria-label="Default select example" >
			<?php foreach($tarticulos as $tarticulo){ ?>
				<option value=<?php echo $tarticulo->ID_TART ?>><?php echo $tarticulo->NOMTART ?></option>
			<?php }?>
			</select>
			<br>
			<button type="submit" class="btn btn-primary">Ingresar</button>
		</div>
	<?php echo form_close(); ?>
</body>
</html>
