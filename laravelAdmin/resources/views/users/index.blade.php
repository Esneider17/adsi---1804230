

@extends('layouts.app')
@section('title','Lista  de Usuarios')
@section('content')

@yield('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 offset-md-2">

			<h1>
				<i class="fa fa-users"></i>Lista de Usuarios</h1>
			<hr>
			<a href="{{ url('users/create') }}" class="btn btn-custom">
				<i class="fa fa-plus"></i>
				Adicionar Usuario
			</a>
			<a href="{{ url('generate/pdf/users') }}" class="btn btn-custom">
				<i class="fa fa-file-pdf"></i>
			  Reporte PDF
			</a>
			<a href="{{ url('generate/excel/users') }}" class="btn btn-custom">
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
						<th>Nombre Completo</th>
						<th class="d-none d-sm-table-cell">Correo Electrónico</th>
						<th>Teléfono</th>
						<th>Acciones</th>
					</tr>
				</thead>

				<tbody id="users-content">
					@foreach ($users as $user)
						<tr>
							<td>{{ $user->fullname }}</td>
							<td class="d-none d-sm-table-cell">{{ $user->email }}</td>
							<td>{{ $user->phone }}</td>
							<td>
									<a href="{{ url('users/'.$user->id) }}" class="btn btn-sm btn-custom">
										<i class="fa fa-search"></i>
									</a>
										<a href="{{ url('users/'.$user->id.'/edit/') }}" class="btn btn-sm btn-custom">
										<i class="fa fa-pen"></i>
									</a>
									<form action=" {{ url('users/'.$user->id) }}" method="post" style="display: inline-block;">
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


			{{$users->links()}}
		</div>
	</div>
</div>
@endsection
