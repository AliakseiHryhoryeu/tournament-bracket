<?php

namespace App\Http\Controllers;

use App\Http\Requests\TournamentRequest;
use App\Models\Player;
use App\Models\Tournament;
use App\Models\Player_tournament;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Integer;

class TournamentController extends Controller
{
    public function addTournament(TournamentRequest $req)
    {
        /*set default AUTO_INCREMENT because i this project use heroku - clearDB*/
        DB::statement('SET @@auto_increment_increment=1;');

        $tournament = new Tournament();
        $tournament->title = $req->input('tournamentTitle');
        $tournament->start_date = $req->input('tournamentDate');
        $tournament->save();

        // Create tournament dependencies
        $players = new Player();
        $players = $players->all();
        foreach ($players as $player) {
            $playerTournament = new Player_tournament();
            $playerTournament->player_id = ($player->id);
            $playerTournament->tournament_id = ($tournament->id);
            $playerTournament->save();
        }

        return redirect()->route('tournamentInfo', $tournament->id)->with('success', 'Tournament has been added');
    }

    public function getAllTournaments()
    {
        return view('tournaments', ['data' => Tournament::all()]);
    }

    public function getTournament($id)
    {
        $tournament = new Tournament();
        $playerTournament = new Player_tournament();

        $playerTournament = $playerTournament->where('tournament_id', '=', $id)->get();
        $player = new Player();
        $players = [];
        foreach ($playerTournament as $plTour) {
            $players[] = $player->find($plTour->player_id);
        }
//        dd(['tournament' => $tournament->find($id), 'players'=>$players]);
        return view('tournament', ['tournament' => $tournament->find($id), 'players'=>$players]);
    }

    public function editTournament($id, TournamentRequest $req)
    {
        $tournament = Tournament::find($id);
        $tournament->name = $req->input('tournamentTitle');
        $tournament->save();

        return redirect()->route('home')->with('success', 'Tournament has been edit');
    }

    public function deleteTournament($id)
    {
        $player = Tournament::find($id);
        $player->delete();
        return redirect()->route('tournaments')->with('success', 'Tournament has been deleted');
    }
}

/*public function addTournamentBracket (){
    $playersLenght = 7;
    // createTournament(title, start_date)
    for($i=0;$i<$playersLenght;$i++){
        for($j=0;$j<$playersLenght;$j++){
            // addDb(player[i+1],player[j+1],id tour)

        }
    }
}*/
