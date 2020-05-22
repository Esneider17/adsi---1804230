
@extends('layouts.app')
@section('title','modificar Categoria')
@section('content')
	@yield('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-2">
				<h1> <i class="fa fa-pen"></i>modificar Categoria</h1>

				<br>
				<a href="{{ url('categories') }}" class="btn btn-custom">
					<i class="fa fa-arrow-left"></i>
					Ir a Lista de Categorias
				</a>
				<br><br>

        <div class="form-group ">
          <form action="{{ url('categories', $categori->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
						<input type="hidden" name="id" value="{{$categori->id}}">
            <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{ $categori->name }}" placeholder="Nombre Categoria">
							@error ('fullname')
								<span class="invalid-feedback" role="alert">
									<strong>{{$message}}</strong>
								</span>
							@enderror
						<br>
						<div class="form-group">
							<button type="button" class="btn btn-block btn-custom btn-upload">
								<i class="fa fa-upload"></i>
								Seleccionar Image
							</button>
							<input type="file" name="image" id="image" class="d-none" accept="image/*">
							@error ('image')
								<span class="invalid-feedback" role="alert">
									<strong>{{$message}}</strong>
								</span>
							@enderror
							<br>
							<div class="text-center @error('image') is-invalid @enderror">
								<img id="preview" class="img-thumbnail"src="{{ asset($categori->image) }}"
								width="120px">
							</div>
						</div>
						@error ('image')
							<span class="invalid-feedback" role="alert">
								<strong>{{$message}}</strong>
							</span>
						@enderror
						<br>
            <input  class="form-control @error('description') is-invalid @enderror" type="text" name="description" value="{{ $categori->description  }}" placeholder="Descripcion">
							@error ('description')
								<span class="invalid-feedback" role="alert">
									<strong>{{$message}}</strong>
								</span>
							@enderror
						<br>
            <div class="row justify-content-center">
              <button type="submit" class="btn btn-success "  data-toggle="buttons"> Modificar </button>
            </div>

          </form>
        </div>

			</div>
		</div>
	</div>
@endsection
