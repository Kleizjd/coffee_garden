<?php //include_once "config/env.php";
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="shortcut icon" href="./public/img/Coffe Garden.png" type="image/x-icon">
	<link rel="stylesheet" href="./public/css/login-register.css">
	<link rel="stylesheet" href="./vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="./public/css/login.css">
	<link rel="stylesheet" href="./vendor/sweetalert/css/sweetalert2.min.css">
	<
	<title>Inicio de Sesión</title>
</head>

<body class="login-register container-fluid p-3">
	<div class="mt-2 container ">
		<div class="justify-content-center row">
			<div class="col-md-5 col-md-offset-3">
				<div class="card card-login">
					<div class="card-header">
						<div class="justify-content-center row text-center">
							<div class="col-6">
								<img src="public/img/Coffe Garden.png" alt="" class="img-fluid shadow-lg p-1" style="width: 9rem;">
							</div>
						</div>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" method="post" autocomplete="off">
									<div class="form-group">
										<input type="text" name="id" id="id" class="form-control" placeholder="Cedula" required>
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-12">
												<input type="submit" id="login" class="form-control btn btn-login" value="Iniciar Sesión">
											</div>
										</div>
									</div>
									<div class="form-group m-b-0">
										<div class="col-sm-12 text-center">
											No tienes cuenta? <a id="to-register" class="text-info m-l-5"><b>Registrate</b></a>
										</div>
									</div>
								</form>
								<!--[ REGISTRAR USUARIO ]-->
								<form id="create_account" style="display:none" class="overflow-auto">
									<div id="register_user" class="animate form registration_form">
										<section class="login_content">
											<h4 class="text-center">Create Account</h4>
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Usuario" id="user_id" required />
											</div>
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Nombre" id="nombre" required />
											</div>
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Apellido" id="apellido" required />
											</div>
											<div class="form-group">
												<input type="password" class="form-control" placeholder="Contrase&ntilde;a" id="password_user" required />
											</div>
											<div class="form-group">
												<input type="password" class="form-control" placeholder="Validar Contrase&ntilde;a" required id="password_verify" />
											</div>
											<button type="submit" class="btn btn-primary btn-block">Enviar</button>


											<div class="separator">
												<p class="change_link">Ya estas Registrado ?
													<a href="#signin" class="to_register"> Ingresa </a>
												</p>

												<div>
													<span> &copy;Copyright <?= date("Y"); ?> Best -José Daniel Grijalba</span>
												</div>
											</div>
										</section>
									</div>
								</form>

								<!--[ !REGISTRAR USUARIO ]-->

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	</div>
	<script src="vendor/jquery/jquery-3.3.1.min.js"></script>
	<script>
		$('#to-register').on("click", function() {
			$('#login-form').hide();
			$("#create_account").show();
		});
		$('.to_register').on("click", function() {
			$('#create_account').hide();
			$("#login-form").show();
		});
	</script>
	<script src="vendor/sweetalert/js/sweetalert2.min.js"></script>
	<script src="public/js/login.js"></script>
</body>

</html>