<?php

namespace App\Http\Controllers;

use App\Http\Requests\TournamentRequest;
use App\Models\Player;
use App\Models\Tournament;
use App\Models\Player_tournament;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TournamentController extends Controller
{
    public function addTournament(TournamentRequest $req)
    {
        // set default AUTO_INCREMENT in sql because i use heroku in this project  - clearDB //
        DB::statement('SET @@auto_increment_increment=1;');

        $tournament = new Tournament();
        $tournament->title = $req->input('tournamentTitle');
        $tournament->start_date = $req->input('tournamentDate');
        $tournament->save();

        // Create tournament dependencies (many to many)
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
        $tournament = $tournament->find($id);

        $playerTournament = new Player_tournament();
        $playerTournament = $playerTournament->where('tournament_id', '=', $id)->get();

        // Search for all players who play in the tournament //
        $players = [];
        $player = new Player();
        foreach ($playerTournament as $plTour) {
            $players[] = $player->find($plTour->player_id);
        }

        // checking for an odd number of players and adding a "player" //
        // that will determine if the pair(other player) skips the round //
        $sortedArray = $players;
        if (count($players) % 2) {
            $sortedArray[] = 'empty';
        }

        $groups = [];
        for ($i = 0; $i < count($sortedArray) - 1; $i++) {
            // add pair date
            $start_date = $tournament->start_date;
            $pair_date = date("d.m.Y", strtotime("+$i days", strtotime($start_date)));

            $pairs = [];

            // Determining the pairs that will play on the current day //
            for ($j = 0; $j < floor(count($sortedArray) / 2); $j = $j + 1) {
                $pair = ['player1' => $sortedArray[$j], 'player2' => $sortedArray[(count($sortedArray) - 1 - $j)]];
                if ($pair['player1'] == 'empty' or $pair['player2'] == 'empty') {
                    continue;
                }
                $pairs[] = $pair;
            }

            // Shift elements of an array after its 1st element //
            $lastItem = array_pop($sortedArray);
            array_splice($sortedArray, 1, 0, [$lastItem]);

            $group = ['date' => $pair_date, 'pairs' => $pairs];
            $groups[] = $group;
        }
        return view('tournament', ['tournament' => $tournament, 'groups' => $groups]);
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
