<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class GamesController extends Controller
{
    public function index()
    {
        $games = Game::all();

        return view('games.index', compact('games'));
    }

    public function create()
    {
        return view('games.create');
    }


    public function store(Request $requisicao)
    {
        $game = new Game();

        $game->genero = $requisicao->genero;
        $game->nome = $requisicao->nome;
        $game->valor = $requisicao->valor;
        $game->descricao = $requisicao->descricao;
        $game->datadelancamento = $requisicao->datadelancamento;
        $game->studio = $requisicao->studio;

        $game->save();
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {

    }
}

