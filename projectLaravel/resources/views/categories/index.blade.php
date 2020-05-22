

@extends('layouts.app')
@section('title','Lista  de Categorias')
@section('content')

@yield('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 offset-md-2">

			<h1>
				<i class="fa fa-list"></i>Lista de Categorias</h1>
			<hr>
			<a href="{{ url('categories/create') }}" class="btn btn-custom">
				<i class="fa fa-plus"></i>
				Adicionar Categoria
			</a>

			<form action="{{url('import/excel/categories')}}" method="post" enctype="multipart/form-data" style="display: inline-block;">
			@csrf
			<input type="file" name="file" id="file" class="d-none" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet">
				<button type="button" class="btn btn-custom btn-excel">
					<i class="fa fa-file-import"></i>
					Importar EXCEL
				</button>
			</form>

			|
			  <a href="{{ url('generate/pdf/categories') }}" class="btn btn-custom">
				<i class="fa fa-file-pdf"></i>
			  Reporte PDF
			</a>
			<a href="{{ url('generate/excel/categories') }}" class="btn btn-custom">
				<i class="fa fa-file-excel"></i>
				Reporte EXCEL
			</a>


			@csrf

				<input type="search"  class="form-search"  id="qsearch" placeholder="Buscar" autocomplete="off">
			{{-- <div class="input-group">
				<div class="input-group-prepend" >
					<span class="input-group-text" id="inputGroupPrepend"><i class="fa fa-search"></i>
					</span>
				</div>


			</div> --}}
			{{-- @if (session('message'))
			<div class="alert alert-success" role="alert">
				{{ session('message') }}
			</div>
			@endif --}}
			 <br>
			<div class="loader d-none text-center">
					<img src="{{asset('imgs/loader.gif')}}" width="60px">
			</div>
			<br>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<br>
						<th>Nombre Categoria</th>
						<th>Descripcion</th>

					</tr>
				</thead>

				<tbody id="categories-content">
					@foreach ($categories as $categori)
						<tr>
							<td>{{ $categori->name }}</td>
							<td>{{ $categori->description }}</td>
							<td>
									<a href="{{ url('categories/'.$categori->id) }}" class="btn btn-sm btn-custom">
										<i class="fa fa-search"></i>
									</a>
										<a href="{{ url('categories/'.$categori->id.'/edit/') }}" class="btn btn-sm btn-custom">
										<i class="fa fa-pen"></i>
									</a>
									<form action=" {{ url('categories/'.$categori->id) }}" method="post" style="display: inline-block;">
										@csrf
										@method('delete')
										<button type="button" class="btn btn-sm btn-danger btn-delete">
											<i class=" fa fa-trash"></i>
										</button>
									</form>
								</td>
						</tr>
					@endforeach
				</tbody>
			</table>


			{{$categories->links()}}
		</div>
	</div>
</div>
@endsection
