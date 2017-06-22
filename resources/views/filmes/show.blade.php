@extends('layouts.site')

@section('titulo','Descrição de Filmes')

@section('content')

        <h1 class="page-header">Detalhes do Filme</h1>

        <div class="row">

            <div class="col-md-6">

                <div class="panel panel-default">
                    <div class="panel-heading">Id</div>
                    <div class="panel-body">
                        {{$filme->id}}
                    </div>
                </div>


            </div>
        </div>

        <div class="row">

            <div class="col-md-6">

                <div class="panel panel-default">
                    <div class="panel-heading">Nome</div>
                    <div class="panel-body">
                        {{$filme->titulo}}
                        
                    </div>
                </div>


            </div>
        </div>

         <div class="row">

            <div class="col-md-6">

                <div class="panel panel-default">
                    <div class="panel-heading">Descrição</div>
                    <div class="panel-body">
                        {{$filme->descricao}}
                        
                    </div>
                </div>


            </div>
        </div>

         <div class="row">

            <div class="col-md-6">

                <div class="panel panel-default">
                    <div class="panel-heading">Genero</div>
                    <div class="panel-body">
                        {{$filme->genero->nome}}
                        
                    </div>
                </div>


            </div>
        </div>

@endsection