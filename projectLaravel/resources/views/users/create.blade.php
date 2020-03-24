<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Crear Usuario</title>
</head>
<body>
	<h1>Crear de Usuario</h1>
	<hr>
	<a href="{{ url('users') }}">Ir a Lista de Usuarios</a>
	<hr>
  <form action="{{ url('users') }}" method="post">
		@csrf
		<input type="text" name="fullname" value="{{ old('fullname') }}" placeholder="Nombre Completo">
		<br>
		<input type="text" name="email" value="{{ old('email') }}" placeholder="Correo Electrónico">
		<br>
    <input type="text" name="phone" value="{{ old('phone') }}" placeholder="Teléfono">
    <br>
    <input type="date" name="birthdate" value="{{ old('birthdate') }}" placeholder="año de nacimiento">
    <br>
    <input type="text" name="gender" value="{{ old('gender') }}" placeholder="genero">
    <br>
    <input type="text" name="address" value="{{ old('address') }}" placeholder="direccion">
    <br>
    <input type="password" name="password" value="{{ old('password') }}" placeholder="contraseña">
    <br>

		<button type="submit"> Guardar </button>
	</form>
</body>
</html>
