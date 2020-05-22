@extends('layouts.app')
@section('title','Escritorio-Administrador')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 mt-5">
            <div class="card">
              <img src="{{asset('imgs/mod-users.png')}}" alt="" height="260px" class="card-img-top">

                <div class="card-body">
                  <a href="{{url('users')}}" class="btn btn-block btn-custom">
                    Modulo Usuario
                  </a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-5">
            <div class="card">
              <img src="{{asset('imgs/mod-categories2.png')}}" alt="" height="260px" class="card-img-top">

                <div class="card-body">
                  <a href="{{url('categories')}}" class="btn btn-block btn-custom">
                    Modulo Categorias
                  </a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-5">
            <div class="card">
              <img src="{{asset('imgs/mod-articles2.png')}}" alt="" height="260px" class="card-img-top">

                <div class="card-body">
                  <a href="{{url('articles')}}" class="btn btn-block btn-custom">
                    Modulo Articulos
                  </a>
                </div>
            </div>
        </div>


    </div>
</div>
@endsection
