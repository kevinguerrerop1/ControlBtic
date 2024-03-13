<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	
</head>
<body>
	<script src="<?php echo base_url(); ?>assets/datatable/DataTables/js/dataTables.min.js"></script>
		<script>
			var table = new DataTable('#myTable', {
				language: {
					url: '//cdn.datatables.net/plug-ins/2.0.2/i18n/es-ES.json',
				},
			});
		</script>
</body>
</html>
