<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url(); ?>assets/bootstrap5.3/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/bootstrap5.3/js/bootstrap.min.js" rel="stylesheet">
	<script src="<?php echo base_url(); ?>assets/bootstrap5.3/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
    <form  id="form_prest" name="form_prest" accept-charset="" method="post" action="<?php echo site_url('userscontrollers/verificar_usuario')?>">
        <div class=" py-3 py-md-5">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-12 col-md-11 col-lg-8 col-xl-7 col-xxl-6">
                        <div class="bg-white p-4 p-md-5 rounded shadow-sm">
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-5">
                                        <h3>Log in</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="row gy-3 gy-md-4 overflow-hidden">
                                <div class="col-12">
                                    <label for="email" class="form-label">Correo <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" name="Correo" id="Correo" placeholder="name@hospitalcurico.cl" required>
                                </div>
                                <div class="col-12">
                                    <label for="password" class="form-label">Clave <span class="text-danger">*</span></label>
                                    <input type="password" class="form-control" name="Clave" id="Clave" value="" required>
                                </div>
                                <div class="col-12">
                                    <div class="d-grid">
                                        <button class="btn btn-lg btn-primary" type="submit">Ingresar</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <hr class="mt-5 mb-4 border-secondary-subtle">
                                    <div class="d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-md-end">
                                        <a href="<?php echo site_url('userscontrollers/registro')?>" class="link-secondary text-decoration-none">Create new account</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>    
</body>
</html>