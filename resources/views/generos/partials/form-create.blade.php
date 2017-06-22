  <form method="post" action="/generos">

                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome">
                    </div>

                    

                    <button class="btn btn-warning">Enviar</button>
                    <a href="/generos" class="btn btn-default">Voltar</a>
                </form>   