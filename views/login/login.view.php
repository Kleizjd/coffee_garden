<?php //include_once "config/env.php";?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="shortcut icon" href="public/img/Coffe Garden.png" type="image/x-icon">
        <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="./public/css/login.css">
		<link rel="stylesheet" href="vendor/sweetalert/css/sweetalert2.min.css">
	<title>Inicio de Sesión</title>
</head>

<body>

	<div class="mt-5 container">
		<div class="justify-content-center row">
			<div class="col-md-5 col-md-offset-3">
				<div class="card card-login">
					<div class="card-heading">
						<div class="justify-content-center row">
							<!-- <div class="col-12">
								<p class="active" id="login-form-link">6<sup>ta</sup> Semana de la Ingeniería Creativa</p>
							</div> -->
							<div class="col-6">
								<img src="public/img/Coffe Garden.png" alt="" class="img-fluid">
							</div>
						</div>
						<hr>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" method="post" autocomplete="off">
									<div class="form-group">
										<input type="text" name="id" id="id" class="form-control" placeholder="Cedula">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" class="form-control" placeholder="Password">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-12">
												<input type="submit" id="login" class="form-control btn btn-login" value="Iniciar Sesión">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


<script src="vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="vendor/sweetalert/js/sweetalert2.min.js"></script>
<script src="public/js/login.js"></script>
</body>

</html>
