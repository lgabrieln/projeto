@extends('layouts.site')

@section('titulo','Pág Inicial Filmes')

@section('content')

        <h1 class="page-header">Lista de Filmes</h1>

            <a href="/filmes/create" class="btn btn-warning" style="margin-bottom: 15px;">Cadastrar</a>
            <div class="row">

                <div class="col-md-8">

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

                            @foreach($filmes as $filme)
                                <tr>
                                    <td>{{$filme->id}}</td>
                                    <td>{{$filme->titulo}}</td>
                                    <td>{{str_limit($filme->descricao, 7)}}</td>
                                    <td>
                                        <a class="btn btn-default" href="/filmes/{{$filme->id}}">
                                            <span class="glyphicon glyphicon-eye-open"></span> Detalhes
                                        </a>
                                        <a class="btn btn-warning" href="/filmes/{{$filme->id}}/edit">
                                            <span class="glyphicon glyphicon-pencil"></span> Editar
                                        </a>
                                        <form method="post" action="/filmes/{{$filme->id}}" style="display: inline;">
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