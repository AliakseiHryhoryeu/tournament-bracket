<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getAllPlayers()
    {
        return view('home',['data'=>Player::all()]);
    }

}
