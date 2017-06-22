@extends('layouts.site')

@section('titulo','Edição de Filmes')

@section('content')

        <h1 class="page-header">Editar de Filme</h1>

        <div class="row">

            <div class="col-md-6">

               @include('filmes.partials.form-edit') 

            </div>
        </div>

@endsection