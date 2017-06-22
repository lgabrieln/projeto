@extends('layouts.site')

@section('titulo','Cadastro de Gêneros')

@section('content')

        <h1 class="page-header">Cadastro de Gêneros</h1>

        <div class="row">

            <div class="col-md-6">

              @include('generos.partials.form-create')   


            </div>
        </div>

@endsection