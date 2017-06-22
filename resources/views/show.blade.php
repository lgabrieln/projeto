<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">

</head>

<body>

    <div class="container">

        <h1 class="page-header">Detalhes do Filme</h1>

        <div class="row">

            <div class="col-md-6">

                <div class="panel panel-primary">
                    <div class="panel-heading">Id</div>
                    <div class="panel-body">
                        {{$filme->id}}
                    </div>
                </div>


            </div>
        </div>

        <div class="row">

            <div class="col-md-6">

                <div class="panel panel-primary">
                    <div class="panel-heading">Nome</div>
                    <div class="panel-body">
                        {{$filme->titulo}}
                        
                    </div>
                </div>


            </div>
        </div>

         <div class="row">

            <div class="col-md-6">

                <div class="panel panel-primary">
                    <div class="panel-heading">Descrição</div>
                    <div class="panel-body">
                        {{$filme->descricao}}
                        
                    </div>
                </div>


            </div>
        </div>

         <div class="row">

            <div class="col-md-6">

                <div class="panel panel-primary">
                    <div class="panel-heading">Genero</div>
                    <div class="panel-body">
                        {{$filme->genero->nome}}
                        
                    </div>
                </div>


            </div>
        </div>

</body>

</html>