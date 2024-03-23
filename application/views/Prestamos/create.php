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
			<select class="form-select" aria-label="Default select example" id="ID_ART" name="ID_ART">
			<?php foreach($inventario as $inventari){ ?>
				<option value=<?php echo $inventari->ID_ART ?>><?php echo $inventari->MARCA. " " .$inventari->MODELO. " " .$inventari->NROSERIE   ?></option>
			<?php }?>
			</select>
			<br>
			<label for="">Persona Solicitante</label>
			<input type="text" id="PS" name="PS" class="form-control" placeholder="Persona Solicitante" aria-describedby="basic-addon1" required>
			<br>
			<label for="">Persona Entrega</label>				
			<?php foreach($usuario as $usuari){ ?>
				<input type="text" id="ID_USU" name="ID_USU" class="form-control" placeholder="Modelo" value="<?php echo $usuari->ID_USU ?>.- <?php echo $usuari->NOMUSU?> <?php echo $usuari->APEUSU?>" aria-describedby="basic-addon1" readonly>
			<?php }?>
			<br>
			<label for="">Servicio</label>
			<select class="form-select" aria-label="Default select example" id="ID_SERV" name="ID_SERV">
			<?php foreach($servicios as $servicio){ ?>
				<option value=<?php echo $servicio->ID_SERV ?>><?php echo $servicio->NOMSERV?></option>
			<?php }?>
			</select>
			<br>
			<label for="">Ubicacion</label>
			<input type="text" id="UBICACION" name="UBICACION" class="form-control" placeholder="Ubicacion" aria-describedby="basic-addon1" required>	
			<br>		
			<label for="">Fecha Entrega</label>
			<input type="text" id="FCHENTREGA" name="FCHENTREGA" class="form-control" placeholder="Modelo" value="<?php echo date("d-m-Y");?>" aria-describedby="basic-addon1" readonly>		
			<br>	
			
			<button type="submit" class="btn btn-primary">Ingresar</button>
		</div>
	<?php echo form_close(); ?>
</body>
</html>
