<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="<?php echo base_url(); ?>assets/datatable/DataTables/jQuery-3.7.0/jquery-3.7.0.js"></script>
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
