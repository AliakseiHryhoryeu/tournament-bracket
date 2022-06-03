<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public  function home(){
            return view('tournament');
    }

    public function index(){
            return view('welcome');
    }
}
