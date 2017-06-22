@extends('layouts.site')

@section('titulo','Pág Inicial Atores')

@section('content')


        <h1 class="page-header">Lista de Atores</h1>

            <a href="/atores/create" class="btn btn-warning" style="margin-bottom: 15px;">Cadastrar</a>
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

                            @foreach($atores as $atore)
                                <tr>
                                    <td>{{$atore->id}}</td>
                                    <td>{{$atore->nome}}</td>
                                    <td>{{$atore->ano}}</td>
                                    <td>{{str_limit($atore->descricao, 7)}}</td>
                                    <td>
                                        <a class="btn btn-default" href="/atores/{{$atore->id}}">
                                            <span class="glyphicon glyphicon-eye-open"></span> Detalhes
                                        </a>
                                        <a class="btn btn-warning" href="/atores/{{$atore->id}}/edit">
                                            <span class="glyphicon glyphicon-pencil"></span> Editar
                                        </a>
                                        <form method="post" action="/atores/{{$atore->id}}" style="display: inline;">
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