 <form method="post" action="/atores">

                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome">
                    </div>

                     <div class="form-group">
                        <label for="ano">Ano</label>
                        <input class="form-control" type="text" name="ano" id="ano" placeholder="Ano">
                    </div>

                    <div class="form-group">
                        <label for="filme_id">Filmes</label>
                        <select class="form-control" name="filme_id" id="filme_id" >
                            @foreach($filmes as $filme)
                                  <option value="{{$filme->id}}">{{$filme->titulo}}</option>
                            @endforeach
                          
                            
                        </select>
                    </div>


                    <button class="btn btn-warning">Enviar</button>
                    <a href="/atores" class="btn btn-default">Voltar</a>
                </form>    
