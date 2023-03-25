<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Game #{{ $game->id }}</title>
    </head>
    <body>
        <div class="container">
            <h1>Edição de game {{ $gato->id }}</h1>

            <form method="POST" action="{{ route('game.update', $game->id) }}">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label>Genero</label>
                    <input type="string" name="genero" class="form-control" value="{{ $game->genero}}">
                </div>

                <div class="mb-3">
                    <label>Nome</label>
                    <input type="string" name="nome" class="form-control" value="{{ $game->nome}}">
                </div>

                <div class="mb-3">
                    <label>Valor</label>
                    <input type="number" name="valor" class="form-control" value="{{ $game->valor }}">
                </div>

                <div class="mb-3">
                    <label>Descrição</label>
                    <input type="text" name="descricao" class="form-control" value="{{ $game->descricao }}">
                </div>

                
                <div class="mb-3">
                    <label>Data de lançamento</label>
                    <input type="date" name="datadelancamento" class="form-control" value="{{ $game->datadelancamento }}">
                </div>

                
                <div class="mb-3">
                    <label>Estudio</label>
                    <input type="string" name="estudio" class="form-control" value="{{ $game->estudio}}">
                </div>

                <div>
                    <input type="submit" value="Atualizar Gato" class="btn btn-primary">
                </div>
            </form>
        </div>
    </body>
</html>