 <form method="post" action="/filmes/{{$filme->id}}">

                    {{csrf_field()}}

                    <input type="hidden" name="_method" value="PUT">

                    <div class="form-group">
                        <label for="titulo">Titulo</label>
                        <input class="form-control" type="text" name="titulo" id="titulo" value="{{$filme->titulo}}">
                    </div>

                     <div class="form-group">
                        <label for="descricao">Descrição</label>
                        <input class="form-control" type="text" name="descricao" id="descricao" value="{{$filme->descricao}}">
                    </div>

                     <div class="form-group">
                        <label for="genero_id">Generos</label>
                        <select class="form-control" name="genero_id" id="genero_id" >
                            @foreach($generos as $genero)
                                    <!--@if($genero->id == $filme->genero->id)
                                        <option selected="selected" value="{{$genero->id}}">{{$genero->nome}}</option>
                                        
                                    @else
                                        <option value="{{$genero->id}}">{{$genero->nome}}</option>
                                        
                                    @endif-->
                            
                                        <option {{$genero->id == $filme->genero->id? 'selected="selected"':''}} value="{{$genero->id}}">{{$genero->nome}}</option>

                                    
                            @endforeach
                          
                            
                        </select>
                    </div>

                    <button class="btn btn-warning">Alterar</button>
                    <a href="/filmes" class="btn btn-default">Voltar</a>
                </form>    
