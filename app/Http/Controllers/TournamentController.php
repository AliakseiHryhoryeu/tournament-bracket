<?php

namespace App\Http\Controllers;

use App\Http\Requests\TournamentRequest;
use App\Models\Player;
use App\Models\Tournament;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TournamentController extends Controller
{
    public function addTournament(TournamentRequest $req){
        /*set default AUTO_INCREMENT because i this project use heroku - clearDB*/
        DB::statement('SET @@auto_increment_increment=1;');

        $tournament = new Tournament();
        $tournament->title=$req->input('tournamentTitle');
        $tournament->start_date=$req->input('tournamentDate');
        $tournament->save();

        return redirect()->route('tournament-info',$tournament->id)->with('success','Tournament has been added');
    }

    public function getAllTournaments()
    {
        return view('tournaments',['data'=>Tournament::all()]);
    }
    public function getTournament($id)
    {
        $tournament = new Tournament();
        return view('tournament',['data'=>$tournament->find($id)]);
    }
    public function editTournament($id,TournamentRequest $req)
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
