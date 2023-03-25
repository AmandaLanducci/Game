<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Lista de Games</title>
    </head>
    <body>
        <div class="container">
            <h1>Lista de Games</h1>

            <a class="btn btn-outline-success my-2" href="{{ route('games.create') }}">Novo Game</a>

            <table class="table table-hover table-bordered table-primary">
                <tr class="table-dark">
                    <th>Genero</th>
                    <th>Nome</th>
                    <th>Valor</th>
                    <th>Descrição</th>
                    <th>Data de lançamento</th>
                    <th>Studio</th>
                </tr>
                @foreach ($games as $game)
                <tr>
                    <td>{{ $game->genero }}</td>
                    <td>{{ $game->nome }}</td>
                    <td>{{ $game->valor }}</td>
                    <td>{{ $game->descricao }} </td>
                    <td>{{ $game->datadelancamento }} </td>
                    <td>{{ $game->estudio }} </td>
                   
                </tr>
            @endforeach
        </table>
    </div>



            </table>
        </div>


    </body>
</html>
