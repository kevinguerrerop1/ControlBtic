<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="<?php echo base_url(); ?>assets/bootstrap5.3/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/bootstrap5.3/js/bootstrap.min.js" rel="stylesheet">
	<script src="<?php echo base_url(); ?>assets/bootstrap5.3/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		.password-container .password-field {
			height: 65px;
				width: 100%;
			position: relative;
		}
		.password-field input:focus {
			border: 2px solid #4285f4;
		}
		.password-field i {
			right: 15px;
			top: 45%;
			font-size: 1.2rem;
			color: #999;
			cursor: pointer;
			position: absolute;
			transform: translateY(-50%);
		}
		.password-container .content {
			margin: 20px 0 10px;
		}
		.requirement-list li {
			/* font-size: 1.3rem; */
			list-style: none;
			display: flex;
			align-items: center;
			/* margin-bottom: 15px; */
		}
		.requirement-list li i {
			width: 20px;
			color: #aaa;
			font-size: 0.6rem;
		}
		.requirement-list li.valid i {
			font-size: 1.2rem;
			color: #4285f4;
		}
		.requirement-list li span {
			margin-left: 12px;
			color: #333;
		}
		.requirement-list li.valid span {
			color: #999;
		}
			
	</style>
</head>
<body>
	<form  id="form_prest" name="form_prest" accept-charset="" method="post" action="<?php echo site_url('userscontrollers/registrar')?>">    
		<!-- Registration 13 - Bootstrap Brain Component -->
		<section class="bg-white py-3 py-md-5">
		<div class="container">
			<div class="row justify-content-center">
			<div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
				<div class="card border border-light-subtle rounded-3 shadow-sm">
				<div class="card-body p-3 p-md-4 p-xl-5">
				
					<h2 class="fs-6 fw-normal text-center text-secondary mb-4">Registro</h2>
					<form action="#!">
					<div class="row gy-2 overflow-hidden">
						<div class="col-12">
							<div class="form-floating mb-3">
								<input type="text" class="form-control" name="NOMUSU" id="NOMUSU" placeholder="Nombre" required>
								<label for="firstName" class="form-label">Nombre</label>
							</div>
						</div>
						<div class="col-12">
							<div class="form-floating mb-3">
								<input type="text" class="form-control" name="APEUSU" id="APEUSU" placeholder="Apellido" required>
								<label for="lastName" class="form-label">Apellido</label>
							</div>
						</div>
						<div class="col-12">
							<div class="form-floating mb-3">
								<input type="email" class="form-control" name="CORREO" id="CORREO" placeholder="name@hospitalcurico.cl" required>
								<label for="email" class="form-label">Correo</label>
							</div>
						</div>
						<div class="col-12 password-container">
							<div class="form-floating mb-3 password-field">
								<input type="password" class="form-control" name="CLAVE" id="CLAVE" value="" placeholder="Clave" required>
								<label for="password" class="form-label">Clave</label>
								<i class="fa-solid fa-eye"></i>
								
							</div>
						</div>
						<div class="col-12">
							<div class="content">
								<p>La clave debe contener</p>
								<ul class="requirement-list">
									<li>
										<i class="fa-solid fa-circle"></i>
										<span>Minimo 8 caracteres</span>
									</li>
									<li>
										<i class="fa-solid fa-circle"></i>
										<span>Almenos 1 numero (0...9)</span>
									</li>
									<li>
										<i class="fa-solid fa-circle"></i>
										<span>Almenos 1 minuscula (a...z)</span>
									</li>
									<li>
										<i class="fa-solid fa-circle"></i>
										<span>Almenos 1 caracter especial (!...$)</span>
									</li>
									<li>
										<i class="fa-solid fa-circle"></i>
										<span>Alemnos 1 mayuscula (A...Z)</span>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-12">
							<div class="d-grid my-3">
								<button class="btn btn-primary btn-lg" type="submit">Registrar</button>
							</div>
						</div>
						<div class="col-12">
						<p class="m-0 text-secondary text-center">Ya tienes cuenta? <a href="<?php echo site_url('userscontrollers/index')?>" class="link-primary text-decoration-none">Login</a></p>
						</div>
					</div>
					</form>
				</div>
				</div>
			</div>
			</div>
		</div>
		</section>
	</form>
</body>
<script>
	const passwordInput = document.querySelector(".password-field input");
	const eyeIcon = document.querySelector(".password-field i");
	const requirementList = document.querySelectorAll(".requirement-list li");

	const requirements = [
	{ regex: /.{8,}/, index: 0 }, // Minimo 8 caracteres
	{ regex: /[0-9]/, index: 1 }, // Almenos 1 numero
	{ regex: /[a-z]/, index: 2 }, // Almenos 1 minuscula
	{ regex: /[^A-Za-z0-9]/, index: 3 }, // Almenos 1 caracter especial
	{ regex: /[A-Z]/, index: 4 }, // Alemnos 1 mayuscula
	];
	passwordInput.addEventListener("keyup", (e) => {
	requirements.forEach((item) => {
		const isValid = item.regex.test(e.target.value);
		const requirementItem = requirementList[item.index];
		if (isValid) {
		requirementItem.classList.add("valid");
		requirementItem.firstElementChild.className = "fa-solid fa-check";
		} else {
		requirementItem.classList.remove("valid");
		requirementItem.firstElementChild.className = "fa-solid fa-circle";
		}
	});
	});

	eyeIcon.addEventListener("click", () => {
	passwordInput.type =
		passwordInput.type === "password" ? "text" : "password";
	eyeIcon.className = `fa-solid fa-eye${
		passwordInput.type === "password" ? "" : "-slash"
	}`;
	});
</script>
</html>
		
		

