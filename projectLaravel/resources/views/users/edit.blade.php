<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lista de Usuarios</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-2">
				<h1> <i class="fa fa-pencil"></i>modificar Usuario</h1>

				<br>
				<a href="{{ url('users') }}">
					<i class="fa fa-arrow-left"></i>
					Ir a Lista de Usuarios
				</a>
				<br><br>

        <div class="form-group ">
          <form action="{{ url('users', $user->id) }}" method="POST">
            @method('PUT')
            @csrf
            <input class="form-control" type="text" name="fullname" value="{{ $user->fullname }}" placeholder="Nombre Completo">
            <br>
            <input  class="form-control" type="text" name="email" value="{{ $user->email  }}" placeholder="Correo Electrónico">
            <br>
            <input  class="form-control" type="text" name="phone" value="{{ $user->phone  }}" placeholder="Teléfono">
            <br>
            <input  class="form-control" type="date" name="birthdate" value="{{ $user->birthdate  }}" placeholder="año de nacimiento">
            <br>
            <div class="input-group mb-3">
              <select class="custom-select" name="gender" value="{{ $user->gender }}">
                <option selected>Genero...</option>
                <option value="Male">Masculino</option>
                <option value="Female">Femenino</option>
              </select>
              <!-- <div class="input-group-append">
                <label class="input-group-text" for="inputGroupSelect02">Genero</label>
              </div> -->
            </div>
            <input  class="form-control" type="text" name="address" value="{{ $user->address }}" placeholder="direccion">
            <br>
            <input  class="form-control" type="password" name="password" value="{{ $user->password }}" placeholder="contraseña">
            <br>
            <div class="row justify-content-center">
              <button type="submit" class="btn btn-success "  data-toggle="buttons"> Modificar </button>
            </div>

          </form>
        </div>

			</div>
		</div>
	</div>
</body>
</html>
