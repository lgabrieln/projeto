@extends('layouts.site')

@section('titulo','Cadastro de Atores')

@section('content')
        <h1 class="page-header">Cadastro de Atores</h1>

        <div class="row">

            <div class="col-md-6">

                             @include('atores.partials.form-create')   

            </div>
        </div>

@endsection