<!DOCTYPE html>
<html lang="es" >
	<style>
	@font-face {
    font-family: 'Poppins';
    src: url('fonts/Poppins.otf');
    }
	</style>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Bienvenido IMPIEMH</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
</head>
<nav class="navbar  text-dark" style = "background-color: #956F94; ">
	<div class="container-fluid">
	  <a class="navbar h3" href="index.php" style = "color: rgb(255, 255, 255);">IMPIEMH</a>
	  <a class="nav-link h3" style = "color: rgb(255, 255, 255);" href="registro.php">Registro</a>
	</div>
  </nav>
<body class="my-login-page" style="font-family: 'Poppins';">
		<br>	
		<div class="container">
			<div class="row">
			  <div class="col-12">
				<div class="card mt-5 p-5" style="max-width: 1000px;">
					<div class="container">
						<div class="row">
						<div class="col">
							<img src="img/LogoIniciar.PNG" alt="logo">
						</div>
						<div class="col">
								<div class="form-group">
									<label for="email">Correo electrónico</label>
									<input id="email" type="email" class="form-control" name="email" value="" required autofocus>
									<div class="invalid-feedback">
										Correo invalido
									</div>
								</div>
			
								<div class="form-group">
									<label for="password">Contraseña</label>
									<input id="password"  class="form-control" name="password" required data-eye>
									<div class="invalid-feedback" >
										Campo requerido
									</div>
								</div>
			
								<div class="form-group">
									<div class="custom-checkbox custom-control">
										<input type="checkbox" name="remember" id="remember" class="custom-control-input">
										<label for="remember" class="custom-control-label">Recordarme</label>
									</div>
								</div>
			
								<form method="get" action="calendario.php">
					<button style="background-color: #DA92B2;" type="submit" class="btn btn-primary btn-block"><strong class="h3">Ingresar</strong></button>
					</form>
						
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer mt-2 text-center">
			Copyright &copy; 2022 &mdash; IMPIEMH
		</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="js/my-login.js"></script>
</body>
</html>
