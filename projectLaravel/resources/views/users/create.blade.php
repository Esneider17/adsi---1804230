<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Crear Usuario</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-4">

				<h1>
					<i class="fa fa-users"></i>Crear de Usuario</h1>
					<hr>
					<a href="{{ url('users') }}">Ir a Lista de Usuarios</a>
					<hr>
					<div class="form-group ">
						<form action="{{ url('users') }}" method="post">
							@csrf
							<input class="form-control" type="text" name="fullname" value="{{ old('fullname') }}" placeholder="Nombre Completo">
							<br>
							<input  class="form-control" type="text" name="email" value="{{ old('email') }}" placeholder="Correo Electrónico">
							<br>
							<input  class="form-control" type="text" name="phone" value="{{ old('phone') }}" placeholder="Teléfono">
							<br>
							<input  class="form-control" type="date" name="birthdate" value="{{ old('birthdate') }}" placeholder="año de nacimiento">
							<br>
							<div class="input-group mb-3">
								<select class="custom-select" name="gender" value="{{ old('gender') }}">
									<option selected>Genero...</option>
									<option value="Male">Masculino</option>
									<option value="Female">Femenino</option>
								</select>
								<!-- <div class="input-group-append">
									<label class="input-group-text" for="inputGroupSelect02">Genero</label>
								</div> -->
							</div>
							<input  class="form-control" type="text" name="address" value="{{ old('address') }}" placeholder="direccion">
							<br>
							<input  class="form-control" type="password" name="password" value="{{ old('password') }}" placeholder="contraseña">
							<br>
							<div class="row justify-content-center">
								<button type="submit" class="btn btn-success "  data-toggle="buttons"> Guardar </button>
							</div>

						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
	</html>
