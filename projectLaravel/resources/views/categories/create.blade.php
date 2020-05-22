@extends('layouts.app')
@section('title','Crear Categoria')
@section('content')
	@yield('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-6">

				<h1>
					<i class="fa fa-plus"></i>Adicionar Categoria</h1>
					<hr>

					<a  class="btn btn-custom"href="{{ url('categories') }}">
						<i class="fa fa-arrow-left"></i>
						Ir a Lista de Categorias
					</a>
					<hr>
				{{--}}<-----	BLOQUE DE ALERTAS ----->
					 {{-- @if ($errors->any())
						<ul class="alert alert-danger">
							@foreach ($errors->all() as $message)
									<li>{{$message}}</li>

							@endforeach

				@endif
					 </ul> --}}
					<div class="form-group ">
						<form action="{{ url('categories') }}" method="post" enctype="multipart/form-data">
							@csrf
							<input class="form-control @error ('name') is-invalid @enderror" type="text" name="name" value="{{ old('name') }}" placeholder="Nombre Categoria">
							@error ('name')
								<span class="invalid-feedback" role="alert">
									<strong>{{$message}}</strong>
								</span>
							@enderror
							<br>
              <div class="form-group">
								<button type="button" class="btn btn-block btn-custom btn-upload">
									<i class="fa fa-upload"></i>
									Seleccionar imagen
								</button>
								<input type="file" name="image" id="image" class="d-none" accept="image/*">
								<br>
								<div class="text-center @error('image') is-invalid @enderror">
									<img id="preview" class="img-thumbnail"src="{{ asset('imgs/no-category.png') }}"
									width="120px">
								</div>
							</div>
							@error ('image')
								<span class="invalid-feedback" role="alert">
									<strong>{{$message}}</strong>
								</span>
							@enderror
							<br>

							<input  class="form-control @error ('description') is-invalid @enderror" type="text" name="description" value="{{ old('description') }}" placeholder="Descripcion">
								@error ('description')
									<span class="invalid-feedback" role="alert">
										<strong>{{$message}}</strong>
									</span>
								@enderror
							<br>

							<div class="row justify-content-center">

								<button type="submit" class="btn btn-custom"  data-toggle="buttons"> Guardar
								<i class="fa fa-save"></i>
								</button>
							</div>

						</form>
					</div>
				</div>
			</div>
		</div>
		@endsection
