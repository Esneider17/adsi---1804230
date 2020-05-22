

@extends('layouts.app')
@section('title','Consultar Categoria')
@section('content')
	@yield('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-2">
				<h1> <i class="fa fa-search"></i>Consultar Categoria</h1>

				<br>

				<a  class=" btn btn-custom" href="{{ url('categories') }}">
					<i class="fa fa-arrow-left"></i>
					Ir a Lista de Categorias
				</a>

				<br><br>
				<table class="table table-striped">
					<tr>
						<td colspan="2" class="text-center">
							<img src="{{ asset($categori->image) }}" class="img-thumbnail" width="120px">
						</td>
					</tr>
					<tr>
						<th>Nombre Categoria:</th>
						<td>{{ $categori->name }}</td>
					</tr>
					<tr>
						<th>Descripcion:</th>
						<td>{{ $categori->description }}</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
@endsection
