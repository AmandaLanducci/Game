<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Novo de Games</title>
    </head>
    <body>
        <div class="container">
            <h1>Novo game</h1>
            <form action={{ route('games.store') }} method="post">
                @csrf
                <div>
                    <label>Genero</label>
                    <input type="string" name="genero" placeholder="Genero">
                </div>

                <div>
                    <label>Nome</label>
                    <input type="string" name="nome" placeholder="Nome">
                </div>

                <div>
                    <label>Valor</label>
                    <input type="number" name="valor" placeholder="Valor">
                </div>

                <div>
                    <label>Descrição</label>
                    <input type="text" name="descricao" placeholder="Descrição">
                </div>

                <div>
                    <label>Data de Lançamento</label>
                    <input type="date" name="datadelancamento" placeholder="Data de Lançamento">
                </div>

                <div>
                    <label>Studio</label>
                    <input type="string" name="studio" placeholder="Studio">
                </div>





                <button type="submit">Salvar</button>
            </form>


        </div>


    </body>
</html>
