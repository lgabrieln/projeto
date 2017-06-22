@extends('layouts.site')

@section('titulo','Cadastro de Filmes')

@section('content')

        <h1 class="page-header">Lista de filmes</h1>

        <div class="row">

            <div class="col-md-6">

                 @include('filmes.partials.form-create') 


            </div>
        </div>

@endsection