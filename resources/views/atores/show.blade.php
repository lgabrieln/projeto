@extends('layouts.site')

@section('titulo','Home de Atores')

@section('content')

        <h1 class="page-header">Detalhes do Atores</h1>

        <div class="row">

            <div class="col-md-6">

                <div class="panel panel-default">
                    <div class="panel-heading">Id</div>
                    <div class="panel-body">
                        {{$atore->id}}
                    </div>
                </div>


            </div>
        </div>

        <div class="row">

            <div class="col-md-6">

                <div class="panel panel-default">
                    <div class="panel-heading">Nome</div>
                    <div class="panel-body">
                        {{$atore->nome}}
                        
                    </div>
                </div>


            </div>
        </div>

          <div class="row">

            <div class="col-md-6">

                <div class="panel panel-default">
                    <div class="panel-heading">Filme</div>
                    <div class="panel-body">
                        {{$atore->filme->titulo}}
                        
                    </div>
                </div>


            </div>
        </div>

@endsection