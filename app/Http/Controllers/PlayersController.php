<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Player;
use App\Http\Requests\PlayerRequest;
use Illuminate\Support\Facades\DB;

class PlayersController extends Controller
{
    public function addPlayer(PlayerRequest $req)
    {
        /*set default AUTO_INCREMENT because i this project use heroku - clearDB*/
        DB::statement('SET @@auto_increment_increment=1;');

        $player = new Player();
        $player->name = $req->input('playerName');
        $player->city = $req->input('playerCity');
        $player->save();

        return redirect()->route('home')->with('success', 'Player has been added');
    }

    public function getAllPlayers()
    {
        return view('players', ['data' => Player::all()]);
    }

    public function getPlayer($id)
    {
        $player = new Player();
        return view('player', ['data' => $player->find($id)]);
    }

    public function editPlayer($id, PlayerRequest $req)
    {
        $player = Player::find($id);
        $player->name = $req->input('playerName');
        $player->city = $req->input('playerCity');
        $player->save();

        return redirect()->route('home')->with('success', 'Player has been edit');
    }
}
