@extends('layouts.site')

@section('titulo','Detalhes de Gêneros')

@section('content')

        <h1 class="page-header">Detalhes do Genero</h1>

        <div class="row">

            <div class="col-md-6">

                <div class="panel panel-default">
                    <div class="panel-heading">Id</div>
                    <div class="panel-body">
                        {{$genero->id}}
                    </div>
                </div>


            </div>
        </div>

        <div class="row">

            <div class="col-md-6">

                <div class="panel panel-default">
                    <div class="panel-heading">Nome</div>
                    <div class="panel-body">
                        {{$genero->nome}}
                        
                    </div>
                </div>


            </div>
        </div>

@endsection