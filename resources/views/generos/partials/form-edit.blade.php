 <form action="{{ route('generos.update', $genero->id) }}" method="post">
                    {{csrf_field()}}

                    <input type="hidden" name="_method" value="put">

                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input id="nome" class="form-control" type="text" name="nome" value="{{$genero->nome}}">

                    </div>
                    
                   
                    <button type="submit" class="btn btn-warning">Enviar</button>
                </form>