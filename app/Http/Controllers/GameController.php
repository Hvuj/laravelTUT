<?php

namespace App\Http\Controllers;

use App\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index(){
        $games = Game::all();

        return view('/Game.index', compact('games'));
    }

    public function create(){
        $game = new Game();
        return view('Game.create', compact('game'));
    }

    public function store(){
        $data = request()->validate([
            'name' => 'required',
            'type' => 'required'
        ]);

        Game::create($data);

        return redirect('/games');
    }

    public function show(Game $game){
        return view('Game.show', compact('game'));
    }

    public function edit(Game $game){
        return view('Game.edit', compact('game'));
    }

    public function update(Game $game){
        $data = request()->validate([
            'name' => 'required',
            'type' => 'required'
        ]);

        $game->update($data);

        return redirect('/games');
    }
}
