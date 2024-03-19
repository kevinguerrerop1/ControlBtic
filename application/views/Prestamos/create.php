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
	<?php echo form_open('prestamoscontrollers/store'); ?>
		<div class="container">
			<h2>Ingreso Prestamos</h2>
			<br>
			<label for="">Articulo</label>
			<select class="form-select" aria-label="Default select example" id="idart" name="idart">
			<?php foreach($inventario as $inventari){ ?>
				<option value=<?php echo $inventari->ID_ART ?>><?php echo $inventari->MARCA. " " .$inventari->MODELO. " " .$inventari->NROSERIE   ?></option>
			<?php }?>
			</select>
			<br>
			<label for="">Persona Solicitante</label>
			<input type="text" id="ps" name="ps" class="form-control" placeholder="Persona Solicitante" aria-describedby="basic-addon1" required>
			<br>
			<label for="">Persona Entrega</label>
			<select class="form-select" aria-label="Default select example" id="pe" name="pe">
			<?php foreach($users as $user){ ?>
				<option value=<?php echo $user->ID_USU ?>><?php echo $user->NOMUSU?> <?php echo $user->APEUSU?></option>
			<?php }?>
			</select>			
			<br>
			<label for="">Servicio</label>
			<select class="form-select" aria-label="Default select example" id="idser" name="idser">
			<?php foreach($servicios as $servicio){ ?>
				<option value=<?php echo $servicio->ID_SERV ?>><?php echo $servicio->NOMSERV?></option>
			<?php }?>
			</select>
			<br>
			<label for="">Ubicacion</label>
			<input type="text" id="ubicacion" name="ubicacion" class="form-control" placeholder="Ubicacion" aria-describedby="basic-addon1" required>	
			<br>		
			<label for="">Fecha Entrega</label>
			<input type="text" id="fchentrega" name="fchentrega" class="form-control" placeholder="Modelo" value="<?php echo date("d-m-Y");?>" aria-describedby="basic-addon1" readonly>		
			<br>	
			
			<button type="submit" class="btn btn-primary">Ingresar</button>
		</div>
	<?php echo form_close(); ?>
</body>
</html>
