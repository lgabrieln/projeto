@extends('layouts.site')

@section('titulo','Pág Inicial Gêneros')

@section('content')

        <h1 class="page-header">Lista de Generos</h1>

            <a href="/generos/create" class="btn btn-warning" style="margin-bottom: 15px;">Cadastrar</a>
            <div class="row">

                <div class="col-md-6">

                     <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Titulo</th>
                                <th>Descrição</th>
                                <th></th>
                            </tr>
                        </thead>
                    
                        <tbody>

                            @foreach($generos as $genero)
                                <tr>
                                    <td>{{$genero->id}}</td>
                                    <td>{{$genero->nome}}</td>
                                    <td>{{str_limit($genero->descricao, 7)}}</td>
                                    <td>
                                        <a class="btn btn-default" href="/generos/{{$genero->id}}">
                                            <span class="glyphicon glyphicon-eye-open"></span> Detalhes
                                        </a>
                                        <a class="btn btn-warning" href="/generos/{{$genero->id}}/edit">
                                            <span class="glyphicon glyphicon-pencil"></span> Editar
                                        </a>
                                        <form method="post" action="/generos/{{$genero->id}}" style="display: inline;">
                                              {{csrf_field()}}
                                            <input type="hidden" name="_method" value="DELETE">

                                            <button  class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Excluir</button>
                                            
                                        </form>


                                    </td>
                                </tr>
                        
                            @endforeach
                            
                        
                        </tbody>
                    
                    </table>


                </div>
            </div>
    
        
@endsection