 <form method="post" action="/filmes">

                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="titulo">Titulo</label>
                        <input class="form-control" type="text" name="titulo" id="titulo" placeholder="Titulo">
                    </div>

                     <div class="form-group">
                        <label for="descricao">Descricao</label>
                        <textarea class="form-control" name="descricao" id="descricao" cols="30" rows="10"></textarea>
                    </div>

                      <div class="form-group">
                        <label for="genero_id">Generos</label>
                        <select class="form-control" name="genero_id" id="genero_id" >
                            @foreach($generos as $genero)
                                  <option value="{{$genero->id}}">{{$genero->nome}}</option>
                            @endforeach
                          
                            
                        </select>
                    </div>

                    <button class="btn btn-warning">Enviar</button>
                    <a href="/filmes" class="btn btn-default">Voltar</a>
                </form>  