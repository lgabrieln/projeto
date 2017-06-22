@extends('layouts.site')

@section('titulo','Editar Gêneros')

@section('content')


            <h1 class="page-header">Edição de Gêneros</h1>

            <div class="col-md-6">
               @include('generos.partials.form-edit') 

            </div>
        </div>
    </div>

@endsection